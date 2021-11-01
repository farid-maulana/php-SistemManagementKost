<?php
class TipeKamar {

    var $host = "10.0.0.245";
	var $uname = "admin";
	var $pass = "Mysql@password123";
    var $db = "management_kost";
    var $connect = "";
 
	function __construct(){
        $this->connect = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
    }
    
    public function insert($name, $harga, $fasilitas) {
        $fas = implode(", ", $fasilitas);
        $insert = mysqli_query($this->connect, "insert into room_type(type_name, harga, fasilitas) values('$name','$harga','$fas')");
    }
}
?>