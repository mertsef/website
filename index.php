<!DOCTYPE html>
<html>
    <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
</head>
<body>
        <div class="menubar">
            <h1>sieht man das?</h1>
            <div class="button">
            <button id="count">moin</button>
            <script src="start.js"></script>
            </div>
            <div>
                <div class="me">.web
                    <div class="date-time">
                <button onclick="this.innerHTML = Date()">Uhrzeit</button>
                </div> 
            </div>
                <div class="menu">
                <a href="index.php?page=Start">Start</a> 
                <a href="index.php?page=Menü">Menü</a> 
                <a href="index.php?page=Auswahl">Auswahl</a> 
                <a href="index.php?page=Info">Info</a>
            </div>
    <div class="content">
            <?php include __DIR__."/content.php" ?>
</div>
            <div class="footer">
                <div class="footertext">   
                <?php include __DIR__."/footer.php" ?>
</div>
</div>
        </body>
</html>