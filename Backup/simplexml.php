<?php


function openXMLFile($fileName){
	
	if(file_exists($fileName)){
		
		$xmlFile = simplexml_load_file($fileName);
		return $xmlFile;
	};
	
	
};


//$fh = fopen('test.xml','w+');
//$xmlString = file_get_contents('test.xml');
//fwrite($fh, $string);
//fclose($fh);

/* Search for <a><b><c> */

$xml = openXMLFile('test1.xml');

$result = $xml->xpath('/a/e/c');

while(list( , $node) = each($result)) {
    echo '/a/b/c: ',$node,"\n";
}

/* Relative paths also work... */
$result = $xml->xpath('b/c');

while(list( , $node) = each($result)) {
    echo 'b/c: ',$node,"\n";
}
?>