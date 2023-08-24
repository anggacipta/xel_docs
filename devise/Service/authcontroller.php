<?php

namespace devise\Service;

use setup\baseclass\BaseService;

class authcontroller extends BaseService
{
    public function getLogin()
    {
        $this->render('auth/login');
    }

    public function getRegister()
    {
        $this->render('auth/register');
    }

    public function setNewUser()
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $hashpwd = password_hash($password, PASSWORD_BCRYPT);
        $confirm_password = $_POST['confirm_password'];

        $data = [
            'username' => $username,
            'email' => $email,
            'password' => $hashpwd,
        ];


        if($this->checkUid() == false) {
            header('Location:/xel/admin/register?error=userexist');
            exit();
        }
        if($this->checkEmail() == false){
            header('Location:/xel/admin/register?error=invalidemail');
            exit();
        }
        if($this->emptyInput() == false) {
            header('Location:/xel/admin/register?error=emptyinput');
            exit();
        }
        if ($this->checkPwd() == false) {
            header('Location:/xel/admin/register?error=passwordnotmatch');
            exit();
        }

        header('Location:/xel/admin/login');
        $this->connect()->setNewUser($data);
    }

    public function loginXel()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($this->emptyInputLogin() == false) {
            header('Location:/xel/admin/login?error=emptyInput');
            exit();
        }

        $this->connect()->login($username, $password);
        session_start();
        $_SESSION["userid"] = 'coba';
        $_SESSION["username"] = 'user';
        header('Location:/xel-dash');
    }

    public function testingUid()
    {
        $this->render('testing');
    }

    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();

        header('Location:/xel/admin/login');
    }

    //// Checking Register ////
    private function emptyInput()
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $hashpwd = password_hash($password, PASSWORD_BCRYPT);
        $confirm_password = $_POST['confirm_password'];

        $result;
        if (empty($username) || empty($email) ||
            empty($password) || empty($confirm_password)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function checkUid()
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $result;

        if(!$this->connect()->checkingUser($username, $email)){
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }

    private function checkPwd()
    {
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        $result;
        if ($password !== $confirm_password) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }


    private function checkEmail()
    {
        $email = $_POST['email'];
        $result;
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    //// Checking Login ////
    private function emptyInputLogin()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $result;
        if (empty($username) || empty($password)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

}