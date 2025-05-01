<?php
    if($_SERVER["REQUEST_METHOD"] =="POST"){
        if($_POST["first_name"] !=""){
            echo "First Name:".$_POST["first_name"]."</br>";
        }
        if($_POST["last_name"] !=""){
            echo "Last Name:".$_POST["last_name"]."</br>";
        }
        if($_POST["email"] !=""){
            echo "Email:".$_POST["email"]."</br>";
        }
        if($_POST["password"] !=""){
            echo "Password:".$_POST["password"]."</br>";
        }
        if($_POST["confirm_password"] !=""){
            echo "Confirm Password:".$_POST["confirm_password"]."</br>";
        }
        if($_POST["gender"] !=""){
            echo "Gender:".$_POST["gender"]."</br>";
        }
        if($_POST["hobbies"] !=""){
            echo "Hobbies:".$_POST["hobbies"]."</br>";
        }
        if($_POST["source_of_income"] !=""){
            echo "Source of Income:".$_POST["source_of_income"]."</br>";
        }
        if($_POST["myfile"] !=""){
            echo "Upload Profile Picture:".$_POST["myfile"]."</br>";
        }
        if($_POST["vol"] !=""){
            echo "Income:".$_POST["vol"]."</br>";
        }
        if($_POST["age"] !=""){
            echo "Age:".$_POST["age"]."</br>";
        }
        if($_POST["bio"] !=""){
            echo "Bio:".$_POST["bio"]."</br>";
        }
        else{
            echo "Data Not Entry Successfully";
        }
    }
?>