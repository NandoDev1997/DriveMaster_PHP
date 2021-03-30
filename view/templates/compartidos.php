<script>
    $(document).ready(function() {
        $("#pag_compartidos").change(function() {
            $("#pag_compartidos").addClass('active')
            $("#titulo_page").text('Compartidos conmigo')
            
        }).trigger('change');
    });
</script>