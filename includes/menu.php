    <!-- Top Navbar fix du haut -->
      <nav style="background-color : rgba(0,0,0,0.8); border-bottom: <?php echo $topnavbarcolor ?> 3px solid;" class="navbar navbar-inverse navbar-fixed-top" height="5">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Basculer la navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><?php echo $websitename ?></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <?php
				$fp = @fsockopen("5.135.141.7", "2600", $errno, $errstr, 1);
				if($fp >= 1)
				{ 
				echo '<li><a title ="Serveur Allumer ✔">Serveur : <i style="color:green" class="fa fa-signal"></i> </a></li>';
				}
				else
				{ 
				echo '<li><a title ="Serveur Eteint ✖" >Serveur : <i style="color:green" class="fa fa-signal"></i> </a></li>';
				}
				//echo '<li><a title ="Serveur Eteint ✖">Serveur : <i style="color:#aa0000" class="fa fa-times"></i> </a></li>';
				?>
			  
			  <li class="<?php if ($first_part=="playerlist.php") {echo "active"; }?>"><a href="playerlist.php"><i class="fa fa-users"></i> Joueurs : <?php echo $plr_count ?> / <?php echo $max_plrs ?> </a></li>
            </ul>
			<ul class="nav navbar-nav navbar-right">
			<li><a href="<?php echo $facebook ?>" target="_blank"><img src="images/social/social_facebook1.png" /></a></li>
			<li><a href="<?php echo $twitter ?>" target="_blank"><img src="images/social/social_twitter.png" /></a></li>
			<li><a href="<?php echo $youtube ?>" target="_blank"><img src="images/social/social_youtube.png" /></a></li>
            </ul>
            <!--<ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="./">Default <span class="sr-only">(current)</span></a></li>
              <li><a href="navbar-static-top/">Static top</a></li>
              <li><a href="navbar-fixed-top/">Fixed top</a></li>
            </ul>-->
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

    <!-- Static Navbar menu -->
      <nav style="background-color : rgba(0,0,0,0.8);" class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Basculer la navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div id="navbar1" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="color-white <?php if ($first_part=="index.php") {echo "active"; }?>"><a href="">Accueil</a></li>
			  <li class="color-white <?php if ($first_part=="forum.php") {echo "active"; }?>"><a href="<?php echo $forum ?>"><i class="fa fa-comments"></i> Forum</a></li>
			  <li class="color-white <?php if ($first_part=="panel.php") {echo "active"; }?>"><a href="<?php echo $panel ?>"><i class="fa fa-gears"></i> Panel</a></li>
			  <li class="color-white <?php if ($first_part=="vote.php") {echo "active"; }?>"><a href="<?php echo $boutique ?>"><i class="fa fa-shopping-cart"></i> Boutique</a></li>
			  <li class="color-white <?php if ($first_part=="vote.php") {echo "active"; }?>"><a href="<?php echo $topsite ?>"><i class="fa fa-star"></i> Votez !</a></li>
            </ul>
			<ul class="nav navbar-nav navbar-right">
			<li class="<?php if ($first_part=="map.php") {echo "active"; }?>"><a href="map.php"><i class="fa fa-map-marker"></i> Carte du serveur</a></li>
              <li class="dropdown">
                <a id="start" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-sign-in"></i> Connexion <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
				  <li class="dropdown-header">Serveur(s) SA-MP</li>
                  <li><a href="samp://<?php echo $ipsamp ?>:<?php echo $portsamp ?>"><img src="images/social/social_samp.png" /> <?php echo $serveurname ?></a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Serveur(s) VoIP</li>
                  <li><a href="ts3server://<?php echo $ipteamspeak3 ?>?port=<?php echo $portteamspeak3 ?>"><img src="images/social/social_teamspeak.png" /> TeamSpeak 3</a></li>
                </ul>
              </li>
			  <li class="dropdown">
                <a id="start" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-download"></i> Téléchargement <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
				  <li class="dropdown-header">SA-MP</li>
                  <li><a href="https://sa-mp.com/download.php"><img src="images/social/social_samp.png" /> SA-MP 0.3.7</a></li>
				  <li><a href="/forum/modding/"><img src="images/social/social_samp.png" /> Pack de Texture</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">VoIP</li>
                  <li><a href="https://teamspeak.com/downloads"><img src="images/social/social_teamspeak.png" /> TeamSpeak 3</a></li>
                </ul>
              </li>
            </ul>
            <!--<ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="./">Default <span class="sr-only">(current)</span></a></li>
              <li><a href="navbar-static-top/">Static top</a></li>
              <li><a href="navbar-fixed-top/">Fixed top</a></li>
            </ul>-->
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>