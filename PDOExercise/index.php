<?php
$db = new PDO('mysql:host=127.0.0.1;dbname=Exercise2','root');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_CLASS | PDO::FETCH_ASSOC);



class person {
    public $name;
    public $email;

    public function printData(){
        return $this->name . '    Email is ' . $this->email . '<br>';
    }

}

$query = $db->prepare("SELECT `name`, `email` FROM `users`;");

$query->setFetchMode(PDO::FETCH_CLASS, 'content');

$query->execute();

$result = $query->fetchAll();

foreach ($result as $person){
    echo $person->printData();
}
