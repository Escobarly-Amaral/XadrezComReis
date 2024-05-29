<?php
require_once('../Model/conect.php');

class Players extends connectionDB {
    protected $name_Cad;
    protected $password_Cad;
    protected $email_Cad;
    
    protected $email_login;
    protected $password_login;

    function __construct($name = '', $email, $password){
        parent::__construct();
        $this->name_Cad = $name;
        $this->email_Cad = $email;
        $this->password_Cad = $password;
        
        $this->email_login = $email;
        $this->password_login = $password;
    }

    public function register(){
        $name_Cad = mysqli_real_escape_string($this->linkstart, $this->name_Cad);
        $email_Cad = mysqli_real_escape_string($this->linkstart, $this->email_Cad);
        $password_Cad = mysqli_real_escape_string($this->linkstart, $this->password_Cad);

        $query = "INSERT INTO players (nome, email, senha) VALUES ('$name_Cad', '$email_Cad', '$password_Cad')";
        if (mysqli_query($this->linkstart, $query)) {
            echo "Registrado Com Sucesso!";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($this->linkstart);
        }
    echo '<script>
            setTimeout(() => {
                window.location.href = "../jogar.php";
            }, 1000);
        </script>';
    exit();
    }

    public function login(){
        $email_login = mysqli_real_escape_string($this->linkstart, $this->email_login);
        
        $query = "SELECT * FROM players WHERE email = '$email_login'";
        $result = mysqli_query($this->linkstart, $query);
        
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            if ($this->password_login == $row['senha']) {
                echo "Logado Com Sucesso!";
            } else {
                echo "Senha Errada!";
            }
        } else {
            echo "Email Errado!";
        }
    echo '<script>
            setTimeout(() => {
                window.location.href = "../index.php";
            }, 1000);   
        </script>';
    exit();
    }
}
?>