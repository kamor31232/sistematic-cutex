
<?php include("../../database/db.php") ?>
<?php

if (isset($_POST['save_user'])) {
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

    $query = "INSERT INTO user (names, surnames, document_number, address, email, password, cellphone, document_type_id, rol_id, company_id,gender) 
    VALUES ('$names','$surnames','$document_number','$address','$email',SHA1('$password'),'$cellphone',$document_type,$rol,1,'$gender')";

    echo $query;

    $result = mysqli_query($conn, $query);

    if (!$result) {
        echo "Usuario no insertado";
    }

    $_SESSION['message'] = "Usuario creado correctamente";
    $_SESSION['message_type'] = "success";

    header("Location: ../../usuario.php");
}
