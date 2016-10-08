<?php
  mail('crcrampton@gmail.com', 'Big Things Application',
	   'Character Name: ' . $POST['char'] .
	   '<br/>Equipped ilvl: ' . $POST['ilvl'] .
	   '<br/>Spec and Class: ' . $POST['spec'] .
	   '<br/>Armory: ' . $POST['armory'] .
	   '<br/><br/>Raid Experience: ' . $POST['rexp'] .
	   '<br/><br/>Availability: ' . $POST['avail']);
?>