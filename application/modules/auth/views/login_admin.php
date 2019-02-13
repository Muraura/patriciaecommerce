
    <?php echo form_open($this->uri->uri_string(),array("class"=>"form-signin"));?>

  <img class="mb-4" src="<?php echo base_url();?>assets/images/lock.png" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="email" id="inputEmail" class="form-control" name="user_email" placeholder="Email address">
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" class="form-control" name="user_password" placeholder="Password">
  
  <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
  
 
 <?php echo form_close();?>