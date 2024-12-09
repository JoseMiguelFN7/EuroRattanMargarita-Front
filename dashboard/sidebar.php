<aside style="background-color: #CCD5AE;" class="max-w-62.5 ease-nav-brand z-990 fixed inset-y-0  block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-hidden  border-0 bg-white p-0 antialiased shadow-none transition-transform duration-200 xl:left-0 xl:translate-x-0 xl:bg-transparent">
    <div>
        <i class="absolute top-0 right-0 hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden" sidenav-close></i>
        <a class="flex flex-row items-center flex-start px-8 py-2 m-0 text-sm whitespace-nowrap text-slate-700">
            <img id="userImage" src="../assets/img/ERM logo.png" class="inline transition-all duration-200 ease-nav-brand w-16 h-16 object-cover rounded-full" alt="main_logo" />
            <span id="username" class="mb-0 ml-2 font-semibold text-stroke-brown capitalize text-6xl md:text-lg ">Joao Ferreira</span>
        </a>
    </div>

    <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />
    <div x-data="{ activeMenu: null }" class="items-center block w-auto max-h-screen overflow-auto grow basis-full">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <nav class="mt-10 mt-0.5 w-full">
            <div x-data="{ open: false }">
                <button class="text-black">
                    <a class="flex items-center text-xl py-3 px-0" href="./">
                        <span class="mx-4 font-medium hover:text-white ">Dashboard</span>
                    </a>
                </button>
            </div>

            <div>
                <button @click="activeMenu = activeMenu === 'usuario' ? null : 'usuario'" 
                        class="w-full text-xl flex justify-between items-center py-3 px-4 text-black cursor-pointer hover:bg-gray-100 hover:text-gray-700 focus:outline-none">
                    <span class="flex items-center">
                        <span class="font-medium hover:text-white">Usuario</span>
                    </span>

                    <span>
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path x-show="activeMenu !== 'usuario'" d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path x-show="activeMenu === 'usuario'" d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </button>

                <div x-show="activeMenu === 'usuario'" class="bg-gray-100">
                    <a class="py-2 pl-8 block text-lg text-gray-600 hover:bg-blue-500 hover:text-white" href="./perfil.php">Mi perfil</a>
                    <a id="listaUsuarios" class="py-2 pl-8 block text-lg text-gray-600 hover:bg-blue-500 hover:text-white" href="./lista-usuarios.php" hidden>Lista de usuarios</a>
                    <a id="crearUsuarios" class="py-2 pl-8 block text-lg text-gray-600 hover:bg-blue-500 hover:text-white" href="./crear-usuario.php" hidden>Crear Usuario</a>
                </div>
            </div>

            <div id="seccionMats" hidden>
                <button @click="activeMenu = activeMenu === 'materiales' ? null : 'materiales'" 
                        class="w-full text-xl flex justify-between items-center py-3 px-4 text-black cursor-pointer hover:bg-gray-100 hover:text-gray-700 focus:outline-none">
                    <span class="flex items-center">
                        <span class="font-medium hover:text-white">Materiales</span>
                    </span>

                    <span>
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path x-show="activeMenu !== 'materiales'" d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path x-show="activeMenu === 'materiales'" d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </button>

                <div x-show="activeMenu === 'materiales'" class="bg-gray-100">
                    <a class="py-2 pl-8 block text-lg text-gray-600 hover:bg-blue-500 hover:text-white" href="./lista-materiales.php">Lista de materiales</a>
                    <a id="crearMats" class="py-2 pl-8 block text-lg text-gray-600 hover:bg-blue-500 hover:text-white" href="./crear-material.php">Crear Material</a>
                    <a id="crearParam" class="py-2 pl-8 block text-lg text-gray-600 hover:bg-blue-500 hover:text-white" href="./crear-parametro.php">Crear Parámetros</a>
                </div>
            </div>

            <!--<div>
                <button @click="activeMenu = activeMenu === 'muebles' ? null : 'muebles'" 
                        class="w-full text-xl flex justify-between items-center py-3 px-4 text-black cursor-pointer hover:bg-gray-100 hover:text-gray-700 focus:outline-none">
                    <span class="flex items-center">
                        <span class="font-medium hover:text-white">Muebles</span>
                    </span>

                    <span>
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path x-show="activeMenu !== 'muebles'" d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path x-show="activeMenu === 'muebles'" d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </button>

                <div x-show="activeMenu === 'muebles'" class="bg-gray-100">
                    <a class="py-2 pl-8 block text-lg text-gray-600 hover:bg-blue-500 hover:text-white" href="./lista-muebles.php">Lista de Muebles</a>
                    <a class="py-2 pl-8 block text-lg text-gray-600 hover:bg-blue-500 hover:text-white" href="#">Crear Mueble</a>
                </div>
            </div>

            <div>
                <button @click="activeMenu = activeMenu === 'juegos' ? null : 'juegos'" 
                        class="w-full text-xl flex justify-between items-center py-3 px-4 text-black cursor-pointer hover:bg-gray-100 hover:text-gray-700 focus:outline-none">
                    <span class="flex items-center">
                        <span class="font-medium hover:text-white">Juegos</span>
                    </span>

                    <span>
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path x-show="activeMenu !== 'juegos'" d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path x-show="activeMenu === 'juegos'" d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </button>

                <div x-show="activeMenu === 'juegos'" class="bg-gray-100">
                    <a class="py-2 pl-8 block text-lg text-gray-600 hover:bg-blue-500 hover:text-white" href="#">Lista de Juegos</a>
                    <a class="py-2 pl-8 block text-lg text-gray-600 hover:bg-blue-500 hover:text-white" href="./crear-juego.php">Crear Juego</a>
                </div>
            </div>-->
        </nav>

        <div class="absolute bottom-0 my-8">
            <a class="flex items-center py-2 px-8 text-black text-xl cursor-pointer hover:text-white">
                <span id="logOutBtn">Cerrar Sesion</span>
            </a>
        </div>
    </div>
</aside>

<!-- CDN de JQuery -->
<script src="../assets/js/JQuery.js"></script>

<!-- CDN SweetAlert -->
<script src="../assets/js/sweetAlert2.js"></script>

<script>
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
                localStorage.removeItem('authToken');
                sessionStorage.clear();
                window.location.href = '../';
            },
            error: function(xhr, status, error){
                console.log(xhr);
            }
            });
        }
    }

    $(document).ready(function(){
        let token = localStorage.getItem('authToken');
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
                    sessionStorage.setItem('rol_id', response.role_id);
                    $('#username').text(response.name);
                    if(response.image){
                        $('#userImage').attr('src', response.image);
                    }

                    if(response.role_id===2){
                        console.log('soy un cliente lmao');
                        $('#listaUsuarios, #crearUsuarios, #seccionMats').remove();
                    }

                    if(response.role_id===3){
                        console.log('soy un asesor lol');
                        $('#listaUsuarios, #crearUsuarios, #crearMats, #crearParam').remove();
                    }

                    $('#listaUsuarios, #crearUsuarios, #seccionMats').attr('hidden', false);

                }
            });
        }

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
    });
</script>