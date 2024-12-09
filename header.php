<header class="relative flex flex-wrap items-center justify-between px-8 py-2 m-0 transition-all shadow-none duration-250 ease-soft-in lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="true"  >
    <div class="flex flex-row items-center justify-between w-full md:px-4 py-1 mx-auto">
        <nav class="flex items-center">
            <!-- breadcrumb -->
            <ol class="flex items-center mr-6 md:mr-16 bg-transparent rounded-lg cursor-pointer" onclick="window.location.href='./'">
                <li class="text-sm leading-normal">
                    <img src="./assets/img/ERM logo.png" class="inline-flex items-center justify-center mr-4 text-sm text-white h-16 w-16 max-w-none rounded-xl" alt="logo">
                </li>
                <h1 class="mb-0 font-bamboo text-brown md:text-stroke-brown capitalize text-xl inline-block md:text-6xl">Euro Rattan Margarita</h1>
            </ol>
        </nav>

        <ul class="flex flex-row justify-end pl-0 mb-0 list-none md:flex-grow">
        <li id="" class="flex items-center pl-4 ">
                <a href="carrito.php" class="block px-0 py-2 text-sm font-semibold transition-all ease-nav-brand text-slate-500 cursor-pointer">
                    <img src="./assets/img/carrito-de-compras.png" alt="" class="w-8 p-2">
                </a>
            </li>
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
                        <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent px-4 duration-300 hover:bg-gray-200 hover:text-slate-700 lg:transition-colors" href="./dashboard/">
                            <div class="flex py-1">
                                <div class="flex flex-col justify-center">
                                    <span class="mb-1 text-sm font-normal leading-normal font-semibold">Dashboard</span>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="relative mb-2">
                        <a href="./dashboard/perfil.php" class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent px-4 duration-300 hover:bg-gray-200 hover:text-slate-700 lg:transition-colors" href="javascript:;">
                            <div class="flex py-1">
                                <div class="flex flex-col justify-center">
                                    <span class="mb-1 text-sm font-normal leading-normal font-semibold">Mi Perfil</span>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="relative mb-2">
                        <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent px-4 duration-300 hover:bg-gray-200 hover:text-slate-700 lg:transition-colors" href="javascript:;">
                            <div class="flex py-1">
                                <div class="flex flex-col justify-center">
                                    <span class="mb-1 text-sm font-normal leading-normal font-semibold">Mis Compras</span>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="relative mb-2">
                        <a id="logOutBtn" class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent px-4 duration-300 hover:bg-gray-200 hover:text-slate-700 lg:transition-colors" href="javascript:;">
                            <div class="flex py-1">
                                <div class="flex flex-col justify-center">
                                    <span class="mb-1 text-sm font-normal leading-normal font-semibold">Cerrar Sesión</span>
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

<!-- Modal Login-->
<div id="loginModal" class="hidden fixed inset-0 top-0 left-0 w-full h-full bg-gray-800 bg-opacity-50 backdrop-blur flex items-center justify-center z-110 shadow-xl">
    <div class="bg-white p-6 rounded-lg shadow-lg relative w-3/4 md:w-1/3">
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
    <div class="bg-white p-6 rounded-lg shadow-lg relative w-3/4 md:w-1/3 max-h-10/12 overflow-y-auto">
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
            <!-- telefono -->
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
            <textarea id="addressRegister" name="address" placeholder="Dirección" class="p-2 border rounded w-full mb-4 resize-none" maxlength="500" required></textarea>
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
                <img id="previewImage" for="fileInput" src="./assets/img/agregar.png" alt="Imagen de perfil" class="customFileButton w-16 h-16 object-cover rounded-full mb-2 cursor-pointer" />
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
                localStorage.removeItem('authToken');
                sessionStorage.clear();
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
            $('#loginBtn, #registerBtn').removeClass('hidden');
            $('#userBtn').remove();
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

        //Deshabilitar el incremento/decremento del campo documento
        $('#documentNumber').on('wheel', function(e) {
            e.preventDefault();
        });

        // Filtrar la entrada solo a números
        $('.numeric-only').on('input', function() {
            // Eliminar caracteres no numéricos
            this.value = this.value.replace(/[^0-9]/g, '');
        });

        $('#documentNumber').on('input', function() {
            // Eliminar caracteres no numéricos
            this.value = this.value.substring(0, 9);
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