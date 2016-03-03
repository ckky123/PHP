<html>
    <body>
        <?php
        $numbers=array(8,2,3,4,5,9,0);
        $names=array("mark","Rich","Rosie","Savy","Ben");
        arsort($numbers);
        foreach($numbers as $num){
        echo $num."\n";}
        echo"<br>";
        foreach($names as $name){
        echo $name;    
        }
        ?>
    </body>
</html>