<table style="border: solid 1px black; width: 400px;">
    <tr><td>Atomic Number</td><td>Latin</td><td>English</td><td>Abbr</td></tr>
<?php 
error_reporting(E_ALL);

class MyRecursiveIterator extends RecursiveIteratorIterator{
    function beginChildren()
    {
        echo "<tr> <!--This is executing MyRecursiveIterator class-->\n";
    }
    function endChildren()
    {
        echo "</tr>\n";
    }
}//end class
try{
    $db = new PDO("sqlite:periodic.sdb");
    $stmt = $db->prepare("SELECT * FROM elements");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach(new MyRecursiveIterator(new RecursiveArrayIterator($stmt->fetchAll())) as $key=>$value){
        echo "\t<td style='width: 150px; border: 1px solid black'>{$value}</td>\n";
    }
    $db = null;
} catch(PDOException $e){
    echo "Error!: ". $e->getMessage();
}


 ?>
</table>