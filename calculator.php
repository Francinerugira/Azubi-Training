<p> Calculator </p>
<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
First Number:<input type="number" name="n1" require><br><br>
Second Number:<input type="number" name="n2" require><br><br>
Operation: <select name="operation" require>
	<option value="">Select operation you want</option>
	<option value="sub"> - </option>
	<option value="add"> + </option>
	<option value="mult"> * </option>
	<option value="div"> / </option>
    <option value="mod"> % </option>
</select><br><br>
<input type="submit" name = "calculate" value="Calculate">
<br>
</form>

?>

<?php

if(isset($_POST['calculate'])){
	$n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $operation = $_POST['operation'];

	if($operation == "sub"){
		$result = $n1 - $n2;
        echo "Result: <input type='text' value=".$result."><br>";
    }
	else if($operation == "add"){
		$result = $n1 + $n2;
        echo "Result: <input type='text' value=".$result."><br>";
    }
	else if($operation == "mult"){
		$result = $n1* $n2;
        echo "Result: <input type='text' value=".$result."><br>";
    }
	else if($operation == "div"){ 
		$result = $n1 / $n2;
        echo "Result: <input type='text' value=".$result."><br>";
    }

    else { 
		$result = $n1 % $n2;
        echo "Result: <input type='text' value=".$result."><br>";
    }
}
?>