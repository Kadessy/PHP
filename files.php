<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    

    // FILES
    // How to upload files:
    // 1.   Upload to the root
    // 2.   Directly to the database

    // enctype="mutipart/form-data - specidfies how the form data should be encoded

   
    
    ?>

    <form action="upload.php" method="post" enctype="mutipart/form-data">
        <input type="file" name="file">
        <button type="submit" name="submit">SUBMIT</button>
    </form>

</body>
</html>