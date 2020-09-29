<?php
    require 'konfigurasi.php';

    $sql = 'SELECT * FROM pendaftars';
    $result = $conn->query($sql);
    
    if($result->num_rows == 0){
        
    }else{
        while($value = mysqli_fetch_array($result))
        {
            if($value['need_pickup'] == 1){
                $npick = "true";
            }else{
                $npick = "false";
            }
            echo '
                <tr>
                    <td>'.$value['nama'].'</td>
                    <td>'.$value['email'].'</td>
                    <td>'.$value['birth_date'].'</td>
                    <td>'.$value['country'].'</td>
                    <td>'.$value['phone'].'</td>
                    <td>'.$value['registration_date'].'</td>
                    <td>'.$npick.'</td>
                    <td>'.$value['motivation_letter'].'</td>
                </tr>
            ';
        }
    }
?>