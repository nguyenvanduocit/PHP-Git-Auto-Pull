<?php
if(!defined('PARENT_DIR')){
    define("PARENT_DIR", dirname(__FILE__));
}
$config = array(
    "secretKey" => '123456',
    "repository"=>'',
    "branchMap" => array(
        "multi_config" =>"/multi_config",
    ),
    "authorMap" =>array(
        "nguyenvanduocit"=>"/", //relate to branch dir
    ),
    "exclude" => array(".git",".idea"),
    "targetDir" => PARENT_DIR."/data",
    "tmpDir" => PARENT_DIR."/tmp",
    "isNeedClearUp" => true,
    "backupDir" => PARENT_DIR.'/backup',
    "isUseComposer" => false,
    "isTryMkDir" => true,
    "notifyEmail" => "nguyenvanduasasdfasdfdfocit@gmail.com",
    "username" => "nguyenvanduocit",
    "password"=>"fathertime"
);