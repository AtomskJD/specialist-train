<pre>
<?php
function dirs($dir, $tab){
	$d = opendir($dir);
	while($name = readdir($d)){
		if($name == "." or $name == "..")
			continue;
		
		if(is_dir($dir. "/$name")){
			echo "<p style='font-weight:bold'>$tab"."[$name]"."</p>";
			$tab .= "\t";
			dirs($dir. "/$name", $tab);
		}
		else
			echo "<p>$tab$name</p>";
	}
	closedir($d);
}
dirs(".", "");
?>
</pre>