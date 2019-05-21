<?php include('header.php');?>
<head>
    <style type="text/css">
       
    
    </style>
    

</head>
<body class="" style="background-color:whitesmoke" >
    <div class="container" style="margin-top: 60px;">
        <div class="row">
            <div class="col-md-8 offset-md-2">
      <div class="card">
          <?php
          
          ?>
          <h5 class="card-header text-center"><?php echo $view_article->article_title; ?></h5>
  <div class="card-body">
    <h5 class="card-title">
         <?php if(!is_null($view_article->image_path)) { ?>
           <img class="rounded mx-auto d-block" src="<?php echo $view_article->image_path ?>" alt="" width="250" height="200">
                                <?php } ?>
        </h5>
      <p class="card-text">
          <strong> Article :&nbsp;</strong><?php echo $view_article->article_body; ?> 
      </p>
      <a href="<?php echo base_url(); ?>Users/index" class="btn btn-primary">Back</a>
  </div>

        <?php
          
          ?>
        
    </div>
    </div>
    </div>
    </div>

</body>
<?php 


include('footer.php');?>



