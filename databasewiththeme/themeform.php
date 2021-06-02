<?php
$host="localhost";
$username ="root";
$passwd ="";
$dbname = "Student";        
$connection = mysqli_connect($host,$username,$passwd,$dbname);

if($_POST){

    $id = $_POST['txt1'];
    $name = $_POST['txt2'];
    $gender = $_POST['txt3'];
    $email = $_POST['txt4'];
    $mobile = $_POST['txt5'];
    $address = $_POST['txt6'];
    $pincode = $_POST['txt7'];
    $bloodgroup = $_POST['txt8'];
    $hobby = $_POST['txt9'];
    $city = $_POST['txt10'];

    $q = mysqli_query($connection , "insert into tbl_student(st_id,st_name,st_gender,st_email,st_mobile,st_address,st_pincode,st_bloodgroup,st_hobby,st_city) values('{$id}','{$name}','{$gender}','{$email}','{$mobile}','{$address}','{$pincode}','{$bloodgroup}','{$hobby}','{$city}')") or die("error".mysqli_error($connection));
    if ($q) {
        echo "<script> alert('record added');</script>";
    }
}

?>