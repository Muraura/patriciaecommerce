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
    <div class ="container">
        <?php 
        $success = $this->session->flashdata("success_message");
        $error = $this->session->flashdata("error_message");
        if(!empty($success))
        {
            echo $success;
        }
        if(!empty($error)){
            echo $error;
        }
        ?>
        <h1>My friends</h1>
        <?php echo anchor("friends/friends/new_friend","Add Friend");?>
        <table>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Image</th>
                
            </tr>
            <?php
            if($all_friends->num_rows() > 0)
            {
                $count=0; 

                foreach($all_friends->result() as $row)
                { 
                    $count++;
                    $id=$row->friend_id;
                    $name=$row->friend_name;
                    $phone=$row->friend_phone;
                    $image=$row->friend_image;  ?>
                  

                 <tr>
                 <td>
                        <?php echo $count;?>
                 </td>
                 <td>
                        <?php echo $name;?>
                 </td>
                 <td>
                        <?php echo $phone;?>
                 </td>
                 <td>
                        <?php echo $image;?>
                 </td>
                 <td>
                      <?php echo anchor("friends/friends/welcome/".$id,"View","class='btn btn-primary'");?>
                      <?php echo anchor("friends/friends/delete_friend/".$id,"Delete","class='btn btn-danger'");?>
                      <?php echo anchor("friends/friends/edit/".$id,"Edit","class='btn btn-secondary'");?>
                      <?php echo anchor("friends/friends/welcome/".$id,"Activate","class='btn btn-success'");?>
                 </td>
                </tr>
                <?php
                }
            }
            
            ?>
          
        </table>
    </div>
    
</body>
</html>