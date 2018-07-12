<?php
$xml = simplexml_load_file("admin_xml.xml") or die("The file is not here");
$ar = array();
foreach($xml->children() as $child){
	//echo $ar[(string)$child->name];
	$ar[(string)$child->name] = (string)$child->pass;
	//echo $ar[(string)$child->name];
	//echo '<br>';
	//echo $child->name;
}
?>