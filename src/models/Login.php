<?php
    loadModel("Usuario");

    class Login extends Model{

        public function checkLogin(){
            $user = Usuario::getOne(['email' => $this->email]);
            if($user){
                if(password_verify($this->senha, $user->senha)){
                    return $user;
                }
            }
            throw new AppException("Email e Senha Inválidos.");
        }

    }

?>