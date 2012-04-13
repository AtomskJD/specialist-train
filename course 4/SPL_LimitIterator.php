<?php
$offset = 4;
$limit = 6;
$xmlstring = <<<XML
<?xml version = "1.0" encoding="UTF-8" standalone="yes"?>
<document>
    <animal>koala</animal>
    <animal>kangaroo</animal>
    <animal>wombat</animal>
    <animal>wallaby</animal>
    <animal>emu</animal>
    <animal>kiwi</animal>
    <animal>kookaburra</animal>
    <animal>platypus</animal>
</document>
XML;

$array = array('koala', 'kangaroo', 'wombat', 'wallabyy', 'emu', 'kiwi', 'kookaburra', 'platypus');

try {
    $it = new LimitIterator(new SimpleXMLIterator($xmlstring), $offset, $limit);
    foreach ($it as $value) {
        echo $it->key() .' ---> '. $it->current() .'<br>';
        echo $it->getPosition() .'<br>';
    }
    $it = new LimitIterator(new ArrayIterator($array), $offset, $limit);
    $it->seek(4);
    echo $it->current();
} catch (OutOfBoundsException $e) {
    echo $e->getMessage();
}
?>