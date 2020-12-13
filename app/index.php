
<!DOCTYPE html>
<html>
<head>
	<title>Калькулятор</title>
	<style>

		.btn{
			margin-right: 4px;
			margin-top: 8px;
			width:100px;
		}

		.answer{
			margin:6px;
			box-shadow: 20px;
			font: 20px;

		}

		b{
			font-size: 30px;
			color: black;
		}
		.mydiv{
			background-color: lightgrey;
			padding :10px;
			border:outset;
			border-width: 1px;
			margin:20px;
			border-radius: 10px;
		}
		.answer{
			background-color: white;
			padding:10px; 
			border-radius: 50px;
		}
	</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color:lightblue;">
	<div class='container'>
		
		<div class="col-md-12">
			<div class="row shadow p-3 mb-5 bg-white rounded mydiv">
				<h1><b><center>Калькулятор</center></b></h1>
		<form method="get" action="">
			<center>
			<input type="text" class='form-control' name="num1" placeholder="Введите число 1"><br>
			<input type="text" class='form-control' name="num2" placeholder="Введите число 2"><br>
			<button class='btn btn-primary' type="submit" name="add">+</button>
			<button class='btn btn-primary' type="submit" name="sub">-</button>
			<button class='btn btn-primary' type="submit" name="mul">*</button>
			<button class='btn btn-primary' type="submit" name="div">/</button>	
			<button class='btn btn-primary' type="submit" name="mod">%</button>	
			<button class='btn btn-primary' type="submit" name="square-root">√</button>	
			<button class='btn btn-primary' type="submit" name="sin">sin()</button>	
			<button class='btn btn-primary' type="submit" name="cos">cos()</button>	
			<button class='btn btn-primary' type="submit" name="tan">tg()</button>	
			<button class='btn btn-primary' type="submit" name="log">log()</button>
			<button class='btn btn-primary' type="submit" name="pow">x<sup><small>n</small></sup></button>	
		</center>
		</form>
		<br>
	

	
<div class='answer'>
	<center>
<?php

if(isset($_REQUEST['add'])){
	$num1 = (float)$_REQUEST['num1'];
	$num2 = (float)$_REQUEST['num2'];
	$result = $num1+$num2;
	echo "<b>Ответ : ".$result."</b>";
}
else if(isset($_REQUEST['sub'])){
	$num1 = (float)$_REQUEST['num1'];
	$num2 = (float)$_REQUEST['num2'];
	$result = $num1-$num2;
	echo "<b>Ответ : ".$result."</b>";
}
else if(isset($_REQUEST['mul'])){
	$num1 = (float)$_REQUEST['num1'];
	$num2 = (float)$_REQUEST['num2'];
	$result = $num1*$num2;
	echo "<b>Ответ : ".$result."</b>";
}
else if(isset($_REQUEST['div'])){
	$num1 = (float)$_REQUEST['num1'];
	$num2 = (float)$_REQUEST['num2'];
	$result = $num1/$num2;
	echo "<b>Ответ : ".$result."</b>";
}
else if(isset($_REQUEST['mod'])){
	$num1 = (float)$_REQUEST['num1'];
	$num2 = (float)$_REQUEST['num2'];
	$result = $num1%$num2;
	echo "<b>Ответ: ".$result."</b>";
}
else if(isset($_REQUEST['square-root'])){
	$num1 = (float)$_REQUEST['num1'];
	$num2 = (float)$_REQUEST['num2'];
	$result = sqrt($num1);
	echo "<b>Ответ : ".$result."</b>";
}
else if(isset($_REQUEST['sin'])){
	$num1 = (float)$_REQUEST['num1'];
	$num2 = (float)$_REQUEST['num2'];
	$result = sin($num1);
	echo "<b>Ответ : ".$result."</b>";
}

else if(isset($_REQUEST['cos'])){
	$num1 = (float)$_REQUEST['num1'];
	$num2 = (float)$_REQUEST['num2'];
	$result = cos($num1);
	echo "<b>Ответ : ".$result."</b>";
}

else if(isset($_REQUEST['tan'])){
	$num1 = (float)$_REQUEST['num1'];
	$num2 = (float)$_REQUEST['num2'];
	$result = tan($num1);
	echo "<b>Ответ : ".$result."</b>";
}

else if(isset($_REQUEST['log'])){
	$num1 = (float)$_REQUEST['num1'];
	$num2 = (float)$_REQUEST['num2'];
	$result = log($num1);
	echo "<b>Ответ : ".$result."</b>";
}

else if(isset($_REQUEST['pow'])){
	$num1 = (float)$_REQUEST['num1'];
	$num2 = (float)$_REQUEST['num2'];
	$result = pow($num1,$num2);
	echo "<b>Ответ : ".$result."</b>";
}

?>
</center>
</div>
</div>
</div>
</div>
</div>
</body>
</html>