<?php
    require 'konfigurasi.php';

    $str = file_get_contents('data.json');
    $json = json_decode($str, true);
    $length = count($json);

    $sql = "select max(id)+1 as id from pendaftars";
    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result);
    $id = $row['id'];
    date_default_timezone_set('Asia/Jakarta');
    $created_at = date("Y-m-d h:i:s A");
    $updated_at = date("Y-m-d h:i:s A");

    if($id >= $length){
        echo json_encode(array("status"=>"Data JSON Max"));
    }else{
        if($id == null){
            if($json[0]['need_pickup'] == true){
                $npick = 1;
            }else{
                $npick = 0;
            }
            $sql = "INSERT INTO pendaftars (id, nama, email, birth_date, country, phone, registration_date, need_pickup, motivation_letter,
            updated_at, created_at)
            VALUES (0, '{$json[0]['nama']}', '{$json[0]['email']}', '{$json[0]['birth_date']}', '{$json[0]['country']}', '{$json[0]['phone']}'
            , '{$json[0]['registration_date']}', $npick, '{$json[0]['motivation_letter']}', '$updated_at', '$created_at')";
            if (mysqli_query($conn, $sql)) {
                echo json_encode(array("statusCode"=>200));
            } 
            else {
                echo json_encode(array("statusCode"=>201));
            }
            mysqli_close($conn);
        }else{
            if($json[$id]['need_pickup'] == true){
                $npick = 1;
            }else{
                $npick = 0;
            }
            $sql = "INSERT INTO pendaftars (id, nama, email, birth_date, country, phone, registration_date, need_pickup, motivation_letter,
            updated_at, created_at)
            VALUES ($id, '{$json[$id]['nama']}', '{$json[$id]['email']}', '{$json[$id]['birth_date']}', '{$json[$id]['country']}', '{$json[$id]['phone']}'
            , '{$json[$id]['registration_date']}', $npick, '{$json[$id]['motivation_letter']}', '$updated_at', '$created_at')";
            if (mysqli_query($conn, $sql)) {
                echo json_encode(array("statusCode"=>200));
            } 
            else {
                echo json_encode(array("statusCode"=>201));
            }
            mysqli_close($conn);
        }
    }
?>