<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function handleResponse($result, $msg)
    {
        // format response
        $response = [
            "success" => true,
            "data"    => $result,
            "message" => $msg
        ];
        // return response
        return response()->json($response, 200);
    }

    public function handleError($error, $errorMessages = [], $code = 404)
    {
        // format error
        $response = [
            "success" => false,
            "message" => $error
        ];

        // check if there is error messages
        if (!empty($errorMessages)) {
            $response["data"] = $errorMessages;
        }

        // return response
        return response()->json($response, $code);
    }
}
