<?php
/*  
	Copyright 2008 Kane Neufeld of kneuf media <http://wwww.kneuf-media.com/> or <http://www.kneuf.com/>
	
    This file is part of Simple Calculator.

    Simple Calculator is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    Simple Calculator is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with Simple Calculator.  If not, see <http://www.gnu.org/licenses/>.
*/
$action = $_GET['action'];
$field = $_GET['field'];
$select = $_GET['select'];
if ($field)
	foreach ($field as $key => $value)
		if (empty($value))
			$field[$key] = 0;
$result = "";
$selectHelpArr = array (
"sqrt" => "Returns the square root of a value. Any/all fields can be used.\n",
"pow" => "Returns the result of Field[1] to the power of Field[3].\n",
"div" => "Returns the result of Field[1] divided by Field[3].\n",
"mul" => "Returns the result of Field[1] multiplied by Field[3].\n",
"sub" => "Returns the result of Field[1] subtracted by Field[3].\n",
"add" => "Returns the result of Field[1] added by Field[3].\n",
"per" => "Returns the result of Field[1] divided by Field[3] in percentage form.\n",
"tax" => "Returns the tax total, given the tax percent in Field[1], and the total before tax in Field[3].\n",
"tempCtoF" => "Converts from &deg;C to &deg;F. Any/all field can be used.\n",
"tempFtoC" => "Converts from &deg;C to &deg;F. Any/all field can be used.\n",
"com" => "Returns the commission that would be received after so many hours, given the percentage in Field[1], the total the sale came to in Field[3], the number of hours worked in Field[2], and the amount per hour received in Field[4].\n",
"vol" => "Returns the volume of an object given its length in Field[1], width in Field[3], and height in Field[2].\n",
"areaCircle" => "Returns the area of a circle, given the radius. And/all fields can be used.\n",
"area" => "Returns the area of an object, given its length in Field[1] and height in Field[3].\n",
"disc" => "Returns the amount of a sale after a discount, given the percentage in Field[1] and the total before the discount in Field[3].\n",
"fracDiv" => "Returns the result of dividing two fractions. Enter the numerator and denominator of the first fraction in Field[1] and Field[2] respectively, and the numerator and denominator of the second fraction in Field[3] and Field[4], respectively.\n",
"fracMul" => "Returns the result of multiplying two fractions. Enter the numerator and denominator of the first fraction in Field[1] and Field[2] respectively, and the numerator and denominator of the second fraction in Field[3] and Field[4], respectively.\n",
"tan" => "Returns the result of applying the TAN function to a value. And/all fields can be used.\n",
"sin" => "Returns the result of applying the SIN function to a value. And/all fields can be used.\n",
"cos" => "Returns the result of applying the COS function to a value. And/all fields can be used.\n",
"rand" => "Returns a random number between Field[1] and Field[3].\n",
"DtoR" => "Returns the result of converting Degrees to Radians. And/all fields can be used.\n",
"RtoD" => "Returns the result of converting Radians to Degrees. And/all fields can be used.\n",
"round" => "Returns a rounded number, given the value in Field[1] and the number of decimal places to round to in Field[3].\n",
"OtoD" => "Returns the result of converting Octal to Decimal. And/all fields can be used.\n",
"DtoO" => "Returns the result of converting Decimal to Octal. And/all fields can be used.\n",
"abs" => "Returns the absolute value of a value. Any/all fields can be used.\n"
);
$selectArr = array (
"sqrt" => "Square Root",
"pow" => "Powers",
"div" => "Divide",
"mul" => "Multiply",
"sub" => "Subtract",
"add" => "Add",
"per" => "Percent",
"tax" => "Tax",
"tempCtoF" => "&deg;C to &deg;F",
"tempFtoC" => "&deg;F to &deg;C",
"com" => "Commission",
"vol" => "Volume",
"areaCircle" => "Area of a Circle",
"area" => "Area",
"disc" => "Discount",
"fracDiv" => "Divide a Fraction",
"fracMul" => "Multiply a Fraction",
"tan" => "TAN",
"sin" => "SIN",
"cos" => "COS",
"rand" => "Random Number",
"DtoR" => "Degrees to Radians",
"RtoD" => "Radians to Degrees",
"round" => "Round",
"OtoD" => "Octal to Decimal",
"DtoO" => "Decimal to Octal",
"abs" => "Absolute Value"
);
asort($selectArr);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Simple Calculator</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="keywords" content="simple,calculator,simple calculator,kneuf,media,kneuf media,function,value,calculation,tan,sin,cos,square root,sqrt,pow,power,commission,octal,decimal,degree,radian,random,absolute">
<meta name="description" content="Simple Calculator, created by kneuf media <www.kneuf.com>, is a simple calculator with some advanced features.">
<link rel="stylesheet" type = "text/css" href="main.css">
</head>
<body>
<div class="mainDiv">
  <form class="mainFrm" action="" method="get">
    <input type="hidden" name="action" value="calculate">
    <div class="headingDiv">Simple Calculator</div>
    <div class="descriptionDiv">This is a simple calculator. With some extra features! Need help? <a href="?action=help">Functions explained</a>.</div>
    <table class="mainTbl">
      <tr>
        <td class='small_number'>1</td>
        <td><input type='text' name='field[1]' value='<?php echo $field['1'];?>' size='7' maxlength='255'></td>
        <td colspan='2'><select name='select[1]'>
		<option value=''>Function Select</option>
            <?php
			foreach ($selectArr as $key => $value) {
				if ($select[1] == $key) {
					echo "<option value='$key' selected>$value</option>\n";
				} else {
					echo "<option value='$key'>$value</option>\n";
				}
			}
		?>
          </select></td>
        <td class='small_number'>3</td>
        <td><input type='text' name='field[3]' value='<?php echo $field['3'];?>' size='7' maxlength='255'></td>
      </tr>
      <tr>
        <td class='small_number'>2</td>
        <td><input type='text' name='field[2]' value='<?php echo $field['2'];?>' size='7' maxlength='255'></td>
        <td class="Submit"><input type='submit' value='Go!'></td>
        <td class="Reset"><input type='reset' value='Reset'></td>
        <td class='small_number'>4</td>
        <td><input type='text' name='field[4]' value='<?php echo $field['4'];?>' size='7' maxlength='255'></td>
      </tr>
    </table>
  </form>
  <?php
	if ($action == "help") {
	?>
  <div class="resultDiv">
    <div class="subHeadingResult">Help</div>
	<div class="subResult">
	<span class='HelpTerm'>Form</span> - <span class='HelpValue'>The form consists of 4 field inputs (called Field[1], Field[2], Field[3], and Field[4], which are marked with a small numerical number to the left of the field), a Function Select option (which allows you to choose how you want to compute values), a "Reset" button (which allows you to erase and changes to the calculator), and finally a "Go!" button (once pressed to process the form and calculate any values requested). To use, simple select a Function, then enter in any required values into either of the Field inputs, then press the "Go!" button.</span><br>
	<?php
	foreach ($selectHelpArr as $key => $value)
		echo "<span class='HelpTerm'>" . $selectArr[$key] . "</span> - <span class='HelpValue'>" . $value . "</span><br>";
	?>
	</div>
	</div>
    <?php
	}
	elseif ($action == "calculate") {
	?>
  <div class="resultDiv">
    <div class="subHeadingResult">Results</div>
    <?php
				switch ($select[1]) {
					case "sqrt":
						foreach ($field as $key => $value)
							if (!empty($value)) 
								$result .= "The square root of ". $field[$key] ." is " . sqrt($value) . ".\n";
						break;
					case "pow":
						$result .= $field[1] . " to the power of " . $field[3] ." is " . pow($field[1],$field[3]) . ".\n";
						break;
					case "div":
						if ($field[3] != 0)
							$result .= $field[1] . " divided by " . $field[3] ." is " . ($field[1] / $field[3]) . ".\n";
						else
							$result .="Cannot divide " . $field[1] . " by zero.\n";
						break;
					case "mul":
						$result .= $field[1] . " multiplied by " . $field[3] ." is " . ($field[1] * $field[3]) . ".\n";
						break;
					case "sub":
						$result .= $field[1] . " subtracted by " . $field[3] ." is " . ($field[1] - $field[3]) . ".\n";
						break;
					case "add":
						$result .= $field[1] . " added by " . $field[3] ." is " . ($field[1] + $field[3]) . ".\n";
						break;
					case "per":
						if ($field[3] != 0)
							$result .= $field[1] . " divided by " . $field[3] ." is " . ($field[1] / $field[3]) * 100 . "%\n";
						else
							$result .= "Can not divide ". $field[1] . " by zero.\n";
						break;
					case "tax":
						$result .= "The tax (". $field[1] . "%) on $" . $field[3] ." is $" . (($field[1] / 100) * $field[3]) . ", added together is $" . ((($field[1] / 100)+1) * $field[3]) . ".\n";
						break;
					case "tempCtoF":
						foreach ($field as $key => $value) 
							if (!empty($value)) 
								$result .= $field[$key] ."&deg;C is " . (($value*1.8)+32) . "&deg;F.\n";
						break;
					case "tempFtoC":
						foreach ($field as $key => $value) 
							if (!empty($value)) 
								$result .= $field[$key] ."&deg;F is " . (($value-32)/1.8) . "&deg;C.\n";
						break;
					case "com":
						$result .= "The commission that would be received with " . $field[1] . "% on $" . $field[3] . ", and working " . $field[2] . " hours @ $" . $field[4] . " an hour is: $" . ((($field[1] / 100) * $field[3]) + ($field[2] * $field[4])) . ".\n";
						break;
					case "vol":
						$result .= "The volume of an object with a length of " . $field[1] . " unit(s), width of " . $field[3] . " unit(s) and height of " . $field[2] . " unit(s) is " . ($field[1]*$field[3]*$field[2]) . " unit(s)&sup3;.\n";
						break;
					case "areaCircle":
						foreach ($field as $key => $value)
							if (!empty($value)) 
								$result .= "The area of a circle whose radius is " . $field[$key] ." equals " . (pi(0)*pow($value,2)) . ".\n";
						break;
					case "area":
						$result .= "The area of an object whose length is " . $field[1] . " unit(s) and height is " . $field[3] . " unit(s) is " . ($field[1]*$field[3]) . " unit(s) &sup2;.\n";
						break;
					case "disc":
						$result .= "A " . $field[1] . "% discount on $" . $field[3] . " is $" . round($field[3] * $field[1] / 100, 2) . " or $" . round($field[3] - $field[3] * $field[1] / 100, 2) . ".\n";
						break;
					case "fracDiv":
						$result .= $field[1] . "/" . $field[2] . " divided by " . $field[3] . "/" . $field[4] . " is: " . ($field[1]*$field[4]) . "/" . ($field[2]*$field[3]) . ".\n";
						break;						
					case "fracMul":
						$result .= $field[1] . "/" . $field[2] . " multiplied by " . $field[3] . "/" . $field[4] . " is: " . ($field[1]*$field[3]) . "/" . ($field[2]*$field[4]) . ".\n";					
						break;
					case "tan":
						foreach ($field as $key => $value) 
							$result .= "The TAN of ". $field[$key] ." is " . tan($value) . ".\n";			
						break;
					case "sin":
						foreach ($field as $key => $value) 
							$result .= "The SIN of ". $field[$key] ." is " . sin($value) . ".\n";										
						break;
					case "cos":
						foreach ($field as $key => $value) 
							$result .= "The COS of ". $field[$key] ." is " . cos($value) . ".\n";															
						break;						
					case "rand":
						$result .= "A random number between " . $field[1] . " and " . $field[3] . " is: " . rand($field[1],$field[3]) . ".\n";					
						break;
					case "DtoR":
						foreach ($field as $key => $value) 
							$result .= $field[$key] ."&deg; is " . deg2rad($value) . " radians.\n";
						break;
					case "RtoD":
						foreach ($field as $key => $value) 
							$result .= $field[$key] ." radians is " . rad2deg($value) . "&deg;.\n";
						break;
					case "round":
						$result .= $field[1] . " rounded to  " . $field[3] . " decimal places is: " . round($field[1],$field[3]) . ".\n";					
						break;						
					case "OtoD":
						foreach ($field as $key => $value) 
							$result .= $field[$key] ." in Octal format is " . octdec($value) . " in Decimal format.\n";
						break;
					case "DtoO":
						foreach ($field as $key => $value) 
							$result .= $field[$key] ." in Decimal format is " . decoct($value) . " in Octal format.\n";					
						break;						
					case "abs":
						foreach ($field as $key => $value)
							if (!empty($value))
							$result .= "The absolute value (ABS) of " . $field[$key] . " is: ". abs($value) . ".\n";
						break;
					default:
						$result .= "Nothing to compute.\n";
				}
			?>
    <div class="subResult"><?php echo str_replace("\n", "<br>", $result); ?></div>
  </div>
  <?php	} ?>
  <div class="footerDiv">Simple Calculator Version 2.0 Copyright <a href="http://www.kneuf-media.com/">kneuf media</a><br>
    <a href="http://validator.w3.org/check?uri=referer"><img src="http://www.w3.org/Icons/valid-html401" alt="Valid HTML 4.01 Transitional" height="31" width="88"></a>
	<a href="http://jigsaw.w3.org/css-validator/"><img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!">
</a> 
<a href="http://www.php.net/"><img src="php-power-white.gif" alt="Powered by PHP" width="88" height="31"></a>
</div>
	 
</div>
</body>
</html>