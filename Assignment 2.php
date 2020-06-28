
<?php
 $name= "Today is Sunday";
for($i=strlen($name)-1, $j=0; $j<$i; $i--, $j++) {
    
    list($name[$j], $name[$i]) = array($name[$i], $name[$j]);
}

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js "></script>
<script>
console.log(<?php echo '"'.$name.'"'; ?>);
</script>

