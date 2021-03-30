<?php 
require_once ('config/config.php');
require_once (RUTA_APP. '/control/plantilla_control.php');
session_destroy();
unset($_SESSION['usuario']);
echo '
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
    window.location = "index.php?pagina=inicio"
</script>
';
?>