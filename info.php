<?php

$galleryURL = "http://graph.facebook.com/209684229044211/photos";
$jsonGallery = file_get_contents($galleryURL, true);
#$jsonGallery = "{\"test\":\"test\"}";
#var_dump(json_decode($jsonGallery));
$galleryObject = json_decode($jsonGallery);

foreach ($galleryObject->data as $Image){

print_r("<img style=\"width:200px\" src=\"".$Image->source."\"</img><br/>");

};


?>