<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
 

body {
  background: #17a2b8;
}
form {
  width: 50%;
  margin: 60px auto;
  background: #efefef;
  padding: 60px 120px 80px 120px;
  text-align: center;
  -webkit-box-shadow: 2px 2px 3px rgba(0,0,0,0.1);
  box-shadow: 2px 2px 3px rgba(0,0,0,0.1);
}
label {
  display: block;
  position: relative;
  margin: 40px 0px;
}
.input {
  width: 100%;
  padding: 10px;
  background: transparent;
  border: none;
  outline: none;
}

.line-box {
  position: relative;
  width: 100%;
  height: 2px;
  background: #BCBCBC;
}

.line {
  position: absolute;
  width: 0%;
  height: 2px;
  top: 0px;
  left: 50%;
  transform: translateX(-50%);
  background: #8BC34A;
  transition: ease .6s;
}

.input:focus + .line-box .line {
  width: 100%;
}

.label-txt {
  position: absolute;
  top: -1.6em;
  padding: 10px;
  font-family: sans-serif;
  font-size: .8em;
  letter-spacing: 1px;
  color: rgb(120,120,120);
  transition: ease .3s;
}

.label-active {
  top: -3em;
}

button {
  display: inline-block;
  padding: 12px 24px;
  background: rgb(220,220,220);
  font-weight: bold;
  color: rgb(120,120,120);
  border: none;
  outline: none;
  border-radius: 3px;
  cursor: pointer;
  transition: ease .3s;
}

button:hover {
  background: #8BC34A;
  color: #ffffff;
}
   
</style>
<script type="text/javascript">
$(document).ready(function(){

  $('.input').focus(function(){
    $(this).parent().find(".label-txt").addClass('label-active');
  });

  $(".input").focusout(function(){
    if ($(this).val() == '') {
      $(this).parent().find(".label-txt").removeClass('label-active');
    };
  });

});
</script>
</head>
<body>
    
<?php echo form_open_multipart('Super_admin/register'); ?>
 <?php echo form_hidden('a_status',1) ;?>   
    <?php

$messages = $this->session->flashdata('admin_msg');

if ($messages) {
    $msg_class = $this->session->flashdata('admin_msg_class');
    ?>
                <div class="alert <?= $msg_class; ?> alert-dismissible fade show" role="alert">
                    <strong>Message : </strong><?= $messages; ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

<?php } ?>
  <label>
    <p class="label-txt">ENTER YOUR NAME</p>
    <input type="text" name="a_name" class="input" value="<?php echo set_value('a_name'); ?>" >
    <div class="line-box">
      <div class="line"></div>
    </div>
    <span> <?php echo form_error('a_name'); ?></span>
  </label>
  <label>
    <p class="label-txt">ENTER YOUR EMAIL</p>
    <input type="email" name="a_email" class="input" value="<?php echo set_value('a_email'); ?>">
    <div class="line-box">
      <div class="line"></div>
    </div>
    <span> <?php echo form_error('a_email'); ?></span>
  </label>
  <label>
    <p class="label-txt">ENTER YOUR CONTACT</p>
    <input type="text" name="a_contact" class="input" value="<?php echo set_value('a_contact'); ?>">
    <div class="line-box">
      <div class="line"></div>
    </div>
    <span> <?php echo form_error('a_contact'); ?></span>
  </label>  
  <label>
    <p class="label-txt">ENTER YOUR PASSWORD</p>
    <input type="password" name="a_password" class="input" value="<?php echo set_value('a_password'); ?>">
    <div class="line-box">
      <div class="line"></div>
    </div>
    <span> <?php echo form_error('a_password'); ?></span>
  </label>
  <label>
    <p class="label-txt">ENTER YOUR PIC</p>
   <input type="file" name="userfile" class="input">
    
    <?php //echo form_upload(['name'=>'userfile']);?>
    <div class="line-box">
      <div class="line"></div>
    </div>
    <span><?php if(isset($upload_error)) { echo $upload_error;  } ?> </span>
  </label>
  <button type="submit">Submit</button>
  <?php echo anchor('admin_login_controller/index','Back','class = "link-class float-right"'); ?>
   
</body>
</html>

