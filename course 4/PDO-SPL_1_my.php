<?php 
try {
    $db = new PDO("sqlite2:users.db");
    $stmt = $db->prepare("SELECT * FROM user ORDER by id");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

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
    /*foreach (new IteratorIterator($stmt) as $row){
        foreach (new ArrayIterator($row) as $key => $value) {
            printf("%s - %s<br>", $key, $value);
        }
    }*/
    // the iterator object now has 10 arrays within.
    // Each array contains a result set from the db query
    foreach (new IteratorIterator($stmt) as $row){
        // create the array object
        $arrayIt = new ArrayIterator($row);
        while ($arrayIt->valid()) {
            printf("%s - %s<br>", $arrayIt->key(), $arrayIt->current());
            $arrayIt->next();
        }
        echo '<hr />';
    }


    /*foreach (new RecursiveIteratorIterator(new RecursiveArrayIterator($stmt->fetchAll())) as $key => $value) {
        printf("%s - %s<br>", $key, $value);
    }*/
    foreach ($di = new DirectoryIterator('.') as $key) {
        //echo $key->getFilename()."<br>";
        echo $di->current()."<br>";
    }
} catch(PDOException $e){
    echo $e->getMessage();
}

 ?>