<div class="flex flex-end items-center w-2/3 mt-0 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto relative">
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