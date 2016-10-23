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
class Conexion extends mysqli{
    public function __construct(){
        parent::__construct('localhost','root','','tracking');
        $this->query("SET NAMES 'utf8';");
        $this->connect_errno ? die('Error conexion') : $x = 'Conected';
        #echo $x;
        unset($x);
    }
    public function fetcharray($fa){
        return mysqli_fetch_array($fa);
    }
    public function fetch_assoc($fasoc){
        return mysqli_fetch_assoc($fasoc);
    }
    public function insert($in){
        $db = new Conexion();
        $db->query($in);
    }
    function FetchRow($result) 
    {
	return mysqli_fetch_row($result);
    }

    function FreeResult($result)
    {
	return mysqli_free_result($result);
    }
    function CountFields($result)
    {
        return mysqli_field_count($result);
    }
}