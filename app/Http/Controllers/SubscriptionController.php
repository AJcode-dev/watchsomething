<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SubscriptionController extends Controller
{
    public function index()
    {
        return view('subscription');
    }

    public function checkSubscriber(Request $request)
    {

        $checkSub = new Subscription();

        $sampData = [
            "msisdn" => $request->input('msisdn'),
            "carrier" => "mtn"];

        
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ])->post('http://pro.jobsdotgo.com/api/v1/check/subscribe-status', $sampData);

        
        $userSubscribeState = $response['data']['subscription_state'];

            if ($userSubscribeState) {
                return view('video');
            }
            return view('subscription');
    }

    public function subScribeUser(Request $request)
    {
        $checkSub = new Subscription();

        $userData = [
            "msisdn" => $request->input('msisdn'),
            "channel" => "WIDGET",
            "auto_renew" => true];

        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ])->post('http://pro.jobsdotgo.com/api/v1/subscribe ', $userData);

        return \view('welcome');
    }

    public function checkSubscribe(Request $repuest)
    {
        $checkSub = new Subscription();

        $sampData = [
            "msisdn" => $request('number'),
            "carrier" => "mtn"];

        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ])->post('http://pro.jobsdotgo.com/api/v1/check/subscribe-status', $sampData);

        dd($sampData);

        if ($response) {
            return view('me.video', $sampData);
        }
        return view('me.subscription');

    }

    public function performRequest($method, $formParams = [], $headers = [])
    {
        $requestUrl = "http://pro.jobsdotgo.com/api/v1/check/subscribe-status";

        $client = new Client();
        $headers = ['Content-Type' => 'application/json;charset=UTF-8'];
        // $headers = ['Content-Type' => 'application/json'];
        $response = $client->request($method, $requestUrl, ['form_param' => $formParams, 'headers' => $headers]);

        return $response->getBody()->getContents();

    }

}
