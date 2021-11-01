<?php
class Aturan {

    var $host = "10.0.0.245";
	var $uname = "admin";
	var $pass = "Mysql@password123";
    var $db = "management_kost";
    var $connect = "";
 
	function __construct(){
        $this->connect = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
    }
    
    function tampilAturan() {
        $data = mysqli_query($this->connect,"select * from rules");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
    }

    function countAturan() {
        $data = mysqli_query($this->connect,"select count(*) as count from rules");
		while($row = mysqli_fetch_array($data)){
			$hasil = $row['count'];
		}
		return $hasil;
    }

    function insert($rule) {
        mysqli_query($this->connect,"insert into rules(rule_desc) value ('$rule')");
    }

    function update($rule, $id) {
        mysqli_query($this->connect,"update rules set rule_desc='$rule' where user_id='$id'");
    }
    
}
?>