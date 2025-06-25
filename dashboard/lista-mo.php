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
              <h2 class=" text-xxl font-medium text-center text-gray-600 md:text-stroke-brown">Lista de Manos de Obra</h2>
            </div>
          </section>
          <div class="flex flex-row">
            <?php include './searchBar.php' ?>
            <button class="w-1/4 inline-block px-8 py-2 mb-0 mr-7 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none leading-pro ease-soft-in text-xs active:shadow-soft-xs tracking-tight-soft border-brown text-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white" onclick="window.location.href='./crear-mo.php'">+ Nueva</button>
          </div>

          <div class="flex flex-wrap mx-3 p-4">
            <div class="flex-none w-full max-w-full px-3">
              <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto">
                  <!-- Define un alto máximo y overflow-y: auto -->
                  <div class="border border-gray-300 rounded-lg p-4">
                    <table class="table-auto border-collapse w-full ">
                      <thead class="bg-gray-100 border-collapse">
                        <tr class="w-full border-b border-gray-300">
                        <th class="px-4 py-2 font-bold text-left text-sm text-gray-700 border-b border-gray-300">Nombre</th>
                          <th class="px-4 py-2 font-bold text-left text-sm text-gray-700 border-b border-gray-300">Pago Diario</th>
                          <th id="actionCol" class="px-4 py-2 font-bold text-center text-sm text-gray-700 border-b border-gray-300" hidden>Acción</th>
                        </tr>
                      </thead>
                      <tbody id="tableBody"></tbody>
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

        if(sessionStorage.getItem('rol_id')==2){
          window.location.href = './';
        }

        if(sessionStorage.getItem('rol_id')==3){
          $('#actionCol').remove();
        } else{
          $('#actionCol').attr('hidden', false);
        }

        $('body').on('click', '.delete-mo', function(){
          Swal.fire({
            icon: 'warning',
            title: '¿Desea borrar esta mano de obra?',
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
              const id = $(this).find('img').data('mo-id');
              $.ajax({
                url: `http://127.0.0.1:8000/api/labor/${id}`,
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
                      customClass: {
                        confirmButton: 'font-bold text-center uppercase transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs active:shadow-soft-xs tracking-tight-soft border-brown text-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white',
                      }
                    }).finally(() => {
                      window.location.href = './lista-mo.php';
                    });
                  } else{
                    console.log(xhr);
                    Swal.fire({
                      icon: 'error',
                      title: 'Ocurrió un error',
                      text: xhr.responseJSON.title,
                      timer: 3000,
                      timerProgressBar: true,
                      customClass: {
                        confirmButton: 'font-bold text-center uppercase transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs active:shadow-soft-xs tracking-tight-soft border-brown text-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white',
                      }
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
                    customClass: {
                      confirmButton: 'font-bold text-center uppercase transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs active:shadow-soft-xs tracking-tight-soft border-brown text-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white',
                    }
                  });
                }
              });
            }
          });
        });

        $.ajax({
          url: 'http://127.0.0.1:8000/api/labors',
          type: 'GET',
          dataType: 'json',
          headers: {
            'Authorization': 'Bearer ' + token
          },
          success: function(response){
            console.log(response);
            let moTableBodyHTML = '';

            response.forEach(mo => {
              if(sessionStorage.getItem('rol_id')==1){
                moTableBodyHTML += `
                  <tr class="w-full odd:bg-white even:bg-gray-50">
                    <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">${mo.name}</td>
                    <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">${mo.daily_pay}</td>
                    <td class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                      <div class="flex flex-wrap items-center justify-evenly">
                        <a href="./editar-mo.php?name=${mo.name}" class=""><img class="w-5" src="../assets/img/boton-editar.png" alt="edit-icon"></a>
                        <a href="javascript:;" class="delete-mo"><img data-mo-id="${mo.id}" class="w-5" src="../assets/img/papelera.png" alt="delete-icon"></a>
                      </div>
                    </td>
                  </tr>
                `;
              } else{
                moTableBodyHTML += `
                  <tr class="w-full odd:bg-white even:bg-gray-50">
                    <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">${mo.name}</td>
                    <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">${mo.daily_pay}</td>
                  </tr>
                `;
              }
            });

            $('#tableBody').html('').append(moTableBodyHTML);
          }
        });
      });
    </script>
</html>