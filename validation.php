<?php

	$date=date("d.m.y"); // число.месяц.год 
	$time=date("H:i"); // часы:минуты:секунды 
	$name = $_POST['first_name'];
	$lastname = $_POST['last_name'];
	$phone = $_POST['phone'];
	$region = $_POST['region'];
	$email = $_POST['email'];

	$info = "$date/$time/$name/$lastname/$phone/$email/$region";
	$f = fopen("ge_rep_contacts.txt", "a+");  
	fwrite($f,"\n$info ");
	fclose($f);
	
?>