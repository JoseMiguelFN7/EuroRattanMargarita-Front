<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../assets/img/ERM logo.ico" />
    <title>Euro Rattan Margarita</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Main Styling -->
    <link href="../assets/css/soft-ui-dashboard-tailwind.css?v=1.0.5" rel="stylesheet" />
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>
<body class="m-0 font-sans text-base antialiased font-normal leading-default bg-gray-50 text-slate-500 max-w-screen">
  <!-- sidenav  -->
  <?php include './sidebar.php'; ?>
  <!-- end sidenav -->

  <main class="ease-soft-in-out xl:ml-sidebar relative h-full max-h-screen rounded-xl transition-all duration-200">
    <?php include './header.php'; ?>

    <section>
      <div class="w-1 justify-left flex p-2 pt-4 md:justify-center">
        <form id="formUpdate" enctype="multipart/form-data" class="flex flex-col bg-white rounded-lg shadow-lg max-w-sm lg:w-2/3">
          <h2 class="block p-4 text-center text-gray-600 pt-6">
            Mi perfil
          </h2>
          <div class="flex flex-row">
            <!-- Imagen -->
            <div class="relative flex flex-col lg:w-1/2 w-full text-gray-600">
              <!-- Botones debajo de la imagen -->
              <div class="flex flex-col justify-center items-center mb-4 pt-6">
                <img id="previewImage" for="fileInput" src="../assets/img/agregar.png" alt="Imagen de perfil" class="customFileButton w-32 h-32 object-cover rounded-full mb-2 cursor-pointer" />
                <input type="file" id="fileInput" name="image" class="hidden" accept="image/*" />
                <label for="fileInput" class="p-2 bg-gray-500 text-gray-500 rounded hover:bg-gray-600 text-lg font-medium cursor-pointer">Cambiar Imagen</label>
              </div>

              <div class="flex flex-col justify-start w-full pl-12">
                <!-- Contraseña -->
                <label for="password" class="text-2xl font-semibold text-gray-700 text-lg justify-center items-center">Contraseña</label>
                <div class="mb-8 flex relative mb-4 items-center">
                  <input id="password" type="password" name="password" placeholder="Contraseña" minlength="9" class="password-input mb-2 mr-4 flex h-full w-full items-center justify-center rounded-lg border border-zinc-200 bg-white/0 px-4 py-4 text-zinc-950 outline-none dark:!border-white/10 dark:text-white md:mb-0">
                  <button type="button" class="toggle-password absolute inset-y-0 right-0 mr-8 flex items-center text-gray-500 hover:text-gray-700 cursor-pointer">
                    <img src="../assets/img/esconder.png" alt="ojo tachado" class="eye-closed w-6 h-6">
                    <img src="../assets/img/ojo.png" alt="ojo abierto" class="eye-open w-6 h-6 hidden">
                  </button>
                </div>
                <!-- Confirmación de Contraseña -->
                <label for="passwordConfirm" class="text-2xl font-semibold text-gray-700 text-lg">Confirmar Contraseña</label>
                <div class="mb-8 flex relative mb-4 items-center">
                  <input id="passwordConfirm" type="password" name="password_confirmation" placeholder="Confirmar Contraseña" minlength="9" class="password-input mb-2 mr-4 flex h-full w-full items-center justify-center rounded-lg border border-zinc-200 bg-white/0 px-4 py-4 text-zinc-950 outline-none dark:!border-white/10 dark:text-white md:mb-0">
                  <button type="button" class="toggle-password absolute inset-y-0 right-0 mr-8 flex items-center text-gray-500 hover:text-gray-700 cursor-pointer">
                    <img src="../assets/img/esconder.png" alt="ojo tachado" class="eye-closed w-6 h-6">
                    <img src="../assets/img/ojo.png" alt="ojo abierto" class="eye-open w-6 h-6 hidden">
                  </button>
                </div>
              </div>

              <center><button id="updateBtn" type="submit" class="w-1/2 inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none leading-pro ease-soft-in text-xs active:shadow-soft-xs tracking-tight-soft border-brown text-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white" disabled>Actualizar Datos</button></center>
            </div>

            <!-- Contenido lateral -->
            <div class="w-full p-6 md:w-1/2">
              <label for="name" class="text-2xl font-semibold text-gray-700 text-lg">Nombre</label>
              <div class="mb-8 flex flex-col md:flex-row mb-4">
                <input id="name" type="text" name="name" placeholder="Ingresa tu nombre" class="mb-2 mr-4 flex h-full w-full items-center justify-center rounded-lg border border-zinc-200 bg-white/0 px-4 py-4 text-zinc-950 outline-none dark:!border-white/10 dark:text-white md:mb-0">
              </div>

              <label for="email" class="text-2xl font-semibold text-gray-700 text-lg">Correo electrónico</label>
              <div class="mb-8 flex flex-col md:flex-row mb-4">
                <input id="email" type="email" name="email" placeholder="Ingresa tu correo electrónico" class="mb-2 mr-4 flex h-full w-full items-center justify-center rounded-lg border border-zinc-200 bg-white/0 px-4 py-4 text-zinc-950 outline-none dark:!border-white/10 dark:text-white md:mb-0">
              </div>

              <label for="documentType" class="text-2xl font-semibold text-gray-700 text-lg">Documento</label>
              <div class="flex items-center gap-2 mb-4">
                <select id="documentType" name="document_type" class="mb-2 md:mb-0 px-4 py-4 h-full border rounded-tl-lg rounded-bl-lg" required>
                  <option value="V">V</option>
                  <option value="E">E</option>
                  <option value="J">J</option>
                  <option value="G">G</option>
                  <option value="P">P</option>
                </select>
                <input id="documentNumber" type="number" inputmode="numeric" name="document_number" placeholder="Número de Documento (Ej. 12345678)" class="numeric-only mb-2 mr-4 flex h-full w-full items-center justify-center rounded-tr-lg rounded-br-lg border border-zinc-200 bg-white/0 px-4 py-4 text-zinc-950 outline-none dark:!border-white/10 dark:text-white md:mb-0" required min="0" step="1">
              </div>

              <label for="cellphoneCode" class="text-2xl font-semibold text-gray-700 text-lg">Teléfono</label>
              <div class="flex items-center gap-2 mb-4">
                <select id="cellphoneCode" name="cellphone_code" class="mb-2 md:mb-0 px-4 py-4 h-full border rounded-tl-lg rounded-bl-lg" required>
                  <option value="0414">0414</option>
                  <option value="0424">0424</option>
                  <option value="0416">0416</option>
                  <option value="0426">0426</option>
                  <option value="0412">0412</option>
                </select>
                <input id="cellphoneNumber" type="tel" inputmode="numeric" name="cellphone_number" placeholder="Número de Celular (Ej. 1234567)" maxlength="7" minlength="7" class="numeric-only mb-2 mr-4 flex h-full w-full items-center justify-center rounded-tr-lg rounded-br-lg border border-zinc-200 bg-white/0 px-4 py-4 text-zinc-950 outline-none dark:!border-white/10 dark:text-white md:mb-0" required min="0" step="1">
              </div>

              <label for="address" class="text-2xl font-semibold text-gray-700 text-lg">Ubicación</label>
              <div class="mb-8 flex flex-col md:flex-row mb-4">
                <textarea id="address" name="address" placeholder="Ingresa tu Ubicación" class="resize-none mb-2 mr-4 flex h-full w-full items-center justify-center rounded-lg border border-zinc-200 bg-white/0 px-4 py-4 text-zinc-950 outline-none dark:!border-white/10 dark:text-white md:mb-0"></textarea>
              </div>
              <!-- Más contenido -->
            </div>
          </div>
        </form>
      </div>
    </section>

    <?php include './footer.php'; ?>
  </main>
