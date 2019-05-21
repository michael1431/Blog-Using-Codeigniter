<?php include('header.php');?>
<head>
    <style type="text/css">
       
    
    </style>
      <script>
  $(document).ready(function(){
      $("#myInput").on("keyup",function(){
          var value = $(this).val().toLowerCase();
          $("#myTable tr").filter(function(){
              $(this).toggle($(this).text().toLowerCase().indexOf(value)>-1)
              
          });
          
          
      });
      
      
  });
 </script>

</head>
<body class="" style="background-color:whitesmoke" >
    <div class="container" style="margin-top: 60px;">
        
        <div class="col-md-4 offset-md-4">
            <div class="alert alert-dark" role="alert">
              
                 <form class="form-inline ">
                     <strong>All Articles :&nbsp;&nbsp;</strong>
                <input class="form-control" id="myInput" type="search" placeholder="Search" aria-level="Search"/>   
<!--      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
          
            
            </div>
        </div>
        <table class="table table-striped  text-center">
                        <thead>
                            <tr class="btn-danger">
                                <td colspan="4"><b><i class=""></i>All Records</b></td>
                                
                            </tr>
                            <tr>
                                <td><b>SL</b></td>
                                <td><b>Article Image</b></td>
                                <td><b>Article Title</b></td>
                                <td><b>Published On</b></td>
                             
                                
                               
                            </tr>
                        </thead>
                        <tbody class="text-info" style="font-family: cursive;" id="myTable">
                            <?php
                            if(count($articles)){
                            $i=$this->uri->segment(3);
                           
                            foreach($articles as $art){
                            ?>
                            <tr>
                                <td style="padding-top: 70px;"><b><?php echo 'Article'.' ' .++$i; ?></b></td>
                                
                                <?php if(!is_null($art->image_path)) { ?>
                                <td><img class="rounded mx-auto d-block" src="<?php echo $art->image_path ?>" alt="" width="200" height="150"></td>
                                <?php } ?>
                                <td style="padding-top: 70px;"><b><?php echo anchor("Admin/view_full_articles/{$art->article_id}", $art->article_title); ?></b></td>
                                <td style="padding-top: 70px;"><b><?php echo $art->created_at; ?></b></td>
                             
                             
                            </tr>
                            <?php  }}
                            else{
                            ?>
                            <tr class="">
                                <td colspan="4"><b>No records available</b></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                          
                        <tfoot></tfoot>
                      
                   </table>
                       <?= $this->pagination->create_links(); ?>
        
        
    </div>

</body>
<?php 


include('footer.php');?>

