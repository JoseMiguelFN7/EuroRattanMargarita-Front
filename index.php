<!--
=========================================================
* Soft UI Dashboard Tailwind - v1.0.5
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard-tailwind
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    <link rel="icon" type="image/x-icon" href="./assets/img/ERM logo.ico" />
    <title>Euro Rattan Margarita</title>
    <!--     Fonts and icons     -->
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

  <body class="m-0 font-sans text-base antialiased font-normal leading-default bg-gray-50 text-slate-500 max-w-screen">
    <!-- sidenav  -->
    <!-- end sidenav -->
    <!-- Navbar -->
    <?php include './header.php' ?>

    <!-- end Navbar -->

    <section>
      <img src="./assets/img/indeximg.png" class="md-max max-w-full" alt="">
    </section>

    <section class="flex w-full gap-4 px-8 mt-6">
      <div class="flex flex-none items-center w-1/3 mt-0 flex-row flex-wrap px-3 md:flex-none xl:mb-0 xl:w-3/12 ">
        <div class="relative">
          <div x-data="{ isOpen: false }">
            <button
              x-on:click="isOpen = !isOpen"
              type="button"
              class="flex cursor-pointer items-center gap-2 border-b border-gray-400 pb-1 text-gray-900 transition hover:border-gray-600"
            >
              <span class="text-sm font-medium"> Precio </span>
      
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
              class="absolute start-0 top-auto z-50 mt-2"
            >
              <div class="w-96 rounded border border-gray-200 bg-white">
                <header class="flex items-center justify-between p-4">
                  <span class="text-sm text-gray-700"> The highest price is $600 </span>
      
                  <button type="button" class="text-sm text-gray-900 underline underline-offset-4">
                    Reset
                  </button>
                </header>
      
                <div class="border-t border-gray-200 p-4">
                  <div class="flex justify-between gap-4">
                    <label for="FilterPriceFrom" class="flex items-center gap-2">
                      <span class="text-sm text-gray-600">$</span>
      
                      <input
                        type="number"
                        id="FilterPriceFrom"
                        placeholder="From"
                        class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm"
                      />
                    </label>
      
                    
                    <label for="FilterPriceTo" class="flex items-center gap-2">
                      <span class="text-sm text-gray-600">$</span>
      
                      <input
                        type="number"
                        id="FilterPriceTo"
                        placeholder="To"
                        class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm"
                      />
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="flex flex-end items-center w-2/3 mt-0 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto relative">
        <div class="flex items-center w-full md:pr-4">
          <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
            <span class="text-sm ease-soft leading-5.6 absolute z-10 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
              <i class="fas fa-search"></i>
            </span>
            <input type="text" class="pl-8.75 text-sm focus:shadow-soft-brown-outline ease-soft w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-brown focus:outline-none focus:transition-shadow" placeholder="Buscar..." />
          </div>
        </div>
      </div>
    </section>


    <section>
      <div class="flex-none w-full max-w-full px-3 mt-6 ">
        <div class="relative flex flex-col min-w-0 mb-6 break-words border-0 shadow-soft-xl rounded-2xl bg-clip-border">
          <h2 class="text-center mb-2">Productos Destacados</h2>
          <div class="flex-auto p-4">
            <div id="products-container" class="flex flex-wrap mx-3">
              <div class="w-full max-w-full px-3 mb-6 md:w-6/12 md:mb-3 md:flex-none xl:w-3/12">
                <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border cursor-pointer" onclick="window.location.href='./producto.php?cod=${product.code}';">
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
                <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border cursor-pointer" onclick="window.location.href='./producto.php?cod=${product.code}';">
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
                <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border cursor-pointer" onclick="window.location.href='./producto.php?cod=${product.code}';">
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
                <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border cursor-pointer" onclick="window.location.href='./producto.php?cod=${product.code}';">
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
                <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border cursor-pointer" onclick="window.location.href='./producto.php?cod=${product.code}';">
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
                <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border cursor-pointer" onclick="window.location.href='./producto.php?cod=${product.code}';">
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
                <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border cursor-pointer" onclick="window.location.href='./producto.php?cod=${product.code}';">
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
                <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border cursor-pointer" onclick="window.location.href='./producto.php?cod=${product.code}';">
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
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="flex-none w-full max-w-full px-3 mt-6 ">
        <div class="relative flex flex-col items-center min-w-0 mb-6 break-words border-0 shadow-soft-xl rounded-2xl bg-clip-border">
          <div class="mb-2 w-full py-4 px-8 pb-0 mb-0 flex items-center justify-end rounded-t-2xl relative">
            <h3 class="flex-grow text-center absolute left-0 right-0 mx-auto">Materiales</h3>
            <div class="relative w-1/2 flex justify-end">
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
            </div>
          </div>
          <div class="flex-auto p-4">
            <div id="materials-container" class="flex flex-wrap mx-3">
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
              </div>
            </div>
          </div>
          <button type="button" class="w-3/4 md:w-1/10 px-8 py-2 mb-6 font-bold text-center uppercase transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs active:shadow-soft-xs tracking-tight-soft border-brown text-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white">+ Ver Más...</button>
        </div>
      </div>
    </section>

    <section>
      <div class="flex-none w-full max-w-full px-3 mt-6 ">
        <div class="relative flex flex-col items-center min-w-0 mb-6 break-words border-0 shadow-soft-xl rounded-2xl bg-clip-border">
          <div class="mb-2 w-full py-4 px-8 pb-0 mb-0 flex items-center justify-end rounded-t-2xl relative">
            <h3 class="flex-grow text-center absolute left-0 right-0 mx-auto">Muebles</h3>
            <div class="relative w-1/2 flex justify-end">
              <div x-data="{ isOpen: false }">
                <button
                  x-on:click="isOpen = !isOpen"
                  type="button"
                  class="flex cursor-pointer items-center gap-2 border-b border-gray-400 pb-1 text-gray-900 transition hover:border-gray-600"
                >
                  <span class="text-sm font-medium"> Tipo de Mueble </span>
          
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
            </div>
          </div>
          <div class="flex-auto p-4">
            <div class="flex flex-wrap mx-3">
              <div class="w-full max-w-full px-3 mb-6 md:w-6/12 md:mb-3 md:flex-none xl:w-3/12">
                <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border cursor-pointer" onclick="window.location.href='./producto.php?cod=${product.code}';">
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
                <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border cursor-pointer" onclick="window.location.href='./producto.php?cod=${product.code}';">
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
                <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border cursor-pointer" onclick="window.location.href='./producto.php?cod=${product.code}';">
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
                <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border cursor-pointer" onclick="window.location.href='./producto.php?cod=${product.code}';">
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
                <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border cursor-pointer" onclick="window.location.href='./producto.php?cod=${product.code}';">
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
                <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border cursor-pointer" onclick="window.location.href='./producto.php?cod=${product.code}';">
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
                <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border cursor-pointer" onclick="window.location.href='./producto.php?cod=${product.code}';">
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
                <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border cursor-pointer" onclick="window.location.href='./producto.php?cod=${product.code}';">
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
            </div>
          </div>
          <button type="button" class="w-3/4 md:w-1/10 px-8 py-2 mb-6 font-bold text-center uppercase transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs active:shadow-soft-xs tracking-tight-soft border-brown text-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white">+ Ver Más...</button>
        </div>
      </div>
    </section>

    <section>
      <div class="flex-none w-full max-w-full px-3 mt-6 ">
        <div class="relative flex flex-col items-center min-w-0 mb-6 break-words border-0 shadow-soft-xl rounded-2xl bg-clip-border">
          <div class="mb-2 w-full py-4 px-8 pb-0 mb-0 flex items-center justify-end rounded-t-2xl relative">
            <h3 class="flex-grow text-center absolute left-0 right-0 mx-auto">Juegos de Muebles</h3>
            <div class="relative w-1/2 flex justify-end">
              <div x-data="{ isOpen: false }">
                <button
                  x-on:click="isOpen = !isOpen"
                  type="button"
                  class="flex cursor-pointer items-center gap-2 border-b border-gray-400 pb-1 text-gray-900 transition hover:border-gray-600"
                >
                  <span class="text-sm font-medium"> Tipo de Juego </span>
          
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
            </div>
          </div>
          <div class="flex-auto p-4">
            <div class="flex flex-wrap mx-3">
              <div class="w-full max-w-full px-3 mb-6 md:w-6/12 md:mb-3 md:flex-none xl:w-3/12">
                <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border cursor-pointer" onclick="window.location.href='./producto.php?cod=${product.code}';">
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
                <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border cursor-pointer" onclick="window.location.href='./producto.php?cod=${product.code}';">
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
                <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border cursor-pointer" onclick="window.location.href='./producto.php?cod=${product.code}';">
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
                <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border cursor-pointer" onclick="window.location.href='./producto.php?cod=${product.code}';">
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
                <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border cursor-pointer" onclick="window.location.href='./producto.php?cod=${product.code}';">
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
                <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border cursor-pointer" onclick="window.location.href='./producto.php?cod=${product.code}';">
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
                <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border cursor-pointer" onclick="window.location.href='./producto.php?cod=${product.code}';">
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
                <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border cursor-pointer" onclick="window.location.href='./producto.php?cod=${product.code}';">
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
            </div>
          </div>
          <button type="button" class="w-3/4 md:w-1/10 px-8 py-2 mb-6 font-bold text-center uppercase transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs active:shadow-soft-xs tracking-tight-soft border-brown text-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white">+ Ver Más...</button>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <?php include './footer.php' ?>

    <!-- Modal Login-->
    <div id="loginModal" class="hidden fixed inset-0 top-0 left-0 w-full h-full bg-gray-800 bg-opacity-50 backdrop-blur flex items-center justify-center z-110 shadow-xl">
      <div class="bg-white p-6 rounded-lg shadow-lg relative w-1/3">
        <button id="closeLoginModal" class="absolute top-0 right-0 p-4 text-gray-600 hover:text-gray-900">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
        <div class="flex justify-center mb-4">
          <img src="./assets/img/ERM logo.png" alt="Logo" class="w-18.5 h-auto object-cover rounded-full">
        </div>
        <h2 class="text-xl text-center font-semibold">Iniciar Sesión</h2>
        <form id="loginForm" enctype="multipart/form-data">
          <!-- Campos de formulario -->
          <input id="emailLogin" type="email" name="email" placeholder="Correo Electrónico" class="p-2 border rounded w-full mb-4 focus:shadow-soft-brown-outline ease-soft border border-solid border-gray-300 bg-white text-gray-700 transition-all placeholder:text-gray-500 focus:border-brown focus:outline-none focus:transition-shadow" required>
          <div class="relative mb-4">
            <input id="passwordLogin" type="password" name="password" placeholder="Contraseña" minlength="8" class="password-input p-2 border rounded w-full focus:shadow-soft-brown-outline ease-soft border border-solid border-gray-300 bg-white text-gray-700 transition-all placeholder:text-gray-500 focus:border-brown focus:outline-none focus:transition-shadow" required>
            <button type="button" class="toggle-password absolute inset-y-0 right-0 mr-4 flex items-center text-gray-500 hover:text-gray-700 cursor-pointer">
              <!-- Ojo tachado -->
              <img src="./assets/img/esconder.png" alt="ojo tachado" class="eye-closed w-6 h-6">
              <!-- ojo abierto -->
              <img src="./assets/img/ojo.png" alt="ojo abierto" class="eye-open w-6 h-6 hidden">
            </button>
          </div>
          <button id="submitLogin" type="submit" class="w-full p-2 rounded font-bold text-center transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in active:shadow-soft-xs tracking-tight-soft border-brown text-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white">
            Acceder
          </button>
        </form>
      </div>
    </div>

    <!-- Modal Registro -->
    <div id="registerModal" class="hidden fixed inset-0 top-0 left-0 w-full h-full bg-gray-800 bg-opacity-50 backdrop-blur flex items-center justify-center z-110 shadow-xl">
      <div class="bg-white p-6 rounded-lg shadow-lg relative w-1/3 max-h-10/12 overflow-y-auto">
        <button id="closeRegisterModal" class="absolute top-0 right-0 p-4 text-gray-600 hover:text-gray-900">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
        <div class="flex justify-center mb-4">
          <img src="./assets/img/ERM logo.png" alt="Logo" class="w-18.5 h-auto object-cover rounded-full">
        </div>
        <h2 class="text-xl text-center font-semibold mb-4">Registro</h2>
        <form id="registerForm" enctype="multipart/form-data">
          <!-- Nombre -->
          <label for="nameRegister" class="text-sm font-medium text-gray-700">Nombre</label>
          <input id="nameRegister" type="text" name="name" placeholder="Nombre" class="letters-only p-2 border rounded w-full mb-4" maxlength="255" required>
          <!-- Email -->
          <label for="emailRegister" class="text-sm font-medium text-gray-700">Correo Electrónico</label>
          <input id="emailRegister" type="email" name="email" placeholder="Correo Electrónico" class="p-2 border rounded w-full mb-4" maxlength="255" required>
          <!-- Documento -->
          <label for="documentType" class="text-sm font-medium text-gray-700">Documento</label>
          <div class="flex items-center gap-2 mb-4">
            <select id="documentType" name="document_type" class="p-2 border rounded w-1/6" required>
              <option value="V">V</option>
              <option value="E">E</option>
              <option value="J">J</option>
              <option value="G">G</option>
              <option value="P">P</option>
            </select>
            <input id="documentNumber" type="number" inputmode="numeric" name="document_number" placeholder="Número de Documento (Ej. 12345678)" class="numeric-only p-2 border rounded w-5/6 appearance-none appearance-none-number-input flex-grow" required min="0" step="1">
          </div>
          <!-- Documento -->
          <label for="cellphoneCode" class="text-sm font-medium text-gray-700">Número de Celular</label>
          <div class="flex items-center gap-2 mb-4">
            <select id="cellphoneCode" name="cellphone_code" class="p-2 border rounded w-1/6" required>
              <option value="0414">0414</option>
              <option value="0424">0424</option>
              <option value="0416">0416</option>
              <option value="0426">0426</option>
              <option value="0412">0412</option>
            </select>
            <input id="cellphoneNumber" type="tel" inputmode="numeric" name="cellphone_number" placeholder="Número de Celular (Ej. 1234567)" maxlength="7" minlength="7" class="numeric-only p-2 border rounded w-5/6 appearance-none appearance-none-number-input flex-grow" required min="0" step="1">
          </div>
          <!-- Dirección -->
          <label for="addressRegister" class="text-sm font-medium text-gray-700">Dirección</label>
          <textarea id="addressRegister" name="address" placeholder="Dirección" class="p-2 border rounded w-full mb-4" maxlength="500" required></textarea>
          <!-- Contraseña -->
          <label for="passwordRegister" class="text-sm font-medium text-gray-700">Contraseña</label>
          <div class="relative mb-4">
            <input id="passwordRegister" type="password" name="password" placeholder="Contraseña" minlength="9" class="password-input p-2 border rounded w-full" required>
            <button type="button" class="toggle-password absolute inset-y-0 right-0 mr-4 flex items-center text-gray-500 hover:text-gray-700 cursor-pointer">
              <img src="./assets/img/esconder.png" alt="ojo tachado" class="eye-closed w-6 h-6">
              <img src="./assets/img/ojo.png" alt="ojo abierto" class="eye-open w-6 h-6 hidden">
            </button>
          </div>
          <!-- Confirmación de Contraseña -->
          <label for="passwordRegisterConfirm" class="text-sm font-medium text-gray-700">Confirmar Contraseña</label>
          <div class="relative mb-4">
            <input id="passwordRegisterConfirm" type="password" name="password_confirmation" placeholder="Confirmar Contraseña" minlength="9" class="password-input p-2 border rounded w-full" required>
            <button type="button" class="toggle-password absolute inset-y-0 right-0 mr-4 flex items-center text-gray-500 hover:text-gray-700 cursor-pointer">
              <img src="./assets/img/esconder.png" alt="ojo tachado" class="eye-closed w-6 h-6">
              <img src="./assets/img/ojo.png" alt="ojo abierto" class="eye-open w-6 h-6 hidden">
            </button>
          </div>
          <!-- Imagen de perfil -->
          <div class="flex flex-col justify-center items-center mb-4">
            <img id="previewImage" for="fileInput" src="./assets/img/agregar.png" alt="Imagen de perfil" class="customFileButton w-16 h-auto object-cover rounded-full mb-2 cursor-pointer" />
            <input type="file" id="fileInput" name="image" class="hidden" accept="image/*" />
            <label for="fileInput" class="p-2 bg-gray-500 text-gray-500 rounded hover:bg-gray-600 text-lg font-medium cursor-pointer">Seleccionar imagen</label>
          </div>
          <!-- Botón de Registro -->
          <button id="submitRegister" type="submit" class="w-full p-2 rounded font-bold text-center bg-brown text-white hover:bg-brown-dark">
            Registrarse
          </button>
        </form>
      </div>
    </div>
    <!-- cards -->
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

  <script>

    $(document).ready(function () {
      //Insertar 8 productos aleatorios
      $.ajax({
        url: 'http://127.0.0.1:8000/api/products/8',
        type: 'GET',
        dataType: 'json',
        success: function(response, status, xhr){
          console.log(xhr);
          $('#products-container').empty();

          response.forEach(product => {
            const productHTML = `
              <div class="w-full max-w-full px-3 mb-6 md:w-6/12 md:mb-3 md:flex-none xl:w-3/12">
                <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border cursor-pointer" onclick="window.location.href='./producto.php?cod=${product.code}';">
                  <div class="relative w-full h-64">
                    <a class="block shadow-xl rounded-2xl w-full h-full p-2">
                      <img src="${product.image}" alt="img-product" class="w-full h-full object-contain rounded-2xl" />
                    </a>
                  </div>
                  <div class="flex-auto px-1 pt-6">
                    <a href="javascript:;">
                      <h5 class="mt-1">${product.name}</h5>
                    </a>
                    <p class="mb-6 leading-normal text-sm">REF. ${product.price}</p>
                    <div class="flex items-center justify-between">
                      <button type="button" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none leading-pro ease-soft-in text-xs active:shadow-soft-xs tracking-tight-soft border-brown text-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white">Más Información</button> 
                    </div>
                  </div>
                </div>
              </div>
            `;
            $('#products-container').append(productHTML);
          });
        },
        error: function(xhr, status, error){
          console.log(xhr);
          errorMsg();
        }
      });
      
      //Insertar 8 materiales aleatorios
      $.ajax({
        url: 'http://127.0.0.1:8000/api/materials/8',
        type: 'GET',
        dataType: 'json',
        success: function(response, status, xhr){
          console.log(xhr);
          $('#materials-container').empty();

          response.forEach(material => {
            const materialHTML = `
              <div class="w-full max-w-full px-3 mb-6 md:w-6/12 md:mb-3 md:flex-none xl:w-3/12">
                <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border cursor-pointer" onclick="window.location.href='./producto.php?cod=${material.product.code}';">
                  <div class="relative w-full h-64">
                    <a class="block shadow-xl rounded-2xl w-full h-full p-2">
                      <img src="${material.product.image}" alt="img-material" class="w-full h-full object-contain rounded-2xl" />
                    </a>
                  </div>
                  <div class="flex-auto px-1 pt-6">
                    <a href="javascript:;">
                      <h5 class="mt-1">${material.product.name}</h5>
                    </a>
                    <p class="mb-6 leading-normal text-sm">REF. ${material.price}</p>
                    <div class="flex items-center justify-between">
                      <button type="button" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none leading-pro ease-soft-in text-xs active:shadow-soft-xs tracking-tight-soft border-brown text-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white">Más Información</button> 
                    </div>
                  </div>
                </div>
              </div>
            `;
            $('#materials-container').append(materialHTML);
          });
        },
        error: function(xhr, status, error){
          errorMsg();
          console.log(xhr);
        }
      });
    });
  </script>
</html>
