<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <?php include './sidebar.php'; ?>

        <main class="ease-soft-in-out xl:ml-sidebar relative h-full max-h-screen rounded-xl transition-all duration-200">
            <?php include './header.php'; ?>

            <section class="p-4">
                <div class="p-6 justify-center flex flex-col pt-6 bg-white ">
                        <div class="p-6">
                                <h2>Informacion del producto:</h2>
                        </div>
                    
                    <div class="p-2 flex flex flex-row bg-white rounded-lg shadow-lg max-w-sm  lg:flex-row">
                    <!-- Imagen -->
                        <div class="relative md:w-1/2 w-full text-gray-600">
                            <div class="w-full p-1 ">
                                <div class="mb-8 flex   md:flex-row mb-4">
                                    <label for="name" class="text-2xl font-semibold text-gray-700 text-lg ">Nombre</label>
                                </div>
                                    <input id="name" type="text" name="name" placeholder="Ingresa tu nombre" class=" mb-2 mr-4 flex h-full w-2/3 items-center justify-center rounded-lg border border-zinc-200 bg-gray-200 px-4 py-4 text-zinc-950 outline-none dark:!border-white/10 dark:text-white md:mb-0">
                                
                            </div>

                            <div class="w-full p-1 pt-4">
                                <div class="mb-8 flex  md:flex-row mb-4">
                                    <label for="name" class="text-2xl font-semibold text-gray-700 text-lg ">Tipo:</label>
                                   
                                    <div class="flex items-center gap-2 mb-4">
                                        <select id="" name="document_type" class="mb-2 md:mb-0 px-4 py-4 h-full border  rounded-lg" required>
                                        <option value="">Tapizado</option>
                                        <option value="">E</option>
                                        <option value="">J</option>
                                        <option value="">G</option>
                                        <option value="">P</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    

                        <!-- Contenido lateral -->
                        <div class="w-full lg:w-1/2">
                            <div class="w-full p-1">
                                <div class="mb-8 flex ">
                                    <label for="name" class="text-2xl font-semibold text-gray-700 text-lg p-2 ">Cod:</label>
                                 </div>
                                    <input id="name" type="text" name="name" placeholder="Ingresa tu nombre" class=" mb-2 mr-4 flex h-full w-2/3 items-center justify-center rounded-lg border border-zinc-200 bg-gray-200 px-4 py-4 text-zinc-950 outline-none dark:!border-white/10 dark:text-white md:mb-0">
                                
                            </div>


                            <div class="w-full pt-4 ">
                                <div class="mb-8 flex  md:flex-row mb-4">
                                    <label for="name" class="text-2xl font-semibold text-gray-700 text-lg ">Mueble:</label>
                                    <div class="flex items-center gap-2 mb-4">
                                        <select id="" name="document_type" class="p-6 mb-2 md:mb-0 px-4 py-4 h-full border rounded-lg" required>
                                        <option value="">Caja</option>
                                        <option value="">E</option>
                                        <option value="">J</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class=" justify-start flex flex-col bg-white px-6">
                    <div class="flex flex-wrap mx-3 p-4">
            <div class="flex-none w-full max-w-full px-3">
                <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto">
                    <!-- Define un alto máximo y overflow-y: auto -->
                        <div class="max-h-96 overflow-y-auto border border-gray-300 rounded-lg p-4">
                            <table class=" table-auto border-collapse overflow-y-scroll w-full ">
                            <thead class="bg-gray-100 sticky top-0 z-10 border-collapse ">
                                <tr class="w-full border-b border-gray-300">
                                  
                                    <th class="px-4 py-2 font-bold text-left text-sm text-gray-700 border-b ">Cod.</th>
                                    <th class="px-4 py-2 font-bold text-left text-sm text-gray-700 border-b">Nombre</th>
                                    <th class="px-4 py-2 font-bold text-left text-sm text-gray-700 border-b">cost.unit</th>
                                    <th class="px-4 py-2 font-bold text-left text-sm text-gray-700 border-b">cantidad</th>
                                    
                                    <th class="px-4 py-2 font-bold text-left text-sm text-gray-700 border-b">Total</th>
                                    <th class="px-4 py-2 font-bold text-left text-sm text-gray-700 border-b">Accion</th>

                                </tr>
                            </thead>
                            <tbody>
                                <!-- Ejemplo de filas -->
                                <tr class="w-full">
                                
                                <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">001</td>
                                <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">Producto A</td>
                                <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">$10.00</td>
                                <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">$8.00</td>
                                
                                <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">50</td>
                                <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">
                                    <div class="flex items-center mt-1 ">
                                            <div for="" class="h-5 w-5 rounded-full bg-blue-600 border-2 border-blue-200 mr-2 focus:outline-none "> </div>
                                            <div for="" class="h-5 w-5 rounded-full bg-gray-600 mr-2 focus:outline-none "> </div>
                                            <div for="" class="h-5 w-5 rounded-full bg-pink-600 mr-2 focus:outline-none "> </div>
                                    </div>
                                </td>
                                </tr>

                                <tr class="bg-gray-50">
                                    <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">001</td>
                                    <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">Producto A</td>
                                    <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">$10.00</td>
                                    <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">$8.00</td>
                                    <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">50</td>
                                    <td class="px-4 py-2 text-sm text-gray-600 border-b border-gray-300">
                                        <div class="flex items-center mt-1 ">
                                            <div for="" class="h-5 w-5 rounded-full bg-blue-600 border-2 border-blue-200 mr-2 focus:outline-none "> </div>
                                            <div for="" class="h-5 w-5 rounded-full bg-gray-600 mr-2 focus:outline-none "> </div>
                                            <div for="" class="h-5 w-5 rounded-full bg-pink-600 mr-2 focus:outline-none "> </div>
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

                    
                    <div class="p-2 flex flex-row bg-white rounded-lg shadow-lg max-w-sm  lg:flex-row">
                    <!-- Imagen -->
                        <div class="relative md:w-1/2 w-full text-gray-600">
                            <div class="w-full p-1 ">
                                <div class="mb-8 flex  md:flex-row mb-4">
                                    <label for="name" class="text-2xl font-semibold text-gray-700 text-lg">Ganancias:</label> 
                                </div>
                                    <input id="name" type="text" name="name" placeholder="Ingresa tu nombre" class="mb-2 mr-4 flex h-full w-2/3 items-center justify-center rounded-lg border border-zinc-200 bg-gray-200 px-4 py-4 text-zinc-950 outline-none dark:!border-white/10 dark:text-white md:mb-0">
                                
                            </div>

                            <div class="w-full p-1 ">
                                <div class="mb-8 flex  md:flex-row mb-4">
                                    <label for="name" class="text-2xl font-semibold text-gray-700 text-lg">Ganancias:</label> 
                                </div>
                                    <input id="name" type="text" name="name" placeholder="Ingresa tu nombre" class="mb-2 mr-4 flex h-full w-2/3 items-center justify-center rounded-lg border border-zinc-200 bg-gray-200 px-4 py-4 text-zinc-950 outline-none dark:!border-white/10 dark:text-white md:mb-0">
                                
                            </div>
                        </div>
                    

                        <!-- Contenido lateral -->
                        <div class="w-full lg:w-1/2">
                            <div class="w-full p-2 ">
                                <div class="mb-8 flex  md:flex-row mb-4">
                                    <label for="name" class="text-2xl font-semibold text-gray-700 text-lg">PVP:</label> 
                                </div>
                                    <input id="name" type="text" name="name" placeholder="Ingresa tu nombre" class="mb-2 mr-4 flex h-full w-2/3 items-center justify-center rounded-lg border border-zinc-200 bg-gray-200 px-4 py-4 text-zinc-950 outline-none dark:!border-white/10 dark:text-white md:mb-0">
                                
                            </div>

                            <div class="w-full p-2 ">
                                <div class="mb-8 flex  md:flex-row mb-4">
                                    <label for="name" class="text-2xl font-semibold text-gray-700 text-lg">PVP:</label> 
                                </div>
                                    <input id="name" type="text" name="name" placeholder="Ingresa tu nombre" class="mb-2 mr-4 flex h-full w-2/3 items-center justify-center rounded-lg border border-zinc-200 bg-gray-200 px-4 py-4 text-zinc-950 outline-none dark:!border-white/10 dark:text-white md:mb-0">
                                
                            </div>
                            <div class="pt-4">
                                <button type="button" class=" inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs active:shadow-soft-xs tracking-tight-soft border-brown text-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white">
                                    Cancelar
                                </button>
                                <button type="button" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs active:shadow-soft-xs tracking-tight-soft border-brown text-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white">
                                    Guardar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>    
            </section>

    <!-- recomendados -->
    

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