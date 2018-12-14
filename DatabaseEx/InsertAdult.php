<?php

$db = new PDO('mysql:host=127.0.0.1;dbname=ExerciseSet2','root');

$name = $_POST['name'];
$dob = $_POST['DOB'];
$gender = $_POST['gender'];

//child details
$childName = $_POST['childName'];
$childDOB = $_POST['childDOB'];
$childFColor = $_POST['childFColor'];
//pets
$petType = $_POST['petType'];

$query = $db->prepare("INSERT INTO `adults`(`name`,`DOB`,`gender`) VALUE (:name,:DOB,:gender);");

$query->execute(['name'=>$name,'DOB'=>$dob,'gender'=>$gender]);

$lastAdultID = $db->lastInsertId();

if ($childName !== NULL) {
    $query = $db->prepare("INSERT INTO `children`(`name`,`DOB`,`f_color`) VALUE (:name,:DOB,:childFColor);");

    $query->execute(['name'=>$childName,'DOB'=>$childDOB,'childFColor'=>$childFColor]);

    $lastChildID = $db->lastInsertId();

    $query = $db->prepare("INSERT INTO `parent_of`(`adults_id`,`children_id`) VALUE (:adultID,:childID);");

    $query->execute(["adultID"=>$lastAdultID,"childID"=>$lastChildID]);
}

if ($petType !== NULL){
    $query = $db->prepare("INSERT INTO `pets`(`type`,`belongs_to`) VALUE (:type,:belong);");
    $query->execute(["type"=>$petType,"belong"=>$lastAdultID]);
}

echo $gender;
echo $name;






?>


