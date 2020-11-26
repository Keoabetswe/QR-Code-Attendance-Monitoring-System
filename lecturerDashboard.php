<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Lecturer Dashboard</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">

         <link rel="icon" href="https://codingbirdsonline.com/wp-content/uploads/2019/12/cropped-coding-birds-favicon-2-1-192x192.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

        <style>
        .center-block {
            display: block;
            margin-left: auto;
            margin-right: auto;
           
        }

        </style>
    </head>
    <body>
      <main>       
        <nav class="nav">
          </a>
          <a href="lecturerDashboard.php" class="nav__link nav__link">
            <i class="material-icons nav__icon">dashboard</i>
            <span class="nav__text">Dashboard</span>
          </a>
        </nav>
      </main>

      <div class="header">
  	    <h2>Attendance System</h2>
      </div>
      
                    <form id="generateQrForm" class="form-signin">
                    <h5 class="card-title text-center">Generate QR Code</h5>
                        <div class="form-label-group">
                            <label for="inputEmail">Enter Module Code<span style="color: #FF0000"></span></label>
                            <input type="text" name="qrText" id="qrText" class="form-control" required placeholder="e.g. P4">
                        </div> <br/>
                       <div id="generatedQr text-center">
                            <img src="" id="generatedQrImg" class="center-block">
                        </div> <br/>
                        <button type="submit" name="generateQrBtn" id="generateQrBtn" class="btn btn-lg btn-primary btn-block text-uppercase" >Generate QR</button>
                    </form>
      <script type="text/javascript" src="js/generate-qr-js.js"></script>
    </body>
</html></style>