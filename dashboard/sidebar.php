<aside style="background-color: #CCD5AE;" class="max-w-62.5 ease-nav-brand z-990 fixed inset-y-0  block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-hidden  border-0 bg-white p-0 antialiased shadow-none transition-transform duration-200 xl:left-0 xl:translate-x-0 xl:bg-transparent">
    <div class="h-19.5">
        <i class="absolute top-0 right-0 hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden" sidenav-close></i>
        <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700" href="javascript:;" target="_blank">
            <img id="userImage" src="../assets/img/ERM logo.png" class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-8 object-cover rounded-full" alt="main_logo" />
            <span id="username" class="mb-0 font-semibold text-stroke-brown capitalize text-6xl md:text-lg ">Joao Ferreira</span>
        </a>
    </div>

    <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />
    <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <nav class="mt-10 mt-0.5 w-full">
            <div x-data="{ open: false }">
                <button class="text-black">
                    <span class="flex items-center text-xl py-3 px-0">
                        <span class="mx-4 font-medium hover:text-white ">Dashboard</span>
                    </span>
                </button>
            </div>

            <div x-data="{ open: false }">
                <button @click="open = !open" class="w-full text-xl flex justify-between items-center py-3 px-4 text-black cursor-pointer hover:bg-gray-100 hover:text-gray-700 focus:outline-none">
                    <span class="flex items-center">
                        <span class="font-medium hover:text-white ">Usuario</span>
                    </span>

                    <span>
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path x-show="! open" d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: none;"></path>
                            <path x-show="open" d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </button>

                <div x-show="open" class="bg-gray-100">
                    <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-blue-500 hover:text-white" href="#">Mi perfil</a>
                    <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-blue-500 hover:text-white" href="#">Lista de usuarios</a>
                    <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-blue-500 hover:text-white" href="#">Crear Usuarios</a>
                </div>
            </div>

            <div x-data="{ open: false }">
                <button @click="open = !open" class="w-full text-xl flex justify-between items-center py-3 px-4 text-black cursor-pointer hover:bg-gray-100 hover:text-gray-700 focus:outline-none">
                    <span class="flex items-center">
                    <span class="font-medium hover:text-white">Materiales</span>
                    </span>

                    <span>
                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path x-show="! open" d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: none;"></path>
                        <path x-show="open" d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    </span>
                </button>

                <div x-show="open" class="bg-gray-100">
                    <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-blue-500 hover:text-white" href="#">materiales</a>
                    <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-blue-500 hover:text-white" href="#">muebles</a>
                    <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-blue-500 hover:text-white" href="#">juegos</a>
                </div>
            </div>

            <div x-data="{ open: false }">
                <button @click="open = !open" class="w-full text-xl flex justify-between items-center py-3 px-4 text-black cursor-pointer hover:bg-gray-100 hover:text-gray-700 focus:outline-none">
                    <span class="flex items-center">
                        <span class="font-medium hover:text-white">Muebles</span>
                    </span>

                    <span>
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path x-show="! open" d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: none;"></path>
                            <path x-show="open" d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </button>

                <div x-show="open" class="bg-gray-100">
                    <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-blue-500 hover:text-white" href="#">materiales</a>
                    <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-blue-500 hover:text-white" href="#">muebles</a>
                    <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-blue-500 hover:text-white" href="#">juegos</a>
                </div>
            </div>

            <div x-data="{ open: false }">
                <button @click="open = !open" class="w-full text-xl flex justify-between items-center py-3 px-4 text-black cursor-pointer hover:bg-gray-100 hover:text-gray-700 focus:outline-none">
                    <span class="flex items-center">
                        <span class="font-medium hover:text-white">Juegos</span>
                    </span>

                    <span>
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path x-show="! open" d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: none;"></path>
                            <path x-show="open" d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </button>

                <div x-show="open" class="bg-gray-100">
                    <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-blue-500 hover:text-white" href="#">materiales</a>
                    <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-blue-500 hover:text-white" href="#">muebles</a>
                    <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-blue-500 hover:text-white" href="#">juegos</a>
                </div>
            </div>
        </nav>

        <div class="absolute bottom-0 my-8">
            <a class="flex items-center py-2 px-8 text-black text-xl hover:text-gray-600" href="#">
                <span>Cerrar Sesion</span>
            </a>
        </div>

        
        <!-- #region 
        <li class="mt-0.5 w-full hidden">
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="../pages/virtual-reality.html">
                <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                    <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <title>box-3d-50</title>
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                <g transform="translate(1716.000000, 291.000000)">
                                    <g transform="translate(603.000000, 0.000000)">
                                        <path class="fill-slate-800" d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z"></path>
                                        <path class="fill-slate-800 opacity-60" d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z"></path>
                                        <path class="fill-slate-800 opacity-60" d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z"></path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
                <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Virtual Reality</span>
            </a>
        </li>

        <li class="mt-0.5 w-full">
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="../pages/rtl.html">
                <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                    <svg width="12px" height="12px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <title>settings</title>
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                <g transform="translate(1716.000000, 291.000000)">
                                    <g transform="translate(304.000000, 151.000000)">
                                        <polygon class="fill-slate-800 opacity-60" points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"></polygon>
                                        <path class="fill-slate-800 opacity-60" d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z"></path>
                                        <path class="fill-slate-800" d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"></path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
                <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">RTL</span>
            </a>
        </li>

        <li class="w-full mt-4">
            <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase opacity-60">Account pages</h6>
        </li>

        <li class="mt-0.5 w-full">
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="../pages/profile.html">
                <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                    <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <title>customer-support</title>
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                <g transform="translate(1716.000000, 291.000000)">
                                    <g transform="translate(1.000000, 0.000000)">
                                        <path class="fill-slate-800 opacity-60" d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z"></path>
                                        <path class="fill-slate-800" d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z"></path>
                                        <path class="fill-slate-800" d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z"></path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
                <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Profile</span>
            </a>
        </li>-->

        <!--<div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
            <svg width="12px" height="12px" viewBox="0 0 40 44" version="1.1" >
                <title>document</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g transform="translate(1716.000000, 291.000000)">
                            <g transform="translate(154.000000, 300.000000)">
                                <path class="fill-slate-800 opacity-60" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"></path>
                                <path class="fill-slate-800" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"></path>
                            </g>
                        </g>
                    </g>
                </g>
            </svg>
        </div>-->
    </div>
</aside>

<!-- CDN de JQuery -->
<script src="../assets/js/JQuery.js"></script>

<!-- CDN SweetAlert -->
<script src="../assets/js/sweetAlert2.js"></script>

<script>
    const token = localStorage.getItem('authToken');
    if(!token){
        window.location.href = '../';
    } else{
        $.ajax({
            url:'http://127.0.0.1:8000/api/user/auth',
            type: 'GET',
            dataType: 'json',
            headers: {
                'Authorization': 'Bearer ' + token
            },
            success: function(response){
                console.log(response);
                $('#username').text(response.name);
                $('#userImage').attr('src', response.image);
            }
        });
    }
</script>