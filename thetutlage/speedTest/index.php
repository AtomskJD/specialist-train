<!-- 
@author :- Aman Virk
Created On:- 05/08/2011
Updated On :- 04/17/2012

License:- This is script is free to use for any personal or commercial use, you may modify and redistribute  it without any issues, 
Comments: - If you really like then please leave me a comment on my site www.thetutlage.com
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Php Internet Speed Tester</title>
	<meta name="site" description="www.thetutlage.com/speed" />
	<meta name="keywords" description="php,jquery,ajax,internet speed,php test speed,jquery test speed" />
	<meta name="content" description="Php internet speed tester build using jquery and ajax with strong php virtual 
	data transfer logics" />
	<link rel="stylesheet" href="css/meter.css" />
	<link href='http://fonts.googleapis.com/css?family=Share' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/circ.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>

</head>
<body>
	<!-- ///////  This div will show the results //////-->
	<div id="results">
		<div id="result_inner">
			<h1> Results </h1>
			<div id="result_body"></div><!-- end result body -->
		</div><!-- end result_inner -->
	</div><!-- end results -->
	<!-- ///////  End of results div //////-->
	

	<!-- section to render meter -->
	<div id="section">
		<div id="head">
			<h2> Php Internet Speed Tester </h2>
			<small> Build by nerds for nerds </small>
		</div><!-- end head -->
	
		<div id="meter1" class="meters"></div>
		<div id="meter2" class="meters"></div>

		
		<div id="button">
		<a href="#" id="start" class="start"> Begin Test</a>
		</div><!-- end button -->
	</div><!-- end section -->

	<div id="footer"></div><!-- end footer -->
</body>
</html>