<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Auth extends BaseController
{
    public function register() {
        // Lógica de registro
    }

    public function login() 
    {
        if($this->request->getMethod() === 'POST') 
        {
            //Armazena na variavel o retorno VERDADEIRO caso o usuário exista, ou FALSO caso não
            $usuarioModel = model('UserModel');   
            $usuarioCheck = $usuarioModel->check(
                $this->request->getPost('username'),
                $this->request->getPost('password')
            );
            
            if(!$usuarioCheck) 
            {
                // $data['msg'] = 'usuario e/ou senha incorretos!';
                echo 'usuario e/ou senha incorretos!';
                
            }
            else
            {
            //Salva os dados do usuario na sessão                
            $this->session->set('username', $usuarioCheck['username']);
            $this->session->set('perfil', $usuarioCheck['perfil']);

            //Redireciona o usuário para a pagina restrita.
            return redirect()->to('/');
            }
        }
        else
        {
            return view('login');
        }
        
    }

    public function logout() {
        // Lógica de logout
    }
}
