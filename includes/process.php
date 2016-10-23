<?php
/* 
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
 */
  require_once('recaptchalib.php');
  $privatekey = "6LfftQkUAAAAAHFk5nlBwd6ja0eEN7Fi5uAzqKXU";//CHANGE YOUR OWNER PRIVATE KEY reCAPTCHA
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ( 
            header ("location: ../index.php?action=error").
            
            "The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")");
  } else {
    // Your code here to handle a successful verification
      include_once ('class.superhero.php');
        $serials = new qSerial();
        $serials->NoSeries();
        ECHO $_SESSION['track'];
        session_start();
        header ("location: ../index.php?action=successfull&tracking=".FILTER_VAR($_SESSION['track'])."");
  }
  