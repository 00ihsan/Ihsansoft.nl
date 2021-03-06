<!DOCTYPE html>
<html>
    <head>
        <title>Ihsansoft Maintenance</title>
        <link rel="icon" href="../img/Ihsansoft-logo.png">
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/servernotifications.css">
    </head>
    <body>
        <header>
            <h1><b>Welcome to Ihsansoft.nl</b></h1>
        </header>
        <main>
            <br>
            <a href="https://ihsansoft.nl" title="Ihsansoft Logo" class="centerlogohref">
                <img src="../img/Ihsansoft-logo.png" class="centerlogo">
            </a>
            <br>
            <p>Ihsansoft.nl is momenteel niet beschikbaar vanwegen onderhoud! Wij zijn zo bij u terug! <br> Ihsansoft.nl is currently not available due to maintenance! We will be back soon!</p>
            <br>
            <div class="LOG">
                <p>IP adress: <?php echo $_SERVER["REMOTE_ADDR"]; ?> </p>
            </div>
        </main>
        <footer>
            <p>
                &copy; Ihsansoft 2021
                <br>
                E-Mail: <a href="mailto:info@ihsansoft.nl">info@ihsansoft.nl</a>
            </p>
        </footer>
    </body>
</html>
