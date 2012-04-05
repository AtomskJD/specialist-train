<?php 
try {
    $db = new PDO("sqlite2:users.db");
    $stmt = $db->prepare("SELECT * FROM user ORDER by id");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    $it = new IteratorIterator($stmt);
        echo '<table border="1">';
    foreach ($it as $row) {
        foreach (new ArrayIterator($row) as $key => $value) {
            echo "<tr><td>$key</td><td> $value</td></tr>";
        }
    }
    echo "</table>";
} catch(PDOException $e){
    echo $e->getMessage();
}

 ?>