<!DOCTYPE html>
<html>
    <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bulma.css">
        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        </a>
</head>
<body>

        
        <div class="menubar">
            <h1>sieht man das?</h1>
        </div>
        <div class="notification is-danger">
            <div class="text">
                Site still in progress.</div>
        
            </div>
                <div class="me">.web
            </div>
            <div class="columns">
                <div class="column is-one-fifth"><a href="index.php?page=Anmelden">Anmelden</a></div>
                <div class="column is-one-fifth"><a href="index.php?page=Info">Info</a></div>
                <div class="column is-one-fifth"><a href="index.php?page=Menü">Menü</a></div>
                </div>
            </div>
    <div class="content">
            <?php include __DIR__."/content.php" ?>
</div>
        <footer class="footer">
    <div class="content has-text-centered">
        <p>
        <strong>Website</strong> by <a href="https://github.com/mertsef/website">Mert</a>.
        </p>
        </div>
        </footer>
    </div>
        </body>
</html>
