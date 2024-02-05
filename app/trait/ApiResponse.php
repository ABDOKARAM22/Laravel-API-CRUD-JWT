<?php

namespace App\trait;


trait ApiResponse {

    
    public function ApiResponse($data = null, $status = 200 , $message = null){

        $array = [
            'data' => $data ,
            'status' => $status,
            'message' => $message
        ];

        return response($array);
    }
};