<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <?php include_once("../includes/bootstrap.php") ?>
</head>

<body>
    <?php include_once('../includes/nav.php'); ?>
    <div class="container text-center pt-5">Upload our Application Logo</div>

    <div class="d-flex flex-row justify-content-around">
        <div class="card mt-3">
            <div class="card-header font-weight-bold">
                File Uploader
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    <div>
                        <label for="image">Select an image:</label>
                        <input type="file" name="image" id="image">
                    </div>

                    <button class="btn btn-primary" type="submit">Upload</button>

                </form>
            </div>
        </div>
    </div>

    <?php
    // Check for a post request
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // check if a file was uploaded
        if (isset($_FILES["image"]) && $_FILES["image"]["error"] === UPLOAD_ERR_OK) {
            // Image successfully received

            $file = $_FILES["image"];

            $fileName = $file["name"];
            $tmpName = $file["tmp_name"];
            $fileSize = $file["size"];

            // Get the file extension and only allow png, jpg, jpeg extension
            $extention = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
            $allowedTypes = ["png", "jpg", "jpeg"];

            // Check if our file extension is now allowed using the allowedTypes array
            if (!in_array($extention, $allowedTypes)) {
                // not supported
                echo "Only png and jpg/jpeg supported";
            } else {
                // Process the file

                // Upload all files to an uploads directory 
                if (!is_dir("uploads")) {
                    mkdir("uploads");
                }

                // Generate the name of our file
                $newFileName = "logo." . $extention;

                if (move_uploaded_file($tmpName, "uploads/" . $newFileName)) {
                    echo "<div class='text-center'>Image sucessfully uploaded</div>";
                    echo "<div class='text-center'><img src='uploads/" . $newFileName . "' style='width:300px;'></div>";
                    echo "<div class='text-center'>FIle size " . number_format($fileSize / 1024, 1) . " kilobytes</div>";
                } else {
                    echo "<div class='alert alert-danger'>Error moving uploaded file</div>";
                }
            }
        } else {
            // User did not select a file
            echo "<div class='alert alert-danger'>Please select file to upload</div>";
        }
    }
    ?>

</body>

</html>