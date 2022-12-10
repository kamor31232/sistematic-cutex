<?php include("../../database/db.php") ?>

<?php
if (isset($_POST['login'])) {
    $rol = $_POST['rol'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT u.id as id, r.id as rol FROM user as u INNER JOIN rol as r ON u.rol_id WHERE u.email = '$email' AND u.password = SHA1('$password') AND r.id= '$rol'";

    $result = mysqli_query($conn, $query);


    // 

    if (mysqli_num_rows($result) == 0) {
        $_SESSION['message'] = "Usuario no existe";
        $_SESSION['message_type'] = "danger";

        header("Location: ../../inicio.php");
        return;
    }

    $row = mysqli_fetch_array($result);

    $_SESSION['userId'] = $row['id'];

    $_SESSION['rolId'] = $row['rol'];


    header("Location: ../../usuario.php");
}
?>