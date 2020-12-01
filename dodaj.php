<?php
		$connection = new mysqli('localhost', 'root', '','dane')or die('Brak połączenia z serwerem MySQL.<br />Błąd: '.mysql_error());

		$tytul=$_POST['tytul'];
		$gatunek = $_POST['gatunek'];
		$rok = $_POST['rok'];
		$ocena = $_POST['ocena'];

		if(empty($tytul) || empty($gatunek) || empty($rok) || empty($ocena))
		{
			echo "Nie podano danych filmu <br>";
		}
		else if (isset($tytul) || isset($gatunek) || isset($rok) || isset($ocena))
		{
			$sql = "INSERT INTO filmy ('id', 'gatunki_id','tytul','rok','ocena' ) VALUES (NULL, '$gatunek', '$tytul', '$rok', '$ocena')";

			$result = mysqli_query($connect, $sql);
			echo 'Film'.$result.'został dodany do bazy'.'<br>' ;
		}
		$connection->close();
	?>
