<?php
$target_dir = "/usr/share/nginx/html/ls-wisuda-unikom/vod/src/assets";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) 
{
    /*$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }*/
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Maaf File dengan nama sama sudah ada";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000000) {
    echo "Maaf ukuran file terlalu besar";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "mp4" && $imageFileType != "flv")
{
    echo "Maaf hanya file mp4 dan flv saja yang dapat diunggah.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Maaf file tidak terunggah.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "Video ". basename( $_FILES["fileToUpload"]["name"]). " berhasil diunggah.";
        //write di xml

    } else {
        echo "Maaf terjadi kesalahan saat mengunggah file.";
    }
}
?>