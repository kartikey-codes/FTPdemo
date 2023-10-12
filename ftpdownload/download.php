<?php

$ftp_server = "your_ftp_server";
$ftp_username = "your_ftp_username";
$ftp_password = 'your_ftp_password';
$download_dir = "/htdocs/";
$file_name = isset($_POST["file"]) ? $_POST["file"] : null;

if ($file_name !== null) {
    $conn_id = ftp_connect($ftp_server);

    if ($conn_id) {
        $login_result = ftp_login($conn_id, $ftp_username, $ftp_password);

        if ($login_result) {
            ftp_pasv($conn_id, true); // Enable passive mode

            $remote_file_path = $download_dir . $file_name;
            $local_file_path = "C:/Users/your-username/Desktop/download/" . $file_name;

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
} else {
    echo "Invalid file name.";
}
