<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Mode
{
 protected $table = 'user';
 protected $primaryKey = 'id';
 protected $useAutoIncrement = true;
 protected $allowedFields = ['username', 'useremail', 'userpassword'];
}