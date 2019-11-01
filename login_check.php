<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
$mysqli=mysqli_connect("localhost", "root", "113601","db1");

$check="SELECT * FROM user1 WHERE email='$email'";
$result=$mysqli->query($check);
if($result->num_rows==1)
{
  $row=$result->fetch_array(MYSQLI_ASSOC);
  if($row['password']==$password)
  {
    $_SESSION['email']=$email;
    if(isset($_SESSION['email']))
    {
      header('Location: ./main2.php');
    }
    else{
      echo "세션 저장 실패";
    }
  }
  else{
    echo "1.E-Mail 혹은 Password가 잘못되었습니다.";
    echo "<a href=login.php>back page</a>";
  }
}
else{
  echo "2.E-Mail 혹은 Password가 잘못되었습니다.";
  echo "<a href=login.php>back page</a>";
}
?>
