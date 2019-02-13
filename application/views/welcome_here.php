<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel ="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/themes/custom/style.css">

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
       <li>Age:<?php echo $friend_age; ?></li>

       <li>Gender:<?php echo $friend_gender; ?></li>

       <li>Hobby:<?php echo $friend_hobby; ?></li>
   </ol>

   
    </div>

</body>
</html>