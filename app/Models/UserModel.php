<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $allowedFields = ['name', 'email'];
    protected $useTimestamps = true; // Nếu bạn sử dụng timestamps
}