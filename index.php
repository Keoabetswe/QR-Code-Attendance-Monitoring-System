<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Index</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    

  <div class="header">
  	<h2>QR Code Student Attendance Monitoring System</h2>
  </div>

  <main>       
        <nav class="nav">
          <a href="dashboard.php" class="nav__link nav__link">
            <i class="material-icons nav__icon">student</i>
            <span class="nav__text">Student</span>
          </a>

          <a href="attendanceHistory.php" class="nav__link--active">
            <i class="material-icons nav__icon">teacher</i>
            <span class="nav__text">Lecturer</span>
          </a>          
        </nav>
      </main>
        

    <div class="index">
      <form>
        <center><button href="lecturerLogin.php" style="width: 100px; height: 30px;">Lecturer</button>   
        <button href="studentLogin.php" style="width: 100px; height: 30px;">Student</button></center>
      </form>
    </div>      
        
    <script src="" async defer></script>
    </body>
</html>