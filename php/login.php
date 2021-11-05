<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Unifichiamoci</title>
    <link rel="stylesheet" href="../css/login.css" type="text/css">
  </head>
  <body>
    <script src="../js/login.js" charset="utf-8"></script>
      <div class="major">
        <form method="POST" action="check.php">
          <h1 class="title">Accedi</h1>
          <h1>Username</h1>
          <input type="text" name="username" id="username_input">
          <h1>Password</h1>
          <input type="password" name="Password" id="password_input">
          <br>
          <input type="submit" name="button_to_log" value="Accedi" class="accesso">
        </form>
        <input type="submit"name="password_view" value="Mostra Password" onclick="change_view();" class="viewchanger">
      </div>
    <p id="error">Username o password errati.<br> Se il problema persiste, contattare l'amministratore</p>
    <?php
    if (isset($_GET['check_text'])){
      if (htmlspecialchars($_GET["check_text"]) == "error") {
        echo "<script>document.getElementById('error').style.visibility = 'visible';</script>";
      }
    }
     ?>
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
