<?php
//membangun koneksi
$host = "localhost";
$dbname = "sisfonews";
$username = "root";
$password = "vira";
$db="";

try {
		$db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} 
	catch (PDOException $exception)	{
		die("Connection error: ".$exception->getMessage());
	}

//mengambil data dari database 
$query = $db->prepare("SELECT * FROM berita");
$query->execute();
$data = $query->fetchAll();

//menampilkan data dari databse
foreach ($data as $ib) { ?> 
    <h1> <?php echo $ib['judul']; ?> </h1>
    <p> <?php echo $ib['isi'];?> </p>
<?php } 

?>