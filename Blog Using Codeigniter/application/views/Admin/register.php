<?php include ('header.php'); ?>
<html>
    
<body class="" style="background-color: #900C3F">
    <div class="container animated fadeIn" style="margin-top: 20px;">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-6 offset-md-3">
              <?php echo form_open('Admin/sendemail'); ?>
<!--          <div class="" id="pnl">-->
                         <div class="card-header text-center text-white bg-dark " style="font-family: cursive;font-weight: bold;font-size: 20px;border-top-left-radius: 10px;border-top-right-radius: 10px; ">Registration</div>
            <div class="card-body text-white mb-3" style="background-color: lightblue;">
   
                     <?php 
                       $user_message = $this->session->flashdata('user_msg');
                      
                      if($user_message){
                          $user_msg_class = $this->session->flashdata('user_msg_class'); 
                      ?>
                      <div class="alert <?= $user_msg_class; ?> alert-dismissible fade show" role="alert">
                          <strong>Message : </strong><?= $user_message; ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
                 </button>
                     </div>
                
                <?php } ?>
                <div class="form-group">
        <label for="username" style="color: black;font-family: cursive;">User Name:</label>
<!--        <input type="email" class="form-control" id="email"/>-->
        <?php echo form_input(['class'=> 'form-control','placeholder'=>'Enter your name','name'=>'user_name','value'=> set_value('user_name')]);?>
        <span> <?php echo form_error('user_name'); ?></span>
    </div>
    <div class="form-group">        
        <label for="pwd" style="color: black;font-family: cursive;">User Password:</label>
<!--        <input type="password" class="form-control" id="pwd"/>-->
                <?php echo form_password(['class'=> 'form-control','type'=> 'password','placeholder'=>'Enter your password','name'=>'password','value'=> set_value('password')]);?>
        <span><?php echo form_error('password'); ?></span>
    </div>
                
    <div class="form-group">
        <label for="firstname" style="color: black;font-family: cursive;">First Name:</label>
<!--        <input type="email" class="form-control" id="email"/>-->
        <?php echo form_input(['class'=> 'form-control','placeholder'=>'Enter your first name','name'=>'first_name','value'=> set_value('first_name')]);?>
        <span> <?php echo form_error('first_name'); ?></span>
    </div>
                
    <div class="form-group">
        <label for="lastname" style="color: black;font-family: cursive;">Last Name:</label>
<!--        <input type="email" class="form-control" id="email"/>-->
        <?php echo form_input(['class'=> 'form-control','placeholder'=>'Enter your last name','name'=>'last_name','value'=> set_value('last_name')]);?>
        <span> <?php echo form_error('last_name'); ?></span>
    </div>
                
    <div class="form-group">
        <label for="useremail" style="color: black;font-family: cursive;">Email:</label>
<!--        <input type="email" class="form-control" id="email"/>-->
        <?php echo form_input(['class'=> 'form-control','placeholder'=>'Enter your email','name'=>'email','value'=> set_value('email')]);?>
        <span> <?php echo form_error('email'); ?></span>
    </div>            
<!--    <button type="submit" class="btn btn-success">Submit
    </button>
    -->
    <br>
    <?php echo form_submit(['type'=>'submit','class'=>'btn btn-success','value'=>'Submit']); ?>
            
    <?php echo form_reset(['type'=>'reset','class'=>'btn btn-danger','value'=>'Reset']); ?>
     
    <?php echo anchor('login/index/','Back','class = "link-class float-right"'); ?>
          
            
            </div>
                    
          </div>
          
        </div>

        

      </div>
</body>
</html>
<?php include ('footer.php');?>

