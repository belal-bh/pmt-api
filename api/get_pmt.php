<?php
    // HEADERS
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Methods, Authorization, X-Requested-With');

    // CALCULATE PMT
    function calculate_pmt($balance, $n){
        $pmt = ($balance * (4.25 / 100)) / (1 - (1 / ((1 + (4.25 / 100) * $n))));
        return $pmt;
    }

    // GET THE RAW POSTED DATA
    $data = json_decode(file_get_contents("php://input"));

    // VALIDATING DATA AND RETURNING RESPONSE
    if($data && array_key_exists("balance", $data) && array_key_exists("n", $data) && is_numeric($data->balance) && is_numeric($data->n) ){
        $balance = (double)$data->balance;
        $n = (double)$data->n;
        $pmt = calculate_pmt($balance, $n);
        $res = array(
            "PMT" => $pmt,
        );
        echo json_encode($res);
    } else{
        $res = array(
            "Message" => "Invalid Request",
        );
        echo json_encode($res);
    }
?>