<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;

class UsersController extends Controller {

    public function addNewUser(){
        $this->render('newUser');
    }

    public function addNewUserAction(){
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        $permission = filter_input(INPUT_POST, 'permission');

        if($name && $email && $password && $permission){
            $data = Usuario::select()->where('email', $email)->execute();

            if(count($data) === 0){
                Usuario::insert([
                    'name_user' => $name,
                    'email' => $email,
                    'password' => $password,
                    'user_permission' => $permission
                ])->execute();

                $this->redirect('/');
            }
        } 
        $this->redirect('/newUser');
    }

    public function updateUser($args){
        $usuario = Usuario::select()->find($args['id']);
        $this->render('update', [
            'usuario' => $usuario
        ]); 
    }

    public function updateUserAction($args){
        $name = filter_input(INPUT_POST, 'nameUpdate');
        $email = filter_input(INPUT_POST, 'emailUpdate');
        $password = filter_input(INPUT_POST, 'passwordUpdate');
        $permission = filter_input(INPUT_POST, 'permissionUpdate');

        if($name && $email && $password && $permission){
                Usuario::update()
                ->set('name_user', $name)
                ->set('email', $email)
                ->set('password', $password)
                ->set('user_permission', $permission)
                ->where('id', $args['id'])
                ->execute();

                $this->redirect('/');
        }

        $this->redirect('/users/'.$args['id'].'/update');
    }

    public function deleteUser($args){
        $this->render('delete');
    }

    public function deleteUserAction($args){
        Usuario::delete()->where('id', $args['id'])->execute();
        $this->redirect('/');
    }
}