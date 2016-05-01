<html>

<head>
<title>Upload Page</title>
<link rel="stylesheet" href="./css/site_style.css" type="text/css" media="screen, projection" /> 
<link rel="stylesheet" href="./css/960.css" type="text/css" media="screen, projection" /> 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>

</head>


<body>
<?php 
/**
 * Convert a shorthand byte value from a PHP configuration directive to an integer value
 * @param    string   $value
 * @return   int
 */

 FUNCTION get_oldest_file($directory) { 
    IF ($handle = OPENDIR($directory)) { 
        WHILE (FALSE !== ($file = READDIR($handle))) { 
            $files[] = $file; 
        } 
        FOREACH ($files AS $val) { 
            IF (IS_FILE($directory.$val)) { 
                $file_date[$val] = FILEMTIME($directory.$val); 
            } 
        } 
    } 
    CLOSEDIR($handle); 
    ASORT($file_date, SORT_NUMERIC); 
    RESET($file_date); 
    $oldest = KEY($file_date); 
    RETURN $oldest; 
} 

function deleteImage($file){
	if(!unlink($file)){
				
	}	
	
};

function convertBytes( $value ) {
    if ( is_numeric( $value ) ) {
        return $value;
    } else {
        $value_length = strlen( $value );
        $qty = substr( $value, 0, $value_length - 1 );
        $unit = strtolower( substr( $value, $value_length - 1 ) );
        switch ( $unit ) {
            case 'k':
                $qty *= 1024;
                break;
            case 'm':
                $qty *= 1048576;
                break;
            case 'g':
                $qty *= 1073741824;
                break;
        }
        return $qty;
    }
}

$directory="images/CustomerGallery";
$status= "";
$errorMessage =  "<p style='width:100%;background:#FF0000;color:white;text-align:center'>ERROR: FILE MUST BE A JPEG, OR NO FILE CHOSEN</p>";
function resizeAndSaveImage($uploadPicName, $tmpPicName, $targetWidth, $newFileName, $directory){
	try{
	if($tmpPicName)
	{
    $resizePic = imagecreatefromjpeg($tmpPicName);
    list($width, $height) = getimagesize($tmpPicName);
	$targetHeight=($height/$width)*$targetWidth;
	$tmp=imagecreatetruecolor($targetWidth,$targetHeight);
	imagecopyresampled($tmp,$resizePic,0,0,0,0,$targetWidth,$targetHeight,$width, $height);
	if($tmp){
	$total = 0;
	if ($handle = opendir('./'.$directory))
	{
		while (false !== ($file = readdir($handle)))
        			{
        				if ($file != "." && $file != "..")
						{
        					$total++;
						};
    				};
	};
	
	$fileName = ''. ($total % 20) .'.jpg';
	imagejpeg($tmp, $directory."/".$fileName, 100);	
	
	$status="<p>Upload Complete, ".$fileName.", to Folder: ".$directory."/".$fileName."</p><script type='text/javascript'>
  							$('#leftContainer>#newPic',window.parent.document).html('').css({'padding-top':'1px','height':'250px'}).append(\"<h3>You Uploaded:</h3><img src='".$directory."/".$fileName."' style='width:200px'/>\");
  							setTimeout('window.parent.jQuery.fancybox.close()', 2000);
  							</script>";
  	echo $status;
	};
	
	}else{
	echo $errorMessage;
	};
	}catch(Exception $e){
	echo $e;
	};
	
};


if($_POST["ACTION"]=="UPLOAD"){
  for($i=0; $i < count($_FILES['newPic']['name']); $i++) { 
	$fileName = $_FILES['newPic']['name']["$i"];
	$pattern = '/[\s\/\%\^\&\*\(\)\@]*/i';
	preg_replace($pattern,"",$fileName);
	if(preg_match('/\.(jpg|jpeg)/i', $fileName))
	{	
  		resizeAndSaveImage($fileName, $_FILES['newPic']['tmp_name']["$i"], 500, $fileName, $directory);
	}else{echo $errorMessage;};
  };
  
  };
?>

<div style="width:100%;height:320px;text-align:center;background-image:url('images/site_template_960_06.png');background-position:-20px, 30px">
<?php 

echo 'Maximum file size: 100 KB, Must be a JPEG Image!';
?>
<p style="color:white">Find a new Picture to Upload</p>
<form action="upload.php" id="fileUploadForm" method="post" style="color:white" enctype="multipart/form-data">
<input type="hidden" name="ACTION" value="UPLOAD"/>
<input type="hidden" name="MAX_FILE_SIZE" value="100000" />
	<div id="formRowContainer" style="color:white">
			<input id='newPic_0' name='newPic[]' type="file"></input>
			<select id='newPicFolder_0' name='newPicFolder[]'></select>
	</div>
	<button id="submitButton" type="submit" name="" value='Upload Picture' class="css3button" style="width:200px;margin-top:50px">Click Here To Upload</button>

	<script type="text/javascript">$('#fileUploadForm').submit(function(){if(window.location==window.parent.location){window.location="http://google.com";return false}})</script>
</form>
</div>
</body>

</html>