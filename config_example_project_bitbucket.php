<?php
if(!defined('PARENT_DIR')){
    define("PARENT_DIR", dirname(__FILE__));
}

$config = array(
    "secretKey" => '123456',
    "repository"=>'',
    "branchMap" => array(
        "master" =>"/master",
    ),
    "authorMap" =>array(
        "nguyenvanduocit"=>"/", //relate to branch dir
    ),
    "exclude" => array(".git",".idea"),
    "targetDir" => PARENT_DIR."/buibucket",
    "tmpDir" => PARENT_DIR."/tmp",
    "isNeedClearUp" => true,
    "backupDir" => PARENT_DIR.'/backup',
    "isUseComposer" => false,
    "isTryMkDir" => true,
    "notifyEmail" => "nguyenvanduasasdfasdfdfocit@gmail.com",
    "username" => "nguyenvanduocit",
    "password"=>"asdfasdfasdf"
);