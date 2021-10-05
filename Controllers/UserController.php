<?php
require '../Models/User.php';

class UsuarioController extends User {

    public function redirectprincipal() {
        header("location: http://localhost/Concesionario");
    }

    public function LoginView() {

    }

}

public function VerifyLogin($Nameuser,$password) {
    $this->NameUser = $Nameuser;
    $this->Password = $password;

    $InfUser = $this->SearchUsuarioForName();
    foreach($InfUser as $User) {}
    if (password_verift($Password,$User->Password)) {
        $_SESSION['nombre_usuario'] = $User->nombre_usuario;
    }
}
?>