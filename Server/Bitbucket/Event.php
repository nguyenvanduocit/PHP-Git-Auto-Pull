<?php
/**
 * Project : simple-php-git-deploy
 * User: thuytien
 * Date: 11/10/2014
 * Time: 12:39 AM
 */

namespace AutoGitPuller\Server\Bitbuck;

use AutoGitPuller\Server\BaseEvent;
use AutoGitPuller\Util\Error;

class Event extends BaseEvent{
    //https://developer.github.com/v3/activity/events/types/#pushevent
    function __construct($key='', $username='',$password='')
    {
        parent::__construct($key, $username, $password);
    }

    public function processRequest(){
        $payload = isset($_POST['payload']) ? $_POST['payload'] : false;
        $data = json_decode($payload);
        if($this->secretkey!=='') {
            if( ($_GET["secretkey"] == '') || ( $_GET["secretkey"] != $this->secretkey) )
            {
                return new Error("","Secret key was not matched.");
            }
        }
        $this->repository = $data->repository;
        $this->repository->branchName = $data->commits[0]->branch;
        $this->author = $data->user;
        return true;
    }
    public function getCommiterUsername()
    {
        return $this->author?$this->author:'';
    }
    public function getRepositoryName(){
        return $this->repository->slug?$this->repository->slug:'';
    }
    public function getRepositoryGitURL(){
        if( ($this->username !=='') && ( $this->password != '' ) ) {
            $gitURL = sprintf('https://%1$s:%2$s@bitbucket.org/%1$s/%3$s.git', $this->username, $this->password, $this->getRepositoryName());
        }
        else
        {
            $gitURL = $this->repository->clone_url;
        }
        return $gitURL;
    }
    public function getRepositoryBranch(){
        return $this->repository->branchName;
    }
}