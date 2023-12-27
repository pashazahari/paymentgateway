<?php

namespace digihust\Paymentgateway\Facades;

use Illuminate\Support\Facades\Facade;
use digihust\Paymentgateway\Base\Gateways\InstamojoPay;
use digihust\Paymentgateway\Base\PaymentGatewayHelpers;
use digihust\Paymentgateway\Base\Gateways\SquarePay;
/**
 * @see GlobalCurrency
 * @method static script_currency_list()
 *
 * @see PaymentGatewayHelpers
 * @method static stripe()
 * @method static paypal()
 * @method static midtrans()
 * @method static paytm()
 * @method static razorpay()
 * @method static mollie()
 * @method static flutterwave()
 * @method static paystack()
 * @method static payfast()
 * @method static cashfree()
 * @method static instamojo()
 * @method static mercadopago()
 * @method static payumoney()
 * @method static squareup()
 * @method static cinetpay()
 * @method static paytabs()
 * @method static zitopay()
 * @method static toyyibpay()
 * @method static pagalipay()
 * @method static authorizenet()
 * @method static sitesway()
 * @method static transactionclud()
 * @method static wipay()
 * @method static kineticpay()
 * @method static senangpay()
 *
 */
/**
 * @see GlobalCurrency
 * @method static script_currency_list()
 *
 * @see PaymentGatewayHelpers
 * @method static stripe()
 * @method static paypal()
 * @method static midtrans()
 * @method static paytm()
 * @method static razorpay()
 * @method static mollie()
 * @method static flutterwave()
 * @method static paystack()
 * @method static payfast()
 * @method static cashfree()
 * @method static instamojo()
 * @method static mercadopago()
 * @method static payumoney()
 * @method static squareup()
 * @method static cinetpay()
 * @method static paytabs()
 * @method static zitopay()
 * @method static toyyibpay()
 * @method static pagalipay()
 * @method static authorizenet()
 * @method static sitesway()
 * @method static transactionclud()
 * @method static wipay()
 * @method static kineticpay()
 * @method static senangpay()
 * @method static saltpay()
 *
 */
class XgPaymentGateway extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'XgPaymentGateway';
    }
}
