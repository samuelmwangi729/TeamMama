<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Str;
class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mpesa= new \Safaricom\Mpesa\Mpesa();
        $token=$mpesa::generateSandBoxToken();
        // dd($token);
        //this is b2c and the response code 0 means it works
        // $InitiatorName='TestInit622';
        // $SecurityCredential='KNPvUmbFPUyqGy7hz4Xt1vYSKEU5+nrzz+2I57r0S9yp+9s131zdcpOxsMNrDtl7Yw1xTM7mKq2RsQo62GvS+JDuaSpUKSYvZyhRQJgVsAKx1QxMWAt3T0mjnUhdWPujTHGeVDpOWto6hqMshj9bYBhA70z+W8Jqyw/itARJoJFPUHA5/SZoiTrgcSSZkNWvnbLtsLwSMWIjw+S8bNFWf0eiLdd6Vlk0SsL
        // FUXJrHktM2Z7ukGj3guQ6SKxv9K8LNk82HoGjrw/Wl1f+RZiCxSQCo5LE6oc5E4K7xFT+w4EgWISdCRuckM4wGJzhDVQWmhq7idFJY0Wruhogv4WgGQ==';
        // $CommandID='SalaryPayment';
        // $Amount='200';
        // $PartyA='600622';
        // $PartyB='254704...';
        // $Remarks='Being payment for the services renderered to the company. Thank you';
        // $QueueTimeOutURL='https://72e905f6e4de.ngrok.io/timeout';
        // $ResultURL='https://72e905f6e4de.ngrok.io';
        // $Occasion='';   
        // $b2c=$mpesa::b2c($InitiatorName, $SecurityCredential,
        //  $CommandID, $Amount, $PartyA, $PartyB, $Remarks, $QueueTimeOutURL, $ResultURL, $Occasion);
        //  return response($b2c);
        //TEST C2B

        // $ShortCode='600622';
        // $CommandID='CustomerPayBillOnline';
        // $Amount=5000;
        // $Msisdn='254704...';
        // $BillRefNumber=strtoupper(Str::random(10));
        // $mpesa->ValidationURL='https://72e905f6e4de.ngrok.io/validation';
        // $mpesa->ConfirmationUrl='https://72e905f6e4de.ngrok.io/confirmation';
        // $c2b=$mpesa::c2b($ShortCode, $CommandID, $Amount, $Msisdn, $BillRefNumber);
        // dd($c2b);
        // return response($c2b);
        $BusinessShortCode=174379;
        $LipaNaMpesaPasskey='bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';
        $TransactionType='CustomerPayBillOnline';
        $Amount=5000;
        //phone number and partyA are the same
         $PartyA=254704...;
        $PartyB='174379';
        $PhoneNumber=254704...;
        $CallBackURL='https://72e905f6e4de.ngrok.io/timeout';
        $AccountReference='123456';
        $TransactionDesc='Test for stk push';
        $Remark="final test";
       $stkpush= $mpesa->STKPushSimulation($BusinessShortCode, $LipaNaMpesaPasskey, $TransactionType, $Amount, $PartyA, $PartyB, $PhoneNumber, $CallBackURL, $AccountReference, $TransactionDesc, $Remark);
      dd($stkpush);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    protected function timeout(){
        return response()->json(['data'=>'transaction time out']);
    }
}
