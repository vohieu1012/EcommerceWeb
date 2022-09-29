<?php

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\RegisterRepositoryInterface;
use App\Models\RegisterModel;

class RegisterRepository implements RegisterRepositoryInterface
{
    public function getAll()
    {
        return RegisterModel::all();
    }
    public function find($id)
    {
        return RegisterModel::find($id);
    }
    public function create($request = [])
    {
        return RegisterModel::create($request);
    }
    public function delete($id)
    {
        $user = RegisterModel::find($id);
        return $user->delete();
    }
    public function save($data=[])
    {
        return RegisterModel::save($data);
    }
}
