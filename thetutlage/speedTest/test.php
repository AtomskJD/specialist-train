<?php
/*
Author :- Aman Virk
Created On:- 05/08/2011
License:- This is script is free to use for any personal or commercial use, you may modify and redistribute 
				it without any issues, 

Comments: - If you really like then please leave me a comment on my site www.thetutlage.com and if intersted in
				learning how to do it then go ahead and watch the video tutorial on my site

Note: - Images used by me are not the assets of thetutlage.com so in order to use 
this script for commercial purposed you need to have your images.

*/

?>

<?php
/* calculating the time taken by page to download 1024 kbps */

$kb=1024;
flush();
$time = explode(" ",microtime());
$start = $time[0] + $time[1];
for($x=0;$x<$kb;$x++){
	echo str_pad('', 1024, ' ');
	flush();
}
$time = explode(" ",microtime());
$finish = $time[0] + $time[1];
$deltat = $finish - $start;
$deltat1 = ceil($deltat);
$kb1 = $kb / 1024;
$deltat2 = $deltat1+12;


// Getting Browser and Operating System info
function getBrowser() 
{
	$u_agent = $_SERVER['HTTP_USER_AGENT']; 
	$bname = 'Unknown';
	$platform = 'Unknown';
	$version= "";

	//First get the platform?
	if (preg_match('/linux/i', $u_agent)) {
		$platform = 'linux';
	}
	elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
		$platform = 'mac';
	}
	elseif (preg_match('/windows|win32/i', $u_agent)) {
		$platform = 'windows';
	}

	// Next get the name of the useragent yes seperately and for good reason
	if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent)) 
	{ 
		$bname = 'Internet Explorer'; 
		$ub = "MSIE";
	} 
	elseif(preg_match('/Firefox/i',$u_agent)) 
	{ 
		$bname = 'Mozilla Firefox'; 
		$ub = "Firefox";
	} 
	elseif(preg_match('/Chrome/i',$u_agent)) 
	{ 
		$bname = 'Google Chrome'; 
		$ub = "Chrome";
	} 
	elseif(preg_match('/Safari/i',$u_agent)) 
	{ 
		$bname = 'Apple Safari'; 
		$ub = "Safari";
	} 
	elseif(preg_match('/Opera/i',$u_agent)) 
	{ 
		$bname = 'Opera'; 
		$ub = "Opera";
	} 
	elseif(preg_match('/Netscape/i',$u_agent)) 
	{ 
		$bname = 'Netscape'; 
		$ub = "Netscape"; 
	} 

	// finally get the correct version number
	$known = array('Version', $ub, 'other');
	$pattern = '#(?<browser>' . join('|', $known) .
	')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
	if (!preg_match_all($pattern, $u_agent, $matches)) {
		// we have no matching number just continue
	}

	// see how many we have
	$i = count($matches['browser']);
	if ($i != 1) {
		//we will have two since we are not using 'other' argument yet
		//see if version is before or after the name
		if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
			$version= $matches['version'][0];
		}
		else {
			$version= $matches['version'][1];
		}
	}
	else {
		$version= $matches['version'][0];
	}

	// check if we have a number
	 if ($version==null || $version=="") {$version="?";}

	return array(
		'userAgent' => $u_agent,
		'name'      => $bname,
		'version'   => $version,
		'platform'  => $platform,
		'pattern'    => $pattern
	);
} 

$ua=getBrowser();
$yourbrowser=  $ua['name'] . " " . $ua['version'];
$os = $ua['platform'];

	$kbps = round($kb / $deltat, 3);
	$mbps  = ($kbps / 1024);
        $mbps = $mbps * 4;

	$output = '<div class="items">
					<h5> Browser </h5>
					<h6> '.$yourbrowser.' </h6>
				</div><!-- end items -->

				<div class="items">
					<h5> Operation System </h5>
					<h6> '.$os.' </h6>
				</div><!-- end items -->

				<div class="items">
					<h5> Data Trnasfered </h5>
					<h6> '.$kb.' Kbps </h6>
				</div><!-- end items -->
				
				
				<div class="items">
					<h5> Ping Time </h5>
					<h6>'.$deltat2.' sec</h6>
				</div><!-- end items -->

				<div class="items">
					<h5> Connection Speed </h5>
					<h6><span class="actual_speed">'.trim(round($mbps, 2)).' Mbps</span></h6>
				</div><!-- end items -->';
	
	echo $output;
?>