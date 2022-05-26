<?php
namespace App\Response;

class Response
{
    public function dataResponse($status,$data,$message)
    {
        return response()->json(['status'=>$status,'data'=>$data,'message'=>$message]);   
    } 
}
?>