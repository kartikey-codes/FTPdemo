# FTPDemo Repository

This repository is a demonstration of how to upload and download files from an FTP server using PHP. It consists of two main folders: `ftpupload` for uploading files to the FTP server and `ftpdownload` for downloading files from the FTP server.

## Prerequisites

Before running this project, you need to have XAMPP installed on your system. XAMPP is a free and open-source cross-platform web server solution stack package. You can download and install XAMPP from [here](https://www.apachefriends.org/index.html).

## Installation

1. **Clone the Repository:**
```
$ git clone https://github.com/kartikey-codes/FTPdemo.git
```
2. **Copy to XAMPP `htdocs` Directory:**

After cloning the repository, copy the entire `ftpdemo` folder to your XAMPP `htdocs` directory. By default, the `htdocs` directory is located at `C:\xampp\htdocs` on Windows.

3. **Start XAMPP:**

Start the XAMPP control panel and ensure that the Apache server is running.

4. **Access the Project:**

Open a web browser and navigate to `http://localhost/ftpdemo/ftp%20upload/index.html` to access the FTP file upload page and `http://localhost/ftpdemo/FTPdownload/index.html` to access the FTP file download page.

## FTP Server Configuration

To use this project with your FTP server, you'll need to modify the FTP server credentials in the PHP files:

### For Uploading (upload.php)

- `$ftp_server`: Replace with your FTP server hostname.
- `$ftp_username`: Replace with your FTP server username.
- `$ftp_password`: Replace with your FTP server password.

### For Downloading (download.php)

- `$ftp_server`: Replace with your FTP server hostname.
- `$ftp_username`: Replace with your FTP server username.
- `$ftp_password`: Replace with your FTP server password.
- `$download_dir`: Set to the directory path on your FTP server where files should be downloaded from.

## Medium Article

For detailed instructions on setting up your own FTP server and configuring FileZilla, you can refer to our Medium article: [Link to Medium Article](https://medium.com/your-article).

In the article, you'll find information on how to obtain your FTP server hostname, username, and password, or use existing credentials for testing.

Feel free to explore the `ftpdemo` repository and use it as a reference for FTP file uploads and downloads using PHP.

