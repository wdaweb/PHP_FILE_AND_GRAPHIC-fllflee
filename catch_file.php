<?php

echo "<pre>";
print_r($_FILES);
echo "</pre>";

echo $_FILES['upload']['name'];



if($_FILES['upload']['error']==0){

    switch($_FILES['upload']['type']==0){
    case "image/jpeg";
    $sub='.jpg';
    break;
    case "image/png";
    $sub='.png';
    break;
    case "image/gif";
    $sub='.gif';
    break;
}
   $name=date("Ymdhis").$_sub;

   move_upload_file($_FILES['upload']
   ['tmp_name'],"img/".$_FILES['upload].
   ['name']);



   header("location:upload.php?=$name)
}
?>

<img src="img/<?=$_FILES['upload']['name'];?>" alt="">