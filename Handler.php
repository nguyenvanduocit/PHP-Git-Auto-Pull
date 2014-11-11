<?php
define("PARENT_DIR", dirname(__FILE__));

require_once "Util/Commander.php";
require_once "Util/Error.php";
require_once "Util/Logger.php";
require_once "Server/BaseEvent.php";
require_once "Server/Github/Event.php";
require_once "Server/Bitbucket/Event.php";
require_once "AutoGitPull.php";

use AutoGitPuller\AutoGitPull;

$default = array(
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
    "tmpDir" => PARENT_DIR."/tmp",
    "isNeedClearUp" => false,
    "backupDir" => '',
    "isUseComposer" => false,
    "isTryMkDir" => true,
    "notifyEmail" => "nguyenvanduasasdfasdfdfocit@gmail.com"
);

$args = array();
$args = array_merge($default, $args);
$autoGitPull = new AutoGitPull($args);