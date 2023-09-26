<?php

$ftp_server = "ftpupload.net";
$ftp_username = "b24_34866803";
$ftp_password = 'u22xf$z6';
$download_dir = "/htdocs/"; // eg "/htdocs/","/"
$file_name = $_POST["file"];


$conn_id = ftp_connect($ftp_server);

if ($conn_id) {
    $login_result = ftp_login($conn_id, $ftp_username, $ftp_password);

    if ($login_result) {
        ftp_pasv($conn_id, true); // Enable passive mode

        $remote_file_path = $download_dir . $file_name;
        $local_file_path = "C:/Users/Kartikey/Desktop/internship/download/" . $file_name; 

        $download_result = ftp_get($conn_id, $local_file_path, $remote_file_path, FTP_BINARY);

        if ($download_result) {
            echo "File downloaded successfully.";
        } else {
            echo "Download failed.";
        }
    } else {
        echo "FTP login failed.";
    }

    ftp_close($conn_id);
} else {
    echo "Could not connect to FTP server.";
}
?>
