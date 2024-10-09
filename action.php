<? 
$email=$_POST['email'];
$login=$_POST['login'];
$message=$_POST['message'];
echo $login;
echo $email;
echo $message;
$servername="localhost";
$username="root";
$password="root";
$adname="tea";
$connect=mysqli_connect($servername,$username,$password,$adname);
 mysqli_set_charset($connect,"utf8");
{
$result=mysqli_query($connect,"INSERT INTO volonter(`id`, `email`, `login`, `message`) VALUES (NULL, '$email', '$login', '$message')");
}
