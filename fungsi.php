<!DOCTYPE html>
<html>
<head>
	<title>Fungsi</title>
</head>
<body>
	<h1>Function</h1>

<?php  
___________fungsi____________

	function nama(){
		echo "<><><><><>";
		echo "MUHAMMAD FAJAR KRISNA WIJAYA";
		echo "<><><><><>";
	}

	function jarak(){
		echo "<br>";
	}
	
	nama();
	jarak();
	nama();
	jarak();

	__________parameter pada fungsi__________

	function nama( $a, $angka ){
	$a = "nama lengkap " . $a . " " . $angka;
		echo "<><><><><>";
		echo $a;
		echo "<><><><><>";
	}

	function jarak(){
		echo "<br>";
	}
	
	nama("muhammad fajar krisna wijaya", 2682003);
	jarak();

	___________return fungsi______________
	
	function menghitung($b,$c){
		$a = $b + $c;
		return $a;
	}

	$hasil = menghitung(10, 5) * 5;
	echo "hasil dari " . $hasil;

	___________SCOPE___________
	
	$a = 5000;
	$b = 100;

		function menghitung(){
		  global $a, $b;
		 // $c = $GLOBALS['a'] + $GLOBALS['b'];
	$c = $a + $b;
		 return $c;
		}
		echo menghitung();

		___________anonymous function__________
	
	$a = function($b){
		echo $b;
	};

	$a = $a;
	$a( 'hallo guys 123');
?>
</body>
</html>