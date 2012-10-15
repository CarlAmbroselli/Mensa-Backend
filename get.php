<?php
	$html = file_get_contents("http://www.studentenwerk-potsdam.de/mensa-griebnitzsee.html").file_get_contents("http://www.studentenwerk-potsdam.de/speiseplan.html");
	
	$count = 0;
	$day = array();
	
	//Datum
	$startd = strpos($html, "<h2 id='ueberschrift_h2'>Speiseplan f&uuml;r ")+45;
	$html = substr($html, $startd);
	$end = strpos($html, "</h2>");
	$datum = substr($html, 0, $end);

	while($startd > 26){
			$essen = array();
			//Essen 1
			$start = strpos($html, " <td class='text1'>")+19;
			if($start < strpos($html, "<tr><th><div class='date'>")+26){
				$html = substr($html, $start);
				$end = strpos($html, "</td>");
				$essen[0] = substr($html, 0, $end);
			
				//Essen 2
				$start = strpos($html, " <td class='text2'>")+19;
				$html = substr($html, $start);
				$end = strpos($html, "</td>");
				$essen[1] = substr($html, 0, $end);
			
				//Essen 3
				$start = strpos($html, " <td class='text3'>")+19;
				$html = substr($html, $start);
				$end = strpos($html, "</td>");
				$essen[2] = substr($html, 0, $end);
			
				//Essen 4
				$start = strpos($html, " <td class='text4'>")+19;
				$html = substr($html, $start);
				$end = strpos($html, "</td>");
				$essen[3] = substr($html, 0, $end);
			
				foreach($essen as &$meal){
					//replace links
					$start = 1;
					while($start){
						$start = strpos($meal, "<a");
						if($start){
							$end = strpos($meal, "</a>") + 4;
							$meal = substr($meal, 0, $start).substr($meal, $end);
						}
					}
				
					$meal = str_replace("<b>", "", $meal);
					$meal = str_replace("</b>", "", $meal);
				
				}
			$day[$count] = array();
			if(strpos($datum, "ontag") || strpos($datum, "ienstag") || strpos($datum, "ittwoch") || strpos($datum, "onnerstag") || strpos($datum, "reitag") || strpos($datum, "amstag") || strpos($datum, "onntag")){
				$datum = "Heute";
			}
			$day[$count]["date"] = $datum;
			$day[$count]["meal"] = array_map('utf8_encode', $essen);
			$count++;
		}
		//Datum
		$startd = strpos($html, "<tr><th><div class='date'>")+26;
		$html = substr($html, $startd);
		$end = strpos($html, "</div></th></tr>");
		$datum = substr($html, 0, $end);
	}
	$json = json_encode($day);
	
	echo $json;

?>
