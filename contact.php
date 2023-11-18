<?php
$conn=mysqli_connect("localhost","root","","portfoli");
if($conn){
    echo "connect";
}
if(!isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['sub'];
$message=$_POST['msg'];
echo $name;

$query="insert into request values('$name','$email','$subject','$message')";
mysqli_query($conn,$query);

}
?>