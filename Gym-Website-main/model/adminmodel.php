<?php
class model
{
    public $connection = "";
    public function __construct()
    {
        try {
            $this->connection = new mysqli("localhost", "root", "", "admin");
            //echo "connection successfully";
        } catch (Exception $e) {
            die(mysqli_error($this->connection, $e));
        }
    }
//     // create a member function function for adminlogin 
//     public function adminlogin($table, $em, $pass)
//     {
//         $select = "select * from $table where adm_email='$em' and adm_password= '$pass'";
//         $exe = mysqli_query($this->connection, $select);
//         $fetch = mysqli_fetch_array($exe);
//         $num_rows = mysqli_num_rows($exe);
//         if ($num_rows == 1) {
//             $_SESSION["adm_id"] = $fetch["adm_id"];
//             $_SESSION["adm_email"] = $fetch["adm_email"];
//             return true;
//         } else {
//             return false;
//         }
//     }

//     // user insert
//     public function insert($table,$data)
//     {
//         $key = array_keys($data);
//         $keynm = implode(",", $key);
//         $val = array_values($data);
//         $valnm = implode("','",$val);
//         $insert = "insert into $table($keynm)values('$valnm')";
   
//         $exe = mysqli_query($this->connection, $insert);
//         return $exe;
//     }

}

?>