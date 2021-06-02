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

<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>
    <h1>Student Form</h1>
	<form method="_POST">
     id:<input type="number" name="txt1"/><br><br>
     name:<input type="text" name="txt2"/><br><br>
     gender:<select name="txt3">
            <option>male</option>
            <option>female</option>
           </select><br><br>
     E-mail:<input type="email" name="txt4"><br><br>
     mobile no:<input type="number" name="txt5"/><br><br>
     Address:<input type="text" name="txt6"><br><br>
     Pincode:<input type="number" name="txt7"><br><br>
     Bloodgroup:<input type="text" name="txt8"><br><br>
     Hobby:<input type="text" name="txt9"><br><br>
     City:<input type="text" name="txt10"><br><br>
      <input type="submit"/> 

      </form>

</body>
</html>