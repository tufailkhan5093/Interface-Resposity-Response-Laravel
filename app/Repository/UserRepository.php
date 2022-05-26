<?php

namespace App\Repository;

use App\Models\User;
use App\Repository\UserRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{

    public $model;
   public function __construct(User $model)
   {
      $this->model = $model;
   }

  
   public function all(): Collection
   {
       return $this->model->all();    
   }

   public function create(array $attributes= []): Model
   {
    return $this->model->create($attributes);
   }

   public function find($id=false):Model
   {
       return $this->model->find($id);
   }

   public function getUser($id = false):Model
   {
    return $this->model->find($id);
   }
}