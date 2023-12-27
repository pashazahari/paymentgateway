<?php

namespace Digihust\Paymentgateway\Base;

use Digihust\Paymentgateway\Base\Gateways\AuthorizeDotNetPay;
use Digihust\Paymentgateway\Base\Gateways\BillPlzPay;
use Digihust\Paymentgateway\Base\Gateways\CashFreePay;
use Digihust\Paymentgateway\Base\Gateways\CinetPay;
use Digihust\Paymentgateway\Base\Gateways\FlutterwavePay;
use Digihust\Paymentgateway\Base\Gateways\InstamojoPay;
use Digihust\Paymentgateway\Base\Gateways\KineticPay;
use Digihust\Paymentgateway\Base\Gateways\MidtransPay;
use Digihust\Paymentgateway\Base\Gateways\MolliePay;
use Digihust\Paymentgateway\Base\Gateways\PagaliPay;
use Digihust\Paymentgateway\Base\Gateways\PayFastPay;
use Digihust\Paymentgateway\Base\Gateways\PaypalPay;
use Digihust\Paymentgateway\Base\Gateways\PaystackPay;
use Digihust\Paymentgateway\Base\Gateways\PayTabsPay;
use Digihust\Paymentgateway\Base\Gateways\PaytmPay;
use Digihust\Paymentgateway\Base\Gateways\PayUmoneyPay;
use Digihust\Paymentgateway\Base\Gateways\RazorPay;
use Digihust\Paymentgateway\Base\Gateways\SaltPay;
use Digihust\Paymentgateway\Base\Gateways\Senangpay;
use Digihust\Paymentgateway\Base\Gateways\SitesWayPay;
use Digihust\Paymentgateway\Base\Gateways\SquarePay;
use Digihust\Paymentgateway\Base\Gateways\StripePay;
use Digihust\Paymentgateway\Base\Gateways\MercadoPagoPay;
use Digihust\Paymentgateway\Base\Gateways\Toyyibpay;
use Digihust\Paymentgateway\Base\Gateways\TransactionCloudPay;
use Digihust\Paymentgateway\Base\Gateways\WiPay;
use Digihust\Paymentgateway\Base\Gateways\ZitoPay;

/**
 * @see SquarePay
 * @method  setApplicationId();
 * @method  setAccessToken();
 * @method  setLocationId();
 */

class PaymentGatewayHelpers
{

    public function stripe() : StripePay
    {
        return new StripePay();
    }
    public function paypal() : PaypalPay
    {
        return new PaypalPay();
    }
    public function midtrans() : MidtransPay
    {
        return new MidtransPay();
    }
    public function paytm() : PaytmPay
    {
        return new PaytmPay();
    }
    public function razorpay() : RazorPay
    {
        return new RazorPay();
    }
    public function mollie() : MolliePay
    {
        return new MolliePay();
    }
    public function flutterwave() : FlutterwavePay
    {
        return new FlutterwavePay();
    }
    public function paystack() : PaystackPay
    {
        return new PaystackPay();
    }

    public function payfast() : PayFastPay
    {
        return new PayFastPay();
    }
    public function cashfree() : CashFreePay
    {
        return new CashFreePay();
    }
    public function instamojo() : InstamojoPay
    {
        return new InstamojoPay();
    }
    // deprecated
    public function mercadopago() : MercadoPagoPay
    {
        return new MercadoPagoPay();
    }
    public function payumoney() : PayUmoneyPay
    {
        return new PayUmoneyPay();
    }
    public function squareup() : SquarePay
    {
        return new SquarePay();
    }
    public function cinetpay() : CinetPay
    {
        return new CinetPay();
    }
    public function paytabs() : PayTabsPay
    {
        return new PayTabsPay();
    }
    public function billplz() : BillPlzPay
    {
        return new BillPlzPay();
    }

    public function zitopay() : ZitoPay
    {
        return new ZitoPay();
    }
    public function toyyibpay() : Toyyibpay
    {
        return new Toyyibpay();
    }
    public function pagalipay() : PagaliPay
    {
        return new PagaliPay();
    }
    public function authorizenet() : AuthorizeDotNetPay
    {
        return new AuthorizeDotNetPay();
    }
    public function sitesway() : SitesWayPay
    {
        return new SitesWayPay();
    }
    public function wipay() : WiPay
    {
        return new WiPay();
    }
    public function kineticpay() : KineticPay
    {
        return new KineticPay();
    }
    public function transactionclud() : TransactionCloudPay
    {
        return new TransactionCloudPay();
    }

    public function senangpay() : Senangpay
    {
        return new Senangpay();
    }
    public function saltpay() : SaltPay
    {
        return new SaltPay();
    }
    public function all_payment_gateway_list() : array
    {
        return [
            'zitopay','billplz','paytabs','cinetpay','squareup',
            'mercadopago','instamojo','cashfree','payfast',
            'paystack','flutterwave','mollie','razopay','paytm',
            'midtrans','paypal','stripe','toyyibpay','pagali','authorizenet',
            'sitesway','transactionclud','wipay','kineticpay','senangpay','saltpay'
//            'payumoney',
        ];
    }
    public function script_currency_list(){
        return GlobalCurrency::script_currency_list();
    }

    public static function wrapped_id($id) : string
    {
        return random_int(11111,99999).$id.random_int(11111,99999);
    }
    public static function unwrapped_id($id) : string
    {
        return substr($id,5,-5);
    }
    public static function get_current_file_url($Protocol='http://') {
        return $Protocol.$_SERVER['HTTP_HOST'].str_replace($_SERVER['DOCUMENT_ROOT'], '', realpath(__DIR__));
    }
}
