<?php include_once('common.php'); 
//print('<pre>'); var_dump($_POST); print('</pre>');
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
	<link rel="shortcut icon" href="http://i.imgur.com/tmPBpgx.png" type="image/png">
    <link rel="icon" href="http://i.imgur.com/tmPBpgx.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lonely Dad Meetup</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/lonelydad.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <script src="js/vendor/modernizr.js"></script>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="js/ajax.js"></script>
    <script>
        if (window.location.protocol != "https:")
        window.location.href = "https:" + window.location.href.substring(window.location.protocol.length);
    </script>
   </head>
   <body>
  <?php if(($_SESSION['authorized'] == TRUE)){ ?>
 <nav class="top-bar sticky" data-topbar >
        <ul class="title-area">
            <li class="name">
                <h1><a href="#Home"><img style="position: relative; max-height: 75px;" src="dad.png"></a></h1>
				<!-- alt logohttp://i.imgur.com/ClEnz1J.png -->
            </li>
            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
        </ul>
        <section class="top-bar-section">
            <ul class="left">
                <li><a href="#Home">Home</li>
				<li><a href="#CreateEvent">Create an Event</li>
                <li><a href="#MyEvents">My Events</li></a>
                <li><a href="#BrowseEvents">Browse Events</li></a>
                <!--<li class="has-form hide-for-touch">
                    <input type="text" placeholder="Search For Notes" onkeyup="window.history.pushState('', 'Location', '#Search&query='+ this.value)">
                </li>
                <li><a href="#FAQ">F.A.Q.</a></li>
                <li class="divider">
                <li><a href="#About">About Us</a></li>
                <li class="divider">-->
            </ul>
            <ul class="right">
                    <!--<li class="active"><a href="#ServerStatus">7/7 Online</a></li>-->
                <a href="#Report">
                <li class="has-dropdown not-click">My Account</a>
                    <ul class="dropdown">
                        <li><a href="#MyAccount">Your Account</a></li>
                        <!--<li><a href="#ReffererCode">Refferer Code</a></li>
                        <li><a href="#Contact">Contact Us</a></li>-->
                        <li><a href="#Logout">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </section>
    </nav>
	<? } ?>
<div id="pageContent">
    <noscript>
        <center>
            <h1 style="color:red;">Javascript is REQUIRED to use this website.</h1>
        </center>
    </noscript>
</div><div id="footer"> &copy;<?php echo date("Y") ?> LonelyDadMeetup  - All Rights Reserved | Generated In: <span id="loadtime">NULL</span> | Last Updated <span id="lastupdated">NULL</span>
    </p>
</div>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
