<!DOCTYPE html>
<html>
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
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
    <header class="relative flex flex-wrap items-center justify-between px-8 py-2 m-0 transition-all shadow-none duration-250 ease-soft-in lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="true"  >
      <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
        <nav class=" flex items-center">
          <!-- breadcrumb -->
          <ol class="flex flex-wrap items-center pt-1 mr-12 bg-transparent rounded-lg sm:mr-16 cursor-pointer" onclick="window.location.href='./'">
            <li class="text-sm leading-normal">
              <img src="./assets/img/ERM logo.png" class="inline-flex items-center justify-center mr-4 text-sm text-white h-16 w-16 max-w-none rounded-xl" alt="logo">
            </li>
            <h1 class="mb-0 font-bamboo text-stroke-brown capitalize text-7xl h-16">Euro Rattan Margarita</h1>
            <!--<img src="./assets/img/ERM.png" alt="Euro Rattan Margarita, C.A." class="object-contain max-w-full max-h-16 w-auto">-->
          </ol>
        </nav>

        <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
          <!--<button onclick="logOut();">logout</button>-->
          <li id="registerBtn" class="flex items-center pl-2">
            <a class="block px-0 py-2 text-sm font-semibold transition-all ease-nav-brand text-slate-500 cursor-pointer">
              <!--<i class="fa fa-user sm:mr-1"></i>-->
              <span class="sm:inline hover:text-brown hover:underline transition-all duration-200 ease-linear">Registrarse</span>
            </a>
          </li>
          <li id="loginBtn" class="flex items-center pl-4">
            <a class="block px-0 py-2 text-sm font-semibold transition-all ease-nav-brand text-slate-500 cursor-pointer">
              <!--<i class="fa fa-user sm:mr-1"></i>-->
              <span class="sm:inline hover:text-brown hover:underline transition-all duration-200 ease-linear">Iniciar Sesión</span>
            </a>
          </li>
          <li id="userBtn" class="flex items-center pl-4 hidden">
            <a class="flex flex-row items-center px-0 py-2 text-sm font-semibold transition-all ease-nav-brand text-slate-500 cursor-pointer">
              <img src="./assets/img/imagen-de-perfil.png" alt="Usuario" class="w-4 h-4 sm:mr-1">
              <span class="sm:inline hover:text-brown hover:underline transition-all duration-200 ease-linear"></span>
            </a>
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

          <li class="relative flex items-center pr-2">
            <p class="hidden transform-dropdown-show"></p>
            <a href="javascript:;" class="block p-0 text-sm transition-all ease-nav-brand text-slate-500" dropdown-trigger aria-expanded="false">
              <i class="cursor-pointer fa fa-bell"></i>
            </a>

            <ul dropdown-menu class="text-sm transform-dropdown before:font-awesome before:leading-default before:duration-350 before:ease-soft lg:shadow-soft-3xl duration-250 min-w-44 before:sm:right-7.5 before:text-5.5 pointer-events-none absolute right-0 top-0 z-50 origin-top list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:right-2 before:left-auto before:top-0 before:z-50 before:inline-block before:font-normal before:text-white before:antialiased before:transition-all before:content-['\f0d8'] sm:-mr-6 lg:absolute lg:right-0 lg:left-auto lg:mt-2 lg:block lg:cursor-pointer">
              <!-- add show class on dropdown open js -->
              <li class="relative mb-2">
                <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent px-4 duration-300 hover:bg-gray-200 hover:text-slate-700 lg:transition-colors" href="javascript:;">
                  <div class="flex py-1">
                    <div class="flex flex-col justify-center">
                      <h6 class="mb-1 text-sm font-normal leading-normal"><span class="font-semibold">Usuario</span></h6>
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
                      <h6 class="mb-1 text-sm font-normal leading-normal"><span class="font-semibold">Inventario</span></h6>
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
                      <h6 class="mb-1 text-sm font-normal leading-normal"><span class="font-semibold">Gestión de usuarios</span></h6>
                      <p class="mb-0 text-xs leading-tight text-slate-400">
                      </p>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </header>

    <div class=" flex items-center justify-between">
      <span class="border-b w-1/5 md:w-1/4"></span>
      <a href="./" class="text-s text-gray-600 uppercase p-6">volver</a>
      <span class="border-b w-1/5 md:w-1/4"></span>
    </div>

    <section>
      <!-- component -->
      <div class="w-1 justify-center flex p-2 pt-6">
        <div class="flex flex-col bg-white rounded-lg shadow-lg max-w-sm lg:w-2/3 lg:flex-row">
          <!-- Imagen -->
          <div class="relative lg:w-1/2 w-full text-gray-600">
            <img src="./assets/img/home-decor-1.jpg" class="w-full h-auto" alt="Decor Image">
            <!-- Botones debajo de la imagen -->
            <div class="flex justify-center mt-4">
              <button 
                type="button" 
                class="inline-block px-1 py-1 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs active:shadow-soft-xs tracking-tight-soft border-brown text-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white">
                <img src="./assets/img/home-decor-1.jpg" alt="Icon 1" class="inline-block h-10 w-12">
              </button>
              <button 
                type="button" 
                class="inline-block px-1 py-1 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs active:shadow-soft-xs tracking-tight-soft border-brown text-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white">
                <img src="./assets/img/home-decor-2.jpg" alt="Icon 2" class="inline-block h-10 w-12">
              </button>
              <button 
                type="button" 
                class="inline-block px-1 py-1 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs active:shadow-soft-xs tracking-tight-soft border-brown text-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white">
                <img src="./assets/img/home-decor-3.jpg" alt="Icon 3" class="inline-block h-10 w-12">
              </button>
            </div>
          </div>

          <!-- Contenido lateral -->
          <div class="w-full p-6 lg:w-1/2">
            <h1 class="text-2xl font-semibold text-gray-700 text-lg">Nombre</h1>
            <p class="text-xl text-gray-600 text-lg">Descripción</p>
            <span class="text-gray-700 mt-3 font-semibold">REF. 125$</span>
            <hr class="my-3">
            <!-- Cantidad -->
            <div class="mt-2">
              <label class="text-gray-700 text-sm" for="count">Cantidad:</label>
              <div class="flex items-center mt-1">
                <button class="text-gray-500 focus:outline-none focus:text-gray-600">
                  <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </button>
                <span class="text-gray-700 text-lg mx-2">20</span>
                <button class="text-gray-500 focus:outline-none focus:text-gray-600">
                  <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </button>
              </div>
            </div>
            <!-- Colores -->
            <div class="mt-3">
              <label class="text-gray-700 text-sm" for="count">Color:</label>
              <div class="flex items-center mt-1 ">
                <button class="h-5 w-5 rounded-full bg-blue-600 border-2 border-blue-200 mr-2 focus:outline-none "></button>
                <button class="h-5 w-5 rounded-full bg-gray-600 mr-2 focus:outline-none "></button>
                <button class="h-5 w-5 rounded-full bg-pink-600 mr-2 focus:outline-none "></button>
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
          <div class="w-full py-4 px-8 pb-0 mb-0 flex rounded-t-2xl">
            <h4 class="mb-1 flex-grow">Recomendados</h4>
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

    <footer class="bg-gray-800 text-white py-8 pt-6"> 
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
              <a href="https://wa.me/123456789" class="text-gray-400 hover:text-gray-200"> 
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
</html>