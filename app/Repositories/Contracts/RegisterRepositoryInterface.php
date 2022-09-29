<?php
namespace App\Repositories\Contracts;
interface RegisterRepositoryInterface{
    public function getAll();
    public function find($id);
    public function create($request=[]);  
    public function delete($id);
    public function save($data);
}