<!doctype html>
<html lang="br">

<?php require_once "Header.php"; ?>

    <body>
        <header></header>

        <div>
            <?php
            if (is_file( \Core\Application::$rootPath."views/Layout/$view.php" ) )
            {
                require_once \Core\Application::$rootPath."views/Layout/$view.php" ;
            }
            ?>
        </div>

        <footer></footer>
    </body>
</html>