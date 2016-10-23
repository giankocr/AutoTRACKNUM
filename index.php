<!DOCTYPE html>
<!--
    Copyright (C) 2016 gianko.com <email://gian@gianko.com>
	This file is part of AutoTRACKNUM.

    AutoTRACKNUM is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    AutoTRACKNUM is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with AutoTRACKNUM.  If not, see <http://www.gnu.org/licenses/>.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>AutoGeneration Tracking Number</title>
	<meta name="description" content="A Simple Solution to autogenerate tracking number." />
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link href="css/home.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/sweetalert2/5.2.1/sweetalert2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/sweetalert2/5.2.1/sweetalert2.min.css" rel="stylesheet" />
    </head>
    <script type="text/javascript">
 var RecaptchaOptions = {
    theme : 'white',
    custom_theme_widget: 'recaptcha_widget'
 };
 </script>
    <body class="body">
        <?php 
    switch(FILTER_INPUT(INPUT_GET,'action')){
    case 'successfull':
     $tracking = FILTER_INPUT(INPUT_GET,'tracking');
     echo '<script type="text/javascript">';
      echo 'setTimeout(function () { swal("Your tracking#: '.$tracking.'","Congratulations","success");';
      echo '}, 1000);</script>';
    break;
    case 'error':
         echo '<script type="text/javascript">';
      echo 'setTimeout(function () { swal("Sorry :(","Please,type the reCAPTCHA","error");';
      echo '}, 1000);</script>';
        break; 
    }
    ?>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 title">
                    <p class="color-w text-center ">AutoGeneration Tracking Number</p>
                    <p class="colorw text-center ">This is a sample code to autogeration of tracking number</p>
                </div>
                
            </div>
           
                
                <form method="POST"  class="" action="includes/process.php">
                     <div class="container col-md-4 col-md-push-4 col-sm-2 col-sm-push-2 text-center well">
                    <div class="row  text-center"  id="recaptcha_widget">
                    <?php
                      require_once('includes/recaptcha/recaptchalib.php');
                      $publickey = "6LfftQkUAAAAAOn-LRA9Wn4Jg9IZDSukEs8CwQmo"; //CHANGE YOUR OWNER PUBLIC KEY reCAPTCHA
                      echo '<div class="col-md-12">'.recaptcha_get_html($publickey).'</div>';
                    ?>
                         <div class="col-md-12"><input type="submit" id="track" value="Generar" class="btn btn-lg col-md-12 btn-success"/></div>
                     </div>
                        
                    </div>
                </form>
            
        </div>
    </body>
</html>