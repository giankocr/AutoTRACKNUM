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
class qSerial {
public function NoSeries() {
    include_once 'class.conexion.php';
        $con = new Conexion();
        $sql2 = $con->query("SELECT max(id) FROM serials;");
        $result = $con->fetcharray($sql2); 
        $x = $result[0];
    $numZero = 7 - strlen($x);
    $Serial = 'CRC'.str_repeat('0', $numZero).$x;
    $x++;
    $sql = "INSERT INTO serials(serial,created_date)VALUES('$Serial',NOW());";
      $con->insert($sql);
    $sql3 = $con->query("SELECT serial FROM serials WHERE serial = '$Serial';");
        $track = $con->fetcharray($sql3); 
        session_start();
        $_SESSION['track']= $track[0];
} 
}
