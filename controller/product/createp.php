<?php include("../../database/db.php") ?>
<?php

if (isset($_POST['save_product'])) {
    $name = $_POST['name'];
    $reference = $_POST['reference'];
    $description = $_POST['description'];
    $stock = $_POST['stock'];
    $price = $_POST['price'];
    $measure = $_POST['measure'];
    $provider = $_POST['provider'];
    $color = $_POST['color'];
    $subcategory = $_POST['subcategory'];
    $user = $_POST['user'];

    $query = "INSERT INTO product (name, reference, description, stock, price, measure, provider_id  , color_id,  subcategory_id , user_id, company_id) 
    VALUES ('$name','$reference','$description','$stock','$price','$measure','$provider',$color,$subcategory,'$user',1)";

    echo $query;

    $result = mysqli_query($conn, $query);

    if (!$result) {
        echo "Producto no insertado";
    }

    $_SESSION['message'] = "Producto creado correctamente";
    $_SESSION['message_type'] = "success";

    header("Location: ../../producto.php");
}
