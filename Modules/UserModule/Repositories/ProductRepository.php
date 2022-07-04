<?php

namespace Modules\UserModule\Repositories;

use App\Models\Product;
use Prettus\Repository\Eloquent\BaseRepository;
use Illuminate\Container\Container as App;
use Illuminate\Support\Collection;


class ProductRepository extends BaseRepository
{
    public function __construct(App $app, Collection $collection)
    {
        parent::__construct($app, $collection);
    }

    /**
     * @return string
     */
    public function model()
    {
        return Product::class;
    }
}
