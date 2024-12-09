<!DOCTYPE html>
<html>
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" type="image/x-icon" href="./assets/img/ERM logo.ico" />
      <title>Euro Rattan Margarita - Producto</title>
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
      <!-- Font Awesome Icons -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
      <!-- Nucleo Icons -->
      <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
      <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
      <!-- Popper -->
      <script src="https://unpkg.com/@popperjs/core@2"></script>
      <!-- Main Styling -->
      <link href="./assets/css/soft-ui-dashboard-tailwind.css?v=1.0.5" rel="stylesheet" />
      <!-- Nepcha Analytics (nepcha.com) -->
      <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
      <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
  </head>

  <body class="m-0 font-sans text-base antialiased font-normal leading-default bg-gray-50 text-slate-500 max-w-screen b">
    <!-- header -->
    <?php include './header.php' ?>

    <!-- Main content -->
    <main class="container mx-auto p-4">
      <h1 class="text-2xl font-bold mb-4">Carrito de Compras</h1>
      <table class="w-full bg-white table-auto">
        <thead>
          <tr>
            <th class="py-2 px-4 font-bold text-left text-sm border-b">Imagen</th>
            <th class="py-2 px-4 font-bold text-left text-sm border-b">Nombre</th>
            <th class="py-2 px-4 font-bold text-left text-sm border-b">Color</th>
            <th class="py-2 px-4 font-bold text-left text-sm border-b">Cantidad</th>
            <th class="py-2 px-4 font-bold text-left text-sm border-b">Precio Unitario</th>
            <th class="py-2 px-4 font-bold text-left text-sm border-b">Descuento</th>
            <th class="py-2 px-4 font-bold text-left text-sm border-b">Subtotal</th>
            <th class="py-2 px-4 font-bold text-center text-sm border-b">Acción</th>
          </tr>
        </thead>
        <tbody id="carritoBody"></tbody>
      </table>
      <div class="flex justify-end items-center mt-4">
        <span id="totalAmount" class="text-xl font-bold px-8"></span>
        <button id="pagarBtn" type="button" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none leading-pro ease-soft-in text-xs active:shadow-soft-xs tracking-tight-soft border-brown text-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white" disabled>Pagar</button> 
      </div>
    </main>
    <!-- Footer -->
    <?php include './footer.php' ?>

    <!-- main script file  -->
    <script src="./assets/js/soft-ui-dashboard-tailwind.js?v=1.0.5" async></script>

    <script src="./assets/js/JQuery.js"></script>
    <script src="./assets/js/sweetAlert2.js"></script>

    <script>
      $(document).ready(function(){
        let token = localStorage.getItem('authToken');
        let carrito = JSON.parse(sessionStorage.getItem('carrito'));
        let total = 0;

        if(!carrito){
          Swal.fire({
            title: 'No posee productos en su carrito.',
            icon: 'info',
            customClass: {
              confirmButton: 'font-bold text-center uppercase transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs active:shadow-soft-xs tracking-tight-soft border-brown text-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white',
            }
          }).finally(() => {
            window.location.href = './';
          });
        }

        $('body').on('click', '.product-img', function(){
          Swal.fire({
            imageUrl: $(this).find('img').attr('src'),
            imageAlt: "product image",
            padding: '2rem',
            showConfirmButton: false
          });
        });

        $('body').on('click', '.delete-material', function(){
          const index = $(this).data('carrito-index');
          Swal.fire({
            icon: 'warning',
            title: '¿Desea borrar este producto del carrito?',
            text: 'Esta acción no se puede revertir',
            confirmButtonText: 'Eliminar',
            showCancelButton: true,
            cancelButtonText: 'Cancelar',
            customClass: {
              confirmButton: 'button-danger',
              cancelButton: 'button-success'
            },
            reverseButtons: true
          }).then((result) => {
            if (result.isConfirmed) {
              // Verificar que el índice existe en el array
              if (index >= 0 && index < carrito.length) {
                  // Eliminar el elemento del array
                  carrito.splice(index, 1);

                  // Guardar el array actualizado en sessionStorage
                  sessionStorage.setItem('carrito', JSON.stringify(carrito));
              }
              // Verificar si está vacío
              if (carrito.length === 0) {
                  sessionStorage.removeItem('carrito');
                  // Puedes realizar otras acciones, como mostrar un mensaje o actualizar la interfaz
              }
              window.location.href = './carrito.php';
            }
          });
        });

        let formData = new FormData();

        carrito.forEach((product, index) => {
          formData.append(`codes[${index}]`, product.cod);
        });

        $.ajax({
          url: 'http://127.0.0.1:8000/api/product/codes',
          type: 'POST',
          dataType: 'json',
          data: formData,
          contentType: false,
          processData: false,
          headers: {
            'Authorization': 'Bearer ' + token
          },
          success: function(response){
            console.log(response);
            console.log(carrito);
            let carritoHTML = '';

            response.products.forEach(product => {
              let image = product.image;
              if(!image){
                image = './assets/img/no-image.png';
              }

              let indexProd = carrito.findIndex(prod => prod.cod === product.code);
              console.log(indexProd);
              let subtotal = (parseFloat(product.material.price)*parseInt(carrito[indexProd].cantidad))*(1 - (parseFloat(product.discount)/100));
              total += subtotal;

              if(carrito[indexProd].color !== 'undefined'){
                carritoHTML += `
                  <tr>
                    <td class="product-img px-4 py-2 border-b border-gray-300">
                      <img src="${image}" class="w-9 h-9 object-contain cursor-pointer" alt="img-producto">
                    </td>
                    <td class="py-2 px-4 text-sm border-b">${product.name}</td>
                    <td class="py-2 px-4 text-sm border-b">
                      <div class="flex items-center justify-start">
                        <div style="background-color: ${carrito[indexProd].color}" class="h-5 w-5 rounded-full border-2 border-gray-300 focus:outline-none"></div>
                      </div>
                    </td>
                    <td class="py-2 px-4 text-sm border-b">${carrito[indexProd].cantidad}</td>
                    <td class="py-2 px-4 text-sm border-b">$${product.material.price}</td>
                    <td class="py-2 px-4 text-sm border-b">${product.discount}%</td>
                    <td class="py-2 px-4 text-sm border-b">$${subtotal}</td>
                    <td class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                      <div class="flex flex-wrap items-center justify-evenly">
                        <a href="javascript:;" data-carrito-index="${indexProd}" class="delete-material"><img class="w-5" src="./assets/img/papelera.png" alt="delete-icon"></a>
                      </div>
                    </td>
                  </tr>
                `;
              } else{
                carritoHTML += `
                  <tr>
                    <td class="product-img px-4 py-2 border-b border-gray-300">
                      <img src="${image}" class="w-9 h-9 object-contain cursor-pointer" alt="img-producto">
                    </td>
                    <td class="py-2 px-4 text-sm border-b">${product.name}</td>
                    <td class="py-2 px-4 text-sm border-b">
                      N/A
                    </td>
                    <td class="py-2 px-4 text-sm border-b">${carrito[indexProd].cantidad}</td>
                    <td class="py-2 px-4 text-sm border-b">$${product.material.price}</td>
                    <td class="py-2 px-4 text-sm border-b">${product.discount}%</td>
                    <td class="py-2 px-4 text-sm border-b">$${subtotal}</td>
                    <td class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                      <div class="flex flex-wrap items-center justify-evenly">
                        <a href="javascript:;" data-carrito-index="${indexProd}" class="delete-material"><img class="w-5" src="./assets/img/papelera.png" alt="delete-icon"></a>
                      </div>
                    </td>
                  </tr>
                `;
              }
            });

            $('#carritoBody').html('').append(carritoHTML);
            $('#totalAmount').text(`Total a Pagar: $${total}`);

            $('#pagarBtn').attr('disabled', false);

            $('#pagarBtn').on('click', function(){
              $('#pagarBtn').attr('disabled', true);
              response.products.forEach(product => {
                let indexProd = carrito.findIndex(prod => prod.cod === product.code);
                let formData = new FormData();

                formData.append('product_id', product.id);
                formData.append('quantity', (carrito[indexProd].cantidad)*-1);
                if(product.colors.length > 0){
                  let colorID;
                  product.colors.forEach(color => {
                    if(carrito[indexProd].color.toUpperCase() === color.hex.toUpperCase()){
                      colorID = color.id;
                    }
                  });
                  formData.append('color_id', colorID);
                }
                $.ajax({
                  url: 'http://127.0.0.1:8000/api/productMovement',
                  type: 'POST',
                  dataType: 'json',
                  headers: {
                    'Authorization': 'Bearer ' + token
                  },
                  data: formData,
                  contentType: false,
                  processData: false,
                  success: function(response){
                    console.log(response);
                  },
                  error: function(xhr){
                    console.log(xhr);
                  }
                });
              });

              Swal.fire({
                title: 'Compra procesada',
                icon: 'success',
                timer: 3000,
                timerProgressBar: true,
                showConfirmButton: false
              }).finally(() => {
                sessionStorage.removeItem('carrito');
                window.location.href = './';
              });
            })
          },
          error: function(xhr){
            console.log(xhr);
          }
        });
      });
    </script>
  </body>
</html>