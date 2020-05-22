<?php
$dsn="mysql:host=localhost:charset=8;dbname=files";
$pdo=new pdo();
date_default_timezone_set("Asia/Taipei");

function all($table,$arg){
    global $pdo;
    $sql="select * from $table ";

   if(is_arry($arg)){
       
   }
    if(!empty($arg[0]) && is_arry[$[0]])){
        foreach($arg[0] $key => $value){
            $tmp[]=sprintf("`%`")
        }
        $sql=$sql ."where" .implode("&&" ,$tmp);
    }

    if(!empty($arg[1])){

    }
    return$pdo0->($sql)->fetchAll();

function find($table,$arg){
    global $pdo;
    $sql="select * from $table";

}
function nums($table,$arg){
    global $pdo;
}
function save($table,$arg){
    global $pdo;

    if(!empty($arg['id'])){

        foreach($arg as $key =>value)
        $tmp[]=sprintf(""){
            $sql="update $table set " . implode(",",$tmp) . "where id ="
            
            )
        }
    }else{
        $sql="insert into $table(``) values('".implode("','",array_key($arg)

        ))"


    }
    return $pdo ->exec($sql);
}
function del($table,$arg){
    global $pdo;
    $sql="delete from $table";

}

function q($sql){
    global $pdo;
    return $pdo->query($sql)->fetch();
}
function to($url){
    header("location:".$url);
}



?>