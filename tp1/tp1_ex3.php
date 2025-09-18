<?php
    function start_page($title): void
{
?><!DOCTYPE html>
<html lang="fr">
    <head>
        <title><?php echo $title; ?></title>
    </head>
        <body>
        <?php
            }
            function end_page(): void
            {
                echo '<br><br>'.'This is the end of your world';
            }
            $str = 'test';
            start_page($str);
        ?>
        <hr><br><strong>Test</strong><br><hr>
        <?php
            end_page();
        ?>
    </body>
</html>
