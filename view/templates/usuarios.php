<script>
    $(document).ready(function() {
        $("#pag_usuarios").change(function() {
            $("#pag_usuarios").addClass('active')
            $("#titulo_page").text('Usuarios')

        }).trigger('change');
    });
</script>