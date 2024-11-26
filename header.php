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