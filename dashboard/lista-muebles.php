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
                <h2 class=" text-xxl font-medium text-center text-gray-600 md:text-stroke-brown">Lista de Muebles</h2>
            </div>
        </section>

        <?php include './searchBar.php'; ?>

        <div class="flex flex-wrap mx-3 p-4">
            <div class="flex-none w-full max-w-full px-3">
                <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto">
                    <!-- Define un alto máximo -->
                        <div class="border border-gray-300 rounded-lg p-4">
                            <table class=" table-auto border-collapse w-full ">
                            <thead class="bg-gray-100 border-collapse ">
                                <tr class="w-full border-b border-gray-300">
                                    <th class="px-4 py-2 font-bold text-left text-sm text-gray-700 border-b ">Imagen</th>
                                    <th class="px-4 py-2 font-bold text-left text-sm text-gray-700 border-b ">Cod.</th>
                                    <th class="px-4 py-2 font-bold text-left text-sm text-gray-700 border-b">Nombre</th>
                                    <th class="px-4 py-2 font-bold text-left text-sm text-gray-700 border-b">PVP Nat.</th>
                                    <th class="px-4 py-2 font-bold text-left text-sm text-gray-700 border-b">PVP Col.</th>
                                    <th class="px-4 py-2 font-bold text-left text-sm text-gray-700 border-b">Stock</th>
                                    <th class="px-4 py-2 font-bold text-left text-sm text-gray-700 border-b">Colores</th>
                                    <th class="px-4 py-2 font-bold text-left text-sm text-gray-700 border-b">Descuento</th>
                                    <th class="px-4 py-2 font-bold text-left text-sm text-gray-700 border-b">Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Ejemplo de filas -->
                                <tr class="w-full">
                                    <td class="product-img px-4 py-2 border-b border-gray-300">
                                        <img src="../assets/img/no-image.png" class="w-9 h-9 object-contain" alt="img-producto">
                                    </td>
                                    <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">001</td>
                                    <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">Producto A</td>
                                    <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">$10.00</td>
                                    <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">$8.00</td>
                                    <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">50</td>
                                    <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">
                                        <div class="flex items-center justify-evenly">
                                            <div class="h-5 w-5 rounded-full border-2 border-gray-300 focus:outline-none"></div>
                                            <div class="h-5 w-5 rounded-full border-2 border-gray-300 focus:outline-none"></div>
                                            <div class="h-5 w-5 rounded-full border-2 border-gray-300 focus:outline-none"></div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">50.00%</td>
                                    <td class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                        <div class="flex flex-wrap items-center justify-evenly">
                                            <a href="javascript:;" class=""><img class="w-5" src="../assets/img/boton-editar.png" alt="edit-icon"></a>
                                            <a href="javascript:;" class="delete-material"><img data-mueble-id="" class="w-5" src="../assets/img/papelera.png" alt="delete-icon"></a>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="bg-gray-50">
                                    <td class="product-img px-4 py-2 border-b border-gray-300">
                                        <img src="../assets/img/no-image.png" class="w-9 h-9 object-contain" alt="img-producto">
                                    </td>
                                    <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">002</td>
                                    <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">Producto A</td>
                                    <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">$10.00</td>
                                    <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">$8.00</td>
                                    <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">50</td>
                                    <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">
                                        <div class="flex items-center justify-evenly">
                                            <div class="h-5 w-5 rounded-full border-2 border-gray-300 focus:outline-none"></div>
                                            <div class="h-5 w-5 rounded-full border-2 border-gray-300 focus:outline-none"></div>
                                            <div class="h-5 w-5 rounded-full border-2 border-gray-300 focus:outline-none"></div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">50.00%</td>
                                    <td class="p-2 align-middle bg-transparent border-b border-gray-300 whitespace-nowrap shadow-transparent">
                                        <div class="flex flex-wrap items-center justify-evenly">
                                            <a href="javascript:;" class=""><img class="w-5" src="../assets/img/boton-editar.png" alt="edit-icon"></a>
                                            <a href="javascript:;" class="delete-material"><img data-mueble-id="" class="w-5" src="../assets/img/papelera.png" alt="delete-icon"></a>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Repite filas -->
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

</html>