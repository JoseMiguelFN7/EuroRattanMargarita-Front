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
        <form id="" enctype="multipart/form-data" class="flex flex-col bg-white rounded-lg shadow-lg max-w-sm p-2">
            <h2 class="block p-4 text-center text-gray-600 pt-6">
                Tipo de Material
            </h2>
            <div class="flex flex-col p-4">
                <div class=" md:w-1 w-full text-gray-600">
                    <div class="w-full p-1 mb-4 justify-center flex-col">
                    <div class="justify-center flex-col flex p-2">
                        <label for="name" class="text-left text-2xl font-semibold text-gray-700 text-lg mb-2">Ingrese el nuevo tipo de material</label>
                        <div class="justify-center flex p-2">
                        <input id="name" type="text" name="name" placeholder="tipo de material" maxlength="255" class="mb-2 mr-4 flex h-full w-1/2 items-center justify-center rounded-lg bg-gray-50 border border-gray-300 px-4 py-4 text-zinc-950 outline-none dark:!border-white/10 dark:text-white md:mb-0" required>
                        </div>
                        <div class="justify-center flex p-2">
                            <button id="submitBtn" type="submit" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs active:shadow-soft-xs tracking-tight-soft border-brown text-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white">
                                Añadir
                            </button> 
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form id="" enctype="multipart/form-data" class="flex flex-col bg-white rounded-lg shadow-lg max-w-sm p-2">
        <div class="flex flex-col ">
                <div class=" md:w-1 w-full text-gray-600">
                    <div class="w-full mb-4 justify-center flex-col">
                    <div class="justify-center flex-col flex">
                        <label for="name" class="text-left text-2xl font-semibold text-gray-700 text-lg mb-2">Ingrese el nuevo tipo de unidad</label>
                        <div class="justify-center flex ">
                        <input id="name" type="text" name="name" placeholder="tipo de unidad" maxlength="255" class="mb-2 mr-4 flex h-full w-1/2 items-center justify-center rounded-lg bg-gray-50 border border-gray-300 px-4 py-4 text-zinc-950 outline-none dark:!border-white/10 dark:text-white md:mb-0" required>
                        </div>
                        <div class="justify-center flex p-2">
                            <button id="submitBtn" type="submit" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs active:shadow-soft-xs tracking-tight-soft border-brown text-brown hover:border-brown hover:bg-brown hover:text-white hover:shadow-none active:text-white">
                                Añadir
                            </button> 
                        </div>
                    </div>
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
</html>