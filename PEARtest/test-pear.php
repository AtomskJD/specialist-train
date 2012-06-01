<? 
echo "<link rel='stylesheet' type='text/css' href='sample.css'>"; 

// Include Highlighter class 
require_once("Text/Highlighter.php"); 

// This is the code we want to display 
$code = "<? 
// This is a test page for PEAR Text_Highlighter package 
\$message = \"Hello, world!\"; 

echo \$message; 
?>"; 

// What to display - PHP code 
$what = "php"; 

// Define the class 
@$highlighter =& Text_Highlighter::factory($what); 

// Call highlight method to display the code to web browser 
echo $highlighter->highlight($code); 
?>
<?php
require_once "Text/Highlighter.php";
require_once "Text/Highlighter/Renderer/Html.php";

$renderer = new Text_Highlighter_Renderer_Html(array("numbers" => HL_NUMBERS_LI, "tabsize" => 4));

$hlJava =& Text_Highlighter::factory("JAVA");
$hlJava->setRenderer($renderer);

echo $hlJava->highlight('class JavaProgram {
    public static void main(String args[]) {
        System.out.println("Hello World!");
    }
}');
?>