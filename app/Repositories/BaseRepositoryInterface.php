<?php
namespace App\Repositories;

interface BaseRepositoryInterface{
    public  function paginate($item);
    public  function all($columns=['*']);
    public  function select($columns=['*']);
    public  function find($id);

}
