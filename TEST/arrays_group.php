<?php 
header("Content-type: text/html; charset=utf-8"); 
$main_arr = array(
        $arr1 = array("f1", "1", "W", "H"),
        $arr2 = array("f1", "2", "W1", "H2"),
        $arr2 = array("f1", "3", "W1", "H2"),
        $arr2 = array("f1", "4", "W1", "H2"),
        $arr2 = array("f1", "5", "W1", "H2"),
        $arr2 = array("f2", "1", "W", "H"),
        $arr2 = array("f2", "2", "W", "H"),
        $arr2 = array("f2", "3", "W", "H"),
        $arr2 = array("f3", "1", "W", "H")
    );
$tr = array('Mebl'=> 'МЕБЛ',
            'OKNA'=> 'Окна',
            'F2'=> 'Ф2');
//$resort = array();
foreach ($main_arr as $value) {
    $val = $value[0];
    if (isset($val)){
            $resort[$val][$value[1]] = array($value[2], $value[3]);
        
    } 
}
            var_dump($resort);
            print_r($resort);
            var_dump($_GET);
            $it = 0;
$resort = Array 
( 
    'F2' => Array 
        ( 
            1 => '265 x 390 '
        ) ,
 
    'Fa' => Array 
        ( 
            1 => '265 x 390' 
        ) ,
 
    'Fn' => Array 
        ( 
            1 => '266 x 390 '
        ) ,
 
    'F' => Array 
        ( 
            1 => '275 x 82 ',
            2 => '130 x 152 ',
            3 => '130 x 228 '
        ) ,
 
    'Mebl' => Array 
        ( 
            1 => '265 x 76 '
        ) ,
 
    'OKNA' => Array 
        ( 
            1 => '265 x 376 ',
            2 => '265 x 160 '
        ) ,
 
    'shcool' => Array 
        ( 
            1 => '130 x 258 '
        ) ,
 
    'VAKANS' => Array 
        ( 
            1 => '130 x 50 '
        ) ,
 
    'Za' => Array 
        ( 
            1 => '265 x 75 ',
            2 => '130 x 190 '
        ) ,
 
    'Z' => Array 
        ( 
            1 => '130 x 263 ',
            2 => '130 x 168 '
        ) 
 
);

foreach ($resort as $val) {
    $count = count($val);
    if ($it<$count) $it=$count;     
}
echo $it;
echo "<table border=1 cellspacing=0 cellpadding=3 class=razmer>\r\n"; 
foreach ($resort as $key => $value) { 
    $tr_name = $key;
    if(isset($tr[$key])) $tr_name = $tr[$key];
    echo "<tr>\r\n"; 
          echo "<td class=vit_name rowspan=2>". $tr_name ."</td>"; 
          echo "<td class=file_name colspan=".$it.">".$key."</td>"; 
echo "</tr>"; 
echo "<tr>"; 
$curr_it = count($value);
    foreach ($value as $k => $v) { 
               echo "<td bordercolor=#000000 class=vit_size>".$v."</td>";
          }
          // Пустые ячейки
    for ($curr_it; $curr_it<$it ; $curr_it++) {
        echo "<td>---</td>";
    }
echo "<tr>"; 
} 
echo "</table>"; 
 ?>
 <form>
    <input name="hello" type="text" disabled>
    <input type="text" >
    <input type="text">
    <br>
     <p><input type="text" size="30" onFocus="this.form.submit.disabled=0"></p>
    <button type="button" onClick="this.form.hello.disabled=0">block</button>
 <p><input type="submit" name="submit" value="Отправить" disabled></p>
 </form>