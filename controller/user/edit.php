
<?php include("../../database/db.php") ?>
<?php

if (isset($_POST['edit_user']) && isset($_GET['id'])) {
    $id = $_GET['id'];
    $names = $_POST['names'];
    $surnames = $_POST['surnames'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $document_type = $_POST['document_type'];
    $rol = $_POST['rol'];
    $document_number = $_POST['document_number'];
    $cellphone = $_POST['cellphone'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "UPDATE user SET names= '$names', surnames= '$surnames', address= '$address', gender= '$gender', document_type_id = '$document_type', rol_id = '$rol', document_number= '$document_number', cellphone= '$cellphone', email= '$email' WHERE id=$id";

    $result = mysqli_query($conn, $query);

    if ($password != '') {
        $queryP = "UPDATE user SET password=SHA1('$password') WHERE id=$id";
        mysqli_query($conn, $queryP);
    }

    if (!$result) {
        echo "Usuario no actualizado";
    }

    $_SESSION['message'] = "Usuario actualizado correctamente";
    $_SESSION['message_type'] = "success";

    header("Location: ../../usuario.php");
}
