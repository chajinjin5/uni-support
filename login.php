<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="CSS_defalt.css">
    <link rel="stylesheet" href="CSS_defalt1.css">
    <link rel="stylesheet" href="CSS_style.css">
    <style>
      #c { background-color: #FF6347; color: white; }

      #c:hover:not(#c) { background-color: #CD853F; color: white; }
    </style>
  </head>
  <body class="ab">
    <h1>대학 모의 지원</h1>
    <ul class="a">
       <li><a href="main.php">Home</a></li>

       <ul class="b">
         <li><a id="c" href="login.php">로그인</a></li>
       </ul>

    </ul>
  </body>
  <body>
    <form action="login_check.php" method="post">
      <fieldset>
            <h2>로그인</h2>
        <div class="login">
          <ul class="top">

           <li><label for="txt1">E-mail</label><input type="email" id="txt1"
             placeholder="Enter E-mail" name="email" required></li>

           <li><label for="txt2">비밀번호</label><input type="password" id="txt2"
             placeholder="Enter Password" name="password" required></li>

           <li class="btn"><button type="submit">로그인</button></li>

           <li><label for="chk1"><input type="checkbox" id="chk1"
             checked="checked" name="remember">ID 저장</label></li>

       </ul>
    <!--<ul class="bot">
           <li>아이디를 잊으셨나요?<a href="#a">아이디 찾기</a></li>
           <li>비밀번호를 잊으셨나요?<a href="#a">비밀번호 찾기</a></li>
        </ul>-->
      </div>
      </fieldset>
    </form>
    <button onclick="location.href='signup.html'">회원가입</button>
  </body>
</html>
