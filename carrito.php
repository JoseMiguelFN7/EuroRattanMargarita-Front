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
            <th class="py-2 px-4 font-bold text-left text-sm border-b">Subtotal</th>
            <th class="py-2 px-4 font-bold text-center text-sm border-b">Acción</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="product-img px-4 py-2 border-b border-gray-300">
              <img src="../assets/img/no-image.png" class="w-9 h-9 object-contain cursor-pointer" alt="img-producto">
            </td>
            <td class="py-2 px-4 text-sm border-b">Producto 1</td>
            <td class="py-2 px-4 text-sm border-b">
              <div class="flex items-center justify-start">
                <div class="h-5 w-5 rounded-full border-2 border-gray-300 focus:outline-none"></div>
              </div>
            </td>
            <td class="py-2 px-4 text-sm border-b">2</td>
            <td class="py-2 px-4 text-sm border-b">$100.00</td>
            <td class="py-2 px-4 text-sm border-b">$200.00</td>
            <td class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
              <div class="flex flex-wrap items-center justify-evenly">
                <a href="javascript:;" class=""><img class="w-5" src="../assets/img/boton-editar.png" alt="edit-icon"></a>
                <a href="javascript:;" class="delete-material"><img data-material-id="${material.id}" class="w-5" src="../assets/img/papelera.png" alt="delete-icon"></a>
              </div>
            </td>
          </tr>
          <tr>
            <td class="product-img px-4 py-2 border-b border-gray-300">
              <img src="../assets/img/no-image.png" class="w-9 h-9 object-contain cursor-pointer" alt="img-producto">
            </td>
            <td class="py-2 px-4 text-sm border-b">Producto 2</td>
            <td class="py-2 px-4 text-sm border-b">
              <div class="flex items-center justify-start">
                <div class="h-5 w-5 rounded-full border-2 border-gray-300 focus:outline-none"></div>
              </div>
            </td>
            <td class="py-2 px-4 text-sm border-b">1</td>
            <td class="py-2 px-4 text-sm border-b">$150.00</td>
            <td class="py-2 px-4 text-sm border-b">$150.00</td>
            <td class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
              <div class="flex flex-wrap items-center justify-evenly">
                <a href="javascript:;" class=""><img class="w-5" src="../assets/img/boton-editar.png" alt="edit-icon"></a>
                <a href="javascript:;" class="delete-material"><img data-material-id="${material.id}" class="w-5" src="../assets/img/papelera.png" alt="delete-icon"></a>
              </div>
            </td>
          </tr>
          <tr>
            <td class="product-img px-4 py-2 border-b border-gray-300">
              <img src="../assets/img/no-image.png" class="w-9 h-9 object-contain cursor-pointer" alt="img-producto">
            </td>
            <td class="py-2 px-4 text-sm border-b">Producto 3</td>
            <td class="py-2 px-4 text-sm border-b">
              <div class="flex items-center justify-start">
                <div class="h-5 w-5 rounded-full border-2 border-gray-300 focus:outline-none"></div>
              </div>
            </td>
            <td class="py-2 px-4 text-sm border-b">2</td>
            <td class="py-2 px-4 text-sm border-b">$150.00</td>
            <td class="py-2 px-4 text-sm border-b">$300.00</td>
            <td class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
              <div class="flex flex-wrap items-center justify-evenly">
                <a href="javascript:;" class=""><img class="w-5" src="../assets/img/boton-editar.png" alt="edit-icon"></a>
                <a href="javascript:;" class="delete-material"><img data-material-id="${material.id}" class="w-5" src="../assets/img/papelera.png" alt="delete-icon"></a>
              </div>
            </td>
          </tr>
          <tr>
            <td class="product-img px-4 py-2 border-b border-gray-300">
              <img src="../assets/img/no-image.png" class="w-9 h-9 object-contain cursor-pointer" alt="img-producto">
            </td>
            <td class="py-2 px-4 text-sm border-b">Producto 4</td>
            <td class="py-2 px-4 text-sm border-b">
              <div class="flex items-center justify-start">
                <div class="h-5 w-5 rounded-full border-2 border-gray-300 focus:outline-none"></div>
              </div>
            </td>
            <td class="py-2 px-4 text-sm border-b">2</td>
            <td class="py-2 px-4 text-sm border-b">$100.00</td>
            <td class="py-2 px-4 text-sm border-b">$200.00</td>
            <td class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
              <div class="flex flex-wrap items-center justify-evenly">
                <a href="javascript:;" class=""><img class="w-5" src="../assets/img/boton-editar.png" alt="edit-icon"></a>
                <a href="javascript:;" class="delete-material"><img data-material-id="${material.id}" class="w-5" src="../assets/img/papelera.png" alt="delete-icon"></a>
              </div>
            </td>
          </tr>
          <tr>
            <td class="product-img px-4 py-2 border-b border-gray-300">
              <img src="../assets/img/no-image.png" class="w-9 h-9 object-contain cursor-pointer" alt="img-producto">
            </td>
            <td class="py-2 px-4 text-sm border-b">Producto 5</td>
            <td class="py-2 px-4 text-sm border-b">
              <div class="flex items-center justify-start">
                <div class="h-5 w-5 rounded-full border-2 border-gray-300 focus:outline-none"></div>
              </div>
            </td>
            <td class="py-2 px-4 text-sm border-b">2</td>
            <td class="py-2 px-4 text-sm border-b">$100.00</td>
            <td class="py-2 px-4 text-sm border-b">$200.00</td>
            <td class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
              <div class="flex flex-wrap items-center justify-evenly">
                <a href="javascript:;" class=""><img class="w-5" src="../assets/img/boton-editar.png" alt="edit-icon"></a>
                <a href="javascript:;" class="delete-material"><img data-material-id="${material.id}" class="w-5" src="../assets/img/papelera.png" alt="delete-icon"></a>
              </div>
            </td>
          </tr>
          <tr>
            <td class="product-img px-4 py-2 border-b border-gray-300">
              <img src="../assets/img/no-image.png" class="w-9 h-9 object-contain cursor-pointer" alt="img-producto">
            </td>
            <td class="py-2 px-4 text-sm border-b">Producto 6</td>
            <td class="py-2 px-4 text-sm border-b">
              <div class="flex items-center justify-start">
                <div class="h-5 w-5 rounded-full border-2 border-gray-300 focus:outline-none"></div>
              </div>
            </td>
            <td class="py-2 px-4 text-sm border-b">2</td>
            <td class="py-2 px-4 text-sm border-b">$100.00</td>
            <td class="py-2 px-4 text-sm border-b">$200.00</td>
            <td class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
              <div class="flex flex-wrap items-center justify-evenly">
                <a href="javascript:;" class=""><img class="w-5" src="../assets/img/boton-editar.png" alt="edit-icon"></a>
                <a href="javascript:;" class="delete-material"><img data-material-id="${material.id}" class="w-5" src="../assets/img/papelera.png" alt="delete-icon"></a>
              </div>
            </td>
          </tr>
          <tr>
            <td class="product-img px-4 py-2 border-b border-gray-300">
              <img src="../assets/img/no-image.png" class="w-9 h-9 object-contain cursor-pointer" alt="img-producto">
            </td>
            <td class="py-2 px-4 text-sm border-b">Producto 7</td>
            <td class="py-2 px-4 text-sm border-b">
              <div class="flex items-center justify-start">
                <div class="h-5 w-5 rounded-full border-2 border-gray-300 focus:outline-none"></div>
              </div>
            </td>
            <td class="py-2 px-4 text-sm border-b">2</td>
            <td class="py-2 px-4 text-sm border-b">$100.00</td>
            <td class="py-2 px-4 text-sm border-b">$200.00</td>
            <td class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
              <div class="flex flex-wrap items-center justify-evenly">
                <a href="javascript:;" class=""><img class="w-5" src="../assets/img/boton-editar.png" alt="edit-icon"></a>
                <a href="javascript:;" class="delete-material"><img data-material-id="${material.id}" class="w-5" src="../assets/img/papelera.png" alt="delete-icon"></a>
              </div>
            </td>
          </tr>
          <tr>
            <td class="product-img px-4 py-2 border-b border-gray-300">
              <img src="../assets/img/no-image.png" class="w-9 h-9 object-contain cursor-pointer" alt="img-producto">
            </td>
            <td class="py-2 px-4 text-sm border-b">Producto 8</td>
            <td class="py-2 px-4 text-sm border-b">
              <div class="flex items-center justify-start">
                <div class="h-5 w-5 rounded-full border-2 border-gray-300 focus:outline-none"></div>
              </div>
            </td>
            <td class="py-2 px-4 text-sm border-b">2</td>
            <td class="py-2 px-4 text-sm border-b">$100.00</td>
            <td class="py-2 px-4 text-sm border-b">$200.00</td>
            <td class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
              <div class="flex flex-wrap items-center justify-evenly">
                <a href="javascript:;" class=""><img class="w-5" src="../assets/img/boton-editar.png" alt="edit-icon"></a>
                <a href="javascript:;" class="delete-material"><img data-material-id="${material.id}" class="w-5" src="../assets/img/papelera.png" alt="delete-icon"></a>
              </div>
            </td>
          </tr>
          <tr>
            <td class="product-img px-4 py-2 border-b border-gray-300">
              <img src="../assets/img/no-image.png" class="w-9 h-9 object-contain cursor-pointer" alt="img-producto">
            </td>
            <td class="py-2 px-4 text-sm border-b">Producto 9</td>
            <td class="py-2 px-4 text-sm border-b">
              <div class="flex items-center justify-start">
                <div class="h-5 w-5 rounded-full border-2 border-gray-300 focus:outline-none"></div>
              </div>
            </td>
            <td class="py-2 px-4 text-sm border-b">2</td>
            <td class="py-2 px-4 text-sm border-b">$100.00</td>
            <td class="py-2 px-4 text-sm border-b">$200.00</td>
            <td class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
              <div class="flex flex-wrap items-center justify-evenly">
                <a href="javascript:;" class=""><img class="w-5" src="../assets/img/boton-editar.png" alt="edit-icon"></a>
                <a href="javascript:;" class="delete-material"><img data-material-id="${material.id}" class="w-5" src="../assets/img/papelera.png" alt="delete-icon"></a>
              </div>
            </td>
          </tr>
          <tr>
            <td class="product-img px-4 py-2 border-b border-gray-300">
              <img src="../assets/img/no-image.png" class="w-9 h-9 object-contain cursor-pointer" alt="img-producto">
            </td>
            <td class="py-2 px-4 text-sm border-b">Producto 10</td>
            <td class="py-2 px-4 text-sm border-b">
              <div class="flex items-center justify-start">
                <div class="h-5 w-5 rounded-full border-2 border-gray-300 focus:outline-none"></div>
              </div>
            </td>
            <td class="py-2 px-4 text-sm border-b">2</td>
            <td class="py-2 px-4 text-sm border-b">$100.00</td>
            <td class="py-2 px-4 text-sm border-b">$200.00</td>
            <td class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
              <div class="flex flex-wrap items-center justify-evenly">
                <a href="javascript:;" class=""><img class="w-5" src="../assets/img/boton-editar.png" alt="edit-icon"></a>
                <a href="javascript:;" class="delete-material"><img data-material-id="${material.id}" class="w-5" src="../assets/img/papelera.png" alt="delete-icon"></a>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
      <div class="flex justify-end items-center mt-4">
        <span class="text-xl font-bold px-8">Total a Pagar: $2050.00</span>
        <button type="button" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none leading-pro ease-soft-in text-xs active:shadow-soft-xs tracking-tight-soft border-brown text-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white">Pagar</button> 
      </div>
    </main>
    <!-- Footer -->
    <?php include './footer.php' ?>
  </body>

  
</html>