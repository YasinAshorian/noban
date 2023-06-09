<?php

namespace App\Controllers\Http;
use App\Model\Product;
use App\Model\Purchases;
class ProductController
{

    public function index()
    {
        $data = Product::all();

        view('product.html', ['data' => $data->toArray()]);
    }

    public function purchase()
    {
        session_start();

       $purchases = Purchases::query()->where('id', $_REQUEST['product_id'])->first();

       if($purchases and $purchases->discount != null)  {
           $_SESSION['result'] = 'شما یک بار این محصول تخفیف دار را خرید کرده این و دیگر نمیتوانید خرید کنید .';
           header('Location: /');
           exit();
       }

        Purchases::query()->create($_REQUEST);

        $_SESSION['result'] = 'خرید شما با موفقیت انجام شد.';
        header('Location: /');
        exit();
    }
}