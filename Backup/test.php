<?php
   /* phpinfo(); */
  read
	if ($handle = opendir('./images')) {
    echo "Directory handle: $handle\n";
    echo "Files:\n";

    /* This is the correct way to loop over the directory. */
    while (false !== ($file = readdir($handle))) {
        echo "$file\n";
    }

    closedir($handle);
	};
	
	$firstVar = 1;
	$secondVar = 2;
	echo $firstVar+$secondVar;
php?>
