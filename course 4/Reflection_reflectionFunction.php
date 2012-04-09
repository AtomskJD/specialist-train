<pre>
<?php
function someFunction($param1, $param2 = 2){
    static $count = 0;
    return "<h$param2>Say hello $param1</h$param2>";
}
// Reflection::export(new ReflectionFunction('someFunction'));
$func = new ReflectionFunction('someFunction');
printf("<p>======>%s FUNCTION '%s'<br>".
        "------ declared in %s<br>".
        "------ strings from %d - %d <br>",
        $func->isInternal() ? 'INternal' : 'User',
        $func->getName(),
        $func->getFilename(),
        $func->getStartLine(),
        $func->getEndLine());
if ($static = $func->getStaticVariables())
    echo var_export($static, 1);
echo $func->invoke('John', 1);
?>
</pre>