<?php

class ApiResponse{


    public static function  makeSuccessResponse($data = [], $message = '', $extraData = [])
    {
        $res = array('status' => true ,'data'=> $data);
        if (!empty($message)) {
            $res['message'] = $message;
        }
        if (!empty($extraData)){
            foreach ($extraData as $key => $value) {
                $res[$key] = $value;
            }
        }
        $res = json_encode($res);
        return $res;
    }

    public static function  makeErrorResponse($message = '', $data = [])
    {
        $res = array('status' => false, 'message'=> $message);
        if (!empty($data)) {
            $res['data'] = $data;
        }
        $res = json_encode($res);
        return $res;
    }
}


