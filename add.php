<?php
include('accessControl.php');

$postdata = file_get_contents("php://input");
include('apiResponse.php');
$apiRes = new ApiResponse();

if (isset($postdata) && $postdata != NULL) {
    $request = json_decode($postdata);
    $avtarsource = isset($request->avtarsource) ? $request->avtarsource :'';
    $firstname = isset($request->firstname) ? $request->firstname : '';
    $lastname = isset($request->lastname) ? $request->lastname : '';
    $gender = isset($request->gender) ? $request->gender : '';
    $birthdate = isset($request->birthdate) ? $request->birthdate : '';
    $age = isset($request->age) ? $request->age : '';
    $height = isset($request->height) ? $request->height : '';
    $weight = isset($request->weight) ? $request->weight : '';
    $skintone = isset($request->skintone) ? $request->skintone : '';
    $address = isset($request->address) ? $request->address : '';
    $city = isset($request->city) ? $request->city : '';
    $status = isset($request->status) ? $request->status : '';
    $education = isset($request->education) ? $request->education : '';
    $job = isset($request->job) ? $request->job : '';
    $experience = isset($request->experience) ? $request->experience : '';
    $fathername = isset($request->fathername) ? $request->fathername : '';
    $mothername = isset($request->mothername) ? $request->mothername : '';
    $fatheroccupation = isset($request->fatheroccupation) ? $request->fatheroccupation : '';
    $motheroccupation = isset($request->motheroccupation) ? $request->motheroccupation : '';
    $contactnumber = isset($request->contactnumber) ? $request->contactnumber : '';


    include('accessPoint.php');
    if (!empty($avtarsource) && !empty($firstname) && !empty($lastname) && !empty($gender) && !empty($birthdate)  && !empty($age) && !empty($height) && !empty($weight) && !empty($skintone) && !empty($address) && !empty($city) && !empty($status) && !empty($education) && !empty($job) && !empty($experience) && !empty($fathername) && !empty($mothername) && !empty($fatheroccupation) && !empty($motheroccupation) && !empty($contactnumber)) {
        
        $pdo = Database::connect();

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO add_data (firstname, lastname, gender, birthdate, age, height, weight, skintone, address, city, status, education, job, experience, fathername, mothername, fatheroccupation, motheroccupation, contactnumber) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $q = $pdo->prepare($sql);
        try {
            $res = $q->execute(array($firstname,$lastname,$gender,$birthdate,$age,$height,$weight,$skintone,$address,$city,$status,$education,$job,$experience,$fathername,$mothername,$fatheroccupation,$motheroccupation,$contactnumber));
            Database::disconnect();
            if (!empty($res)) {
                echo $apiRes->makeSuccessResponse([], 'Add Data successfully.');
            } else {
                echo $apiRes->makeErrorResponse('Data not inserted');
            }
         } catch (PDOException $e) {
            if ($e->errorInfo[1] == 1062) {
               // duplicate entry, do something else
               echo $apiRes->makeErrorResponse('You already send message with this email');
            } else {
               // an error other than duplicate entry occurred
               echo $apiRes->makeErrorResponse('Other error', $e);
            }
         }
        
    } else {
        echo $apiRes->makeErrorResponse('Parameters missing');
    }
} else {
    echo $apiRes->makeErrorResponse('Something went wrong.');
}