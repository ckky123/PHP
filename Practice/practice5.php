<html> 
    <body>
        <?php  
        function power($a,$b){
        $s=$a;
        for($i=1;$i<$b;$i++){
        $s=$s*$a;
        }
        return $s;
        }
        $a=3;$b=4;
        $c=power($a,$b);
       echo $c;
       ?> 
    </body>
</html>
       