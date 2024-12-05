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

    <section class="w-full">
      <img src="./assets/img/indeximg.jpg" class="md-max w-full max-w-full h-96 object-cover object-center" alt="banner">
    </section>

    <section class="flex w-full gap-4 px-8 mt-6">
      <!--<div class="flex flex-none items-center w-1/3 mt-0 flex-row flex-wrap px-3 md:flex-none xl:mb-0 xl:w-3/12 ">
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
              class="absolute start-0 top-auto z-40 mt-2 w-48"
            >
              <div class="w-96 rounded border border-gray-200 bg-white p-4">
                <div class="border-t border-gray-200">
                  <div class="flex justify-between gap-4">
                    <label for="FilterPriceFrom" class="flex items-center gap-2">
                      <span class="text-sm text-gray-600">$</span>
      
                      <input
                        type="number"
                        id="FilterPriceFrom"
                        placeholder="Desde"
                        class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm"
                        min="0"
                      />
                    </label>
      
                    
                    <label for="FilterPriceTo" class="flex items-center gap-2">
                      <span class="text-sm text-gray-600">$</span>
      
                      <input
                        type="number"
                        id="FilterPriceTo"
                        placeholder="Hasta"
                        class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm"
                        min="0"
                      />
                    </label>
                  </div>
                </div>
                <div class="flex items-center justify-between">
                  <button type="button" class="text-sm text-gray-900 underline underline-offset-4">
                    Borrar
                  </button>
                  <button type="button" class="text-sm text-gray-900 underline underline-offset-4">
                    Buscar
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>-->
      <?php include './searchBar.php' ?>
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
                  <span class="text-xxs md:text-sm font-medium"> Tipo de Material </span>
          
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
                  class="absolute right-0 top-auto z-40 mt-2"
                >
                  <div class="w-96 rounded border border-gray-200 bg-white">
                    <!--<header class="flex items-center justify-between p-4">
                      <span class="text-sm text-gray-700"> 0 Selected </span>
          
                      <button type="button" class="text-sm text-gray-900 underline underline-offset-4">
                        Reset
                      </button>
                    </header>-->
          
                    <ul id="materialTypeFilter" class="space-y-1 border-t border-gray-200 p-4 max-h-32 overflow-y-scroll">
                      <!--<li>
                        <label for="FilterInStock" class="inline-flex items-center gap-2">
                          <input type="checkbox" id="FilterInStock" class="size-5 rounded border-gray-300" />
          
                          <span class="text-sm font-medium text-gray-700"> In Stock (5+) </span>
                        </label>
                      </li>
          
                      <li>
                        <a for="FilterPreOrder" class="inline-flex items-center gap-2">
                          <input type="checkbox" id="FilterPreOrder" class="size-5 rounded border-gray-300" />
        
                          <span class="text-sm font-medium text-gray-700"> Pre Order (3+) </span>
                        </a>
                      </li>
          
                      <li>
                        <label for="FilterOutOfStock" class="inline-flex items-center gap-2">
                          <input type="checkbox" id="FilterOutOfStock" class="size-5 rounded border-gray-300"/>
          
                          <span class="text-sm font-medium text-gray-700"> Out of Stock (10+) </span>
                        </label>
                      </li>-->
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
          <button type="button" class="w-3/4 md:w-1/10 px-8 py-2 mb-6 font-bold text-center uppercase transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs active:shadow-soft-xs tracking-tight-soft border-brown text-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white" onclick="window.location.href = './search.php?materials=true'">+ Ver Más...</button>
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
                  <span class="text-xxs md:text-sm font-medium"> Tipo de Mueble </span>
          
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
                  class="absolute right-0 top-auto z-40 mt-2"
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
          <button type="button" class="w-3/4 md:w-1/10 px-8 py-2 mb-6 font-bold text-center uppercase transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs active:shadow-soft-xs tracking-tight-soft border-brown text-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white" onclick="window.location.href = './search.php?furnitures=true'">+ Ver Más...</button>
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
                  <span class="text-xxs md:text-sm font-medium"> Tipo de Juego </span>
          
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
                  class="absolute right-0 top-auto z-40 mt-2"
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
          <button type="button" class="w-3/4 md:w-1/10 px-8 py-2 mb-6 font-bold text-center uppercase transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs active:shadow-soft-xs tracking-tight-soft border-brown text-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white" onclick="window.location.href = './search.php?sets=true'">+ Ver Más...</button>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <?php include './footer.php' ?>

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
            let image = product.image;
            if(!image){
              image = './assets/img/no-image.png';
            }
            const productHTML = `
              <div class="w-full max-w-full px-3 mb-6 md:w-6/12 md:mb-3 md:flex-none xl:w-3/12">
                <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border cursor-pointer" onclick="window.location.href='./producto.php?cod=${product.code}';">
                  <div class="relative w-full h-48">
                    <a class="block shadow-xl rounded-2xl w-full h-full p-2">
                      <img src="${image}" alt="img-product" class="w-full h-full object-contain rounded-2xl" />
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
            let image = material.product.image;
            if(!image){
              image = './assets/img/no-image.png';
            }
            const materialHTML = `
              <div class="w-full max-w-full px-3 mb-6 md:w-6/12 md:mb-3 md:flex-none xl:w-3/12">
                <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border cursor-pointer" onclick="window.location.href='./producto.php?cod=${material.product.code}';">
                  <div class="relative w-full h-48">
                    <a class="block shadow-xl rounded-2xl w-full h-full p-2">
                      <img src="${image}" alt="img-material" class="w-full h-full object-contain rounded-2xl" />
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

      //insertar filtro MT
      $.ajax({
        url: 'http://127.0.0.1:8000/api/materialTypes',
        type: 'GET',
        dataType: 'json',
        success: function(response){
          console.log(response);

          let mtHTML = '';
          response.forEach(mt => {
            mtHTML += `
              <li>
                <a href='./search.php?materialType=${mt.name}' class="inline-flex items-center gap-2">
                  <span class="text-sm font-medium text-gray-700 hover:text-brown transition-all">${mt.name}</span>
                </a>
              </li>
            `;
          });

          $('#materialTypeFilter').empty().append(mtHTML);
        },
        error: function(xhr){
          console.log(xhr);
        }
      });
    });
  </script> 
</html>
