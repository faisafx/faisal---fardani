<?php

include("config.php");



if(isset($_POST['Kirim'])){

    
$EMAIL = $_POST['email'];
$PESAN = $_POST['pesan'];


$sql = "INSERT INTO pesan_text (EMAIL, PESAN) VALUE ('$EMAIL', '$PESAN')";
$query = mysqli_query($db, $sql);


if( $query ) {
    
    header('Location: contact.php?status=sukses');
} else {
    
    header('Location: contact.php?status=gagal');
}


} else {
die("Akses dilarang...");
}

?>