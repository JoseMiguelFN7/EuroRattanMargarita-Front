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

    <!-- CDN CSS Select2 -->
    <link rel="stylesheet" href="../assets/css/select2.css">
</head>
    <body class="m-0 font-sans text-base antialiased font-normal leading-default bg-gray-50 text-slate-500 max-w-screen">
        <?php include './sidebar.php'; ?>

        <main class="ease-soft-in-out xl:ml-sidebar relative h-full max-h-screen rounded-xl transition-all duration-200">
            <?php include './header.php'; ?>

            <section class="p-4">
                <form id="materialForm" class="p-6 justify-center flex flex-col bg-white">
                    <h2>Informacion del material:</h2>

                    <div class="p-2 flex flex flex-row bg-white rounded-lg shadow-lg max-w-sm  lg:flex-row">
                        <!-- Imagen -->
                        <div class="relative md:w-1/2 w-full text-gray-600">
                            <div class="w-full p-1 mb-4">
                                <label for="name" class="text-2xl font-semibold text-gray-700 text-lg mb-2">Nombre</label>
                                <input id="name" type="text" name="name" placeholder="Nombre del producto" maxlength="255" class="mb-2 mr-4 flex h-full w-2/3 items-center justify-center rounded-lg bg-gray-50 border border-gray-300 px-4 py-4 text-zinc-950 outline-none dark:!border-white/10 dark:text-white md:mb-0" required>
                            </div>

                            <div class="w-full p-1 mb-4 flex flex-col">
                                <label for="materialtypes" class="text-2xl font-semibold text-gray-700 text-lg mb-2">Tipo:</label>
                                <select id="materialtypes" name="material_type_ids" multiple="multiple" class="mb-2 md:mb-0 px-4 py-4 h-full w-2/3 border border-gray-300 rounded-lg" required></select>
                            </div>

                            <div class="w-full p-1 mb-4">
                                <label for="price" class="text-2xl font-semibold text-gray-700 text-lg mb-2">Precio:</label>
                                <input id="price" type="number" name="price" min="0" placeholder="Precio de venta al público" class="numeric-only mb-2 mr-4 flex h-full w-2/3 items-center justify-center rounded-lg bg-gray-50 border border-gray-300 px-4 py-4 text-zinc-950 outline-none dark:!border-white/10 dark:text-white md:mb-0" required>
                            </div>

                            <div class="w-full p-1 mb-4">
                                <label for="discount" class="text-2xl font-semibold text-gray-700 text-lg mb-2">Descripción:</label>
                                <textarea name="description" id="description" placeholder="Descripción del producto" class="mb-2 flex h-full w-3/4 resize-none items-center justify-center rounded-lg bg-gray-50 border border-gray-300 px-4 py-4 text-zinc-950 outline-none dark:!border-white/10 dark:text-white md:mb-0"></textarea>
                            </div>

                            <div class="flex flex-row items-center justify-start bg-white p-1 mb-4">
                                <input class="h-4 w-4 mr-2" type="checkbox" id="sell" name="sell">
                                <label class="text-lg" for="sell">Para la venta.</label>
                            </div> 
                        </div>
                    

                        <!-- Contenido lateral -->
                        <div class="w-full lg:w-1/2">
                            <div class="w-full p-1 mb-4">
                                <label for="code" class="text-2xl font-semibold text-gray-700 text-lg mb-2">Cod:</label>
                                <input id="code" type="text" name="code" placeholder="Código del producto" class="mb-2 mr-4 flex h-full w-2/3 items-center justify-center rounded-lg bg-gray-50 border border-gray-300 px-4 py-4 text-zinc-950 outline-none dark:!border-white/10 dark:text-white md:mb-0" required>
                            </div>

                            <div class="w-full p-1 mb-4">
                                <div class="flex items-center md:flex-row">
                                    <label for="unit_id" class="text-2xl font-semibold text-gray-700 text-lg mr-2">Unidad:</label>
                                    <div class="flex items-center gap-2">
                                        <select id="unit_id" name="unit_id" class="p-6 mb-2 md:mb-0 px-4 py-4 h-full border border-gray-300 rounded-lg" required>
                                            <option value="">Elegir unidad</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="w-full p-1 mb-4">
                                <label for="discount" class="text-2xl font-semibold text-gray-700 text-lg mb-2">Descuento:</label>
                                <input id="discount" type="number" name="discount" min="0" max="100" placeholder="Descuento del producto" class="numeric-only mb-2 mr-4 flex h-full w-2/3 items-center justify-center rounded-lg bg-gray-50 border border-gray-300 px-4 py-4 text-zinc-950 outline-none dark:!border-white/10 dark:text-white md:mb-0" required>
                            </div>

                            <div class="flex flex-col mb-4">
                                <div class="flex flex-row items-center w-full p-1">
                                    <label for="colors" class="text-2xl font-semibold text-gray-700 text-lg mr-2">Colores:</label>
                                    <input id="colors" type="color" class="mb-2 mr-2 rounded border border-gray-300 text-zinc-950 outline-none dark:!border-white/10 dark:text-white md:mb-0 cursor-pointer" required>
                                    <button id="colorBtn" class="bg-gray-200 text-gray-700 px-4 py-2 rounded hover:bg-gray-300 hover:shadow-soft-2xl active:shadow-soft-xs transition-all duration-300">Agregar</button>
                                </div>
                                <div id="colors-container" class="flex flex-row flex-wrap justify-start items-center p-1"></div>
                            </div>

                            <div class="flex flex-col">
                                <div class="flex flex-row items-center w-full p-1">
                                    <label for="images" class="text-2xl font-semibold text-gray-700 text-lg mr-2">Imágenes:</label>
                                    <input id="images" type="file" accept="image/*" multiple hidden>
                                    <button id="imgBtn" class="bg-gray-200 text-gray-700 px-4 py-2 rounded hover:bg-gray-300 hover:shadow-soft-2xl active:shadow-soft-xs transition-all duration-300">Agregar</button>
                                </div>
                                <div id="images-container" class="flex flex-row flex-wrap justify-start items-center p-1"></div>
                            </div>
                        </div>
                    </div>
                    <center><button id="btnSubmit" type="submit" class="w-1/4 inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none leading-pro ease-soft-in text-xs active:shadow-soft-xs tracking-tight-soft border-brown text-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white">Confirmar</button></center>
                    <input id="id-material" type="hidden" name="id-material">
                </form>
            </section>
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

    <!-- CDN JS Select2 -->
    <script src="../assets/js/select2.js"></script>

    <script>
        function rgbToHex(rgb) {
            const rgbArray = rgb.match(/\d+/g).map(Number);
            return `#${rgbArray.map(x => x.toString(16).padStart(2, '0')).join('')}`;
        }
        $(document).ready(function(){
            const codProduct = new URLSearchParams(window.location.search).get('cod');
            let token = localStorage.getItem('authToken');
            // Filtrar la entrada solo a números
            $('.numeric-only').on('input', function() {
                // Eliminar caracteres no numéricos
                this.value = this.value.replace(/[^0-9]/g, '');
            });

            let selectedColors = [];

            $('body').on('click', '.color-selected', function(){
                const color = rgbToHex($(this).css('background-color'));
                console.log(color);
                selectedColors = selectedColors.filter(item => item !== color);
                $(this).remove();
            });


            $('#colorBtn').on('click', function(e){
                e.preventDefault();
                const color = $('#colors').val();
                if(!selectedColors.includes(color)){
                    selectedColors.push(color);
                    const colorHTML = `<div style="background-color: ${color};" class="color-selected cursor-pointer h-5 w-5 mr-2 rounded-full border-2 border-gray-300 focus:outline-none"></div>`;
                    $('#colors-container').append(colorHTML);
                }
            });

            $('#imgBtn').on('click', function(e) {
                e.preventDefault();
                $('#images').click(); // Simula un clic en el input de archivo
            });

            $('#images').on('change', function(){
                $('#images-container').html('');

                const files = this.files;

                // Validar y procesar las imágenes seleccionadas
                $.each(files, function (i, file) {
                    if (file.type.match('image.*')) { // Verificar que sea un archivo de imagen
                        const reader = new FileReader();

                        // Generar la vista previa cuando el archivo esté cargado
                        reader.onload = function (e) {
                            const img = $('<img>')
                                .attr('src', e.target.result)
                                .css({ width: '100px', height: '100px', objectFit: 'cover', borderRadius: '5px', marginRight: '0.5rem', marginBottom: '0.5rem'});
                                $('#images-container').append(img);
                        };

                        reader.readAsDataURL(file); // Leer el archivo como URL
                    } else {
                        alert('El archivo seleccionado no es una imagen');
                    }
                });
            })

            $('#materialForm').on('submit', function(e){
                e.preventDefault();
                $('#btnSubmit').prop('disabled', true);

                let formData = new FormData(this);

                let files = $('#images')[0].files;

                if(files.length > 0){
                    Array.from(files).forEach(file => {
                        formData.append('images[]', file);
                    });
                }

                if(selectedColors.length > 0){
                    selectedColors.forEach(color => {
                        formData.append('colors[]', color);
                    });
                }

                // Obtener valores seleccionados del select2
                let selectedMaterialTypes = $('#materialtypes').val(); // Esto devuelve un array de valores seleccionados

                if (selectedMaterialTypes && selectedMaterialTypes.length > 0) {
                    selectedMaterialTypes.forEach(materialType => {
                        formData.append('material_type_ids[]', materialType); // Agregar cada valor al FormData
                    });
                }

                if ($('#sell').prop('checked')) {
                    formData.append('sell', 1);
                } else{
                    formData.append('sell', 0);
                }

                const matID = $('#id-material').val();

                $.ajax({
                    url: `http://127.0.0.1:8000/api/material/${matID}`,
                    type: 'POST',
                    dataType: 'json',
                    data: formData,
                    headers: {
                        'Authorization': 'Bearer ' + token
                    },
                    processData: false,
                    contentType: false,
                    success: function(response){
                        Swal.fire({
                            title: 'Material actualizado exitósamente',
                            icon: 'success',
                            timer: 3000,
                            timerProgressBar: true,
                            showConfirmButton: false
                        }).finally(() => {
                            window.location.href = './lista-materiales.php';
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
                            $('#btnSubmit').prop('disabled', false);
                        });
                    }
                });
            });

            let optionsData = [];

            // Cargar las opciones desde el servidor una vez y guardarlas en una variable
            $.ajax({
                url: 'http://127.0.0.1:8000/api/materialTypes',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    optionsData = data.map(item => ({
                        id: item.id,
                        text: item.name
                    }));

                    // Inicializar select2 con los datos cargados
                    $('#materialtypes').select2({
                        placeholder: "Tipo de material",
                        allowClear: true,
                        tags: false,
                        data: optionsData
                    });

                    $.ajax({
                        url: 'http://127.0.0.1:8000/api/units',
                        type: 'GET',
                        dataType: 'json',
                        success: function(resp){
                            let unitsHTML = '';
                            resp.forEach(unit => {
                                unitsHTML += `<option value="${unit.id}">${unit.name}</option>`;
                            });
                            $('#unit_id').append(unitsHTML);

                            $.ajax({
                                url: `http://127.0.0.1:8000/api/product/cod/${codProduct}`,
                                type: 'GET',
                                dataType: 'json',
                                success: function(r){
                                    console.log(r);

                                    $('#id-material').val(r.material.id);
                                    $('#name').val(r.name);
                                    $('#price').val(r.material.price);
                                    $('#description').val(r.description);
                                    if(r.sell === 1){
                                        $('#sell').prop('checked', true);
                                    } else{
                                        $('#sell').prop('checked', false);
                                    }
                                    $('#code').val(r.code);
                                    $('#unit_id').val(r.material.unit_id);
                                    $('#discount').val(r.discount);
                                    r.images.forEach(image => {
                                        const img = $('<img>')
                                        .attr('src', image.url)
                                        .css({ width: '100px', height: '100px', objectFit: 'cover', borderRadius: '5px', marginRight: '0.5rem', marginBottom: '0.5rem'});
                                        $('#images-container').append(img);
                                    });
                                    r.colors.forEach(color => {
                                        const colorHTML = `<div style="background-color: ${color.hex};" class="color-selected cursor-pointer h-5 w-5 mr-2 rounded-full border-2 border-gray-300 focus:outline-none"></div>`;
                                        $('#colors-container').append(colorHTML);
                                        selectedColors.push(color.hex);
                                    });

                                    let selectedValues = [];

                                    r.material.material_types.forEach(mt => {
                                        selectedValues.push(mt.id);
                                    });

                                    $('#materialtypes').val(selectedValues).trigger('change');
                                }
                            });
                        },
                        error: function(xhr){
                            console.log(xhr);
                        }
                    });
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error('Error al cargar los datos: ', textStatus, errorThrown);
                }
            });
        });
    </script>
</html>