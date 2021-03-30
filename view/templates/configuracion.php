<script>
    $(document).ready(function() {
        $("#pag_configuracion").change(function() {
            $("#pag_configuracion").addClass('active');
            $("#titulo_page").text('Configuracion')
            
        }).trigger('change');
    });
</script>