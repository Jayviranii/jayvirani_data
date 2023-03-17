<?php
require_once("model/adminmodel.php");
class control extends model
{
 public function __construct()
    {
        parent :: __construct();

        // // login as admin 
        // if(isset($_POST["signin"]))
        // {
        //     $em=$_POST["email"];
        //     $pass=$_POST["password"];
        //     $chk=$this->adminlogin('admin',$em,$pass);
        //     if($chk)
        //     {
        //         echo "<script>
        //         alert('You are logged in Successfully')
        //          window.location='dashboard';
        //          </script>";
        //     }
        //     else 
        //     {
        //         echo "<script>
        //         alert('Your email and password are Incorrect try again')
        //          window.location='./';
        //          </script>";
        //     }
        // }
        // // insert
        // if(isset($_POST['adduser'])){
        //     $usernm = $_POST['username'];
        //     $email = $_POST['email'];
        //     $pass = $_POST['password'];
        //     $data = array("adm_name" => $usernm, "adm_email" => $email, "adm_password" => $pass);
        //     $chk=$this->insert('admin', $data);

        //     if($chk){
        //         echo "<script>
        //         alert('data added Successfully')
        //          window.location='./';
        //         </script>";
        //     }
        //     else{
        //         echo "<script>
        //         alert('Your email and password are Incorrect try again')
        //          window.location='./';
        //          </script>";    
        //     }
        // }

        if(isset($_SERVER["PATH_INFO"]))
        {
            switch($_SERVER["PATH_INFO"])
            {
                case '/';
                require_once("login_form.php");
                break;
    
                    case '/dashboard';
                    require_once("admin_page.php");
                    break;
       
                    case '/tabel';
                    require_once("tabel.php");

       
                default;
                require_once("index.php");
                    echo "error";
                    break;
                     
            }
        } 
    }
}
$obj = new control;
?>