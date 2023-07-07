
<?php
$errors = [];
$msgs = [];
if (isset($_FILES['file'])) {
    $file = $_FILES['file'];
    $file_name = $file['name'];
    $file_tmp = $file['tmp_name'];
    $file_size = $file['size'];
    $file_error = $file['error'];

    $file_ext = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext));

    $allowed = ['txt', 'jpg', 'jpeg', 'png', 'pdf', 'docx'];

    if (in_array($file_ext, $allowed)) {
        if ($file_error === 0) {
            if ($file_size <= 1000000) {
                $file_name_new = uniqid('', true) . '.' . $file_ext;
                $file_destination = 'uploads/' . $file_name_new;
                if (!is_dir('uploads')) {
                    mkdir('uploads');
                }
                if (move_uploaded_file($file_tmp, $file_destination)) {
                    $msgs[] = 'File uploaded successfully';
                } else {
                    $errors[] = 'There was an error uploading your file';
                }
            } else {
                $errors[] = 'Your file is too large. The maximum size is 1MB';
            }
        } else {
            $errors[] = 'There was an error uploading your file';
        }
    } else {
        $errors[] = 'File type not allowed. Allowed types are '. implode(', ', $allowed);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File</title>
    

</head>

<body >
   
     <form method="post" class="bg-white p-5 rounded-1" enctype="multipart/form-data">
    <?php foreach ($errors as $error) : ?>
  <strong><?= $error ?></strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    
    <?php endforeach; ?>
    <?php foreach ($msgs as $msg) : ?>
                    
    <strong><?= $msg ?></strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <?php endforeach; ?>
                
  <input class="form-control" required type="file" name="file" id="file">
                
  <button type="submit" >Upload</button>
 </form>
        
    
</body>


</html>



