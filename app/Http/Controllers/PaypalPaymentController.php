<?php

namespace App\Http\Controllers;
use Srmklive\PayPal\Services\ExpressCheckout;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;


use Illuminate\Http\Request;

class PaypalPaymentController extends Controller
{
    public function __construct(){
        $this->middleware("auth");
    }

    public function handlepayment()
    {
        $data['items'] = [];
    
        foreach (Cart::instance('default')->content() as $item) {
            $itemData = [];
        
            $itemData['name'] = $item->name;
            $itemData['price'] = (int) ($item->price / 9);
            $itemData['desc'] = null;
            $itemData['qty'] = $item->qty;
            
            if ($item->model && property_exists($item->model, 'description')) {
                $itemData['desc'] = $item->model->description;
            }
        
            array_push($data['items'], $itemData);
        }
         
        $data['invoice_id'] = 1;
        $data['invoice_description'] = "Commande #{$data['invoice_id']} ";
        $data['return_url'] = 'http://127.0.0.1:8000/Payment/Success';
        //route('success.payment');
        $data['cancel_url'] = 'http://127.0.0.1:8000/PaymentCancel';
        //route('cancel.payment');
    
        $total = 0;
        foreach($data['items'] as $item) {
            $total += $item['price'] * $item['qty'];
        }
    
        $data['total'] = $total;

        $paypalModule = new ExpressCheckout;
        $res = $paypalModule->setExpressCheckout($data, true);
        
        return redirect($res['paypal_link']);
    }
    

    public function paymentCancel(){
        return dd('hiiii');
        //return redirect()->route('panier.show')->with('info', 'vous avez annuler le payment');;

    }
    public function paymentSuccess(){
        return dd('hooo');
        //return Redirect::route('panier.show');
    }
}
