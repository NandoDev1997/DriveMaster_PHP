<script>
    $(document).ready(function() {
        $("#pag_archivos_publicos").change(function() {
            $("#pag_archivos_publicos").addClass('active')
            $("#titulo_page").text('Archivos Públicos')
            
        }).trigger('change');
    });
</script>