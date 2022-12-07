<?php include("../../database/db.php") ?>
<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $status = $_GET['status'];

    $query = "UPDATE user SET status='$status' WHERE id = '$id'";

    $result = mysqli_query($conn, $query);

    if (!$result) {
        echo "Usuario no insertado";
    }

    $_SESSION['message'] = "Estado actualizado correctamente";
    $_SESSION['message_type'] = "success";

    header("Location: ../../usuario.php");
}

?>