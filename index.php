<?php

$i = 1;
?>

<H1>Dokumentation - MensaAPI</H1>

<p>Diese API gibt die Speisen der Potsdamer Mensa als JSON aus. Ausgelesen werden die Gerichte f&uuml;r Griebnitzsee, jedoch sollte die Auswahl an allen anderen Standorten identisch sein.</p>
<p>Die Ausgabe erfolgt in JSON unter URL <a href="http://mensaapi.herokuapp.com/get.php">mensaapi.herokuapp.com/get.php</a></p>

<p>Beispielausgabe:</p>
<code>
[
   {
      "date":"Freitag, den 28. September 2012",
      "essen":[
         "Pasta mit Wurstgulasch oder veganer Tomatensauce",
         "Brathering mit Bratkartoffeln und Gurkensalat",
         "H\u00e4hnchenbrust mit Rucolak\u00e4sesauce, dazu Gurkenk\u00fcrbisgem\u00fcse und Bandnudeln",
         "Vegetarische Maultaschenauf einer Gem\u00fcse-Pfanne dazu Salat"
      ]
   },
   {
      "date":"Mo, 1. Oktober 2012",
      "essen":[
         "Soljanka mit Sauerrahm oder vegetarische Kartoffelsuppe, dazu Brot",
         "Rostbratwurst mit Bayrisch Kraut und Salzkartoffeln",
         "H\u00e4hnchen-Cordon Bleu mit Blumenkohl in Semmelbutter, dazu Salzkartoffeln oder Kroketten",
         "Vegetarisch gef\u00fcllte Paprikah\u00e4lfte mit Tomatensauce auf buntem Ebly-Weizen, dazu Blattsalat mit Dressing"
      ]
   },
   {
      "date":"Di, 2. Oktober 2012",
      "essen":[
         "R\u00fchrei mit Rahmspinat und Salzkartoffeln",
         "H\u00e4hnchencurry mit exotischen Fr\u00fcchten und Joghurtdip, dazu Bio-Reis und Mischsalat",
         "Griechisches Lammhacksteak mit Tzatziki, dazu Ratatouille und Rosmarin-Kartoffeln oder Wedges",
         "Gem\u00fcse-Couscouspfanne mit Joghurt-Ingwer-Dip, dazu bunter Blattsalat"
      ]
   },
   {
      "date":"Do, 4. Oktober 2012",
      "essen":[
         "Hefekl\u00f6\u00dfe mit Waldbeeren",
         "Hackbraten mit gelben M\u00f6hren, dazu Salzkartoffeln",
         "Fangfrischer Seefisch mit Dillhollandaise und Mandel-Brokkoli, dazu Herzoginkartoffeln",
         "Bio-Nudeln mit getrockneten Tomaten, Rucola, Pinienkernen und Grana Padano, dazu Tessiner Mischsalat"
      ]
   },
   {
      "date":"Fr, 5. Oktober 2012",
      "essen":[
         "Erbseneintopf mit W\u00fcrstchen oder Tofuw\u00fcrfeln, dazu Roggenbrot",
         "Bigosch mit Schweinefleisch, dazu Minikl\u00f6\u00dfchen",
         "Schweinesteak nach Strindberg Art mit Pfefferbohnen und Pommes frites",
         "Kartoffel-K\u00fcrbiskern-R\u00f6sti mit Tomaten-Schnittlauchquark, dazu Blattsalatvariation"
      ]
   }
]
</code>
