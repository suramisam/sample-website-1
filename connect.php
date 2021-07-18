<?php
$con = new mysqli("localhost", "root", "surami","institute","3307");
if(!$con){
	die("Failed to Establish Database Connection");

}
	//connected database