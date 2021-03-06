<?php
//Janosh (Grundgerüst & __construct), Oliver&Tobias (Restliche Funktionen)
class Model{

  private $db_link;
  private $servername = "localhost";
  private $username = "root";
  private $password = "";

	public function __construct(){
    // verbindung zur DB mit der erstellung einer Tabelle, wenn noch nicht vorhanden
    $this->db_link = mysqli_connect($this->servername, $this->username, $this->password);
    $sql = 'CREATE DATABASE IF NOT EXISTS temperature CHARACTER SET utf8 COLLATE utf8_general_ci';
    $Data = mysqli_query($this->db_link, $sql);

    $this->db_link = mysqli_connect($this->servername, $this->username, $this->password, "temperature");
	}

  public function connect()
  {
  	// überprüft ob Verbidnung vorhanden ist, wenn nicht: Abbruch
  	if (!$this->db_link) {
  		die("Connection failed: " . mysqli_connect_error());
  	}

  	//create table user if not exists
  	$sql = 'CREATE TABLE IF NOT EXISTS eintrag(
  	ID int NOT NULL AUTO_INCREMENT,
  	Temperatur double NOT NULL,
  	Date varchar(50) NOT NULL,
  	PRIMARY KEY (ID)
  	)';

  	$Data = mysqli_query($this->db_link, $sql);
  }

  public function delete($id)
  {
    echo "wir waren hier";
    $this->connect();
    echo $id;
    $sql = "DELETE FROM eintrag WHERE ID='".$id."'";
    mysqli_query($this->db_link,$sql);
    mysqli_close($this->db_link);
  }

  public function insert()
  {
    $this->connect();
    date_default_timezone_set("Europe/Berlin");
    $datum = date("Y-m-d h:i:s");
    $Temperatur = $_POST["tmp"];
    //echo $Temperatur;
    if($Temperatur < -50 || $Temperatur > 60){
      return "Nothing posted";
    }
    elseif($Temperatur == null)
    {
      return "Nothing posted";
    }
    else
    {
      $sql = "INSERT INTO eintrag VALUES (NULL, '".$Temperatur."', '".$datum."');";
      mysqli_query($this->db_link, $sql);
      mysqli_close($this->db_link);
      return "Variable posted";
    }
  }

  public function read_jason()
  {
    $this->connect();
    $sql = "SELECT * FROM eintrag";
    $resultarray2 = array();
    $anzeige = mysqli_query($this->db_link, $sql);
    while($row=mysqli_fetch_assoc($anzeige))
    {
      $resultarray2[] = $row;
    };
    mysqli_close($this->db_link);
    return json_encode($resultarray2);
  }
	public static function getData(){
	}
}
?>
