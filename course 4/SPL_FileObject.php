<?php
// bed old code
/*$lines = file('sample.txt');
foreach ($lines as $key => $value) {
    echo "Line: ". $key ." -> ". $value ."<br>\n";
}*/

// new with WHILE
try {
/*
    $file = new SplFileObject('sample.txt');
    while($file->valid()){
        echo "Line ". $file->key() .": -> ". $file->current() ."<br>";
        $file->next();
    }*/

// new with FOREACH
/*foreach (new SplFileObject('sample.txt') as $value) {
    echo $value ."<br>";
}*/
/*$file = new SplFileObject('sample.txt');
$file->seek(15);
echo $file->current() ."<br>";
echo $file->current() ."<br>";
var_dump($file->getSize());*/
foreach (new LimitIterator(new SplFileObject('sample.txt'), 40, 30) as $key => $value) {
        printf("Line %02d: %s<br>\n", $key, $value);
}
} catch (Exception $e) {
    echo $e->getMessage();
}
?>