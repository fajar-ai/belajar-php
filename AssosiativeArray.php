<!DOCTYPE html>
<html>
<head>
	<title>Array</title>
</head>
<body>
	<h1>Assosiative Array</h1>
<?php  

_____________assosiative array__________
	$data	= array( "nama" => "fajar",	
                    "umur" => 21,  
                    "kerja"=> "pelajar"  );
	print_r($data);
	echo " namanya adalah " . $data['nama'];

    $hewan = ['anjing' , 'babi' , 'cicak' , 'domba'];
	print_r($hewan); 
	echo $hewan[2]

?>
</body>
</html>