<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class Tasks extends BaseController
{
    public function read() {
        // Visualizar tarefas

        //Armazena na variavel o nome do usuario logado na sessão
        $user_session = $this->session->get('username');
        $taskModel = model('TaskModel');

        //Armazena no array as tarefas referente ao usuario
        $data['Tarefas'] = $taskModel->where('user',$user_session)->findAll();
        return view('tasks',$data);
    }
    public function alterarStatus($id = null) {

        $taskModel = model('TaskModel');
        $data = [
            'status' => '1'
        ];
        $taskModel->update($id,$data);
        return redirect()->to('/');
    }

    public function create() {
        // Criar nova tarefa

        //Armazena na variavel o nome do usuario logado na sessão
        $user_session = $this->session->get('username');
        $taskModel = model('TaskModel');
        
        if($this->request->getMethod() === 'POST')
        {
            $data = [
                'user' => $user_session ,
                'titulo' => $this->request->getPost('titulo'),
                'descricao' => $this->request->getPost('descricao'),
                'status' => '0'
                
            ];

            //salva a nova tarefa
            $taskModel->insert($data);
            return redirect()->to('/');
        }
        else
        {
            return view('tasks');
        }
    }

    public function edit($id) {
        // Editar tarefa existente
    }

    public function delete($id) {
        // Excluir tarefa
    }
}
