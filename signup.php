<?php
$email=$_POST['email'];
$password=$_POST['password'];
$pwc=$_POST['pwc'];
$grade=$_POST['grade'];
$nickname=$_POST['nickname'];

if($password!=$pwc)
{
  echo "비밀번호와 비밀번호 확인이 다릅니다.";
  echo "<a href=signup.html>back page</a>";
  exit();
}
$mysqli=mysqli_connect("localhost", "root", "113601","db1");

$check="SELECT *from user1 WHERE email='$email'";
$result=$mysqli->query($check);
if($result->num_rows==1)
{
  echo "중복된 E-Mail 입니다.";
  echo "<a href=signup.html>back page</a>";
  exit();
}

$signup=mysqli_query($mysqli, "INSERT INTO user1 (email, password, grade,nickname)
VALUES ('$email', '$password', '$grade','$nickname')");
if($signup)
{
  echo "회원가입에 성공했습니다.";
}
?>
<meta http-equiv='refresh' content='0;url=main2.php'>
