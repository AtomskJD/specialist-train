<?php 
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
<animal>funnel web</animal>
</document>
XML;

try {
    $sxi = new SimpleXMLIterator($xmlstring);
    /*$sxi->addChild('animal', 'Dragon');
    $new_sxi = new SimpleXMLIterator($sxi->saveXML());
    foreach ($new_sxi as $val) {
        echo $val ."<br>";
    }*/
    $sxi->addAttribute('id:att1', 'good thing', 'urn::test-test');
    $sxi->addAttribute('att2', 'no-ns');

    echo htmlentities($sxi->saveXML());

} catch (Exception $e) {
    echo $e->getMessage();    
}
 ?>