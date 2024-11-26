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
    <header class="relative flex flex-wrap items-center justify-between px-8 py-2 m-0 transition-all shadow-none duration-250 ease-soft-in lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="true"  >
      <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
        <nav class=" flex items-center">
          <!-- breadcrumb -->
          <ol class="flex flex-wrap items-center pt-1 mr-12 bg-transparent rounded-lg sm:mr-16 cursor-pointer" onclick="window.location.href='./'">
            <li class="text-sm leading-normal">
              <img src="./assets/img/ERM logo.png" class="inline-flex items-center justify-center mr-4 text-sm text-white h-16 w-16 max-w-none rounded-xl" alt="logo">
            </li>
            <h1 class="mb-0 font-bamboo text-stroke-brown capitalize text-7xl h-16">Euro Rattan Margarita</h1>
          </ol>
        </nav>

        <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
          <li id="registerBtn" class="flex items-center pl-2 hidden">
            <a class="block px-0 py-2 text-sm font-semibold transition-all ease-nav-brand text-slate-500 cursor-pointer">
              <!--<i class="fa fa-user sm:mr-1"></i>-->
              <span class="sm:inline hover:text-brown hover:underline transition-all duration-200 ease-linear">Registrarse</span>
            </a>
          </li>
          <li id="loginBtn" class="flex items-center pl-4 hidden">
            <a class="block px-0 py-2 text-sm font-semibold transition-all ease-nav-brand text-slate-500 cursor-pointer">
              <!--<i class="fa fa-user sm:mr-1"></i>-->
              <span class="sm:inline hover:text-brown hover:underline transition-all duration-200 ease-linear">Iniciar Sesión</span>
            </a>
          </li>
          <li id="userBtn" class="relative flex items-center pl-4 hidden">
            <a href="javascript:;" class="flex flex-row items-center px-0 py-2 text-sm font-semibold transition-all ease-nav-brand text-slate-500 cursor-pointer" dropdown-trigger aria-expanded="false">
              <img id="userImg" src="./assets/img/imagen-de-perfil.png" alt="Usuario" class="w-4 h-4 sm:mr-1">
              <span id="userName" class="sm:inline hover:text-brown hover:underline transition-all duration-200 ease-linear"></span>
            </a>

            <ul dropdown-menu class="text-sm transform-dropdown before:font-awesome before:leading-default before:duration-350 before:ease-soft lg:shadow-soft-3xl duration-250 min-w-44 before:sm:right-7.5 before:text-5.5 pointer-events-none absolute right-0 top-0 z-50 origin-top list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:right-2 before:left-auto before:top-0 before:z-50 before:inline-block before:font-normal before:text-white before:antialiased before:transition-all before:content-['\f0d8'] sm:-mr-6 lg:absolute lg:right-0 lg:left-auto lg:mt-2 lg:block">
              <!-- add show class on dropdown open js -->
              <li class="relative mb-2">
                <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent px-4 duration-300 hover:bg-gray-200 hover:text-slate-700 lg:transition-colors" href="javascript:;">
                  <div class="flex py-1">
                    <div class="flex flex-col justify-center">
                      <h6 class="mb-1 text-sm font-normal leading-normal"><span class="font-semibold">Dashboard</span></h6>
                      <p class="mb-0 text-xs leading-tight text-slate-400">
                      </p>
                    </div>
                  </div>
                </a>
              </li>

              <li class="relative mb-2">
                <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent px-4 duration-300 hover:bg-gray-200 hover:text-slate-700 lg:transition-colors" href="javascript:;">
                  <div class="flex py-1">
          
                    <div class="flex flex-col justify-center">
                      <h6 class="mb-1 text-sm font-normal leading-normal"><span class="font-semibold">Mi perfil</span></h6>
                      <p class="mb-0 text-xs leading-tight text-slate-400">
                      </p>
                    </div>
                  </div>
                </a>
              </li>

              <li class="relative mb-2">
                <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent px-4 duration-300 hover:bg-gray-200 hover:text-slate-700 lg:transition-colors" href="javascript:;">
                  <div class="flex py-1">
          
                    <div class="flex flex-col justify-center">
                      <h6 class="mb-1 text-sm font-normal leading-normal"><span class="font-semibold">Mis compras</span></h6>
                      <p class="mb-0 text-xs leading-tight text-slate-400">
                      </p>
                    </div>
                  </div>
                </a>
              </li>

              <li class="relative mb-2">
                <a id="logOutBtn" class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent px-4 duration-300 hover:bg-gray-200 hover:text-slate-700 lg:transition-colors" href="javascript:;">
                  <div class="flex py-1">
                    <div class="flex flex-col justify-center">
                      <h6 class="mb-1 text-sm font-normal leading-normal"><span class="font-semibold">Cerrar Sesion</span></h6>
                      <p class="mb-0 text-xs leading-tight text-slate-400">
                      </p>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </li>
          <li class="flex items-center pl-4 hidden">
            <a href="javascript:;" class="block p-0 text-sm transition-all ease-nav-brand text-slate-500" sidenav-trigger>
              <div class="w-4.5 overflow-hidden">
                <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                <i class="ease-soft relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
              </div>
            </a>
          </li>
          <li class="flex items-center px-4 hidden">
            <a href="javascript:;" class="p-0 text-sm transition-all ease-nav-brand text-slate-500">
              <i fixed-plugin-button-nav class="cursor-pointer fa fa-cog"></i>
              <!-- fixed-plugin-button-nav  -->
            </a>
          </li>

          <!-- notifications -->

          <!--<li class="relative flex items-center pr-2">
            <p class="hidden transform-dropdown-show"></p>
            <a href="javascript:;" class="block p-0 text-sm transition-all ease-nav-brand text-slate-500" dropdown-trigger aria-expanded="false">
              <i class="cursor-pointer fa fa-bell"></i>
            </a>
          </li>-->
        </ul>
      </div>
    </header>

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
          <h2 class="text-center">Productos Destacados</h2>
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
          <div class="w-full py-4 px-8 pb-0 mb-0 flex items-center justify-end rounded-t-2xl relative">
            <h3 class="mb-1 flex-grow text-center absolute left-0 right-0 mx-auto">Materiales</h3>
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
          <div class="w-full py-4 px-8 pb-0 mb-0 flex items-center justify-end rounded-t-2xl relative">
            <h3 class="mb-1 flex-grow text-center absolute left-0 right-0 mx-auto">Muebles</h3>
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
          <div class="w-full py-4 px-8 pb-0 mb-0 flex items-center justify-end rounded-t-2xl relative">
            <h3 class="mb-1 flex-grow text-center absolute left-0 right-0 mx-auto">Juegos de Muebles</h3>
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
    <footer class="bg-gray-800 text-white py-8"> 
      <div class="w-full mx-auto px-4 py-4"> 
        <div class="flex flex-wrap md:flex-nowrap justify-between"> 
          <!-- Sección de Ubicación --> 
          <div class="w-full md:w-1/2 mb-6 md:mb-0"> 
            <h5 class="text-lg font-semibold mb-4 text-white">Ubicación</h5> 
            <p class="text-gray-400 text-justify md:text-justify break-words">Local 1, Avenida 4 de Mayo con Avenida Francisco Estebann Gómez Edif. Bolimar, PB, Porlamar 6301, Nueva Esparta, Venezuela.</p> 
          </div> 
          <!-- Sección de Redes Sociales --> 
          <div class="w-full md:w-1/2 mb-6 md:mb-0 flex flex-col items-end"> 
            <h5 class="text-lg font-semibold mb-4 text-white">Contáctanos</h5> 
            <div class="flex space-x-4"> 
              <a href="https://www.instagram.com" class="text-gray-400 hover:text-gray-200"> 
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" preserveAspectRatio="xMidYMid" viewBox="0 0 256 256"><path fill="#fff" d="M128 23.064c34.177 0 38.225.13 51.722.745 12.48.57 19.258 2.655 23.769 4.408 5.974 2.322 10.238 5.096 14.717 9.575 4.48 4.479 7.253 8.743 9.575 14.717 1.753 4.511 3.838 11.289 4.408 23.768.615 13.498.745 17.546.745 51.723 0 34.178-.13 38.226-.745 51.723-.57 12.48-2.655 19.257-4.408 23.768-2.322 5.974-5.096 10.239-9.575 14.718-4.479 4.479-8.743 7.253-14.717 9.574-4.511 1.753-11.289 3.839-23.769 4.408-13.495.616-17.543.746-51.722.746-34.18 0-38.228-.13-51.723-.746-12.48-.57-19.257-2.655-23.768-4.408-5.974-2.321-10.239-5.095-14.718-9.574-4.479-4.48-7.253-8.744-9.574-14.718-1.753-4.51-3.839-11.288-4.408-23.768-.616-13.497-.746-17.545-.746-51.723 0-34.177.13-38.225.746-51.722.57-12.48 2.655-19.258 4.408-23.769 2.321-5.974 5.095-10.238 9.574-14.717 4.48-4.48 8.744-7.253 14.718-9.575 4.51-1.753 11.288-3.838 23.768-4.408 13.497-.615 17.545-.745 51.723-.745M128 0C93.237 0 88.878.147 75.226.77c-13.625.622-22.93 2.786-31.071 5.95-8.418 3.271-15.556 7.648-22.672 14.764C14.367 28.6 9.991 35.738 6.72 44.155 3.555 52.297 1.392 61.602.77 75.226.147 88.878 0 93.237 0 128c0 34.763.147 39.122.77 52.774.622 13.625 2.785 22.93 5.95 31.071 3.27 8.417 7.647 15.556 14.763 22.672 7.116 7.116 14.254 11.492 22.672 14.763 8.142 3.165 17.446 5.328 31.07 5.95 13.653.623 18.012.77 52.775.77s39.122-.147 52.774-.77c13.624-.622 22.929-2.785 31.07-5.95 8.418-3.27 15.556-7.647 22.672-14.763 7.116-7.116 11.493-14.254 14.764-22.672 3.164-8.142 5.328-17.446 5.95-31.07.623-13.653.77-18.012.77-52.775s-.147-39.122-.77-52.774c-.622-13.624-2.786-22.929-5.95-31.07-3.271-8.418-7.648-15.556-14.764-22.672C227.4 14.368 220.262 9.99 211.845 6.72c-8.142-3.164-17.447-5.328-31.071-5.95C167.122.147 162.763 0 128 0Zm0 62.27C91.698 62.27 62.27 91.7 62.27 128c0 36.302 29.428 65.73 65.73 65.73 36.301 0 65.73-29.428 65.73-65.73 0-36.301-29.429-65.73-65.73-65.73Zm0 108.397c-23.564 0-42.667-19.103-42.667-42.667S104.436 85.333 128 85.333s42.667 19.103 42.667 42.667-19.103 42.667-42.667 42.667Zm83.686-110.994c0 8.484-6.876 15.36-15.36 15.36-8.483 0-15.36-6.876-15.36-15.36 0-8.483 6.877-15.36 15.36-15.36 8.484 0 15.36 6.877 15.36 15.36Z"/></svg> 
              </a> 
              <a href="https://wa.me/+584147894819" class="text-gray-400 hover:text-gray-200"> 
                <svg viewBox="0 0 256 259" width="24" height="24" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid"><path d="m67.663 221.823 4.185 2.093c17.44 10.463 36.971 15.346 56.503 15.346 61.385 0 111.609-50.224 111.609-111.609 0-29.297-11.859-57.897-32.785-78.824-20.927-20.927-48.83-32.785-78.824-32.785-61.385 0-111.61 50.224-110.912 112.307 0 20.926 6.278 41.156 16.741 58.594l2.79 4.186-11.16 41.156 41.853-10.464Z" fill="#00E676"/><path d="M219.033 37.668C195.316 13.254 162.531 0 129.048 0 57.898 0 .698 57.897 1.395 128.35c0 22.322 6.278 43.947 16.742 63.478L0 258.096l67.663-17.439c18.834 10.464 39.76 15.347 60.688 15.347 70.453 0 127.653-57.898 127.653-128.35 0-34.181-13.254-66.269-36.97-89.986ZM129.048 234.38c-18.834 0-37.668-4.882-53.712-14.648l-4.185-2.093-40.458 10.463 10.463-39.76-2.79-4.186C7.673 134.63 22.322 69.058 72.546 38.365c50.224-30.692 115.097-16.043 145.79 34.181 30.692 50.224 16.043 115.097-34.18 145.79-16.045 10.463-35.576 16.043-55.108 16.043Zm61.385-77.428-7.673-3.488s-11.16-4.883-18.136-8.371c-.698 0-1.395-.698-2.093-.698-2.093 0-3.488.698-4.883 1.396 0 0-.697.697-10.463 11.858-.698 1.395-2.093 2.093-3.488 2.093h-.698c-.697 0-2.092-.698-2.79-1.395l-3.488-1.395c-7.673-3.488-14.648-7.674-20.229-13.254-1.395-1.395-3.488-2.79-4.883-4.185-4.883-4.883-9.766-10.464-13.253-16.742l-.698-1.395c-.697-.698-.697-1.395-1.395-2.79 0-1.395 0-2.79.698-3.488 0 0 2.79-3.488 4.882-5.58 1.396-1.396 2.093-3.488 3.488-4.883 1.395-2.093 2.093-4.883 1.395-6.976-.697-3.488-9.068-22.322-11.16-26.507-1.396-2.093-2.79-2.79-4.883-3.488H83.01c-1.396 0-2.79.698-4.186.698l-.698.697c-1.395.698-2.79 2.093-4.185 2.79-1.395 1.396-2.093 2.79-3.488 4.186-4.883 6.278-7.673 13.951-7.673 21.624 0 5.58 1.395 11.161 3.488 16.044l.698 2.093c6.278 13.253 14.648 25.112 25.81 35.575l2.79 2.79c2.092 2.093 4.185 3.488 5.58 5.58 14.649 12.557 31.39 21.625 50.224 26.508 2.093.697 4.883.697 6.976 1.395h6.975c3.488 0 7.673-1.395 10.464-2.79 2.092-1.395 3.487-1.395 4.882-2.79l1.396-1.396c1.395-1.395 2.79-2.092 4.185-3.487 1.395-1.395 2.79-2.79 3.488-4.186 1.395-2.79 2.092-6.278 2.79-9.765v-4.883s-.698-.698-2.093-1.395Z" fill="#FFF"/></svg>
              </a> 
            </div> 
          </div>
        </div> 
        <div class="mt-8 text-center text-gray-500"> 
          &copy; 2024 Euro Rattan Mrgarita. Todos los derechos reservados. 
        </div> 
      </div> 
    </footer>
    </section>

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
  <!-- CDN de JQuery -->
  <script src="./assets/js/JQuery.js"></script>
  
  <!-- CDN SweetAlert -->
  <script src="./assets/js/sweetAlert2.js"></script>

  <script>

    function openLoginModal(){
      $('#loginModal').removeClass('hidden').fadeIn(); // Mostrar el modal
      $('body').addClass('overflow-y-hidden');
    }

    function closeLoginModal(){
      $('#loginModal').fadeOut(); // Ocultar el modal
      $('#emailLogin').val('');
      $('#passwordLogin').val('');
      $('body').removeClass('overflow-y-hidden');
    }

    function openRegisterModal(){
      $('#registerModal').removeClass('hidden').fadeIn(); // Mostrar el modal
      $('body').addClass('overflow-y-hidden');
    }

    function closeRegisterModal(){
      $('#registerModal').fadeOut(); // Ocultar el modal
      $('#nameRegister').val('');
      $('#emailRegister').val('');
      $('#documentType').val('V');
      $('#documentNumber').val('');
      $('#addressRegister').val('');
      $('#passwordRegister').val('');
      $('#passwordRegisterConfirm').val('');
      $('#imageRegister').val('');
      $('#previewImage').attr('src', './assets/img/agregar.png');
      $('body').removeClass('overflow-y-hidden');
    }

    function logOut(){
      let token = localStorage.getItem('authToken');
      if(!token){
        return;
      } else{
        $.ajax({
          url: 'http://127.0.0.1:8000/api/user/logout',
          type: 'POST',
          dataType: 'json',
          headers: {
            'Authorization': 'Bearer ' + token
          },
          success: function(response, status, xhr){
            console.log(response);
            window.location.href = './';
          },
          error: function(xhr, status, error){
            console.log(xhr);
          }
        });
      }
    }

    function errorMsg(){
      Swal.fire({
        icon: 'warning',
        title: 'Ocurrió un error inesperado',
        text: 'Por favor, recargue la página.',
        showConfirmButton: false,
        allowOutsideClick: false,
        allowEscapeKey: false,
      });
    }

    $(document).ready(function () {
      //detectar sesion iniciada
      let token = localStorage.getItem('authToken');

      if(!token){
        console.log('usuario no logeado');
      } else{
        $.ajax({
          url: 'http://127.0.0.1:8000/api/user/auth',
          type: 'GET',
          dataType: 'json',
          headers: {
            'Authorization': 'Bearer ' + token
          },
          success: function(response, status, xhr){
            console.log(response);

            $('#loginBtn, #registerBtn').remove();

            $('#userBtn').removeClass('hidden');
            if(response.image){
              $('#userImg').attr('src', response.image).addClass('rounded-full w-9 h-9 object-cover').removeClass('w-4 h-4');
            }
            $('#userName').text(response.name);

          },
          error: function(xhr, status, error){
            if(xhr.status == 401){
              console.log('usuario no logeado');
              $('#loginBtn, #registerBtn').removeClass('hidden');
              $('#userBtn').remove();
            } else{
              console.log('Ocurrió un error inesperado');
            }
          }
        });
      }

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

      //Deshabilitar el incremento/decremento del campo documento
      $('#documentNumber').on('wheel', function(e) {
        e.preventDefault();
      });

      // Filtrar la entrada solo a números
      $('.numeric-only').on('input', function() {
        // Eliminar caracteres no numéricos
        this.value = this.value.replace(/[^0-9]/g, '');
      });

      // Filtrar la entrada solo a letras (incluidos acentos y espacios)
    $('.letters-only').on('input', function() {
      // Eliminar caracteres que no sean letras, acentos o espacios
      this.value = this.value.replace(/[^a-zA-ZáéíóúÁÉÍÓÚüÜñÑ\s]/g, '');
    });

      $('#loginBtn').on('click', function () {
        openLoginModal();
      });

      $('#closeLoginModal').on('click', function () {
        closeLoginModal();
      });

      $('#registerBtn').on('click', function () {
        openRegisterModal();
      });

      $('#closeRegisterModal').on('click', function () {
        closeRegisterModal();
      });

      $('.customFileButton').on('click', function() {
        $('#fileInput').click(); // Simula un clic en el input de archivo
      });

      // Cambia la imagen cuando el usuario selecciona un archivo
      $('#fileInput').on('change', function(e) {
        let file = e.target.files[0]; // Obtiene el archivo seleccionado
        if (file) {
          let reader = new FileReader();
          reader.onload = function(event) {
            // Establece la imagen seleccionada como la fuente de la etiqueta <img>
            $('#previewImage').attr('src', event.target.result);
          };
          reader.readAsDataURL(file); // Convierte el archivo seleccionado en una URL
        }
      });

      $('#logOutBtn').on('click', function(){
        Swal.fire({
          icon: 'question',
          title: '¿Desea cerrar su sesión?',
          confirmButtonText: 'Confirmar',
          showCancelButton: true,
          cancelButtonText: 'Cancelar',
          customClass: {
            confirmButton: 'button-success',
            cancelButton: 'button-danger'
          },
          reverseButtons: true
        }).then((result) => {
          if (result.isConfirmed) {
            logOut();
          }
        });
      });

      //submit del login
      $('#loginForm').on('submit', function (e) {
        e.preventDefault();

        $('#submitLogin').prop('disabled', true);

        let formData = new FormData(this);
        
        $.ajax({
          url: 'http://127.0.0.1:8000/api/user/login',
          type: 'POST',
          dataType: 'json',
          contentType: false,
          processData: false,
          data: formData,
          success: function(response, status, xhr){
            if(xhr.status == 200){
              Swal.fire({
                title: response.title,
                icon: 'success',
                timer: 3000,
                timerProgressBar: true,
                allowOutsideClick: false,
                showConfirmButton: false,
                allowEscapeKey: false
              }).finally(() => {
                // Guardar el token en el localStorage
                localStorage.setItem('authToken', response.token);
                window.location.href = './';
              });
            }
          },
          error: function(xhr, status, error){
            console.log(error);
            console.log(xhr);
            console.log(xhr.status);
            let titleSwal;
            if(xhr.status == 404){
              titleSwal = xhr.responseJSON.title;
            } else{
              titleSwal = 'Ocurrió un error inesperado';
            }

            Swal.fire({
              title: titleSwal,
              icon: 'error',
              timer: 3000,
              timerProgressBar: true,
              allowOutsideClick: false,
              showConfirmButton: false,
              allowEscapeKey: false
            }).finally(() => {
              $('#submitLogin').prop('disabled', false);
            });
          }
        });
      });

      //Submit del registro
      $('#registerForm').on('submit', function(e){
        e.preventDefault();

        $('#submitRegister').prop('disabled', true);

        let formData = new FormData(this);

        // Obtener los valores de document_type y document_number
        let documentType = $('#documentType').val();
        let documentNumber = $('#documentNumber').val();

        // Concatenar y agregar el campo 'document' a formData
        let documentValue = documentType + documentNumber;
        formData.append('document', documentValue);

        // Obtener los valores de cellphone_code y cellphone_number
        let cellphoneCode = $('#cellphoneCode').val();
        let cellphoneNumber = $('#cellphoneNumber').val();

        // Concatenar y agregar el campo 'document' a formData
        let cellphoneValue = cellphoneCode + '-' + cellphoneNumber;
        formData.append('cellphone', cellphoneValue);

        $.ajax({
          url: 'http://127.0.0.1:8000/api/user',
          type: 'POST',
          dataType: 'json',
          contentType: false,
          processData: false,
          data: formData,
          success: function(response, status, xhr){
            if(xhr.status == 201){
              Swal.fire({
                title: 'Usuario creado exitósamente',
                icon: 'success',
                timer: 3000,
                timerProgressBar: true,
                allowOutsideClick: false,
                showConfirmButton: false,
                allowEscapeKey: false
              }).finally(() => {
                console.log(response);
                console.log(xhr);
                let data = {
                  email: $('#emailRegister').val(),
                  password: $('#passwordRegister').val()
                };
                $.ajax({
                  url: 'http://127.0.0.1:8000/api/user/login',
                  type: 'POST',
                  dataType: 'json',
                  contentType: 'application/json',
                  processData: false,
                  data: JSON.stringify(data),
                  success: function(r, s, x){
                    if(x.status == 200){
                      localStorage.setItem('authToken', r.token);
                      window.location.href = './';
                    }
                  },
                  error: function(x, s, e){
                    console.log(e);
                    console.log(x.status);
                    console.log(x);
                    $('#submitRegister').prop('disabled', false);
                    closeRegisterModal();
                  }
                });
              });
            }
          },
          error: function(xhr, status, error){
            console.log(error);
            console.log(xhr);
            console.log(xhr.status);

            let titleSwal;
            let textSwal = '';

            if(xhr.status == 422){
              titleSwal = 'Por favor verificar los datos ingresados';
              Object.values(xhr.responseJSON.errors).forEach(errorMessages => {
                errorMessages.forEach(error => {
                  textSwal += error + '<br>'; // Agrega cada error al texto
                });
              });
            } else{
              titleSwal = 'Ocurrió un error inesperado';
            }

            Swal.fire({
              title: titleSwal,
              html: textSwal,
              icon: 'error',
              customClass: {
                confirmButton: 'font-bold text-center uppercase transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs active:shadow-soft-xs tracking-tight-soft border-brown text-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white',
              }
            }).finally(() => {
              $('#submitRegister').prop('disabled', false);
            });
          }
        });
      });

      $(document).on("click", ".toggle-password", function () {
        const passwordInput = $(this).siblings(".password-input");
        const eyeClosed = $(this).find(".eye-closed");
        const eyeOpen = $(this).find(".eye-open");

        if (passwordInput.attr("type") === "password") {
          passwordInput.attr("type", "text");
          eyeClosed.addClass("hidden");
          eyeOpen.removeClass("hidden");
        } else {
          passwordInput.attr("type", "password");
          eyeClosed.removeClass("hidden");
          eyeOpen.addClass("hidden");
        }
      });

    });
  </script>
</html>