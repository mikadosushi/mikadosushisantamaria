<?php 

$galleryURL = "http://graph.facebook.com/209684229044211/photos";
				$jsonGallery = file_get_contents($galleryURL, true);
				echo $jsonGallery;

?>