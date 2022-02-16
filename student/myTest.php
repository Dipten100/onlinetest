<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MyTest</title>
    <link rel="icon" type="image/x-icon" href="icon.PNG" />
    <link rel="stylesheet" href="myTest.css" />
    <link rel="stylesheet" href="mytestmenu.css" />
    <link rel="stylesheet" href="help.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <!-- header -->
    <div class="header"><img src="icon.PNG" alt="wait" />&nbsp; Mytest 
      <div class="logo" style="color:green;cursor:pointer" onclick="already()"><i class="material-icons">person</i>Login</div>
    </div>
    </div>
    <br />
    <script>
      function already(){
        if(window.confirm("You already sign in Are you want to Log out ?")){
          window.open("mytestHomePage.php","_self");
        }
      }
    </script>
    <!-- Menu -->
    <div class="menu">
      <nav>
      <a href="#bdy">Home</a>
      <a href="OnlineTest\OnlineTest.php">Online Test</a>
      <a href="Practice\Quiz Application with Timer\index.php">Practice</a>
      <a href="learn\learn.php">Learn</a>
      <a href="contact.php">Contact</a>
      <div class="animation start-home"></div>
    </nav>
    </div>
    <br><br>
    <br />
    <br />
    <!-- body -->
    <div>
      <p id="bdy">
        <center>
          <div class="body-heading">
            Welcome to MyTest - Your Online Exam Partner
          </div>
          <br />
          <div class="body-footer">
            Let's Create or Conduct Online Examination for Your Prestigious
            Institute and/or Organization. <br />Let's Start your Awesome
            Experience of Online Test Creation!! Create your TestYou Profile
            with Relevant Category, Searchable Name and Effective Description.
            Please look at Advance Options also to make your Test specific and
            Search Friendly. <br />Awesome!! Very Useful and Helpful Test
            Setting that will give the so many options/ Edges to your test in
            Competitive Market. Test Setting is the Platform where you Conduct
            and Organize Tests as You Desired. Let’s go through with Each
            Setting (in General Setting and Advance Setting Tab) and Use
            Smartly.
            <br>
            <br>
            <ol type="1">
              <li>Demo for Student mode to get familiar with test pattern.
              <li>Student section provides you a detailed preview.
              <li>Sign-up after the demo to get full access.</li>
          </ul>
          </div>
        </center>
      </p>
    </div>
    <br><br>
    <div class="help" style="background-color: #390741; padding-left:30%;color: white">
      <p>help desk</p>
      <p><h1>Follow Us on
        <br>
        <div class="fa">
          <a href="#" class="fa fa-facebook"></a> &nbsp;
          <a href="#" class="fa fa-twitter"></a>&nbsp;
          <a href="#" class="fa fa-linkedin"></a>&nbsp;
          <a href="#" class="fa fa-youtube"></a>&nbsp;
          <a href="#" class="fa fa-instagram"></a>
        </div>
      </p>
    </div>
  </body>
</html>
