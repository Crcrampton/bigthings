<head>
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,700|Bitter:400,700|Roboto:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<?php
  $rank = json_decode(file_get_contents('http://www.wowprogress.com/guild/us/arthas/Big%20Things/json_rank'));
  $parses = array_reverse(json_decode(file_get_contents('https://www.warcraftlogs.com:443/v1/reports/guild/Big%20Things/Arthas/US?api_key=5d3416a8113bd463b29572016aaa9d0f')));
?>

<body>
    <div id="top-bar"><div class="wrapper"><img class="logo" src="images/logo.png" /><div class="button">Logs</div><div class="button apply">Apply</div></div></div>
    <div class="wrapper">
        <div class="rank"><table><tr><th>Realm:</th><td><?php echo $rank->realm_rank; ?></td></tr><tr><th>USA:</th><td><?php echo $rank->area_rank; ?></td></tr><tr><th>World:</th><td><?php echo $rank->world_rank; ?></td></tr></table></div>
        <div class="next-raid"><h3>Next Raid:</h3><p>Emerald Nightmare on Tuesday, 10/4.</p></div>
        <div class="logs"><h3>Recent Logs</h3>
        <?php
            foreach($parses as $p) {
                $url = 'https://www.warcraftlogs.com/reports/' . $p->id;
                echo '<a href="'.$url.'" target="_new">'.$p->title.' on '.date('l, m/d', $p->start/1000).'</a><br/>';
            }
        ?>
    </div>
</body>