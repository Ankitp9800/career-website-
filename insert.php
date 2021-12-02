<?php
$username=$_POST['username'];
$gmail=$_POST['gmail'];
$number=$_POST['number'];
$gender=$_POST['gender'];
$password=$_POST['password'];

if(!empty($username)|| !empty($gmail)|| !empty($number)|| !empty($gender)|| !empty($password)){
    $host="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbname="insert";

    //create connection
    $conn=new mysqli($host,$dbUsername,$password,$dbname);

    if(mysqli_connect_error()){
        die('connect error('. mysqli_connect_errno().')'. mysqli_connect_error());

    }
    else{
        $SELECT="SELECT email From register where gmail=? Limit 1";
        $INSERT="INSERT Into register(username,gmail,number,gender,password)values(?,?,?,?,?)";
         
        //prepare statement
        $stmt=$conn->prepare($SELECT);
        $stmt->bind_param("s",$gmail);
    }
}
else{
    echo"all fields are required";
    die();
}
?>