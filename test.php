<?php
// $file = $_FILES["excelFile"]["name"];
// if($file == UPLOAD_ERR_OK){
//     echo $file;
//     $tmp_name = $_FILES["excelFile"]["tmp_name"];
//     $name = basename($_FILES["excelFile"]["name"]);
//     move_uploaded_file($tmp_name, "MSN-admin/employee_record/$name");
// }
// See the password_hash() example to see where this came from.
$ffd= date('d-m-Y', strtotime("14-01-2019"));
$new_date = strtotime("+0 week", strtotime($ffd));
$new_date = date('d-m-Y', $new_date);
echo "ffd".$ffd."<br>";
echo "new date".strtotime($new_date)."<br>";




?>