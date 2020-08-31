<?php
    // HEADERS
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Methods, Authorization, X-Requested-With');

    // CALCULATE PMT
    function calculate_pmt($balance, $n){
        $pmt = "";
        if($n != 0){
            $pmt = ($balance * (4.25 / 100)) / (1 - (1 / ((1 + (4.25 / 100) * $n))));
        }
        return $pmt;
    }
    
    // SEND RESPONSE FUNCTION
    function send_response($status="failed", $pmt = "", $errorMsg = "System Error", $statusCode = NULL){
        // response object
        $response = new stdClass();
        $response->status = $status;
        $response->PMT = $pmt;
        $response->message = $errorMsg;

        // If there specified any statusCode
        if(is_int($statusCode)){
            http_response_code($statusCode);
        }
        
        // Send response and exit
        die(json_encode($response));
    }


    // GET THE RAW POSTED DATA
    $data = json_decode(file_get_contents("php://input"));

    // VALIDATING DATA AND RETURNING RESPONSE
    if(empty($data)){
        send_response("failed", "", "Data cannot be empty", 204);
    }elseif(!array_key_exists("balance", $data)){
        send_response("failed", "", "balance cannot be empty", 203);
    }elseif(!array_key_exists("n", $data)){
        send_response("failed", "", "n cannot be empty", 203);
    }elseif(!is_numeric($data->balance)){
        send_response("failed", "", "The value of balance should be numeric", 203);
    }elseif(!is_numeric($data->n)){
        send_response("failed", "", "The value of n should be numeric", 203);
    }elseif(is_numeric($data->n) && $data->n == 0){
        send_response("failed", "", "The value of n should be non zerro", 203);
    }else{
        // Everything is OK, prepare response data and send response
        $balance = (double)$data->balance;
        $n = (double)$data->n;
        $pmt = calculate_pmt($balance, $n);

        send_response("success", $pmt, "");
    }
?>