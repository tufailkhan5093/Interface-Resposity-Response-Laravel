<?php
namespace App\Repository;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface UserRepositoryInterface
{
   public function all(): Collection;
   public function create():Model;
   public function find():Model;
   public function getUser():Model;
}