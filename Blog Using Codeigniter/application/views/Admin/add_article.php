<?php include ('header.php'); ?>
<html>
    
<body class="" style="background-color: #900C3F">
    <div class="container animated fadeIn" style="margin-top: 20px;">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-6 offset-md-3">
              <?php echo form_open_multipart('Admin/userValidation'); ?>
              <?php echo form_hidden('user_id',$this->session->userdata('id')); ?>
              <?php echo form_hidden('created_at'); ?>
<!--          <div class="" id="pnl">-->
                         <div class="card-header text-center text-white bg-dark " style="font-family: cursive;font-weight: bold;font-size: 20px;border-top-left-radius: 10px;border-top-right-radius: 10px; ">Add Article</div>
            <div class="card-body text-white mb-3" style="background-color: lightblue;">
  

     <div class="form-group">
        <label for="article_title" style="color: black;font-family: cursive;">Article Title:</label>
<!--        <input type="email" class="form-control" id="email"/>-->
        <?php echo form_input(['class'=> 'form-control','placeholder'=>'Enter your title','name'=>'article_title','value'=> set_value('article_title')]);?>
        <span> <?php echo form_error('article_title'); ?></span>
    </div>

                
    <div class="form-group">
        <label for="article_body" style="color: black;font-family: cursive;">Article:</label>
<!--        <input type="email" class="form-control" id="email"/>-->
        <?php echo form_textarea(['class'=> 'form-control','placeholder'=>'Enter your article...','name'=>'article_body','value'=> set_value('article_body')]);?>
        <span> <?php echo form_error('article_body'); ?></span>
    </div>
                
     <div class="form-group">
        <label for="body" style="color: black;font-family: cursive;">Select Image:</label>
<!--        <input type="email" class="form-control" id="email"/>-->
        <?php echo form_upload(['name'=>'userfile']);?>
        
        <span><?php if(isset($upload_error)) { echo $upload_error;  } ?> </span>
    </div>
               
            
<!--    <button type="submit" class="btn btn-success">Submit
    </button>
    -->
    <br>
    <?php echo form_submit(['type'=>'submit','class'=>'btn btn-success','value'=>'Submit']); ?>
            
    <?php echo form_reset(['type'=>'reset','class'=>'btn btn-danger','value'=>'Reset']); ?>
     
    <?php echo anchor('Admin/welcome/','Back','class = "link-class float-right"'); ?>
          
            
            </div>
                    
          </div>
          
        </div>

        

      </div>
</body>
</html>
<?php include ('footer.php');?>



