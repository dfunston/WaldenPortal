<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<?php

if(mail("daniel.funston@gmail.com", "Test", "Testing message")==true){
	echo "Mail sent";
}else{
	echo "Mail error!";
}

?>

<body>
</body>
</html>