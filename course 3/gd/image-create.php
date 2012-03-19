<?php
	// Создаем картинку 256 color
	// $img = imageCreate(500, 300);
	// TrueColor
	// $img = imageCreateTrueColor(500,300);
	$img = imageCreateFromJPEG("sample.jpg");
	imageAntiAlias($img, true);
	// индекс цвета
	$red = imageColorAllocate($img, 255,0,0);
	$green = imageColorAllocate($img, 0,255,0);
	$blue = imageColorAllocate($img, 0,0,255);
	$white = imageColorAllocate($img, 255,255,255);
	$black = imageColorAllocate($img, 0,0,0);
	
$silver = imageColorAllocate($img, 192,192,192);
	
	imageFilledRectangle($img, 300,10,400,70, $silver);
	/*
	imageLine($img, 20,20,80,280, $red);
	imageRectangle($img, 20,20,80,280, $green);
	$points = array(0,0,100,200,300,200);
	imagePolygon($img, $points, 3, $blue);
	imageEllipse($img, 200, 150, 300, 200, $red);
	imageFilledArc($img, 250, 150, 300, 200, 0, 45, $blue, IMG_ARC_NOFILL | IMG_ARC_EDGED);
	
	// текст
	imageString($img, 3, 250, 100, "Hello!", $black);
	*/
	imageTTFtext($img, 30, 10, 300, 150, $white, "arial.ttf", "Привет!!!");
	header("Content-Type: image/png");
	imagePNG($img);
?>