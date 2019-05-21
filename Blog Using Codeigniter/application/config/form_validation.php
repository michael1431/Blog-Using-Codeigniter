<?php
$config = [
    'add_article_rules'=>[
                     [
                        'field'=>'article_title',
                        'label'=>'Article Title',
                        'rules'=>'required|alpha_numeric_spaces'
        
                      ],
                     [
                         'field'=>'article_body',
                         'label'=>'Article Body',
                         'rules'=>'required'
                         
                     ]
               ],
    
    
    
];
?>

