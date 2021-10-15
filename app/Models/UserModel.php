<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'user_id';
    protected $allowedFields = ['nama', 'username', 'password'];

    public function getUser($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['user_id' => $id])->first();
    }
}
