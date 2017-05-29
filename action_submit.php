<?php 
// require_once 'vendor/phpoffice/phpword/src/PhpWord/TemplateProcessor.php';
require_once 'vendor/autoload.php';

use \PhpOffice\PhpWord\TemplateProcessor;


// Creating the new document...
// $phpWord = new \PhpOffice\PhpWord\PhpWord();

// use PhpOffice\PhpWord\TemplateProcessor;

	$user_name = "root";
	$user_pass = "wisel@123";
	$host_name = "localhost";
	$db_name = "Fiverr1";

 	$name = $_POST["name"];
 	$email = $_POST["email"];
 	$phoneNumber = $_POST["phone-number"];
 	$companyName = $_POST["company-name"];
 	$year = $_POST["year"];

 	$award1 = $_POST["award1"];
 	$award2 = $_POST["award2"];
 	$award3 = $_POST["award3"];
 	$award4 = $_POST["award4"];

 	$res1 = $_POST["res1"];
 	$res2 = $_POST["res2"];
 	$res3 = $_POST["res3"];
 	$res4 = $_POST["res4"];
 	$res5 = $_POST["res5"];
 	$res6 = $_POST["res6"];
 	$res7 = $_POST["res7"];
 	$res8 = $_POST["res8"];
 	$res9 = $_POST["res9"];
 	$res10 = $_POST["res10"];

 	$project1 = $_POST["project1"];
 	$pro1_des1 = $_POST["pro1-des1"];
 	$pro1_des2 = $_POST["pro1-des2"];
 	$pro1_des3 = $_POST["pro1-des3"];
 	$pro1_des4 = $_POST["pro1-des4"];

 	$project2 = $_POST["project2"];
 	$pro2_des1 = $_POST["pro2-des1"];
 	$pro2_des2 = $_POST["pro2-des2"];
 	$pro2_des3 = $_POST["pro2-des3"];
 	$pro2_des4 = $_POST["pro2-des4"];

 	$project3 = $_POST["project3"];
 	$pro3_des1 = $_POST["pro3-des1"];
 	$pro3_des2 = $_POST["pro3-des2"];
 	$pro3_des3 = $_POST["pro3-des3"];
 	$pro3_des4 = $_POST["pro3-des4"];

 	$yearpg = $_POST["yearpg"];
 	$dpg = $_POST["dpg"];
 	$upg = $_POST["upg"];

 	$yearg = $_POST["yearg"];
 	$dg = $_POST["dg"];
 	$ug = $_POST["ug"];

 	$yearhs = $_POST["yearhs"];
 	$dhs = $_POST["dhs"];
 	$uhs = $_POST["uhs"];

 	$years = $_POST["years"];
 	$ds = $_POST["ds"];
 	$us = $_POST["us"];


$connection = mysqli_connect($host_name,$user_name,$user_pass,$db_name);
if($connection){

	$sql = "INSERT INTO Resume (name,email,phoneNumber,companyName,year,award1,award2,award3,award4,res1,res2,res3,res4,res5,res6,res7,res8,res9,res10,
	project1,pro1_des1,pro1_des2,pro1_des3,pro1_des4,,project2,pro2_des1,pro2_des2,pro2_des3,pro2_des4,project3,
	pro3_des1,pro3_des2,pro3_des3,pro3_des4,yearpg,dpg,upg,yearg,dg,ug,yearhs,dhs,uhs,years,ds,us) 
	VALUES ('$name','$email','$phoneNumber','$companyName','$year','$award1','$award2','$award3','$award4','$res1','$res2','$res3','$res4','$res5','$res6','$res7','$res8','$res9','$res10','$project1','$pro1_des1','$pro1_des2','$pro1_des3','$pro1_des4','$project2','$pro2_des1','$pro2_des2','$pro2_des3','$pro2_des4','$project3','$pro3_des1','$pro3_des2','$pro3_des3','$pro3_des4','$yearpg','$dpg','$upg','$yearg','$dg','$ug','$yearhs','$dhs','$uhs','$years','$ds','$us')";

	if(mysqli_query($connection, $sql)){
		$templateWord = new TemplateProcessor('dummy.docx');
		$templateWord->setValue('name',$name);
		$templateWord->setValue('email',$email);
		$templateWord->setValue('phoneNumber',$phoneNumber);
		$templateWord->setValue('companyName',$companyName);
		$templateWord->setValue('year',$year);
		$templateWord->setValue('award1',$award1);
		$templateWord->setValue('award2',$award2);
		$templateWord->setValue('award3',$award3);
		$templateWord->setValue('award4',$award4);
		$templateWord->setValue('res1',$res1);
		$templateWord->setValue('res2',$res2);
		$templateWord->setValue('res3',$res3);
		$templateWord->setValue('res4',$res4);
		$templateWord->setValue('res5',$res5);
		$templateWord->setValue('res6',$res6);
		$templateWord->setValue('res7',$res7);
		$templateWord->setValue('res8',$res8);
		$templateWord->setValue('res9',$res9);
		$templateWord->setValue('res10',$res10);
		$templateWord->setValue('project1',$project1);
		$templateWord->setValue('pro1_des1',$pro1_des1);
		$templateWord->setValue('pro1_des2',$pro1_des2);
		$templateWord->setValue('pro1_des3',$pro1_des3);
		$templateWord->setValue('pro1_des4',$pro1_des4);
		$templateWord->setValue('project2',$project2);
		$templateWord->setValue('pro2_des1',$pro2_des1);
		$templateWord->setValue('pro2_des2',$pro2_des2);
		$templateWord->setValue('pro2_des3',$pro2_des3);
		$templateWord->setValue('pro2_des4',$pro2_des4);
		$templateWord->setValue('project3',$project3);
		$templateWord->setValue('pro3_des1',$pro3_des1);
		$templateWord->setValue('pro3_des2',$pro3_des2);
		$templateWord->setValue('pro3_des3',$pro3_des3);
		$templateWord->setValue('pro3_des4',$pro3_des4);
		$templateWord->setValue('yearpg',$yearpg);
		$templateWord->setValue('dpg',$dpg);
		$templateWord->setValue('upg',$upg);
		$templateWord->setValue('yearg',$yearg);
		$templateWord->setValue('dg',$dg);
		$templateWord->setValue('ug',$ug);
		$templateWord->setValue('yearhs',$yearhs);
		$templateWord->setValue('dhs',$dhs);
		$templateWord->setValue('uhs',$uhs);
		$templateWord->setValue('years',$years);
		$templateWord->setValue('ds',$ds);
		$templateWord->setValue('us',$us);
		
		ob_clean();
		$templateWord->saveAs("resumes/".$name.".docx");


	}else{
		echo "cant insert";
	}
}else{
	echo "connection error";
}

mysqli_close($connection);


// mysqli_close($connection);


 ?>