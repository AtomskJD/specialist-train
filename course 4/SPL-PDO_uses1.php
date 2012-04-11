<?php 
error_reporting(E_ALL);

try{
    $db = new PDO('sqlite:periodic.sdb');
    //get Traversable result
    $stmt = $db->prepare("SELECT * FROM elements ORDER BY atomicnumber");
    $stmt->execute();
    foreach (new IteratorIterator($stmt) as $row) {
        $arrayObj = new ArrayObject($row);
        for ($iterator = $arrayObj->getIterator(); $iterator->valid(); $iterator->next()) { 
            echo $iterator->key() ." ->> ". $iterator->current() ."<br>";
        }
        echo "<hr>";
    }
    $db = null;
} catch(PDOException $e){
    echo "Error!: ". $e->getMessage() ."<br>";
}

 ?>