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

    <section>
      <!-- component -->
      <div class="w-1 justify-center flex p-2 pt-6">
        <div class="flex flex-col bg-white rounded-lg shadow-lg max-w-sm lg:w-2/3 lg:flex-row">
          <!-- Imagen -->
          <div class="relative md:w-1/2 w-full text-gray-600">
            <div class="w-full h-72 rounded-2xl flex justify-center items-center p-2">
              <img id="prodImgMain" src="./assets/img/ERM logo.png" class="w-full h-full object-contain" alt="Decor Image">
            </div>
            <!-- Botones debajo de la imagen -->
            <div id="images-container" class="flex justify-evenly my-4">
              
              <!--<button
                type="button" 
                class="inline-block px-1 py-1 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs active:shadow-soft-xs tracking-tight-soft border-brown text-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white">
                <img src="./assets/img/home-decor-1.jpg" alt="Icon 1" class="inline-block h-10 w-12 rounded-sm">
              </button>
              <button 
                type="button" 
                class="inline-block px-1 py-1 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs active:shadow-soft-xs tracking-tight-soft border-brown text-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white">
                <img src="./assets/img/home-decor-2.jpg" alt="Icon 2" class="inline-block h-10 w-12 rounded-sm">
              </button>
              <button 
                type="button" 
                class="inline-block px-1 py-1 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs active:shadow-soft-xs tracking-tight-soft border-brown text-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white">
                <img src="./assets/img/home-decor-3.jpg" alt="Icon 3" class="inline-block h-10 w-12 rounded-sm">
              </button>-->
            </div>
          </div>

          <!-- Contenido lateral -->
          <div class="w-full p-6 lg:w-1/2">
            <h1 id="nombreProd" class="text-2xl font-semibold text-gray-700 text-lg">Nombre</h1>
            <p id="descProd" class="text-xl text-gray-600 text-lg">Descripción</p>
            <span id="precioProd" class="text-gray-700 mt-3 font-semibold">REF. 000</span>
            <hr class="my-3">
            <!-- Cantidad -->
            <div class="mt-2">
              <label class="text-gray-700 text-sm" for="count">Cantidad:</label>
              <div class="flex items-center">
                <button class="text-gray-500 focus:outline-none focus:text-gray-600">
                  <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </button>
                <span class="text-gray-700 text-lg mx-2">0</span>
                <button class="text-gray-500 focus:outline-none focus:text-gray-600">
                  <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </button>
              </div>
            </div>
            <!-- Colores -->
            <div id="colors-container" class="mt-3">
              <label class="text-gray-700 text-sm">Color:</label>
              <div id="available-colors" class="flex items-center mt-1">
                <button class="h-5 w-5 rounded-full border-2 border-blue-200 mr-2 focus:outline-none"></button>
                <button class="h-5 w-5 rounded-full border-2 border-blue-200 mr-2 focus:outline-none"></button>
                <button class="h-5 w-5 rounded-full border-2 border-blue-200 mr-2 focus:outline-none"></button>
              </div>
            </div>
            <!-- Botón de añadir -->
            <div class="mt-8 pt-6 items-center">
              <button type="button" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs active:shadow-soft-xs tracking-tight-soft border-brown text-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white">
                Añadir al carrito
              </button> 
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- recomendados -->
    <section>
      <div class="flex-none w-full max-w-full px-3 mt-6 ">
        <div class="relative flex flex-col items-center min-w-0 mb-6 break-words border-0 shadow-soft-xl rounded-2xl bg-clip-border">
          <div class="w-full py-4 px-8 pb-0 mb-0 flex items-center justify-end rounded-t-2xl relative">
            <h4 class="mb-1 flex-grow text-center mx-auto">Recomendados</h4>
            <!--<div class="relative w-1/2 flex justify-end">
              <div x-data="{ isOpen: false }">
                <button
                  x-on:click="isOpen = !isOpen"
                  type="button"
                  class="flex cursor-pointer items-center gap-2 border-b border-gray-400 pb-1 text-gray-900 transition hover:border-gray-600"
                >
                  <span class="text-sm font-medium"> Tipo de Material </span>
          
                  <span class="transition" :class="{ '-rotate-180': isOpen }">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="size-4"
                    >
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                  </span>
                </button>

                <div
                  x-cloak
                  x-transition
                  x-show="isOpen"
                  x-on:click.away="isOpen = false"
                  x-on:keydown.escape.window="isOpen = false"
                  class="absolute right-0 top-auto z-50 mt-2"
                >
                  <div class="w-96 rounded border border-gray-200 bg-white">
                    <header class="flex items-center justify-between p-4">
                      <span class="text-sm text-gray-700"> 0 Selected </span>
          
                      <button type="button" class="text-sm text-gray-900 underline underline-offset-4">
                        Reset
                      </button>
                    </header>
          
                    <ul class="space-y-1 border-t border-gray-200 p-4">
                      <li>
                        <label for="FilterInStock" class="inline-flex items-center gap-2">
                          <input type="checkbox" id="FilterInStock" class="size-5 rounded border-gray-300" />
          
                          <span class="text-sm font-medium text-gray-700"> In Stock (5+) </span>
                        </label>
                      </li>
          
                      <li>
                        <label for="FilterPreOrder" class="inline-flex items-center gap-2">
                          <input type="checkbox" id="FilterPreOrder" class="size-5 rounded border-gray-300" />
          
                          <span class="text-sm font-medium text-gray-700"> Pre Order (3+) </span>
                        </label>
                      </li>
          
                      <li>
                        <label for="FilterOutOfStock" class="inline-flex items-center gap-2">
                          <input
                            type="checkbox"
                            id="FilterOutOfStock"
                            class="size-5 rounded border-gray-300"
                          />
          
                          <span class="text-sm font-medium text-gray-700"> Out of Stock (10+) </span>
                        </label>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>-->
          </div>
          <div class="flex-auto p-4">
            <div id="recomendations-container" class="flex flex-wrap mx-3">
              <!--<div class="w-full max-w-full px-3 mb-6 md:w-6/12 md:mb-3 md:flex-none xl:w-3/12">
                <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border cursor-pointer" onclick="window.location.href='./producto.php?cod=${material.product.code}';">
                  <div class="relative">
                    <a class="block shadow-xl rounded-2xl">
                      <img src="./assets/img/home-decor-1.jpg" alt="img-blur-shadow" class="max-w-full shadow-soft-2xl rounded-2xl" />
                    </a>
                  </div>
                  <div class="flex-auto px-1 pt-6">
                    <a href="javascript:;">
                      <h5 class="mt-1">Mueble</h5>
                    </a>
                    <p class="mb-6 leading-normal text-sm">REF.</p>
                    <div class="flex items-center justify-between">
                      <button type="button" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none leading-pro ease-soft-in text-xs active:shadow-soft-xs tracking-tight-soft border-brown text-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white">Más Información</button> 
                    </div>
                  </div>
                </div>
              </div>

              <div class="w-full max-w-full px-3 mb-6 md:w-6/12 md:mb-3 md:flex-none xl:w-3/12">
                <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border cursor-pointer" onclick="window.location.href='./producto.php?cod=${material.product.code}';">
                  <div class="relative">
                    <a class="block shadow-xl rounded-2xl">
                        <img src="./assets/img/home-decor-2.jpg" alt="img-blur-shadow" class="max-w-full shadow-soft-2xl rounded-2xl" />
                    </a>
                  </div>
                  <div class="flex-auto px-1 pt-6">
                    <a href="javascript:;">
                      <h5 class="mt-1">Mueble</h5>
                    </a>
                    <p class="mb-6 leading-normal text-sm">REF.</p>
                    <div class="flex items-center justify-between">
                      <button type="button" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none leading-pro ease-soft-in text-xs active:shadow-soft-xs tracking-tight-soft border-brown text-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white">Más Información</button> 
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="w-full max-w-full px-3 mb-6 md:w-6/12 md:mb-3 md:flex-none xl:w-3/12">
                <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border cursor-pointer" onclick="window.location.href='./producto.php?cod=${material.product.code}';">
                  <div class="relative">
                    <a class="block shadow-xl rounded-2xl">
                        <img src="./assets/img/home-decor-3.jpg" alt="img-blur-shadow" class="max-w-full shadow-soft-2xl rounded-2xl" />
                    </a>
                  </div>
                  <div class="flex-auto px-1 pt-6">
                    <a href="javascript:;">
                      <h5 class="mt-1">Mueble</h5>
                    </a>
                    <p class="mb-6 leading-normal text-sm">REF.</p>
                    <div class="flex items-center justify-between">
                      <button type="button" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none leading-pro ease-soft-in text-xs active:shadow-soft-xs tracking-tight-soft border-brown text-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white">Más Información</button> 
                    </div>
                  </div>
                </div>
              </div>

              <div class="w-full max-w-full px-3 mb-6 md:w-6/12 md:mb-3 md:flex-none xl:w-3/12">
                <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border cursor-pointer" onclick="window.location.href='./producto.php?cod=${material.product.code}';">
                  <div class="relative">
                    <a class="block shadow-xl rounded-2xl">
                        <img src="./assets/img/home-decor-1.jpg" alt="img-blur-shadow" class="max-w-full shadow-soft-2xl rounded-2xl" />
                    </a>
                  </div>
                  <div class="flex-auto px-1 pt-6">
                    <a href="javascript:;">
                      <h5 class="mt-1">Mueble</h5>
                    </a>
                    <p class="mb-6 leading-normal text-sm">REF.</p>
                    <div class="flex items-center justify-between">
                      <button type="button" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none leading-pro ease-soft-in text-xs active:shadow-soft-xs tracking-tight-soft border-brown text-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white">Más Información</button> 
                    </div>
                  </div>
                </div>
              </div>

              <div class="w-full max-w-full px-3 mb-6 md:w-6/12 md:mb-3 md:flex-none xl:w-3/12">
                <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border cursor-pointer" onclick="window.location.href='./producto.php?cod=${material.product.code}';">
                  <div class="relative">
                    <a class="block shadow-xl rounded-2xl">
                      <img src="./assets/img/home-decor-1.jpg" alt="img-blur-shadow" class="max-w-full shadow-soft-2xl rounded-2xl" />
                    </a>
                  </div>
                  <div class="flex-auto px-1 pt-6">
                    <a href="javascript:;">
                      <h5 class="mt-1">Mueble</h5>
                    </a>
                    <p class="mb-6 leading-normal text-sm">REF.</p>
                    <div class="flex items-center justify-between">
                      <button type="button" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none leading-pro ease-soft-in text-xs active:shadow-soft-xs tracking-tight-soft border-brown text-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white">Más Información</button> 
                    </div>
                  </div>
                </div>
              </div>

              <div class="w-full max-w-full px-3 mb-6 md:w-6/12 md:mb-3 md:flex-none xl:w-3/12">
                <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border cursor-pointer" onclick="window.location.href='./producto.php?cod=${material.product.code}';">
                  <div class="relative">
                    <a class="block shadow-xl rounded-2xl">
                        <img src="./assets/img/home-decor-2.jpg" alt="img-blur-shadow" class="max-w-full shadow-soft-2xl rounded-2xl" />
                    </a>
                  </div>
                  <div class="flex-auto px-1 pt-6">
                    <a href="javascript:;">
                      <h5 class="mt-1">Mueble</h5>
                    </a>
                    <p class="mb-6 leading-normal text-sm">REF.</p>
                    <div class="flex items-center justify-between">
                      <button type="button" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none leading-pro ease-soft-in text-xs active:shadow-soft-xs tracking-tight-soft border-brown text-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white">Más Información</button> 
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="w-full max-w-full px-3 mb-6 md:w-6/12 md:mb-3 md:flex-none xl:w-3/12">
                <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border cursor-pointer" onclick="window.location.href='./producto.php?cod=${material.product.code}';">
                  <div class="relative">
                    <a class="block shadow-xl rounded-2xl">
                        <img src="./assets/img/home-decor-3.jpg" alt="img-blur-shadow" class="max-w-full shadow-soft-2xl rounded-2xl" />
                    </a>
                  </div>
                  <div class="flex-auto px-1 pt-6">
                    <a href="javascript:;">
                      <h5 class="mt-1">Mueble</h5>
                    </a>
                    <p class="mb-6 leading-normal text-sm">REF.</p>
                    <div class="flex items-center justify-between">
                      <button type="button" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none leading-pro ease-soft-in text-xs active:shadow-soft-xs tracking-tight-soft border-brown text-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white">Más Información</button> 
                    </div>
                  </div>
                </div>
              </div>

              <div class="w-full max-w-full px-3 mb-6 md:w-6/12 md:mb-3 md:flex-none xl:w-3/12">
                <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border cursor-pointer" onclick="window.location.href='./producto.php?cod=${material.product.code}';">
                  <div class="relative">
                    <a class="block shadow-xl rounded-2xl">
                        <img src="./assets/img/home-decor-1.jpg" alt="img-blur-shadow" class="max-w-full shadow-soft-2xl rounded-2xl" />
                    </a>
                  </div>
                  <div class="flex-auto px-1 pt-6">
                    <a href="javascript:;">
                      <h5 class="mt-1">Mueble</h5>
                    </a>
                    <p class="mb-6 leading-normal text-sm">REF.</p>
                    <div class="flex items-center justify-between">
                      <button type="button" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none leading-pro ease-soft-in text-xs active:shadow-soft-xs tracking-tight-soft border-brown text-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white">Más Información</button>
                    </div>
                  </div>
                </div>
              </div>-->
            </div>
          </div>
          <!--<button type="button" class="w-3/4 md:w-1/10 px-8 py-2 mb-6 font-bold text-center uppercase transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs active:shadow-soft-xs tracking-tight-soft border-brown text-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white">+ Ver Más...</button>-->
        </div>
      </div>
    </section>

    <!-- Footer -->
    <?php include './footer.php' ?>
  </body>

  <!-- plugin for charts  -->
  <script src="./assets/js/plugins/chartjs.min.js" async></script>
  <!-- plugin for scrollbar  -->
  <!--<script src="./assets/js/plugins/perfect-scrollbar.min.js" async></script>-->
  <!-- github button -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- main script file  -->
  <script src="./assets/js/soft-ui-dashboard-tailwind.js?v=1.0.5" async></script>

  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <!-- CDN de JQuery -->
  <script src="./assets/js/JQuery.js"></script>

  <!-- CDN SweetAlert -->
  <script src="./assets/js/sweetAlert2.js"></script>

  <script>
    $(document).ready(function(){
      const codProduct = new URLSearchParams(window.location.search).get('cod');

      $('body').on('click', '.img-preview', function(){
        $('#prodImgMain').attr('src', $(this).find('img').attr('src'));
      });

      $('body').on('click', '#available-colors button', function(){
        $('#available-colors button').removeClass('border-4 border-2 border-gray-300 border-green');

        // Agregar la clase border-4 al botón clicado
        $(this).addClass('border-4 border-green');

        // Agregar la clase border-2 a los botones hermanos
        $(this).siblings().addClass('border-2 border-gray-300');
      });

      if(codProduct){
        $.ajax({
          url: `http://127.0.0.1:8000/api/product/cod/${codProduct}`,
          type: 'GET',
          dataType: 'json',
          success: function(response){
            console.log(response);
            const price = response.material.price;
            if(response.images.length !== 0){
              $('#prodImgMain').attr('src', response.images[0].url);
            }
            $('#nombreProd').text(response.name);
            $('#descProd').text(response.description);
            $('#precioProd').text(`REF. ${price}`);

            if(response.colors.length === 0){
              $('#colors-container').remove();
            } else{
              let colorsHTML = '';
              response.colors.forEach(color => {
                colorsHTML += `<button style="background-color: ${color.hex}" class="h-5 w-5 rounded-full border-2 border-solid border-gray-300 mr-2"></button>`;
              });

              $('#available-colors').html('').append(colorsHTML);
            }

            let imagesHTML = '';

            response.images.forEach(image => {
              imagesHTML += `
                <button
                type="button" 
                class="img-preview inline-block h-12 w-12 px-1 py-1 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs active:shadow-soft-xs tracking-tight-soft border-brown text-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white">
                  <img src="${image.url}" alt="Icon" class="inline-block h-full w-full rounded-sm object-contain">
                </button>
              `;
            });

            $('#images-container').html('').append(imagesHTML)

            //rellenar recomendados
            const fieldsToCheck = ['material', 'furniture', 'set'];
            // Encuentra el primer campo relevante que no sea null
            const productType = fieldsToCheck.find(field => response[field] !== null);
            let urlAPI = '';
            let types;
            switch(productType){
              case 'material':
                urlAPI += `http://127.0.0.1:8000/api/materialsByType/8`;
                types = {
                  materialTypes: response[productType].material_types.map(type => type.name),
                  code: codProduct
                }
                break;
            }

            $.ajax({
              url: urlAPI,
              type: 'GET',
              dataType: 'json',
              data: types,
              success: function(r){
                let recomendationHTML = '';
                r.forEach(prod => {
                  let image = prod.product.image;
                  if(!image){
                    image = './assets/img/no-image.png';
                  }
                  recomendationHTML += `
                    <div class="w-full max-w-full px-3 mb-6 md:w-6/12 md:mb-3 md:flex-none xl:w-3/12">
                      <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border cursor-pointer" onclick="window.location.href='./producto.php?cod=${prod.product.code}';">
                        <div class="relative w-full h-48">
                          <a class="block shadow-xl rounded-2xl w-full h-full p-2">
                            <img src="${image}" alt="img-material" class="w-full h-full object-contain rounded-2xl"/>
                          </a>
                        </div>
                        <div class="flex-auto px-1 pt-6">
                          <a href="javascript:;">
                            <h5 class="mt-1">${prod.product.name}</h5>
                          </a>
                          <p class="mb-6 leading-normal text-sm">REF. ${prod.price}</p>
                          <div class="flex items-center justify-between">
                            <button type="button" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none leading-pro ease-soft-in text-xs active:shadow-soft-xs tracking-tight-soft border-brown text-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white">Más Información</button> 
                          </div>
                        </div>
                      </div>
                    </div>
                  `;
                });
                $('#recomendations-container').html('').append(recomendationHTML);
              },
              error: function(err){
                console.log(err);
              }
            });
          },
          error: function(xhr){
            console.log(xhr);
          }
        });
      } else{
        errorMsg();
      }
    });
  </script>
</html>