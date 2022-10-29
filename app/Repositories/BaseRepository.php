<?php

namespace  App\Repositories;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\BaseRepositoryInterface;
 class BaseRepository implements BaseRepositoryInterface{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model=$model;
    }

    public function paginate($itemOnePage){
      return  $this->model->paginate($itemOnePage);
    }

    public function select($columns=['*']){
        return $this->model->select($columns)->get();
    }

    public function all($columns=['*']){
        return $this->model->all($columns);
    }

    public function find($id){
        return $this->model->find($id);
    }



}
