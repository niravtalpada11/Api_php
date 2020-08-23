<?php
include('accessControl.php');

$postdata = file_get_contents("php://input");
include('apiResponse.php');
$apiRes = new ApiResponse();
if (isset($postdata) && $postdata != NULL) {
    $request = json_decode($postdata);
    
    include('accessPoint.php');
    if (!empty($request)) {

        $pdo = Database::connect();
        $pdo->exec("SET NAMES 'utf8'"); // Arabic support
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM add_data";
        $q = $pdo->prepare($sql);
        $q->execute(array());
        $res = $q->fetchAll(PDO::FETCH_ASSOC);
        Database::disconnect();
        if (!empty($res)) {
            echo $apiRes->makeSuccessResponse($res, 'SuccessFully get data.');
        } else {
            echo $apiRes->makeErrorResponse('No data found');
        }
    } else {
        echo $apiRes->makeErrorResponse('Parameters missing');
    }
} else {
    echo $apiRes->makeErrorResponse('Something went wrong.');
}
