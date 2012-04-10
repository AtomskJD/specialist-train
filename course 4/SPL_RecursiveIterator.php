<br><hr>
 <p></p>
 <?php
$array = array(
array('type'=>'dog', 'name'=>'butch', 'sex'=>'m', 'breed'=>'boxer'),
array('type'=>'dog', 'name'=>'fido', 'sex'=>'m', 'breed'=>'doberman'),
array('type'=>'dog', 'name'=>'girly','sex'=>'f', 'breed'=>'poodle'),
array('type'=>'cat', 'name'=>'tiddles','sex'=>'m', 'breed'=>'ragdoll'),
array('type'=>'cat', 'name'=>'tiddles','sex'=>'f', 'breed'=>'manx'),
array('type'=>'cat', 'name'=>'tiddles','sex'=>'m', 'breed'=>'maine coon'),
array('type'=>'horse', 'name'=>'ed','sex'=>'m', 'breed'=>'clydesdale'),
array('type'=>'perl_coder', 'name'=>'shadda','sex'=>'none', 'breed'=>'mongrel'),
array('type'=>'duck', 'name'=>'galapogus','sex'=>'m', 'breed'=>'pekin')
);
foreach (new RecursiveIteratorIterator(new RecursiveArrayIterator($array)) as $key => $value) {
    printf("%s - %s<br>", $key, $value);
}
 ?>