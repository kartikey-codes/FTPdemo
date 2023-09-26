<?php
if ($_FILES["file"]["error"] > 0) {
    echo "Error: " . $_FILES["file"]["error"];
} else {
    $ftp_server = "ftpupload.net";
    $ftp_username = "b24_34866803";
    $ftp_password = 'u22xf$z6';
    $upload_dir = "/";
    $file_name = $_FILES["file"]["name"];
    $file_temp = $_FILES["file"]["tmp_name"];
    
    $conn_id = ftp_connect($ftp_server);
    
    if ($conn_id) {
        $login_result = ftp_login($conn_id, $ftp_username, $ftp_password);
        
        if ($login_result) {
            $upload_result = ftp_put($conn_id, $upload_dir . $file_name, $file_temp, FTP_BINARY);
            
            if ($upload_result) {
                echo "File uploaded successfully.";
            } else {
                echo "Upload failed.";
            }
        } else {
            echo "FTP login failed.";
        }
        
        ftp_close($conn_id);
    } else {
        echo "Could not connect to FTP server.";
    }
}
?>
