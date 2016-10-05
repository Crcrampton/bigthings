<head>
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,700|Bitter:400,700|Roboto:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>

<script type='text/javascript'>
  $(document).ready(function() {
    $('.slide').click(function() {
      $('#top-bar').animate({marginTop: '0'});
      var btn = $(this);
      $('.pane').hide();
      if (btn.hasClass('logsb')) {
        $('#logs').fadeIn(100);
      }
      if (btn.hasClass('newsb')) {
        $('#news').fadeIn(100);
      }
    });
    $('.logo').click(function() {
      $('#top-bar').animate({marginTop: '30vh'});
      $('.pane').hide();
      $('#home').fadeIn(100);
    });
  });
</script>

<?php
  $rank = json_decode(file_get_contents('http://www.wowprogress.com/guild/us/arthas/Big%20Things/json_rank'));
  $parses = array_reverse(json_decode(file_get_contents('https://www.warcraftlogs.com:443/v1/reports/guild/Big%20Things/Arthas/US?api_key=5d3416a8113bd463b29572016aaa9d0f')));
?>

<body>
    <div id="top-bar"><div class="wrapper"><img class="logo" src="images/logo.png" /><div class="button slide apply">Apply</div><div class="button slide logsb">Logs</div><div class="button slide newsb">News</div></div></div>
    <div class="wrapper">
        <div id="home" class="pane">
          <div class="rank"><table><tr><th>Realm:</th><td><?php echo $rank->realm_rank; ?></td></tr><tr><th>USA:</th><td><?php echo $rank->area_rank; ?></td></tr><tr><th>World:</th><td><?php echo $rank->world_rank; ?></td></tr></table></div>
          <div class="next-raid"><h3>Next Raid:</h3><p>Heroic Emerald Nightmare (Core 10) on Wednesday, 10/5 at 7:15PM EST</p></div>
        </div>
        <div id="logs" class="pane" style="display: none;">
        <?php
            foreach($parses as $p) {
                $url = 'https://www.warcraftlogs.com/reports/' . $p->id;
                echo '<a href="'.$url.'" target="_new"><img class="icon" src="https://cdn2.iconfinder.com/data/icons/66-charts-graphs-and-diagrams/512/Icon_66-512.png" />'.$p->title.'<div style="float:right">'.date('l, m/d', $p->start/1000).'</div></a>';
            }
        ?>
    </div>
</body>