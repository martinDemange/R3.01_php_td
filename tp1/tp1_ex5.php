<?php
    include 'function.php';
    start_page('Calculator');
    $operators = '*+-/';

?>
    <form action="calcul.php" method="get">
        Number 1 : <input name="op1" type="text"><br>
        Number 2 : <input name="op2" type="text"><br>

        <?php
//        for($cpt = 0 ; $cpt <= 3 ; ++$cpt)
//        {
//            echo '<input ';
//            if ($cpt === 0)
//            {
//                echo 'checked="checked" ';
//            }
//            echo 'type="radio" name="op" value="'.$operators[$cpt].'">'.
//                $operators[$cpt].'<br>';
//        }
            for($cpt = 0 ; $cpt <= 3 ; ++$cpt)
            {
                echo '<input ';
                if ($cpt === 0)
                {
                    echo 'checked="checked" ';
                }
                echo 'type="submit" name="action" value="'.$operators[$cpt].'">';
            }
        ?>
<!--        <input checked="checked" type="radio" name="op" value="*">*<br>-->
<!--        <input type="radio" name="op" value="+">+<br>-->
<!--        <input type="radio" name="op" value="-">-<br>-->
<!--        <input type="radio" name="op" value="/">/<br>-->
        <input type="submit" name="submit" value="submit">
        <input type="reset" name="erase" value="erase">
    </form>
<?php
end_page();
?>
