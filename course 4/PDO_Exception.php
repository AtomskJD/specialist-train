<?php 
class User {
    public $id, $email, $name;
    function nameToApper() 
    {
        return strToUpper($this->name);
    }
}
try {
    $dbh = new PDO('sqlite2:users.db');
/*    $sql = "INSERT INTO user(name, email) VALUES('John', 'John@smith.com')";
    echo $res = $dbh->exec($sql);
*/
    $sql = "SELECT * FROM user";
    $stmt = $dbh->query($sql);
    $user = new User();
    $stmt->setFetchMode(PDO::FETCH_INTO, $user);
    foreach ($stmt as $user) {
        echo $user->nameToApper() ."<br>";
    }
    // $result = $stmt->fetchAll(PDO::FETCH_CLASS, 'User');
    //$result = $stmt->fetchObject("User");
    //echo $result->nameToApper().'<br>';
    /*
    foreach ($result as $user) {
        echo $user->nameToApper().'<br>';
    }
*/
} catch (PDOException $e){
    echo $e->getMessage();
}
 ?>