<?php

/**
* MobileVerification Class
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
* @package   MobileVerification
*/
class MobileVerification
{

	private $mobileNumber="";

	public function setMobileNumber($n)
	{
		$this->mobileNumber=$n;
	}

	public function getCode()
	{
		 $l=strlen($this->mobileNumber);

		 $z=unserialize('a:10:{i:0;a:10:{i:0;i:7;i:1;i:3;i:2;i:1;i:3;i:5;i:4;i:4;i:5;i:0;i:6;i:6;i:7;i:8;i:8;i:9;i:9;i:2;}i:1;a:10:{i:0;i:3;i:1;i:7;i:2;i:0;i:3;i:4;i:4;i:6;i:5;i:2;i:6;i:5;i:7;i:1;i:8;i:8;i:9;i:9;}i:2;a:10:{i:0;i:9;i:1;i:3;i:2;i:6;i:3;i:0;i:4;i:2;i:5;i:5;i:6;i:7;i:7;i:4;i:8;i:1;i:9;i:8;}i:3;a:10:{i:0;i:5;i:1;i:7;i:2;i:1;i:3;i:9;i:4;i:0;i:5;i:6;i:6;i:4;i:7;i:3;i:8;i:8;i:9;i:2;}i:4;a:10:{i:0;i:4;i:1;i:9;i:2;i:2;i:3;i:5;i:4;i:3;i:5;i:8;i:6;i:1;i:7;i:6;i:8;i:7;i:9;i:0;}i:5;a:10:{i:0;i:5;i:1;i:1;i:2;i:4;i:3;i:2;i:4;i:8;i:5;i:0;i:6;i:6;i:7;i:3;i:8;i:9;i:9;i:7;}i:6;a:10:{i:0;i:1;i:1;i:4;i:2;i:8;i:3;i:5;i:4;i:9;i:5;i:7;i:6;i:2;i:7;i:6;i:8;i:3;i:9;i:0;}i:7;a:10:{i:0;i:0;i:1;i:5;i:2;i:6;i:3;i:9;i:4;i:4;i:5;i:2;i:6;i:8;i:7;i:3;i:8;i:7;i:9;i:1;}i:8;a:10:{i:0;i:9;i:1;i:5;i:2;i:6;i:3;i:7;i:4;i:0;i:5;i:2;i:6;i:3;i:7;i:4;i:8;i:1;i:9;i:8;}i:9;a:10:{i:0;i:2;i:1;i:9;i:2;i:8;i:3;i:0;i:4;i:4;i:5;i:1;i:6;i:3;i:7;i:5;i:8;i:6;i:9;i:7;}}');

		 $t=0;for($i=0;$i<$l;$i++)$t+=substr($this->mobileNumber,$i,1);

		 $k=$z[intval(substr("$t",-1))];$output=substr(implode($k),0,9);

		 $map="";while($l>0){$map.=$k[intval(substr($this->mobileNumber,$l-1,1))];$l--;}

		 if(strlen($map)>=9){$output=substr($map,0,9);}else{$output=$map.substr($output,0,9-strlen($map));}

		 return("$output");
	 }

}

?>
