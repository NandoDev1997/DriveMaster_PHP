<!-- Main content -->
<section class="content">
  <div class="error-page">
    <h2 class="headline text-warning"> 404</h2>

    <div class="error-content">
      <h3><i class="fas fa-exclamation-triangle text-warning"></i> Que mal! Pagina no encontrada.</h3>

      <p>
        No se pudo encontrar la pagina que buscabas.
        Mentras tanto, puedes <a href="index.php?pagina=inicio">regresar al inicio.</a>
      </p>

    </div>
    <!-- /.error-content -->
  </div>
  <!-- /.error-page -->
</section>
<!-- /.content -->
<script>
  $(document).ready(function() {
    $("#pag_inicio").change(function() {
      $("#titulo_page").text('404 Pagina no encontrada')
      $("#breadcum_second").text('404 Pagina no encontrada')
    }).trigger('change');
  });
</script>