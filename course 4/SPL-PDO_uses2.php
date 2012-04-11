<?php 
error_reporting(E_ALL);

try{
    $db = new PDO('sqlite:periodic.sdb');
    //get Traversable result
    $stmt = $db->prepare("SELECT * FROM elements ORDER BY atomicnumber");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach (new IteratorIterator($stmt) as $row) {
        echo '<table style="border: solid 1px black; width: 300px;">';
        foreach (new ArrayIterator($row) as $key => $value) {
            printf('<tr><td style="width:150px">%s</td><td>%s</td></tr>', $key, $value);
        }
        echo "</table>";
    }
    $db = null;
} catch(PDOException $e){
    echo "Error!: ". $e->getMessage() ."<br>";
}

 ?>