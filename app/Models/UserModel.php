<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    //Campos permitidos
    protected $allowedFields    = [
        'username','password','perfil'
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validação dos campos
    protected $validationRules      = [
        'username'   =>'required|is_unique[users.username]',
        'password'     =>'required',
        'perfil'    =>'required'
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    //Antes de inserir, chamar a função de verificação do hash da senha.
    protected $beforeInsert   = ['hashSenha'];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    protected function hashSenha($data){
        $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);

        return $data;
    }

    //Verificação da existencia do usuario e validação da senha.
    public function check($usuario, $senha) {

        //buscar o usuario
        $buscaUsuario = $this->where('username', $usuario)->first();
        if(is_null($buscaUsuario)){
            return false;
        }

        //validar a senha
        if(!password_verify($senha, $buscaUsuario['password'])){
            return false;
        }
        return $buscaUsuario;
    }
}
