<?php 
$xmlstring = <<<XML
<?xml version = "1.0" encoding="UTF-8" standalone="yes"?>
<document>
    <animal>
        <category id="26">
            <species>Phascolarctidae</species>
            <type>koala</type>
            <name>Bruce</name>
        </category>
    </animal>
    <animal>
        <category id="27">
            <species>macropod</species>
            <type>kangaroo</type>
            <name>Bruce</name>
        </category>
    </animal>
    <animal>
        <category id="28">
            <species>diprotodon</species>
            <type>wombat</type>
            <name>Bruce</name>
        </category>
    </animal>
    <animal>
        <category id="31">
            <species>macropod</species>
            <type>wallaby</type>
            <name>Bruce</name>
        </category>
    </animal>
    <animal>
        <category id="21">
            <species>dromaius</species>
            <type>emu</type>
            <name>Bruce</name>
        </category>
    </animal>
    <animal>
        <category id="22">
            <species>Apteryx</species>
            <type>kiwi</type>
            <name>Troy</name>
        </category>
    </animal>
    <animal>
        <category id="23">
            <species>kingfisher</species>
            <type>kookaburra</type>
            <name>Bruce</name>
        </category>
    </animal>
    <animal>
        <category id="48">
            <species>monotremes</species>
            <type>platypus</type>
            <name>Bruce</name>
        </category>
    </animal>
    <animal>
        <category id="4">
            <species>arachnid</species>
            <type>funnel web</type>
            <name>Bruce</name>
            <legs>8</legs>
        </category>
    </animal>
    <animal>
        <category id="4">
            <species>arachnid</species>
            <type>funnel web</type>
            <name>Bruce</name>
            <legs>8</legs>
        </category>
    </animal>
</document>
XML;

try {
    $sxi = new SimpleXMLIterator($xmlstring);
    //use xPath
    $x_path = $sxi->xpath('animal/category/species');
    foreach ($x_path as $var){
        echo $var ."<br>";
    }
}   catch(Exception $e){
        echo $e->getMessage();
}
 ?>