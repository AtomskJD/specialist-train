<?php 
try {
    $db = new PDO("sqlite2:users.db");
    $stmt = $db->prepare("SELECT * FROM user ORDER by id");
    $stmt->execute();

    /*while ($key = $stmt->fetch()) {
        echo $key['name']."<br>";
        var_dump($key);
    }*/

    /*foreach ($stmt->fetchAll() as $key) {
        echo $key['name']."<br>";
    }*/

    /*while ($key = $stmt->fetchObject()){
        echo $key->name . "<br>";
    }*/
    /*foreach (new IteratorIterator($stmt) as $key) {
        echo $key['name']."<br>";
    }*/
    foreach ($di = new DirectoryIterator('.') as $key) {
        //echo $key->getFilename()."<br>";
        echo $di->current()."<br>";
    }
} catch(PDOException $e){
    echo $e->getMessage();
}

 ?>