<?php

namespace Uzzaircode\Ipay88\Traits;

use Illuminate\Http\Request;
use Uzzaircode\Ipay88\Traits\Signature;
use GuzzleHttp\Client;

trait Payment
{
    public $merchantKey;
    public $merchantCode;
    public $paymentUrl;

    public function __construct()
    {
        $this->merchantKey = config('ipay88.merchant_key');
        $this->merchantCode = config('ipay88.merchant_code');
        $this->paymentUrl = config('ipay88.payment_url');

    }

    use Signature;

    public function makePayment(Request $request)
    {
        $payment = new Client();

        $payment->request('POST',$this->paymentUrl,[
            'form_params' => [
                'MerchantCode' => $request->MerchantCode,
                'PaymentId' => $request->PaymentId,
                'RefNo' => $request->RefNo,
                'Amount' => $request->Amount,
                'Currency' => $request->Currency,
                'ProdDesc' => $request->ProdDesc,
                'UserName' => $request->ProdDesc,
                'UserEmail' => $request->UserEmail,
                'UserContact' => $request->UserContact,
                'Remark' => $request->Remark,
                'Lang' => $request->Lang,
                'Signature' => $request->Signature,
                'ResponseUrl' => $request->ResponseUrl,
                'BackendUrl' => $request->BackendUrl                                
            ]
        ]);
    }

    <form name="ePayment" id="foo" method="POST" action="https://payment.datakraf.com/getPaymentResponse">
        <!--MerchantCode--><INPUT type="hidden" name="MerchantCode" value="{{ $merchantCode }}"><br>
        <!--PaymentId--><INPUT type="hidden" name="PaymentId" value="{{ $paymentId }}"><br>
        <!--RefNo--><INPUT type="hidden" name="RefNo" value="{{ $refNo }}"><br>
        <!--Amount--><INPUT type="hidden" name="Amount" value="{{ $amount }}"><br>
        <!--Currency--><INPUT type="hidden" name="Currency" value="{{ $currency }}"><br>
        <!--ProdDesc--><INPUT type="hidden" name="ProdDesc" value="{{ $prodDesc }}"><br>
        <!--UserName--><INPUT type="hidden" name="UserName" value="{{ $userName }}"><br>
        <!--UserEmail--><INPUT type="hidden" name="UserEmail" value="{{ $userEmail }}"><br>
        <!--UserContact--><INPUT type="hidden" name="UserContact" value="{{ $userContact }}"><br>
        <!--Remark--><INPUT type="hidden" name="Remark" value="{{ $remark }}"><br>
        <!--Lang--><INPUT type="hidden" name="Lang" value="{{ $lang }}"><br>
        <!--Signature--><INPUT type="hidden" name="Signature" value="{{ $signature }}"><br>
        <!--ResponseURL--><INPUT type="hidden" name="ResponseURL" value="{{ $responseUrl }}">
            <INPUT type="hidden" name="BackendURL" value="{{ $backendUrl }}">
            <input type="hidden" name="InvoicingURL" value="{{config('site.frontend').'/payment/response'}}">

}
