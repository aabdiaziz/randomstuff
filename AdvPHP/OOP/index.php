<?php

class Child {
    public $id;
    public $firstName;
    public $dob;

    public function __construct()
    {
        echo "Child Object Created";

    }
}

$db = new PDO('mysql:host=127.0.0.1; dbname=firstDb', 'root');

$query = $db->prepare("SELECT `id`, `firstName`, `dob` FROM `children`;");
$query->setFetchMode(PDO::FETCH_CLASS, 'Child');

$query->execute();

$result = $query->fetchAll();

foreach ($result as $value) {
    echo "CHILD NAME:  $value->firstName and dob is:  $value->dob";
}