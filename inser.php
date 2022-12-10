<?php
if()
$name = $_post['name'];
$password = $_post['password'];
$db ="mydb";


$conn = mysqli_connect($servername, $username, $password,$mydb);
$insert ="insert into login values(1,'sro','omdrman')";
$update ="update login set name='sro'where id= 1";

$q =mysqli_query($conn,$insert);
if($q){
    echo "ok";

}
else{
    echo mysqli_error($conn);
}
}
?>