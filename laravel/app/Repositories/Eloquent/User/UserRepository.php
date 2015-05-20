<?php
namespace App\Repositories\Eloquent\User;

class UserRepository
{
    public function getTodosPaginate($id, $perPage = 10){
        return $this->find($id)
        ->todos()
        ->orderBy('limit', 'ASC')
        ->paginate($perPage);
    }
}
