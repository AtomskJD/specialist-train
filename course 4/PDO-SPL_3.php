<table border='1'>
    <tr><th>ID</th><th>Name</th><th>E-mail</th></tr>
<?php 
class TableRow extends RecursiveIteratorIterator {
    function __construct($it)
    {
        parent::__construct($it, self::LEAVES_ONLY);
    }
    function beginChildren()
    {
        echo '<tr>';
    }
    function endChildren()
    {
        echo '</tr>';
    }
}
try {
    $db = new PDO("sqlite2:users.db");
    $stmt = $db->prepare("SELECT * FROM user ORDER by id");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

        foreach (new TableRow(new RecursiveArrayIterator($stmt->fetchAll())) as $key => $value) {
            echo "<td> $value</td>";
        }
} catch(PDOException $e){
    echo $e->getMessage();
}

 ?>
</table>