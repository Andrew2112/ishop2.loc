<?php
namespace app\controllers;


use app\models\User;

class UserController extends AppController
{
    public function signupAction(){
        if (!empty($_POST)){
            $user=new User();
            $data=$_POST;
            $user->load($data);
            if (!$user->validate($data) || !$user->checkUnique()){
                $user->getErrors();
                $_SESSION['form-data']=$data;
            }else{
                $user->attributes['password'] = password_hash($user->attributes['password'], PASSWORD_DEFAULT);
                if ($user->save('user')){
                    $_SESSION['success'] = 'Успешная регистрация';
                }else{
                    $_SESSION['error'] = 'Ошибка!';
                }
            }
            redirect();
        }
        $this->setMeta('Регистрация');

    }
    public function loginAction(){
        if (!empty($_POST)){
            $user= new User();
            if ($user->login()){
                $_SESSION['success']= 'Вы успешно авторризовались';
            }else{
                $_SESSION['error']= 'Логин/Пароль введены неверно';
            }
            redirect();
        }
        $this->setMeta('Вход');

    }
    public function logoutAction(){
        if (isset($_SESSION['user'])) unset($_SESSION['user']);
        redirect();

    }

}