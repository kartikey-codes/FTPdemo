<?php

$ftp_server = "your host name";
$ftp_username = "your username";
$ftp_password = 'your password';
$download_dir = "/htdocs/"; // eg "/htdocs/","/" the path on the remote site from where you want to download the file.
$file_name = $_POST["file"];


$conn_id = ftp_connect($ftp_server);

if ($conn_id) {
    $login_result = ftp_login($conn_id, $ftp_username, $ftp_password);

    if ($login_result) {
        ftp_pasv($conn_id, true); // Enable passive mode

        $remote_file_path = $download_dir . $file_name;
        $local_file_path = "C:/Users/your-username/Desktop/download/" . $file_name; //path where you want to save your downloaded file from server

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
