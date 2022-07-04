<?php

namespace Modules\UserModule\Http\Controllers;


use http\Env\Request;
use Illuminate\Routing\Controller;
use Modules\UserModule\Http\Requests\AddProductRequest;
use Modules\UserModule\Http\Requests\DeleteProductRequest;
use Modules\UserModule\Http\Resources\ProductResource;
use Modules\UserModule\Services\ProductService;

class ProductController extends Controller
{
    protected $productservice;
    public function __construct(ProductService $productservice) {
        $this->productservice = $productservice;
    }
    public function AddProduct(AddProductRequest $request)
     {
         $product = new ProductResource($this->productservice->createproduct($request->validated()));
         return response()->json($product,200);
    }
    public function GetAllProduct($type){

        $products = ProductResource::collection($this->productservice->getallproducts($type));
        return response()->json($products,200);
    }
    public  function  DeleteProducts(DeleteProductRequest $request){
        $result =  $this->productservice->delete_products($request->sku_products);
        return response()->json($result,200);
    }
}
