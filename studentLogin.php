<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Student Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    

  <div class="header">
  	<h2>Student Login</h2>
  </div>

  <div>
    <form method="post" action="server.php">
        <?php include('errors.php'); ?>
        <div class="input-group">
            <label>Student Number</label>
            <input type="text" name="student_num" placeholder="Student Number">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="student_password" placeholder="Password">
        </div>
        <div class="input-group">
            <input type="submit" class="btn" name="student_login" value="Login">
        </div>
    </form>
    </div>      
        
    <script src="" async defer></script>
    </body>
</html>