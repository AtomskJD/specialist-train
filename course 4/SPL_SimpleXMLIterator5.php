<?php 
$xmlstring = <<<XML
<?xml version = "1.0" encoding="UTF-8" standalone="yes"?>
<document xmlns:spec="http://example.org/animal-species">
    <animal>
        <category id="26">
            <species>Phascolarctidae</species>
            <spec:name>Speed Hump</spec:name>
            <type>koala</type>
            <name>Bruce</name>
        </category>
    </animal>
    <animal>
        <category id="27">
            <species>macropod</species>
            <spec:name>Boonga</spec:name>
            <type>kangaroo</type>
            <name>Bruce</name>
        </category>
    </animal>
    <animal>
        <category id="28">
            <species>diprotodon</species>
            <spec:name>pot holer</spec:name>
            <type>wombat</type>
            <name>Bruce</name>
        </category>
    </animal>
    <animal>
        <category id="31">
            <species>macropod</species>
            <spec:name>Target</spec:name>
            <type>wallaby</type>
            <name>Bruce</name>
        </category>
    </animal>
    <animal>
        <category id="21">
            <species>dromaius</species>
            <spec:name>Road Runner</spec:name>
            <type>emu</type>
            <name>Bruce</name>
        </category>
    </animal>
    <animal>
        <category id="22">
            <species>Apteryx</species>
            <spec:name>Football</spec:name>
            <type>kiwi</type>
            <name>Troy</name>
        </category>
    </animal>
    <animal>
        <category id="23">
            <species>kingfisher</species>
            <spec:name>snaker</spec:name>
            <type>kookaburra</type>
            <name>Bruce</name>
        </category>
    </animal>
    <animal>
        <category id="48">
            <species>monotremes</species>
            <spec:name>Swamp Rat</spec:name>
            <type>platypus</type>
            <name>Bruce</name>
        </category>
    </animal>
    <animal>
        <category id="4">
            <species>arachnid</species>
            <spec:name>Killer</spec:name>
            <type>funnel web</type>
            <name>Bruce</name>
            <legs>8</legs>
        </category>
    </animal>
</document>
XML;
//end XML

try {
    $sxi = new SimpleXMLIterator($xmlstring);
    $sxi-> registerXPathNamespace('spec', 'http://www.exampe.org/species-title');
    $result = $sxi->xpath('//spec:name');
    foreach ($sxi->getDocNamespaces('animal') as $ns) {
        echo $ns ."!!!<br>";
    }
    foreach ($result as $key) {
        echo $key ."<br>";
    }

} catch (Exception $e){
    echo $e->getMessage();
}
 ?>