</body>
  <!-- plugin for charts  -->
  <script src="../assets/js/plugins/chartjs.min.js" async></script>
  <!-- plugin for scrollbar  -->
  <!--<script src="../assets/js/plugins/perfect-scrollbar.min.js" async></script>-->
  <!-- github button -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- main script file  -->
  <script src="../assets/js/soft-ui-dashboard-tailwind.js?v=1.0.5" async></script>

  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<script>
    $(document).ready(function(){
      let token = localStorage.getItem('authToken');

      $('.customFileButton').on('click', function() {
        $('#fileInput').click(); // Simula un clic en el input de archivo
      });

      $.ajax({
        url:'http://127.0.0.1:8000/api/user/auth',
        type: 'GET',
        dataType: 'json',
        headers: {
          'Authorization': 'Bearer ' + token
        },
        success: function(response){
          console.log(response);
          $('#name').val(response.name);
          $('#email').val(response.email);
          $('#documentType').val(response.document[0]);
          $('#documentNumber').val(response.document.substr(1, response.document.length-1));
          const cel = response.cellphone.split("-");
          $('#cellphoneCode').val(cel[0]);
          $('#cellphoneNumber').val(cel[1]);
          $('#address').val(response.address);
          if(response.image){
            $('#previewImage').attr('src', response.image);
          }
          $('#updateBtn').prop('disabled', false);
        }
      });

      $('#formUpdate').on('submit', function(e){
        e.preventDefault();
        $('#updateBtn').prop('disabled', true);

        let formData = new FormData(this);

        if($('#password').val()==='' && $('#passwordConfirm').val()===''){
          formData.delete('password');
          formData.delete('password_confirmation');
        }

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
          url: 'http://127.0.0.1:8000/api/user/auth',
          type: 'POST',
          dataType: 'json',
          headers: {
            'Authorization': 'Bearer ' + token
          },
          contentType: false,
          processData: false,
          data: formData,
          success: function(response){
            console.log(response);
            Swal.fire({
              title: 'Usuario actualizado exitosamente',
              icon: 'success',
              timer: 3000,
              timerProgressBar: true,
              showConfirmButton: false,
              allowOutsideClick: false,
              allowEscapeKey: false
            }).finally(() => {
              window.location.href = './perfil.php';
            });
          },
          error: function(xhr){
            console.log(xhr);
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
              $('#updateBtn').prop('disabled', false);
            });
          }
        });
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
  </script> 
</html>