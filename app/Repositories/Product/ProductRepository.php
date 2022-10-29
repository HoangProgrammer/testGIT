<?php
namespace App\Repositories\Product;

use App\Models\Product;
use App\Repositories\BaseRepository;
use App\Repositories\Product\ProductRepositoryInterface;

class ProductRepository extends  BaseRepository implements ProductRepositoryInterface {

    public function __construct(Product $model)
    {
        parent::__construct($model);
    }

    public function getProduct()
    {
     return $this->model->get();
    }


}
