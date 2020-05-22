<?php
$dsn="mysql:host=localhost:charset=utf8;dbname=files";
$pdo=new pdo();
date_default_timezone_set("Asia/Taipei");


function all($table,...$arg){
    global $pdo;
    $sql="select * from $table ";

   if(!empty($arg[0]) && if_array($arg[0])){
       foreach($arg[0] as $key => $value){
           $tmp[]=sprintf("`%s`='%s'",$key,$value);
       }
   }
   $sql=$sql . "where".implode("&&",$tmp);
      }
     if(!empty($arg[1])){
         $sql=$sql . $arg[1];
    }
    return $pdo ->query($sql)->fetchAll();
}

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