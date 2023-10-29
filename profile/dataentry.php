<?php
include ("contact.php");
// get the post records
$name = $_POST['name'];
$surname = $_POST['surname'];
$mobilenumber = $_POST['mobilenumber'];
$address = $_POST['address'];
$gender =$_POST['gender'];
$postcode =$_POST['postcode'];
$state =$_POST['state'];
$area =$_POST['area'];
$lanlinenumber =$_POST['lanlinenumber'];
$country =$_POST['country'];
$region =$_POST['region'];
$BDDdate =$_POST['BDDdate'];
$namebloodbank =$_POST['namebloodbank'];

// database insert SQL code
$mkbhd = "INSERT INTO `profile` (`name`, `surname`, `mobilenumber`, `address`, `gender`, 'postcode', 'state', 'area', 'lanlinenumber', 'country', 'region', 'BDDdate', 'namebloodbank') 
VALUE ('$name', '$surname', '$mobilenumber', '$address', '$gender', '$postcode', '$state', '$area', '$lanlinenumber', '$country', '$region', '$BDDdate', '$namebloodbank')";

// insert in database 
$rs = mysqli_query($conn, $mkbhd);

if($rs)
{
	echo "<script>
    alert('Thank You for your sign up Your data will be safe here !');
    window.location.href='profile.html';
    </script>";
}else{
    echo "<script>
    alert('Thank You for your sign up Your data will be safe here !');
    window.location.href='profile.html';
    </script>";
}

?>