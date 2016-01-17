<html>
    <head>
        <title>My Homepage</title>
        <?php include('header.php'); ?>
        </head>
        <body>
            <a href="http://venomslair.com/crook.php"><span style="display: none;">depth</span></a>
            <div id="menu"><?php include('menu.php'); ?></div>
            <div id="content">
                <span class="titles">Welcome to my page</span><br />
                <br />
                Thanks for stopping by<br />
                <br />
                This page is always under construction, please check back regularly<br />
                <br />
                Please visit <a href="announcements.php">here</a> to see all important messages regarding the website<br />
                <br />
                <span class="boldunder">Time from NIST</span><br />
                <?php include('nist.php'); ?>
                <br />
                <br />
                <span class="boldunder">Live Help</span><br />
                <?php include('livehelp.php'); ?>
                <br />
                <span class="boldunder">Here is the weather where I live</span><br />
                <br />
                <?php include('accuweather.php'); ?>
                <br />
                Click <a href="weather.php">here</a> for more weather information<br />
                <br />
                <?php include('footer.php'); ?>
                </div>
        </body>
</html>