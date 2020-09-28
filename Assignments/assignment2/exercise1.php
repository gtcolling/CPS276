<?
$a = [1, 2, 3, 4];
$b = [1, 2, 3, 4, 5];
foreach ($a as $x) {
?>
    <html>
        <body>

        <h2></h2>

            <ul>
                <li>
                    <? echo($x) ?>
                </li>
                    <? foreach ($b as $x) { ?> 
                <h2></h2>
                    <ul>
                        <li> 
                            <? echo($x) ?> 
                        </li>
                    </ul>
                <? } ?>
            </ul>  
        </body>
    </html>
<?
}
?>