$(function(){
	var meter = [
		$('#meter1'), /* the big one */
		$('#meter2') /* the second one to show actual results */
	]
	var timesRun = 0;

	$('#meter1').circMeter({
	maxVal:   100,// the upper limit
	stepVal:  5,// the difference between two consecutive values on the displayed scale
	startVal: 0// the default value at pageload (default is equal to minValue)
	});
	
		randomValue = function( m, min, max ){		/* important to run random functions */
				var value = Math.random()>0.5 ? 1 : -1;
				value *= Math.random()*(max-min);
				value = (value>0 && value<5)||(value<0 && value>-5) ? value*3 : value;
				value *= (m.circMeter()+value>max || m.circMeter()+value<min) ? -1:1;
				return value
			};
	
	$('#start').click(function(){
		$('.start').removeAttr('id');
		$('.start').html('Please wait .....');
		var startTime = new Date().getTime();
		var interval = setInterval(function(){
			if(new Date().getTime() - startTime > 10000){
				getPhpData(interval)
			}
			meter[0].circMeter( randomValue(meter[0],0,50));
		}, 2000);
		return false;
	});

	// function to make ajax request
	function getPhpData(param){
		$('#meter2').circMeter({
			maxVal:   100,// the upper limit
			stepVal:  5,// the difference between two consecutive values on the displayed scale
			startVal: 0// the default value at pageload (default is equal to minValue)
		});
		if(window.XMLHttpRequest)
		{
			xmlhttp = new XMLHttpRequest();
		}
		else
		{
			xmlhttp = new ActiveXOject('Microsoft.XMLHTTP');
		}

		xmlhttp.onreadystatechange = function(){
			if(xmlhttp.readyState == '4' && xmlhttp.status == '200')
			{
				response = xmlhttp.responseText;
				$('#results').show();
				$('#result_body').html(response);
				actual_value = parseInt($('.actual_speed').html());
				$('#meter1').hide();
				$('#meter2').show();
				meter[1].circMeter(actual_value);
				clearInterval(param);
			}
		}
		parameters = 'socket=keepalive';
		xmlhttp.open('POST', 'test.php', true);
		xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		xmlhttp.send(parameters);
	}
});