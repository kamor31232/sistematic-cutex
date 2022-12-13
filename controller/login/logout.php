<?php

// Iniciar una session
session_start();

// Finalmente, destruir la sesión.
session_destroy();

header("Location: ../../inicio.php");
