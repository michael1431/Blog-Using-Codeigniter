<?php include('header.php');?>
<head>
    <style type="text/css">
        .card-header{
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .card-body{
            border-bottom-left-radius:  10px;
             border-bottom-right-radius:  10px;
        }
       
    
    </style>
</head>
<body class="" style="background-color:#900C3F">
<div class="container" style="margin-top: 5em;">
    <div class="row">
        <div class="col-md-5 offset-md-3 animated jackInTheBox">
            
            <div class="card-header text-center text-white bg-dark " style="font-family: cursive;font-weight: bold;font-size: 20px;border-top-left-radius: 10px;border-top-right-radius: 10px; ">User Form</div>
            <div class="card-body text-white mb-3" style="background-color: lightblue;">
                       <?php echo form_open('login/index'); ?>
                 <?php 
                       $messages = $this->session->flashdata('Login_failed');
                      if($messages){
                      ?>
                      <div class="alert alert-warning alert-dismissible fade show" role="alert">
                          <strong>Message : </strong><?= $messages; ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
                 </button>
                     </div>
                              
                      <?php } ?>
                
    <div class="form-group">
        <label for="username" style="color: black;font-family: cursive;">User Name:</label>
<!--        <input type="email" class="form-control" id="email"/>-->
        <?php echo form_input(['class'=> 'form-control','placeholder'=>'Enter your name','name'=>'uname','value'=> set_value('uname')]);?>
        <span> <?php echo form_error('uname'); ?></span>
    </div>
    <div class="form-group">        
        <label for="pwd" style="color: black;font-family: cursive;">User Password:</label>
<!--        <input type="password" class="form-control" id="pwd"/>-->
                <?php echo form_password(['class'=> 'form-control','type'=> 'password','placeholder'=>'Enter your password','name'=>'pass','value'=> set_value('pass')]);?>
        <span><?php echo form_error('pass'); ?></span>
    </div>
    
<!--    <button type="submit" class="btn btn-success">Submit
    </button>
    -->
    <br>
    <?php echo form_submit(['type'=>'submit','class'=>'btn btn-success','value'=>'Submit']); ?>
            
    <?php echo form_reset(['type'=>'reset','class'=>'btn btn-danger','value'=>'Reset']); ?>
        
     <?php echo anchor('Admin/register/','Sign Up?','class = "link-class"'); ?>       
            
            </div>
        
         <span class="text-white"><?php include('footer.php');?></span>
        </div>
    </div>
</div>
  
</body>



