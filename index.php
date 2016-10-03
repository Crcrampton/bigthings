<head>
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,700|Bitter:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<?php
  $parses = array_reverse(json_decode(file_get_contents('https://www.warcraftlogs.com:443/v1/reports/guild/Big%20Things/Arthas/US?api_key=5d3416a8113bd463b29572016aaa9d0f')));
?>

<body>
    <img id="splash-logo" src="images/logo.png" />
    <div class="front-page">
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