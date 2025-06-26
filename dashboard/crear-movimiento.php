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
    <div class="w-1 justify-center flex-col p-2 pt-4 md:justify-center">
        <form id="formMove" enctype="multipart/form-data" class="flex flex-col bg-white rounded-lg shadow-lg max-w-sm p-2">
            <h2 class="block p-4 text-center text-gray-600 pt-6">
                Ajustar Inventario
            </h2>
            <div class="flex flex-col p-4">
                <div class=" md:w-1 w-full text-gray-600">
                    <div class="w-full p-1 mb-4 justify-center flex-col">
                    <div class="justify-center items-center flex-col flex p-2">
                        <div class="justify-start flex flex-col p-2 w-1/2">
                            <label for="quantity" class="text-left inline-block text-2xl font-semibold text-gray-700 text-lg mb-2">Cantidad:</label>
                            <input id="quantity" type="number" step="1" name="quantity" placeholder="Cantidad a mover" class="mb-2 mr-4 flex h-full w-full items-center justify-center rounded-lg bg-gray-50 border border-gray-300 px-4 py-4 text-zinc-950 outline-none dark:!border-white/10 dark:text-white md:mb-0" required>
                        </div>
                        <div id="colorSelect" class="justify-start items-center flex flex-row p-2 w-1/2 hidden">
                            <label for="color_id" class="text-left inline-block text-2xl font-semibold text-gray-700 text-lg mr-2">Color:</label>
                            <div id="available-colors" class="flex items-center mt-1"></div>
                        </div>
                        <div class="justify-center flex p-2">
                            <button id="submitBtn" type="submit" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs active:shadow-soft-xs tracking-tight-soft border-brown text-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white" disabled>
                                Añadir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <input id="product_id" type="hidden" name="product_id">
            <input id="color_id" type="hidden" name="color_id">
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

  <script src="../assets/js/JQuery.js"></script>

  <script>
    $(document).ready(function(){
        let token = localStorage.getItem('authToken');
        const codProduct = new URLSearchParams(window.location.search).get('cod');

        $('body').on('click', '.colorBtn', function(e){
            e.preventDefault();
            
            $('.colorBtn').removeClass('border-4 border-2 border-gray-300 border-green');

            // Agregar la clase border-4 al botón clicado
            $(this).addClass('border-4 border-green');

            // Agregar la clase border-2 a los botones hermanos
            $(this).siblings().addClass('border-2 border-gray-300');

            let selectedColor = $(this).data('color-id');

            console.log(selectedColor);

            $('#color_id').val(selectedColor);

            $('#submitBtn').prop('disabled', false);
        });

        $.ajax({
            url: `http://127.0.0.1:8000/api/product/cod/${codProduct}`,
            type: 'GET',
            dataType: 'json',
            success: function(response){
                $('#product_id').val(response.id);

                if(response.colors.length > 0){
                    let colorsHTML = '';
                    response.colors.forEach(color => {
                        colorsHTML += `
                            <button style="background-color: ${color.hex}" data-color-id="${color.id}" class="colorBtn h-5 w-5 rounded-full border-2 border-blue-200 mr-2 focus:outline-none"></button>
                        `;
                    });

                    $('#available-colors').html('').append(colorsHTML);

                    $('#colorSelect').removeClass('hidden');
                } else{
                    $('#colorSelect, #color_id').remove();
                    $('#submitBtn').prop('disabled', false);
                }
            },
            error: function(xhr){
                console.log(xhr);
            }
        });

        $('#formMove').on('submit', function(e){
            e.preventDefault();
            $('#submitBtn').prop('disabled', true);

            let formData = new FormData(this);

            $.ajax({
                url: 'http://127.0.0.1:8000/api/productMovement',
                type: 'POST',
                dataType: 'json',
                data: formData,
                contentType: false,
                processData: false,
                headers: {
                    'Authorization': 'Bearer ' + token
                },
                success: function(response){
                    Swal.fire({
                        title: 'Movimiento creado exitosamente',
                        icon: 'success',
                        timer: 3000,
                        timerProgressBar: true,
                        showConfirmButton: false
                    }).finally(() => {
                        window.location.href = './crear-movimiento.php';
                    });
                },
                error: function(xhr){
                    console.log(xhr);
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
                        $('#submitBtn').prop('disabled', false);
                    });
                }
            });
        });
    });
  </script>
</html>