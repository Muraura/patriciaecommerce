<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery-3.3.1.slim.min.js"></script>
    <link href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.min.js" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/themes/custom/styles.css" rel="stylesheet"/>
</head>
<body>
    <div class="container">
    <div class = "container">
        <?php
       
        $validation_errors = validation_errors();
        if(!empty($validation_errors)){
            echo $validation_errors;
        }
        ?>
        <!-- dynamically generating a form in brackets where to submit data to-->
        <div class="container">
    <?php echo form_open ($this->uri->uri_string());?>
   <div>
       <label for ="first_name">First Name</label>
       <input type="text" name="firstname" value=" <?php echo $friend_name ?>">
    </div>
    <div>
        <label for="phone">Phone</label>
        <input type="number" name="phone" value=" <?php echo $friend_phone ?>"/>
    </div>
     <div>
       <label for="image">Image</label>
        <input type="text" name="image"  value=" <?php echo $friend_image ?>" />
    </div>
       <div class="submit_button">
           <input type ="submit" value="Edit friend"/>
           

       </div>
       </div>

   <?php echo form_close() ?>
    </div>
</body>
</html>