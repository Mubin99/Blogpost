<?php

$delete_user = $_POST['dlt_user'];
echo $delete_user;


$xml = new DomDocument("1.0","UTF-8");
$xml->load('uinfo.xml');

$path = new DOMXPATH($xml);
foreach($path->query("/userinfo/user[username = '$delete_user']") as $node){
	$node->parentNode->removeChild($node);
}
$xml->formatoutput = true;
$xml->save('uinfo.xml');
//header('Location:admin_home.php?delete=User Deleted');
?>