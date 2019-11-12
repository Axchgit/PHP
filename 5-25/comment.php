<?php
if(!empty($_POST)){
	echo json_encode($_POST);
	die;
}
$data = array("name"=>"测试者","comment"=>"这是测试内容");
echo json_encode($data);
