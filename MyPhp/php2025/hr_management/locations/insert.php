<?php 
	location_insert();
	function location_insert(){
		$server="localhost";
		$user="root";
		$password="";
		$database="hr_management";
		$conn=new mysqli($server, $user, $password, $database);
		if($conn->connect_error){
			die("Database Connect Failed." .$conn->connect_error);
		}else{
			echo"Database Connection Successfully." ."</br>";
		}
		
		$add=""; $country_id=""; $division_id=""; $city_id="";
		if($_SERVER["REQUEST_METHOD"] =="POST"){
			if($_POST["address"] !=""){
				$add=$_POST["address"];
			}
			if($_POST["country_id"] !=""){
				$country_id=$_POST["country_id"];
			}
			if($_POST["division_id"] !=""){
				$division_id=$_POST["division_id"];
			}
			if($_POST["city_id"] !=""){
				$city_id=$_POST["city_id"];
			}
			
			$data="insert into locations(address, country_id, division_id, city_id) 
				value('$add', '$country_id', '$division_id', '$city_id')";
			if($conn->query($data) ==1){
				echo"Data Insert Successfully.";
			}else{
				echo"Error." .$data ."</br>" .$conn->error;
			}
		}
	}
?>
