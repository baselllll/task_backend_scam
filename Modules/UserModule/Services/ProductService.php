<?php


namespace Modules\UserModule\Services;

use Exception;
use Illuminate\Support\Arr;
use Modules\UserModule\Repositories\ProductRepository;
use Prettus\Repository\Eloquent\BaseRepository;

class ProductService extends BaseService
{
    protected $productRepository;
    public function __construct(ProductRepository $productRepository)

    {
        $this->productRepository = $productRepository;
    }

    /**
     * @inheritDoc
     */
    function getRepository(): BaseRepository
    {
        return $this->productRepository;
    }

    public function createproduct(array $data)
    {
        $sku = substr(md5(uniqid(mt_rand(), true)) , 0, 8);

            Arr::only($data,['name','price','size','type','height','weight','length']);
            $product = $this->productRepository->create([
                'sku'=>$sku,
                'name'=>$data['name'],
                'price'=>$data['price'],
                'size'=>$data['size'],
                'type'=>$data['type'],
                'height'=>$data['height'],
                'weight'=>$data['weight'],
                'length'=>$data['length']
            ]);
            return $product;
    }
    public function getallproducts($type){
       return $this->productRepository->where('type',$type)->get();
    }
    public  function delete_products(array $sku_products){
        array_map(function ($item){
            $row =  $this->productRepository->findByField('sku',$item)->first();
            return $this->productRepository->delete($row->id);
        },$sku_products);
       return "success";
    }
}
