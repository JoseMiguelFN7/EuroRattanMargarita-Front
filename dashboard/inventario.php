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

        <section class="">
          <div class="md:mb-0 pt-6"> 
            <h1 class=" text-xxl font-medium text-center text-gray-600 md:text-stroke-brown cursor-pointer" onclick="window.location.href='./'">Inventario</h1>
          </div>
        </section>

        <div class="flex flex-end items-center p-6 py-1 mt-0 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto relative">
          <div class="flex items-center w-full md:pr-4">
              <form id="formBuscar" method="get" action="./search.php" class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
                  <span class="text-sm ease-soft leading-5.6 absolute z-10 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                      <i class="fas fa-search"></i>
                  </span>
                  <input type="text" name="search" class="mr-2 pl-8.75 text-sm focus:shadow-soft-brown-outline ease-soft w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-brown focus:outline-none focus:transition-shadow" placeholder="Buscar..." required/>
                  <button type="submit" class="px-8 py-2 font-bold text-center uppercase transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs active:shadow-soft-xs tracking-tight-soft border-brown text-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white">Buscar</button>
              </form>
          </div>
        </div>

<div class="flex flex-wrap mx-3 p-4">
  <div class="flex-none w-full max-w-full px-3">
    <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
      <div class="flex-auto">
        <!-- Define un alto máximo y overflow-y: auto -->
        <div class="max-h-96 overflow-y-auto border border-gray-300 rounded-lg p-4">
          <table class=" table-auto border-collapse overflow-y-scroll w-full ">
            <thead class="bg-gray-100 sticky top-0 z-10 ">
              <tr class="w-full">
                <th class="px-4 py-2 font-bold text-left text-sm text-gray-700 border border-gray-300">Cod.</th>
                <th class="px-4 py-2 font-bold text-left text-sm text-gray-700 border border-gray-300">Nombre</th>
                <th class="px-4 py-2 font-bold text-left text-sm text-gray-700 border border-gray-300">Precio</th>
                <th class="px-4 py-2 font-bold text-left text-sm text-gray-700 border border-gray-300">PrecioC</th>
                <th class="px-4 py-2 font-bold text-left text-sm text-gray-700 border border-gray-300">Stock</th>
              </tr>
            </thead>
            <tbody>
              <!-- Ejemplo de filas -->
              <tr>
                <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">001</td>
                <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">Producto A</td>
                <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">$10.00</td>
                <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">$8.00</td>
                <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">50</td>
              </tr>
              <tr class="bg-gray-50">
                <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">002</td>
                <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">Producto B</td>
                <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">$15.00</td>
                <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">$12.00</td>
                <td class="px-4 py-2 text-sm text-gray-600 border border-gray-300">30</td>
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