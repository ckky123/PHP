<html>  
    <body> 
        <?php
        function addNumber($a,$b){
        $a=$a+$b;
        return$a;
        }
        $a=3;
        $c=addNumber($a,5);
        echo $c;
        ?>
    </body>
</html>