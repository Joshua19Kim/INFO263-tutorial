<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP Form Upload</title>
</head>

<body>
    <h1>File Upload Form</h1>
    <p>
       Click the 'Choose File' button to select a file to upload.
    </p>
    <form method="post" action="upload-file.php" enctype="multipart/form-data">
        Select File: <input type='file' name ="filename" size="10" />
        <input type="submit" value="Upload" />
    </form>
    <?php
        if ($_FILES) {
            $name = $_FILES["filename"]["name"];
            move_uploaded_file($_FILES["filename"]["tmp_name"], $name);
            echo "Uploaded image '$name' <br /><img src='$name' />";
        }

    ?>


</body>


</html>