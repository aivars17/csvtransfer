<?php
$file = fopen("customers.csv","r");
$newfile = fopen("emails.csv","w"); 
for($id=1;!feof($file);$id++) {
 	 $user = explode(",",rtrim(fgets($file),"\n"));
 	 fwrite($newfile, $id.",".$user[0].",".$user[0]."@php.lt,".$user[1]);
 }
 fclose($file);  
 fclose($newfile);  



 // foreach ($users as $user) {
 //  	 $row = implode(',', $user[0]);
 //  	 $row .= "\n";
 //  	fwrite($newfile, $row);
 //  }
 //  fclose($newfile);