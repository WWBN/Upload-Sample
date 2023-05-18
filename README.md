# AVideo API: Uploading Videos and Images

This repository provides a PHP script sample that demonstrates how to upload a video and an image to the AVideo API. The AVideo platform is a powerful open-source video sharing platform that allows third-party applications to interact with its API for various purposes.

## Prerequisites

To use this PHP script, ensure that you have the following:

- AVideo installed and configured on your server. You can find more information about AVideo [here](https://github.com/WWBN/AVideo).
- PHP installed on your server. You can find more information about PHP installation [here](https://www.php.net/manual/en/install.php).
- The necessary PHP extensions for handling file uploads. Ensure that `file_uploads` is enabled in your PHP configuration.
- A valid API key for the AVideo API. You can obtain an API key by following the instructions provided by AVideo.

## Usage

## Usage

1. Clone this repository to your local machine or download the `upload.php` script file.

2. Open the `upload.php` script file in a text editor.

3. Modify the following variables with your AVideo API credentials and file paths:

````

$AVideoSiteURL = "https://demo.avideo.com/"; // Replace with your AVideo site URL

$user = 'admin'; // Replace with your AVideo username
$pass = '123'; // Replace with your AVideo password

// File paths
$videoFilePath = '/path/to/video/video.mp4'; // Replace with the path to your video file
$imageFilePath = '/path/to/image/image.png'; // Replace with the path to your image file

````

4. (Optional) Modify any additional parameters or metadata according to your requirements. Refer to the AVideo API documentation for available options.

5. Save the changes to the `upload.php` script file.

6. Run the script by executing the following command in your command-line interface:

````

php upload.php

````

Ensure that you have the necessary permissions to read the video and image files specified.

7. The script will upload the video and image files to the AVideo API, and you should receive a response with the upload status and details.


## Additional Resources

For more information on the AVideo API and available endpoints, please refer to the official [AVideo API documentation](https://github.com/WWBN/AVideo/wiki/Upload-videos-from-third-party-applications).

If you encounter any issues or have questions related to this script or the AVideo platform, please consult the AVideo community or create an issue in the [AVideo GitHub repository](https://github.com/WWBN/AVideo/issues).

## License

This script is licensed under the [MIT License](LICENSE). Feel free to modify and adapt it to suit your needs.
