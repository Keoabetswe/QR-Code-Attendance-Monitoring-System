<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Lecturer Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    

  <div class="header">
  	<h2>Lecturer Login</h2>
  </div>

  <div>
    <form method="post" action="lecturerLogin.php">
        <?php include('errors.php'); ?>
        <div class="input-group">
            <label>Email</label>
            <input type="text" name="lecturer_email" >
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="lecturer_password">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="lecturer_login">Login</button>
        </div>
    </form>
    </div>      
        
    <script src="" async defer></script>
    </body>
</html>