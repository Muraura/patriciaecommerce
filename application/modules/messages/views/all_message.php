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
<div class="container">
  <h3>View All Messages</h3>
  <?php if($msg = $this->session->flashdata('msg')):?>
    <?php echo $msg; ?>
<?php endif;?>
  <?php echo anchor('messages/message/createmessage','Add Post',['class'=>'btn btn-primary']);?>

<table class="table table-hover">
  <thead>
    <tr>
      <th>Title</th>
      <th>Description</th>
      <th>Creation Date</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php if(count($posts)):?>
    <?php foreach($posts as $post):?>
    <tr>
      <td><?php echo $post->message_title;?></td>
      <td><?php echo $post->message_description;?></td>
      <td><?php echo $post->date_created;?></td>
      <td>
      <?php echo anchor('messages/message/update','view',['class'=>'btn btn-info']);?>
      <?php echo anchor('messages/message/update','Update',['class'=>'btn btn-primary']);?>
      <?php echo anchor('messages/message/delete','Delete',['class'=>'btn btn-danger']);?>
      </td>
    </tr>
    <?php endforeach;?>
    <?php else: ?>
    <tr>
      <td>No records found!</td>
    </tr>
     <?php endif;?>
    
  </tbody>
</table>
</div> 
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
</nav>
</body>
</html>