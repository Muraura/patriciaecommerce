<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery-3.3.1.slim.min.js"></script>
    <link href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.min.js" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/themes/custom/styles.css" rel="stylesheet"/>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Messages</a>
  </div>
</nav>
<!-- form -->
<div class="container">
<form class="form-horizontal")>
<?php echo form_open('messages/message/change',['class'=>'form-horizontal']);?>
  <fieldset>
    <legend>Messages</legend>

    <div class="form-group">
      <?php echo form_input(['name'=>'title','placeholder'=>'Title','class'=>'form-control'])?>
    </div>
    <div class="form-group">
      <?php echo form_error('title','<div class="text-danger">','</div>');?>
    </div>
    <div class="form-group">
      <?php echo form_textarea(['name'=>'description','placeholder'=>'Description','class'=>'form-control'])?>
    </div>
    <div class="form-group">
    
    <?php echo form_error('description','<div class="text-danger">','</div>');?></div>
    <div class="form-group">
    <?php echo form_submit(['name'=>'submit','value'=>'Submit','class'=>'btn btn-default']);?>
    <?php echo anchor('messages/message','Back',['class'=>'btn btn-danger']);?>
    
   
    </div>
  </fieldset>
<?php echo form_close(); ?>
</div> 
<!-- //footer -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
</nav>
</body>
</html>