<?php
class database{

    var $host = "localhost";
    var $uname = "root";
    var $pass = "";
    var $db = "user";
    var $con ;

    function __construct(){
        $this->con=mysqli_connect($this->host, $this->uname, $this->pass,$this->db);
        mysqli_select_db($this->con,$this->db);
    }

    function tampil_data(){
        $data = mysqli_query($this->con,"select * from user_resti");
        while($d=mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }
    function input ($nama,$alamat,$usia){
        mysqli_query($this->con,"insert into user_resti values('','$nama','$email','$prodi')");
    }
    function hapus ($id){
        mysqli_query($this->con,"delete from user_resti where id='$id'");
    }
    function edit ($id){
        $data = mysqli_query($this->con,"select * from user_resti where id='$id'");
        while ($d = mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }
    function update($id,$nama,$alamat,$usia){
        mysqli_query($this->con,"update user_resti set nama ='$nama', email='$email', prodi='$prodi', where id='$id'");
    }
}
?>

