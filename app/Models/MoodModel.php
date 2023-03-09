<?php

namespace App\Models;

use CodeIgniter\Model;

class MoodModel extends Model
{
    protected $table = 'mood';

    protected $allowedFields = ['naam', 'mood','user', 'plek'];

    public function getMood()
    {
        $user = auth()->user();
     
        $result = $this->where(['user' => $user->id])->find();
        return  $result;
    }
}