<!DOCTYPE html>
<html>
<head>
	<title>foreach</title>
</head>
<body>
	<h1>Foreach</h1>

<?php  
_____________foreach untuk array____________

	for($i=0; $i < count ($hewan); $i++){
	echo "-----";
	echo $hewan[$i];
	echo "-----<br>";}

	foreach($hewan as $h){
	echo "-----";
	echo $h;
	echo "-----<br>";}
    
      
    ________foreach untuk assosiativ array________

   $data = ['nama' => 'hilma', 
            'umur'=>24, 
            'sifat'=> 'malas'];

	foreach($data as $key => $value ){
	echo $key . "<br>";}
?>
</body>
</html>