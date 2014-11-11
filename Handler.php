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

//load config
if ( $_GET["config"] !=='' )
{
    $config_file = dirname(__FILE__)."/".$_GET["config"] . ".php";
    if(file_exists($config_file))
    {
        require_once $config_file;
    }
}

global $config;

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
    "isNeedClearUp" => true,
    "backupDir" => PARENT_DIR.'/backup',
    "isUseComposer" => false,
    "isTryMkDir" => true,
    "notifyEmail" => "nguyenvanduasasdfasdfdfocit@gmail.com"
);
if( !isset($config) || !is_array($config))
{
    $config = array();
}
$args = array_merge($default, $config);
$autoGitPull = new AutoGitPull($args);