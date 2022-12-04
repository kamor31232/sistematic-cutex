<?php

$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'sistematic_cutex'
);

if(isset($conn)) {
    echo 'DB is connected';
}

?>