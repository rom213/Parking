<?php
class UsersController {
    private $auth;

    public function __construct(){
        require_once "models/UsersModel.php";
        require_once "middleware/auth.php";

        $this->auth = new AuthMiddleware();
    }
    
    public function index(){
        $this->auth->check();

        $users = new Users_model();
        $data["titulo"] = "Users";
        $data["users"] = $users->get_users();
        require_once "views/users/users.php";    
    }

    public function login($message = '') {
        $data["titulo"] = "Login";
        $data["message"] = $message;
        require_once "views/login/login.php";    
    }

    public function login_controller(){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $users = new Users_model();

        $data = $users->validate_session($email, $password);

        if ($data === false) {
            $this->login("Credenciales incorrectas. Por favor, intente nuevamente.");
            return;
        }

        session_start();
        $_SESSION['id'] = $data['id'];
        $_SESSION['rol'] = $data['rol'];
        $_SESSION['name'] = $data['name'];
        $this->index();
        exit;
    }

    public function nuevo(){
        $data["titulo"] = "Register User";
        require_once "views/users/users_nuevo.php";
    }

    public function guarda(){


        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $birth_day = $_POST['birth_day'];
        $direccion = $_POST['direccion'];
        

        $users = new Users_model();
        $users->insertar($username, $email, $password, $birth_day, $direccion);
        $this->login();
        exit;
    }

    public function modificar($id){
        $users = new Users_model();
        
        $data["id"] = $id;
        $data["users"] = $users->get_user($id);
        $data["titulo"] = "Users";
        require_once "views/users/users_modifica.php";
    }

    public function actualizar(){
        $id = $_POST['id'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $birth_day = $_POST['birth_day'];
        $direccion = $_POST['direccion'];
        
        $users = new Users_model();
        $users->modificar($id, $username, $email, $birth_day, $direccion);
        $this->index();
        exit;
    }

    public function eliminar($id){
        $users = new Users_model();
        $users->eliminar($id);
        $this->index();
        exit;
    }    
}
?>
