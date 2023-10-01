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

Open a web browser and navigate to `http://localhost/ftpdemo/ftpupload/index.html` to access the FTP file upload page and `http://localhost/ftpdemo/ftpdownload/index.html` to access the FTP file download page.

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

For detailed instructions on setting up your own FTP server and configuring FileZilla, you can refer to our Medium article: [Link to Medium Article](https://medium.com/mozilla-firefox-club/a-comprehensive-guide-creating-your-own-free-ftp-server-and-mastering-upload-download-with-php-8db5e21ad097).

In the article, you'll find information on how to obtain your FTP server hostname, username, and password, or use existing credentials for testing.

Feel free to explore the `ftpdemo` repository and use it as a reference for FTP file uploads and downloads using PHP.

# Hacktoberfest Contributions

Welcome to the Hacktoberfest 2023 contributions for this project! We appreciate your interest in improving and enhancing our codebase. Here are several ways you can contribute:<br>
📢 **Register [here](https://hacktoberfest.digitalocean.com) for Hacktoberfest and make four pull requests (PRs) between October 1st-31st to grab free SWAGS 🔥.** <br>
**Work on Issues**: You can go to the [Issues](https://github.com/kartikey-codes/FTPdemo/issues) section, where you'll find a list of existing issues. You can choose to work on any of these issues or open new ones if you discover any problems.

##                                                 **OR**

1. **Improve User Interface**: Enhance the user experience by refining the HTML and CSS for the upload and download pages.

2. **Add Validation**: Implement both client-side and server-side validation to ensure secure and accurate user input.

3. **Enhance Security**: Strengthen security measures within the PHP code to safeguard against common vulnerabilities.

4. **Add JavaScript Functionality**: Incorporate client-side JavaScript to boost interactivity and responsiveness.

5. **Documentation**: Enrich the README file with comprehensive instructions, examples, and troubleshooting guidance.

6. **Bug Fixes**: Identify and resolve any existing bugs or issues within the code.

7. **Performance Improvements**: Optimize the code for improved performance and efficiency.

To contribute, please follow these steps:

1. **Fork this repository** to your GitHub account.

2. Create a new branch for your contribution: `git checkout -b branch-name`

3. Make your changes and commit them with a descriptive message: `git commit -m "Add feature: [Description of your changes]"`

4. Push your changes to your fork: `git push origin feature/add-new-feature`

5. Create a **pull request (PR)** to merge your changes into the main repository..

6. Await review from the maintainer, and I will handle the merging process.

To get approval of the pull request much quicker and faster follow me, don't forget to star this repository to show your support!
Thank you for your valuable contributions to the FTPDemo project! Your efforts help make this project even better.

