<?php


$get_N = curl_init();
 curl_setopt($get_N, CURLOPT_URL, "https://newsapi.org/v2/top-headlines?country=us&category=business&apiKey=9b0a9613f113401b946aeff703385e91");
 curl_setopt($get_N, CURLOPT_RETURNTRANSFER, 1);
 $News_JSON= curl_exec($get_N);
 curl_close($get_N);  
 $News_OBJ =json_decode($News_JSON);
 $auth= $News_OBJ->articles[0]->author;
 $title= $News_OBJ->articles[0]->title;
 $link=$News_OBJ->articles[0]->url;
 $pic=$News_OBJ->articles[0]->urlToImage;
 $des=$News_OBJ->articles[0]->description;
 $auth1= $News_OBJ->articles[1]->author;
 $title1= $News_OBJ->articles[1]->title;
 $link1=$News_OBJ->articles[1]->url;
 $pic1=$News_OBJ->articles[1]->urlToImage;
 $des1=$News_OBJ->articles[1]->description;
 $auth2= $News_OBJ->articles[2]->author;
 $title2= $News_OBJ->articles[2]->title;
 $link2=$News_OBJ->articles[2]->url;
 $pic2=$News_OBJ->articles[2]->urlToImage;
 $des2=$News_OBJ->articles[2]->description;
 
 
 
 
 ?>