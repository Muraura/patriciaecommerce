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
        <?php echo anchor("hello/new_friend","Add Friend");?>
        <table>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>actions</th>
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
                    $age=$row->friend_age;
                    $gender=$row->friend_gender;  ?>
                  

                 <tr>
                 <td>
                        <?php echo $count;?>
                 </td>
                 <td>
                        <?php echo $name;?>
                 </td>
                 <td>
                        <?php echo $age;?>
                 </td>
                 <td>
                        <?php echo $gender;?>
                 </td>
                 <td>
                      <?php echo anchor("hello/welcome/".$id,"view");?>
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