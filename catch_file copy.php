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


   move

$data=[
    'filename'=>$name,
    'type'=>$_FILES['upload']['type'],
    'note'=>$_Post['note'],
    'path'=>'img/'.$name,
];
   echo "<pre>";

   
   echo"</pre>"



   save('file_info',$data);
   header("location:manges.php?=$name);
}
?>
