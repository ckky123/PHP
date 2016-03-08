<html> 
    <body>
        <?php  
        function power($a,$b,$x){
        $sum=$x;
        for($i=1;$i<=$b;$i++){
        $sum=$sum+$sum*$a;
        }
        return $sum;
        }
        $a=0.03;$b=6;$x=6.7;
        $c=power($a,$b,$x);
        echo $c;
        ?> 
    </body>
</html>