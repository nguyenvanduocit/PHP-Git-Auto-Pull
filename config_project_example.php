<?php
$config = array(
    "secretKey" => '',
    "repository"=>'',
    "branchMap" => array(
        "multi_config" =>"/multi_config",
    ),
    "authorMap" =>array(
        "nguyenvanduocit"=>"/",
    ),
    "exclude" => array(".git",".idea"),
    "targetDir" => PARENT_DIR."/data",
    "tmpDir" => '',
    "isNeedClearUp" => true,
    "backupDir" => PARENT_DIR.'/backup',
    "isUseComposer" => false,
    "isTryMkDir" => true,
    "notifyEmail" => "nguyenvanduasasdfasdfdfocit@gmail.com"
);