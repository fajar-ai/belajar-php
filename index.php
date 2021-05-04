<!DOCTYPE html>
<html>
<head>
	<title>belajarphp</title>
</head>
<body>

	<h1>PHP</h1>

<?php
	//$nama  = ['hilma','endy','tika'];

	//print_r($kotak);
	//echo $nama[0];

	//_____________metode array____________
	//array_unique = print bagian unik
	//array_reverse = membalik
	//shuffle = mengacak
	//sort = mengurutkan
    //count = menghitung jumlah 
     
    //_____________assosiative array__________
	//$data	= array( "nama" => "fajar",	
                    // "umur" => 21,  
                    // "kerja"=> "pelajar"  );
	//print_r($data);
	//echo " namanya adalah " . $data['nama'];

    //$hewan = ['anjing' , 'babi' , 'cicak' , 'domba'];
	//print_r($hewan); 
	//echo $hewan[2]

	//_____________loop PENGULANGAN_________________

	   //for($i = 1; $i <= 10; $i++){
	  	 //echo $i . "<br>";
	  		 
	  		 //if ($i == 4){
	  		 //echo $i;
	  		//} 

	  		 //if ($i == 8){
	  		 //echo $i;
	  		//}
	  		//}
		

   	//_____________foreach untuk array____________

	//for($i=0; $i < count ($hewan); $i++){
	//echo "-----";
	//echo $hewan[$i];
	//echo "-----<br>";}

	//foreach($hewan as $h){
	//echo "-----";
	//echo $h;
	//echo "-----<br>";}
    
      
    //________foreach untuk assosiativ array________

   // $data = ['nama' => 'hilma', 
     //        'umur'=>24, 
       //      'sifat'=> 'malas'];

	//foreach($data as $key => $value ){
	//echo $key . "<br>";}


    //__________IF dan else_____________

    // $password = '123';
    
    // if( $password == '123'){
    // echo ' anda terhubung ';
    // }else{
    // echo 'gagal!';
    // }

	// __________operator logika____________
	//          == === > < >= <= !=
            
	// 	$harga_rokok = 2000;
	// 	$uangnya = 1000;

	// 	if ($harga_rokok < $uangnya) {
	// 		echo "cukup";
	// 	} else {
	// 		echo "tidak cukup";
	// 	}
		
	// ___________swit case____________
	// $n = "fajar";
	// switch ($n) {
	// 	case 'krisna':
	// 		echo 'namanya krisna';
	// 		break;
	// 	case 'fajar':
	// 		echo 'namanya fajar';
	// 		break;
	// 	default:
	// 		echo 'tidak ada yang benar';
	// 		break;
	// }
		
	// ___________fungsi____________

	// function nama(){
	// 	echo "<><><><><>";
	// 	echo "MUHAMMAD FAJAR KRISNA WIJAYA";
	// 	echo "<><><><><>";
	// }

	// function jarak(){
	// 	echo "<br>";
	// }
	
	// nama();
	// jarak();
	// nama();
	// jarak();

	// __________parameter pada fungsi__________

	// function nama( $a, $angka ){
	// $a = "nama lengkap " . $a . " " . $angka;
	// 	echo "<><><><><>";
	// 	echo $a;
	// 	echo "<><><><><>";
	// }

	// function jarak(){
	// 	echo "<br>";
	// }
	
	// nama("muhammad fajar krisna wijaya", 2682003);
	// jarak();

	// ___________return fungsi______________
	
	// function menghitung($b,$c){
	// 	$a = $b + $c;
	// 	return $a;
	// }

	// $hasil = menghitung(10, 5) * 5;
	// echo "hasil dari " . $hasil;

	//___________SCOPE___________
	
	// $a = 5000;
	// $b = 100;

	// 	function menghitung(){
	// 	  global $a, $b;
	// 	 // $c = $GLOBALS['a'] + $GLOBALS['b'];
	// $c = $a + $b;
	// 	 return $c;
	// 	}
	// 	echo menghitung();

	//___________anonymous function__________
	
	// $a = function($b){
	// 	echo $b;
	// };

	// $a = $a;
	// $a( 'hallo guys 123');

	//____________die dan vardump_____________

	// $rokok = 'surya';
	// var_dump($rokok);

	// echo ' Bulss Sampoerna Promild';

 //    $rokok = 'surya';
	// die($rokok);

	// echo ' Bulss Sampoerna Promild';

?>
</body>
</html>