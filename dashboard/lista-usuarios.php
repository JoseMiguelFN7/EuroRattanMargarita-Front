<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Euro Rattan Margarita</title>
    <link rel="icon" type="image/x-icon" href="../assets/img/ERM logo.ico" />
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
        <?php include './sidebar.php'; ?>

        <main class="ease-soft-in-out xl:ml-sidebar relative h-full max-h-screen rounded-xl transition-all duration-200">
            <?php include './header.php'; ?>

        <section class="">
          <div class="md:mb-0 pt-6"> 
            <h2 class=" text-xxl font-medium text-center text-gray-600 md:text-stroke-brown">Lista de Usuarios</h2>
          </div>
        </section>

        <?php include './searchBar.php' ?>

<div class="flex flex-wrap mx-3 p-4">
  <div class="flex-none w-full max-w-full px-3">
    <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
      <div class="flex-auto">
        <!-- Define un alto máximo y overflow-y: auto -->
        <div class="border border-gray-300 rounded-lg p-4">
          <table class="table-auto border-collapse w-full ">
            <thead class="bg-gray-100 border-collapse">
              <tr class="w-full border-b border-gray-300">
              <th class="px-4 py-2 font-bold text-left text-sm text-gray-700 border-b border-gray-300">Imagen</th>
                <th class="px-4 py-2 font-bold text-left text-sm text-gray-700 border-b border-gray-300">Nombre</th>
                <th class="px-4 py-2 font-bold text-left text-sm text-gray-700 border-b border-gray-300">Correo</th>
                <th class="px-4 py-2 font-bold text-left text-sm text-gray-700 border-b border-gray-300">Teléfono</th>
                <th class="px-4 py-2 font-bold text-left text-sm text-gray-700 border-b border-gray-300">Documento</th>
                <th class="px-4 py-2 font-bold text-left text-sm text-gray-700 border-b border-gray-300">Rol</th>
                <th class="px-4 py-2 font-bold text-center text-sm text-gray-700 border-b border-gray-300">Acción</th>
              </tr>
            </thead>
            <tbody id="tableBody">
              <!-- Ejemplo de filas -->
              <tr class="w-full odd:bg-white even:bg-gray-50">
                <td class="user-img px-4 py-2 border-b border-gray-300">
                  <img src="../assets/img/no-image.png" class="w-9 h-9 object-contain cursor-pointer" alt="img-producto">
                </td>
                <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">Nombre</td>
                <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">correo@mail.com</td>
                <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">0414-1234567</td>
                <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">12345678
                </td>
                <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">Rol</td>
                <td class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                  <div class="flex flex-wrap items-center justify-evenly">
                    <a href="javascript:;" class=""><img class="w-5" src="../assets/img/boton-editar.png" alt="edit-icon"></a>
                    <a href="javascript:;" class="delete-user"><img data-user-id="${material.id}" class="w-5" src="../assets/img/papelera.png" alt="delete-icon"></a>
                  </div>
                </td>
              </tr>
              <!-- Repite filas -->
              <tr class="w-full odd:bg-white even:bg-gray-50">
                <td class="user-img px-4 py-2 border-b border-gray-300">
                  <img src="../assets/img/no-image.png" class="w-9 h-9 object-contain cursor-pointer" alt="img-producto">
                </td>
                <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">Nombre</td>
                <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">correo@mail.com</td>
                <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">0414-1234567</td>
                <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">12345678
                </td>
                <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">Rol</td>
                <td class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                  <div class="flex flex-wrap items-center justify-evenly">
                    <a href="javascript:;" class=""><img class="w-5" src="../assets/img/boton-editar.png" alt="edit-icon"></a>
                    <a href="javascript:;" class="delete-user"><img data-user-id="${material.id}" class="w-5" src="../assets/img/papelera.png" alt="delete-icon"></a>
                  </div>
                </td>
              </tr>
              <tr class="w-full odd:bg-white even:bg-gray-50">
                <td class="user-img px-4 py-2 border-b border-gray-300">
                  <img src="../assets/img/no-image.png" class="w-9 h-9 object-contain cursor-pointer" alt="img-producto">
                </td>
                <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">Nombre</td>
                <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">correo@mail.com</td>
                <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">0414-1234567</td>
                <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">12345678
                </td>
                <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">Rol</td>
                <td class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                  <div class="flex flex-wrap items-center justify-evenly">
                    <a href="javascript:;" class=""><img class="w-5" src="../assets/img/boton-editar.png" alt="edit-icon"></a>
                    <a href="javascript:;" class="delete-user"><img data-user-id="${material.id}" class="w-5" src="../assets/img/papelera.png" alt="delete-icon"></a>
                  </div>
                </td>
              </tr>
              <tr class="w-full odd:bg-white even:bg-gray-50">
                <td class="user-img px-4 py-2 border-b border-gray-300">
                  <img src="../assets/img/no-image.png" class="w-9 h-9 object-contain cursor-pointer" alt="img-producto">
                </td>
                <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">Nombre</td>
                <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">correo@mail.com</td>
                <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">0414-1234567</td>
                <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">12345678
                </td>
                <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">Rol</td>
                <td class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                  <div class="flex flex-wrap items-center justify-evenly">
                    <a href="javascript:;" class=""><img class="w-5" src="../assets/img/boton-editar.png" alt="edit-icon"></a>
                    <a href="javascript:;" class="delete-user"><img data-user-id="${material.id}" class="w-5" src="../assets/img/papelera.png" alt="delete-icon"></a>
                  </div>
                </td>
              </tr>
              <tr class="w-full odd:bg-white even:bg-gray-50">
                <td class="user-img px-4 py-2 border-b border-gray-300">
                  <img src="../assets/img/no-image.png" class="w-9 h-9 object-contain cursor-pointer" alt="img-producto">
                </td>
                <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">Nombre</td>
                <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">correo@mail.com</td>
                <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">0414-1234567</td>
                <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">12345678
                </td>
                <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">Rol</td>
                <td class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                  <div class="flex flex-wrap items-center justify-evenly">
                    <a href="javascript:;" class=""><img class="w-5" src="../assets/img/boton-editar.png" alt="edit-icon"></a>
                    <a href="javascript:;" class="delete-user"><img data-user-id="${material.id}" class="w-5" src="../assets/img/papelera.png" alt="delete-icon"></a>
                  </div>
                </td>
              </tr>
              <tr class="w-full odd:bg-white even:bg-gray-50">
                <td class="user-img px-4 py-2 border-b border-gray-300">
                  <img src="../assets/img/no-image.png" class="w-9 h-9 object-contain cursor-pointer" alt="img-producto">
                </td>
                <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">Nombre</td>
                <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">correo@mail.com</td>
                <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">0414-1234567</td>
                <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">12345678
                </td>
                <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">Rol</td>
                <td class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                  <div class="flex flex-wrap items-center justify-evenly">
                    <a href="javascript:;" class=""><img class="w-5" src="../assets/img/boton-editar.png" alt="edit-icon"></a>
                    <a href="javascript:;" class="delete-user"><img data-user-id="${material.id}" class="w-5" src="../assets/img/papelera.png" alt="delete-icon"></a>
                  </div>
                </td>
              </tr>
              <tr class="w-full odd:bg-white even:bg-gray-50">
                <td class="user-img px-4 py-2 border-b border-gray-300">
                  <img src="../assets/img/no-image.png" class="w-9 h-9 object-contain cursor-pointer" alt="img-producto">
                </td>
                <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">Nombre</td>
                <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">correo@mail.com</td>
                <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">0414-1234567</td>
                <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">12345678
                </td>
                <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">Rol</td>
                <td class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                  <div class="flex flex-wrap items-center justify-evenly">
                    <a href="javascript:;" class=""><img class="w-5" src="../assets/img/boton-editar.png" alt="edit-icon"></a>
                    <a href="javascript:;" class="delete-user"><img data-user-id="${material.id}" class="w-5" src="../assets/img/papelera.png" alt="delete-icon"></a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

            

            <?php include './footer.php'; ?>
        </main>
    </body>

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
        $('body').on('click', '.user-img', function(){
          Swal.fire({
            imageUrl: $(this).find('img').attr('src'),
            imageAlt: "user image",
            padding: '2rem',
            showConfirmButton: false
          });
        });

        $('body').on('click', '.delete-user', function(){
          Swal.fire({
            icon: 'warning',
            title: '¿Desea borrar este usuario?',
            text: 'Esta acción no se puede revertir',
            confirmButtonText: 'Eliminar',
            showCancelButton: true,
            cancelButtonText: 'Cancelar',
            customClass: {
              confirmButton: 'button-danger',
              cancelButton: 'button-success'
            },
            reverseButtons: true
          }).then((result) => {
            if (result.isConfirmed) {
              const id = $(this).find('img').data('user-id');
              $.ajax({
                url: `http://127.0.0.1:8000/api/user/${id}`,
                type: 'DELETE',
                dataType: 'json',
                headers: {
                  'Authorization': 'Bearer ' + token
                },
                success: function(result, status, xhr){
                  if(xhr.status==200){
                    Swal.fire({
                      icon: 'success',
                      title: result.message,
                      timer: 3000,
                      timerProgressBar: true,
                      showConfirmButton: false
                    }).finally(() => {
                      window.location.href = './lista-usuarios.php';
                    });
                  } else{
                    console.log(xhr);
                    Swal.fire({
                      icon: 'error',
                      title: 'Ocurrió un error',
                      text: xhr.responseJSON.title,
                      timer: 3000,
                      timerProgressBar: true,
                      showConfirmButton: false
                    });
                  }
                },
                error: function(xhr){
                  console.log(xhr);
                  Swal.fire({
                    icon: 'error',
                    title: 'Ocurrió un error',
                    timer: 3000,
                    timerProgressBar: true,
                    showConfirmButton: false
                  });
                }
              });
            }
          });
        });

        $.ajax({
          url: 'http://127.0.0.1:8000/api/users',
          type: 'GET',
          dataType: 'json',
          headers: {
            'Authorization': 'Bearer ' + token
          },
          success: function(response){
            console.log(response);
            let userTableBodyHTML = '';

            response.forEach(user => {
              let image = user.image;
              if(!image){
                image = '../assets/img/no-image.png';
              }

              userTableBodyHTML += `
                <tr class="w-full odd:bg-white even:bg-gray-50">
                  <td class="user-img px-4 py-2 border-b border-gray-300">
                    <img src="${image}" class="w-9 h-9 object-cover rounded-full cursor-pointer" alt="img-producto">
                  </td>
                  <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">${user.name}</td>
                  <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">${user.email}</td>
                  <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">${user.cellphone}</td>
                  <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">${user.document}</td>
                  <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">${user.role.name}</td>
                  <td class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                    <div class="flex flex-wrap items-center justify-evenly">
                      <a href="./editar-perfil.php?email=${user.email}" class=""><img class="w-5" src="../assets/img/boton-editar.png" alt="edit-icon"></a>
                      <a href="javascript:;" class="delete-user"><img data-user-id="${user.id}" class="w-5" src="../assets/img/papelera.png" alt="delete-icon"></a>
                    </div>
                  </td>
                </tr>
              `;
            });

            $('#tableBody').html('').append(userTableBodyHTML);
          }
        });
      });
    </script>
</html>