<div class="px-7 relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
    <span class="text-sm ease-soft leading-5.6 absolute z-10 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
        <i class="fas fa-search"></i>
    </span>
    <input id="searchInput" type="text" class="pl-8.75 text-sm focus:shadow-soft-brown-outline ease-soft w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-brown focus:outline-none focus:transition-shadow" placeholder="Buscar..."/>
</div>

<script>
    $(document).ready(function(){
        // Evento de búsqueda
        $('#searchInput').on('keyup', function() {
            let value = $(this).val().toLowerCase();
            $('tbody tr').filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>