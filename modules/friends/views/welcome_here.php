<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery-3.3.1.slim.min.js"></script>
    <link href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.min.js" rel="stylesheet" />

    <link href="<?php echo base_url() ?>assets/themes/custom/styles.css" rel="stylesheet"/>

</head>
<body>
    <div class = "container">
        <?php
       
        $validation_errors = validation_errors();
        if(!empty($validation_errors)){
            echo $validation_errors;
        }
        ?>
    <h1>Welcome <?php echo $friend_name; ?></h1>
    <ol>
       <li>Phone:<?php echo $friend_phone; ?></li>

       <li>Image:<?php echo $friend_image; ?></li>

   </ol>

   
    </div>

</body>
</html>