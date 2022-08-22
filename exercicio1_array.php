<!DOCTYPE html>
<html>
<body>

<?php
$num = array(2, 2, 3, 3, 5, 7, 9, 9, 12 );
$a= count($num);

for($x = 0; $x < $a; $x++) {
 

	if($num[$x] % 2 == 1 ){
    	if($num[$x] != $num[$x+1]){
        	if($num[$x] != $num[$x-1]){
        	echo $num[$x];
    		echo " ";
        }  
        }    	
    }

}
?>

</body>
</html>