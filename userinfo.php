
<?php 

$con = mysqli_connect('localhost','root');
if ($con) {
    echo"connection successful";
}
else{
    echo"connection not established";
}

mysqli_select_db($con,"contact-form");

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'] ;

$query = "insert into userinfodata (user , email , mobile , comment)
    values('$user','$email',' $mobile','$comment')";

echo " $query";

mysqli_query($con, $query);

header("Location:index.php");

?>