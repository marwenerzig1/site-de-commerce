<?php
include("simple_html_dom.php"); 
$websiteUrl = "https://www.tunisianet.com.tn/681-pc-portable-gamer" ;  
$html = file_get_html($websiteUrl) ; 
$wholeContent=$html->find("div[id=product-description-short-49087]");
echo $wholeContent->plaintext; 


   