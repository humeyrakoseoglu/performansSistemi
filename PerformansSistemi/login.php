<!--HÜMEYRA KÖSEOĞLU-->

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="https://suggest.magna.com/oneri/img/favicon.ico">	
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/login.css">

  <title>Sign in</title>
</head>

<body>
<img src="images\logo-text.png"  alt="Magna Seating" width="300" height="60">

  <div class="main">

    <!-- Log in kısmı -->
    <p class="sign" align="center">Sign in</p>
    <form name="login">
      <input class="un " name="userid" type="text" align="center" placeholder="Username">
      <input class="pass" name="pswrd" type="password" align="center" placeholder="Password">
      <input class="submit" type="button" onclick="check(this.form)" value="Login"/>
 
    </form>          
  </div> 
</body>
<script language="javascript">
            function check(form) { 
                if(form.userid.value == "myuserid" && form.pswrd.value == "mypswrd") {
                    window.open('index.php')
                }
                else {
                    alert("Error Password or Username")
                }
            }
        </script>
</html>