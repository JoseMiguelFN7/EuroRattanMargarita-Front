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
                <form id="muebleForm" class="p-6 justify-center flex flex-col bg-white">
                    <h2>Informacion del mueble:</h2>

                    <div class="flex flex flex-row bg-white rounded-lg shadow-lg max-w-sm  lg:flex-row">
                        <div class="w-full p-1 mb-4">
                            <label for="name" class="text-2xl font-semibold text-gray-700 text-lg mb-2">Nombre</label>
                            <input id="name" type="text" name="name" placeholder="Nombre del producto" maxlength="255" class="mb-2 mr-4 flex w-full items-center justify-center rounded-lg bg-gray-50 border border-gray-300 px-4 py-4 text-zinc-950 outline-none dark:!border-white/10 dark:text-white md:mb-0" required>
                        </div>

                        <div class="w-full p-1 mb-4">
                            <label for="code" class="text-2xl font-semibold text-gray-700 text-lg mb-2">Cod:</label>
                            <input id="code" type="text" name="code" placeholder="Código del producto" class="mb-2 mr-4 flex w-full items-center justify-center rounded-lg bg-gray-50 border border-gray-300 px-4 py-4 text-zinc-950 outline-none dark:!border-white/10 dark:text-white md:mb-0" required>
                        </div>

                        <div class="w-full p-1 mb-4 flex flex-col">
                            <label for="furnituretype" class="text-2xl font-semibold text-gray-700 text-lg mb-2">Categoría:</label>
                            <select id="furnituretype" name="furnitureType_id" class="mb-2 md:mb-0 px-4 py-4 w-full border border-gray-300 rounded-lg" required><option>Seleccionar Categoría</option></select>
                        </div>

                        <div class="flex flex-row items-center justify-start bg-white p-1 mb-4">
                            <input class="h-4 w-4 mr-2" type="checkbox" id="sell" name="sell">
                            <label class="text-lg" for="sell">Para la venta.</label>
                        </div>

                    </div>

                    <div class="w-full flex flex flex-row bg-white rounded-lg shadow-lg max-w-sm  lg:flex-row">
                        <div class="w-3/4 flex flex-row items-center justify-start">
                            <button id="btnIns" type="button" class="w-1/4 inline-block px-8 py-2 mb-0 mr-2 font-bold text-center uppercase align-middle transition-all bg-brown text-white border border-solid rounded-lg shadow-none leading-pro ease-soft-in text-xs active:shadow-soft-xs tracking-tight-soft border-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white">Insumos</button>
                            <button id="btnMO" type="button" class="w-1/4 inline-block px-8 py-2 mb-0 mr-2 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none leading-pro ease-soft-in text-xs active:shadow-soft-xs tracking-tight-soft border-brown text-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white">Mano de Obra</button>
                            <button id="btnTap" type="button" class="w-1/4 inline-block px-8 py-2 mb-0 mr-2 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none leading-pro ease-soft-in text-xs active:shadow-soft-xs tracking-tight-soft border-brown text-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white">Tapicería</button>
                        </div>
                        <div class="w-1/4 flex flex-row items-center justify-end">
                            <button id="btnAddInsumo" type="button" class="w-1/2 inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none leading-pro ease-soft-in text-xs active:shadow-soft-xs tracking-tight-soft border-brown text-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white">+ Agregar</button>
                            <button id="btnAddMO" type="button" class="w-1/2 inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none leading-pro ease-soft-in text-xs active:shadow-soft-xs tracking-tight-soft border-brown text-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white hidden">+ Agregar</button>
                            <button id="btnAddTap" type="button" class="w-1/2 inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none leading-pro ease-soft-in text-xs active:shadow-soft-xs tracking-tight-soft border-brown text-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white hidden">+ Agregar</button>
                        </div>
                    </div>
                    <div class="flex flex-wrap mx-3 pt-4">
                        <div class="flex-none w-full max-w-full">
                            <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                                <div class="flex-auto">
                                    <div class="border border-gray-300 rounded-lg p-4">
                                        <table id="tableInsumos" class="table-auto border-collapse w-full ">
                                            <thead class="bg-gray-100 border-collapse">
                                                <tr class="w-full border-b border-gray-300">
                                                    <th class="px-4 py-2 font-bold text-left text-sm text-gray-700 border-b border-gray-300">Nombre</th>
                                                    <th class="px-4 py-2 font-bold text-left text-sm text-gray-700 border-b border-gray-300">Unidad</th>
                                                    <th class="px-4 py-2 font-bold text-left text-sm text-gray-700 border-b border-gray-300">Costo Unit</th>
                                                    <th class="px-4 py-2 font-bold text-left text-sm text-gray-700 border-b border-gray-300">Cantidad</th>
                                                    <th class="px-4 py-2 font-bold text-left text-sm text-gray-700 border-b border-gray-300">Total</th>
                                                    <th class="px-4 py-2 font-bold text-center text-sm text-gray-700 border-b border-gray-300">Acción</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tableBodyInsumos"></tbody>
                                        </table>
                                        <table id="tableMO" class="table-auto border-collapse w-full hidden">
                                            <thead class="bg-gray-100 border-collapse">
                                                <tr class="w-full border-b border-gray-300">
                                                    <th class="px-4 py-2 font-bold text-left text-sm text-gray-700 border-b border-gray-300">Nombre</th>
                                                    <th class="px-4 py-2 font-bold text-left text-sm text-gray-700 border-b border-gray-300">Pago Diario</th>
                                                    <th class="px-4 py-2 font-bold text-left text-sm text-gray-700 border-b border-gray-300">Cantidad de Días</th>
                                                    <th class="px-4 py-2 font-bold text-left text-sm text-gray-700 border-b border-gray-300">Total</th>
                                                    <th class="px-4 py-2 font-bold text-center text-sm text-gray-700 border-b border-gray-300">Acción</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tableBodyMO"></tbody>
                                        </table>
                                        <table id="tableTap" class="table-auto border-collapse w-full hidden">
                                            <thead class="bg-gray-100 border-collapse">
                                                <tr class="w-full border-b border-gray-300">
                                                    <th class="px-4 py-2 font-bold text-left text-sm text-gray-700 border-b border-gray-300">Nombre</th>
                                                    <th class="px-4 py-2 font-bold text-left text-sm text-gray-700 border-b border-gray-300">Unidad</th>
                                                    <th class="px-4 py-2 font-bold text-left text-sm text-gray-700 border-b border-gray-300">Costo Unit</th>
                                                    <th class="px-4 py-2 font-bold text-left text-sm text-gray-700 border-b border-gray-300">Cantidad</th>
                                                    <th class="px-4 py-2 font-bold text-left text-sm text-gray-700 border-b border-gray-300">Total</th>
                                                    <th class="px-4 py-2 font-bold text-center text-sm text-gray-700 border-b border-gray-300">Acción</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tableBodyTap"></tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <p id="Subtotal-Insumos">Subtotal Insumos: 0.00$</p>
                            <p id="Subtotal-MO">Subtotal MO: 0.00$</p>
                            <p id="Subtotal-Tapizado">Subtotal Tapizado: 0.00$</p>
                        </div>
                    </div>
                    <center><button id="btnSubmit" type="submit" class="w-1/4 inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none leading-pro ease-soft-in text-xs active:shadow-soft-xs tracking-tight-soft border-brown text-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white">Confirmar</button></center>
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

    <script>
        $(document).ready(function(){
            let token = localStorage.getItem('authToken');
            // Filtrar la entrada solo a números
            $('.numeric-only').on('input', function() {
                // Eliminar caracteres no numéricos
                this.value = this.value.replace(/[^0-9]/g, '');
            });

            //Eventos para mostrar/ocultar tablas y botones
            $('#btnIns').on('click', function() {
                $('#btnIns, #btnMO, #btnTap').removeClass('bg-brown text-white').addClass('bg-transparent text-brown');
                $(this).addClass('bg-brown text-white').removeClass('bg-transparent text-brown');
                $('#tableInsumos').removeClass('hidden');
                $('#tableMO').addClass('hidden');
                $('#tableTap').addClass('hidden');
                $('#btnAddInsumo').removeClass('hidden');
                $('#btnAddMO').addClass('hidden');
                $('#btnAddTap').addClass('hidden');
            });

            $('#btnMO').on('click', function() {
                $('#btnIns, #btnMO, #btnTap').removeClass('bg-brown text-white').addClass('bg-transparent text-brown');
                $(this).addClass('bg-brown text-white').removeClass('bg-transparent text-brown');
                $('#tableInsumos').addClass('hidden');
                $('#tableMO').removeClass('hidden');
                $('#tableTap').addClass('hidden');
                $('#btnAddInsumo').addClass('hidden');
                $('#btnAddMO').removeClass('hidden');
                $('#btnAddTap').addClass('hidden');
            });

            $('#btnTap').on('click', function() {
                $('#btnIns, #btnMO, #btnTap').removeClass('bg-brown text-white').addClass('bg-transparent text-brown');
                $(this).addClass('bg-brown text-white').removeClass('bg-transparent text-brown');
                $('#tableInsumos').addClass('hidden');
                $('#tableMO').addClass('hidden');
                $('#tableTap').removeClass('hidden');
                $('#btnAddInsumo').addClass('hidden');
                $('#btnAddMO').addClass('hidden');
                $('#btnAddTap').removeClass('hidden');
            });

            // Cargar las categorias desde el servidor una vez y guardarlas en una variable
            $.ajax({
                url: 'http://127.0.0.1:8000/api/furnitureTypes',
                type: 'GET',
                dataType: 'json',
                success: function(data) {

                    data.forEach(function(item) {
                        $('#furnituretype').append(new Option(item.name, item.id));
                    });
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error('Error al cargar los datos: ', textStatus, errorThrown);
                }
            });

            //Subtotales
            let subtotalInsumos = 0;
            let subtotalMO = 0;
            let subtotalTapizado = 0;

            let insumosFilasHTML = '';
            let manoObraFilasHTML = '';
            let tapiceriaFilasHTML = '';
            let materialesArray = {
                insumos: [],
                manoObra: [],
                tapiceria: []
            };
            let materialesSeleccionados = {
                insumos: [],
                manoObra: [],
                tapiceria: []
            };

            // Función para actualizar el subtotal de insumos
            function updateSubtotalInsumos() {
                subtotalInsumos = 0;
                $('#tableBodyInsumos tr').each(function() {
                    const id = $(this).data('id');
                    const insumo = materialesArray['insumos'].find(item => item.id === id);
                    const cantidad = parseFloat($(this).find('.quantity-input').val()) || 0;
                    const total = cantidad * (insumo ? insumo.price : 0);
                    $(this).find('.total-cell').text(total.toFixed(2) + '$');
                    if (insumo) {
                        subtotalInsumos += total;
                        console.log(`Subtotal Insumos: ${subtotalInsumos}`);
                    }
                });
                $('#Subtotal-Insumos').text(`Subtotal Insumos: ${subtotalInsumos.toFixed(2)}$`);
            }

            // Función para actualizar el subtotal de mano de obra
            function updateSubtotalMO() {
                subtotalMO = 0;
                $('#tableBodyMO tr').each(function() {
                    const id = $(this).data('id');
                    const mo = materialesArray['manoObra'].find(item => item.id === id);
                    const cantidad = parseFloat($(this).find('.quantity-input').val()) || 0;
                    const total = cantidad * (mo ? mo.daily_pay : 0);
                    $(this).find('.total-cell').text(total.toFixed(2) + '$');
                    if (mo) {
                        subtotalMO += total;
                    }
                });
                $('#Subtotal-MO').text(`Subtotal MO: ${subtotalMO.toFixed(2)}$`);
            }

            // Función para actualizar el subtotal de tapicería
            function updateSubtotalTap() {
                subtotalTapizado = 0;
                $('#tableBodyTap tr').each(function() {
                    const id = $(this).data('id');
                    const tapizado = materialesArray['tapiceria'].find(item => item.id === id);
                    const cantidad = parseFloat($(this).find('.quantity-input').val()) || 0;
                    const total = cantidad * (tapizado ? tapizado.price : 0);
                    $(this).find('.total-cell').text(total.toFixed(2) + '$');
                    if (tapizado) {
                        subtotalTapizado += total;
                    }
                });
                $('#Subtotal-Tapizado').text(`Subtotal Tapizado: ${subtotalTapizado.toFixed(2)}$`);
            }

            // Función para actualizar la tabla de insumos
            function updateTableInsumos() {
                let tableBody = $('#tableBodyInsumos');
                tableBody.empty(); // Limpiar el contenido actual

                materialesSeleccionados['insumos'].forEach(id => {
                    let insumo = materialesArray['insumos'].find(item => item.id === id);
                    if (insumo) {
                        tableBody.append(`
                            <tr class="fila-material" data-id="${insumo.id}">
                                <td class="px-4 py-2 text-start">${insumo.product.name}</td>
                                <td class="px-4 py-2 text-start">${insumo.unit.name}</td>
                                <td class="px-4 py-2 text-start">${insumo.price + '$'}</td>
                                <td class="px-4 py-2 text-start"><input type="number" name="quantity" value="1" class="w-full border border-gray-300 rounded-lg px-2 py-1 quantity-input" required></td>
                                <td class="px-4 py-2 text-start total-cell">${insumo.price}$</td>
                                <td class="px-4 py-2 text-center">
                                    <a href="javascript:;" class="delete-insumo">
                                        <img class="w-5 block mx-auto" src="../assets/img/papelera.png" alt="delete-icon">
                                    </a>
                                </td>
                            </tr>
                        `);
                    }
                });

                // Actualizar el evento de eliminación
                $('.delete-insumo').off('click').on('click', function() {
                    $(this).closest('tr').remove();
                    const id = $(this).closest('tr').data('id');
                    materialesSeleccionados['insumos'] = materialesSeleccionados['insumos'].filter(item => item !== id);
                    updateSubtotalInsumos();
                });

                $('.quantity-input').off('input').on('input', function() {
                    const $row = $(this).closest('tr');
                    const id = $row.data('id');
                    const insumo = materialesArray['insumos'].find(item => item.id === id);
                    const cantidad = parseFloat($(this).val()) || 0;
                    const total = (cantidad * (insumo ? insumo.price : 0)).toFixed(2);
                    $row.find('.total-cell').text(total + '$');

                    // Actualizar subtotales
                    updateSubtotalInsumos();
                });
                updateSubtotalInsumos();
            }

            // Función para actualizar la tabla de mano de obra
            function updateTableMO() {
                let tableBody = $('#tableBodyMO');
                tableBody.empty(); // Limpiar el contenido actual

                materialesSeleccionados['manoObra'].forEach(id => {
                    let mo = materialesArray['manoObra'].find(item => item.id === id);
                    if (mo) {
                        tableBody.append(`
                            <tr class="fila-material" data-id="${mo.id}">
                                <td class="px-4 py-2 text-start">${mo.name}</td>
                                <td class="px-4 py-2 text-start">${mo.daily_pay}$</td>
                                <td class="px-4 py-2 text-start"><input type="number" name="quantity" value="1" class="w-full border border-gray-300 rounded-lg px-2 py-1 quantity-input" required></td>
                                <td class="px-4 py-2 text-start total-cell">${mo.daily_pay}$</td>
                                <td class="px-4 py-2 text-center">
                                    <a href="javascript:;" class="delete-mo">
                                        <img class="w-5 block mx-auto" src="../assets/img/papelera.png" alt="delete-icon">
                                    </a>
                                </td>
                            </tr>
                        `);
                    }
                });

                // Actualizar el evento de eliminación
                $('.delete-mo').off('click').on('click', function() {
                    $(this).closest('tr').remove();
                    const id = $(this).closest('tr').data('id');
                    materialesSeleccionados['manoObra'] = materialesSeleccionados['manoObra'].filter(item => item !== id);
                    updateSubtotalMO();
                });

                $('.quantity-input').off('input').on('input', function() {
                    const $row = $(this).closest('tr');
                    const id = $row.data('id');
                    const mo = materialesArray['manoObra'].find(item => item.id === id);
                    const cantidad = parseFloat($(this).val()) || 0;
                    const total = (cantidad * (mo ? mo.daily_pay : 0)).toFixed(2);
                    $row.find('.total-cell').text(total + '$');

                    // Actualizar subtotales
                    updateSubtotalMO();
                });
                updateSubtotalMO();
            }

            // Función para actualizar la tabla de tapicería
            function updateTableTap() {
                let tableBody = $('#tableBodyTap');
                tableBody.empty(); // Limpiar el contenido actual

                materialesSeleccionados['tapiceria'].forEach(id => {
                    let tapizado = materialesArray['tapiceria'].find(item => item.id === id);
                    if (tapizado) {
                        tableBody.append(`
                            <tr class="fila-material" data-id="${tapizado.id}">
                                <td class="px-4 py-2 text-start">${tapizado.product.name}</td>
                                <td class="px-4 py-2 text-start">${tapizado.unit.name}</td>
                                <td class="px-4 py-2 text-start">${tapizado.price + '$'}</td>
                                <td class="px-4 py-2 text-start"><input type="number" name="quantity" value="1" class="w-full border border-gray-300 rounded-lg px-2 py-1 quantity-input" required></td>
                                <td class="px-4 py-2 text-start total-cell">${tapizado.price}$</td>
                                <td class="px-4 py-2 text-center">
                                    <a href="javascript:;" class="delete-tapizado">
                                        <img class="w-5 block mx-auto" src="../assets/img/papelera.png" alt="delete-icon">
                                    </a>
                                </td>
                            </tr>
                        `);
                    }
                });

                // Actualizar el evento de eliminación
                $('.delete-tapizado').off('click').on('click', function() {
                    $(this).closest('tr').remove();
                    const id = $(this).closest('tr').data('id');
                    materialesSeleccionados['tapiceria'] = materialesSeleccionados['tapiceria'].filter(item => item !== id);
                    updateSubtotalTap();
                });

                $('.quantity-input').off('input').on('input', function() {
                    const $row = $(this).closest('tr');
                    const id = $row.data('id');
                    const tapizado = materialesArray['tapiceria'].find(item => item.id === id);
                    const cantidad = parseFloat($(this).val()) || 0;
                    const total = (cantidad * (tapizado ? tapizado.price : 0)).toFixed(2);
                    $row.find('.total-cell').text(total + '$');

                    // Actualizar subtotales
                    updateSubtotalTap();
                });
                updateSubtotalTap();
            }

            // Cargar los insumos al iniciar la página
            $.ajax({
                url: 'http://127.0.0.1:8000/api/materialsByType/name/Insumo',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    let insumosArray = data;
                    materialesArray['insumos'] = insumosArray

                    insumosFilasHTML = data.map(item => {
                    const imagen = item.product.image
                        ? item.product.image
                        : "../assets/img/no-image.png"; // Ruta por defecto si no hay imagen

                    return `
                        <tr class="fila-material cursor-pointer hover:bg-gray-100 transition" data-id="${item.id}">
                            <td class="px-4 py-2 text-start">
                                <img src="${imagen}" alt="img" class="w-12 h-12 object-contain rounded" />
                            </td>
                            <td class="px-4 py-2 text-start">${item.product.code}</td>
                            <td class="px-4 py-2 text-start">${item.product.name}</td>
                            <td class="px-4 py-2 text-start">${item.price + '$'}</td>
                        </tr>
                    `;
                    }).join('');
                },
            });

            //Cargar las mano de obra al iniciar la página
            $.ajax({
                url: 'http://127.0.0.1:8000/api/labors',
                type: 'GET',
                dataType: 'json',
                headers: {
                    'Authorization': 'Bearer ' + token
                },
                success: function(data) {
                    console.log(data);
                    let manoObraArray = data;
                    materialesArray['manoObra'] = manoObraArray

                    manoObraFilasHTML = data.map(item => {
                    return `
                        <tr class="fila-material cursor-pointer hover:bg-gray-100 transition" data-id="${item.id}">
                            <td class="px-4 py-2 text-start">${item.name}</td>
                            <td class="px-4 py-2 text-start">${item.daily_pay}$</td>
                        </tr>
                    `;
                    }).join('');
                },
            });

            // Cargar los materiales de tapiceria al iniciar la página
            $.ajax({
                url: 'http://127.0.0.1:8000/api/materialsByType/name/Tapicería',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    let tapiceriaArray = data;
                    materialesArray['tapiceria'] = tapiceriaArray
                    console.log(tapiceriaArray);
                    tapiceriaFilasHTML = data.map(item => {
                    const imagen = item.product.image
                        ? item.product.image
                        : "../assets/img/no-image.png"; // Ruta por defecto si no hay imagen

                    return `
                        <tr class="fila-material cursor-pointer hover:bg-gray-100 transition" data-id="${item.id}">
                            <td class="px-4 py-2 text-start">
                                <img src="${imagen}" alt="img" class="w-12 h-12 object-contain rounded" />
                            </td>
                            <td class="px-4 py-2 text-start">${item.product.code}</td>
                            <td class="px-4 py-2 text-start">${item.product.name}</td>
                            <td class="px-4 py-2 text-start">${item.price + '$'}</td>
                        </tr>
                    `;
                    }).join('');
                },
            });

            $('#btnAddInsumo').on('click', function(){
                Swal.fire({
                    title: 'Seleccionar Material',
                    width: '50%',
                    html:`
                        <div class="flex flex-wrap mx-3 pt-4">
                            <div class="flex-none w-full max-w-full">
                                <div id="swalError" class="hidden bg-yellow-100 text-yellow-800 text-sm px-4 py-2 rounded mb-2"></div>
                                <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                                    <div class="flex-auto">
                                        <div class="border border-gray-300 rounded-lg p-4 overflow-auto">
                                            <table class="table-auto border-collapse w-full text-sm">
                                                <thead class="bg-gray-100">
                                                    <tr class="border-b border-gray-300">
                                                        <th class="px-4 py-2 font-bold text-left text-gray-700">Imagen</th>
                                                        <th class="px-4 py-2 font-bold text-left text-gray-700">Cod.</th>
                                                        <th class="px-4 py-2 font-bold text-left text-gray-700">Nombre</th>
                                                        <th class="px-4 py-2 font-bold text-left text-gray-700">Precio</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="tableBodyInsumosSwal">
                                                    ${insumosFilasHTML}
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `,
                    showCloseButton: true,
                    showConfirmButton: false,
                    didOpen: () => {
                        $('#tableBodyInsumosSwal').off('click').on('click', '.fila-material', function () {
                            const id = $(this).data('id');

                            // Verificamos si el ID ya fue seleccionado
                            if (materialesSeleccionados['insumos'].includes(id)) {
                                    $('#swalError')
                                    .removeClass('hidden')
                                    .text('Este insumo ya fue seleccionado.');

                                setTimeout(() => {
                                    $('#swalError').addClass('hidden').text('');
                                }, 2000);
                                return; // No lo agregamos ni cerramos el Swal
                            }

                            materialesSeleccionados['insumos'].push(id);
                            updateTableInsumos(); // Actualiza la tabla de insumos

                            Swal.close(); // Cierra solo si fue agregado correctamente
                        })
                    }
                });
            });

            $('#btnAddMO').on('click', function(){
                Swal.fire({
                    title: 'Seleccionar Mano de Obra',
                    width: '50%',
                    html:`
                        <div class="flex flex-wrap mx-3 pt-4">
                            <div class="flex-none w-full max-w-full">
                                <div id="swalError" class="hidden bg-yellow-100 text-yellow-800 text-sm px-4 py-2 rounded mb-2"></div>
                                <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                                    <div class="flex-auto">
                                        <div class="border border-gray-300 rounded-lg p-4 overflow-auto">
                                            <table class="table-auto border-collapse w-full text-sm">
                                                <thead class="bg-gray-100">
                                                    <tr class="border-b border-gray-300">
                                                        <th class="px-4 py-2 font-bold text-left text-gray-700">Nombre</th>
                                                        <th class="px-4 py-2 font-bold text-left text-gray-700">Pago Diario</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="tableBodyMOSwal">
                                                    ${manoObraFilasHTML}
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `,
                    showCloseButton: true,
                    showConfirmButton: false,
                    didOpen: () => {
                        $('#tableBodyMOSwal').off('click').on('click', '.fila-material', function () {
                            const id = $(this).data('id');

                            // Verificamos si el ID ya fue seleccionado
                            if (materialesSeleccionados['manoObra'].includes(id)) {
                                    $('#swalError')
                                    .removeClass('hidden')
                                    .text('Esta mano de obra ya fue seleccionado.');

                                setTimeout(() => {
                                    $('#swalError').addClass('hidden').text('');
                                }, 2000);
                                return; // No lo agregamos ni cerramos el Swal
                            }

                            materialesSeleccionados['manoObra'].push(id);
                            updateTableMO(); // Actualiza la tabla de manos de obra

                            Swal.close(); // Cierra solo si fue agregado correctamente
                        })
                    }
                });
            });

            $('#btnAddTap').on('click', function(){
                Swal.fire({
                    title: 'Seleccionar Material',
                    width: '50%',
                    html:`
                        <div class="flex flex-wrap mx-3 pt-4">
                            <div class="flex-none w-full max-w-full">
                                <div id="swalError" class="hidden bg-yellow-100 text-yellow-800 text-sm px-4 py-2 rounded mb-2"></div>
                                <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                                    <div class="flex-auto">
                                        <div class="border border-gray-300 rounded-lg p-4 overflow-auto">
                                            <table class="table-auto border-collapse w-full text-sm">
                                                <thead class="bg-gray-100">
                                                    <tr class="border-b border-gray-300">
                                                        <th class="px-4 py-2 font-bold text-left text-gray-700">Imagen</th>
                                                        <th class="px-4 py-2 font-bold text-left text-gray-700">Cod.</th>
                                                        <th class="px-4 py-2 font-bold text-left text-gray-700">Nombre</th>
                                                        <th class="px-4 py-2 font-bold text-left text-gray-700">Precio</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="tableBodyTapSwal">
                                                    ${tapiceriaFilasHTML}
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `,
                    showCloseButton: true,
                    showConfirmButton: false,
                    didOpen: () => {
                        $('#tableBodyTapSwal').off('click').on('click', '.fila-material', function () {
                            const id = $(this).data('id');

                            // Verificamos si el ID ya fue seleccionado
                            if (materialesSeleccionados['tapiceria'].includes(id)) {
                                    $('#swalError')
                                    .removeClass('hidden')
                                    .text('Este material ya fue seleccionado.');

                                setTimeout(() => {
                                    $('#swalError').addClass('hidden').text('');
                                }, 2000);
                                return; // No lo agregamos ni cerramos el Swal
                            }

                            materialesSeleccionados['tapiceria'].push(id);
                            updateTableTap(); // Actualiza la tabla de materiales de tapicería

                            Swal.close(); // Cierra solo si fue agregado correctamente
                        })
                    }
                });
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

            $('#muebleForm').on('submit', function(e){
                e.preventDefault();
                $('#btnSubmit').prop('disabled', true);

                let formData = new FormData(this);

                let files = $('#images')[0].files;

                if(files.length > 0){
                    Array.from(files).forEach(file => {
                        formData.append('images[]', file);
                    });
                }

                if ($('#sell').prop('checked')) {
                    formData.append('sell', 1);
                } else{
                    formData.append('sell', 0);
                }

                $.ajax({
                    url: 'http://127.0.0.1:8000/api/material',
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
                            title: 'Material creado exitosamente',
                            icon: 'success',
                            timer: 3000,
                            timerProgressBar: true,
                            showConfirmButton: false
                        }).finally(() => {
                            window.location.href = './crear-material.php';
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

        });
    </script>
</html>