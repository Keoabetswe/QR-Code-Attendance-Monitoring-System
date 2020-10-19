<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Lecturer Dashboard</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="https://rawgit.com/sitepoint-editors/jsqrcode/master/src/qr_packed.js"></script>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
      <main>       
        <nav class="nav">
          <a href="attendanceHistory.php" class="nav__link--active">
            <i class="material-icons nav__icon">list</i>
            <span class="nav__text">Register</span>
          </a>
          <a href="dashboard.php" class="nav__link nav__link">
            <i class="material-icons nav__icon">dashboard</i>
            <span class="nav__text">Dashboard</span>
          </a>

          <a href="attendanceHistory.php" class="nav__link--active">
            <i class="material-icons nav__icon">qr_code</i>
            <span class="nav__text">Generate Code</span>
          </a>          
        </nav>
      </main>

      <div id="container">
        <h1>QR Code Scanner</h1>

        <a id="btn-scan-qr">
          <img src="https://dab1nmslvvntp.cloudfront.net/wp-content/uploads/2017/07/1499401426qr_icon.svg">
        </a>

        <canvas hidden="" id="qr-canvas"></canvas>

        <div id="qr-result" hidden="">
          <b>Data:</b> <span id="outputData"></span>
        </div>
      </div>
        
    <script src="js/app.js" async defer></script>
    </body>
</html>