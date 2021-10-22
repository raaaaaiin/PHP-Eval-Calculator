<!doctype html>
<html>
	<head>
		<title>Calc</title>
		<link rel="stylesheet" href="Script/bootstrap.min.css">
		<link rel="stylesheet" href="Script/Style.css">
		<script src="Script/bootstrap.js"></script>
	</head>
	<body class="body">
		<?php 
		$total =0;
		if(isset($_POST['submit'])) {
			$total = calculate($_POST['first'],$_POST['sekond'],$_POST['operator']);
        }
		function calculate($first,$second,$operator){
        	if(is_numeric($first) == true && is_numeric($second) == true){
        		$string = "".$first."".$operator."".$second."";
				$math_string ="\$total = (".$string.");";
				$result = eval($math_string);
				return $total;
        	}else{
        		return "Invalid Input : Number Only";
        	}
        }
        ?>
	<div class="white activated" style="height: 400px;width:300px;margin-left: 35.5%; margin-top: 10%;">
		 <form method="post">
		<div class="row-lg-2 col-lg-13" style="margin-left:25px;margin-top:50px;" >
			<br>
			<span> First Number:</span>
			<input name="first" type="text" class="form-control" style="width:250px">
			<span> Second Number:</span>
			<input name="sekond" type="text" class="form-control" style="width:250px">
			<p>Please select the operator:</p>
  			<input name="operator" type="radio" id="age1" name="age" value="+">
  			<label for="age1">+  : ADDITION</label><br>
  			<input name="operator" type="radio" id="age2" name="age" value="-">
  			<label for="age2">-  : SUBTRACTION</label><br>  
  			<input name="operator" type="radio" id="age3" name="age" value="*">
  			<label for="age3">*  : MULTIPLICATION</label><br>
  			<input name="operator" type="radio" id="age3" name="age" value="/">
  			<label for="age3">/  : DIVISION</label><br>
  			<span> Total Number:</span>
			<input id="total" type="text" class="form-control" style="width:250px" value="<?php echo $total; ?>">
			<button name="submit" id="Equals" class ="btn-success" style="width:252px"><center>Calculate</button>
			</div>	
			</form>
		</body>
	<script>
	</script>
</html>