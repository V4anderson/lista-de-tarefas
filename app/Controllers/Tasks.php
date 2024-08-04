<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Tasks extends BaseController
{
    public function read() {
        // Criar nova tarefa
        return view('tasks');
    }

    public function create() {
        // Criar nova tarefa
        return view('tasks');
    }

    public function edit($id) {
        // Editar tarefa existente
    }

    public function delete($id) {
        // Excluir tarefa
    }
}
