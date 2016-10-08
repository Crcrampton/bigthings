<?php
  mail('crcrampton@gmail.com', 'Big Things Application',
	   "Character Name: " . $_POST['char'] .
	   "\nBattleTag: " . $_POST['btag'] .
	   "\nEquipped ilvl: " . $_POST['ilvl'] .
	   "\nSpec and Class: " . $_POST['spec'] .
	   "\nArmory: " . $_POST['armory'] .
	   "\n\nRaid Experience: " . $_POST['rexp'] .
	   "\n\nAvailability: " . $_POST['avail']);
?>