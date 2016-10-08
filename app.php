<?php
  mail('crcrampton@gmail.com', 'Big Things Application - ' . $_POST['cname'],
	   "Character Name: " . $_POST['cname'] .
	   "\nBattleTag: " . $_POST['btag'] .
	   "\nEquipped ilvl: " . $_POST['ilvl'] .
	   "\nSpec and Class: " . $_POST['spec'] .
	   "\nArmory: " . $_POST['armory'] .
	   "\n\nRaid Experience: " . $_POST['rexp'] .
	   "\n\nAvailability: " . $_POST['avail'], 'From: Big Things <no-reply@bigthin.gs>');
?>