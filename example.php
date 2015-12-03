<?php

/**
* MobileVerification Class EXAMPLE
* Given a mobile phone number this class will generate a 9 digit verification code
* Copyright (C) 2008 Zafar Iqbal
*
* This program is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with this program.  If not, see <http://www.gnu.org/licenses/>.
*
* @author    Zafar Iqbal 
* @package   MobileVerification EXAMPLE
*/

$s='';

// Simple form to display to gather mobile phone number
print("<form><input name='s' type=text value='$s'/><input type='submit' value='Submit'></form>");
print("<hr>");

// Get the input mobile phone number
// Don't go any further if it is blank
if(isset($_GET['s'])){
    $mobileNumber=$_GET['s'];
}
if(strlen($mobileNumber)==0) exit;

// Include the class
include("class-mobileverification.php");

// Create object
$o=new MobileVerification();

// Call method to set mobile number. Parameter must be a string.
// This can include non numeric digits example: "+003069744628"
$o->setMobileNumber($mobileNumber);

// Get the verification code
// For "+003069744628" we will get "683445732"
$code=$o->getCode();

// Output some debug info
print("Input = $mobileNumber<br>Output = $code");

?>
