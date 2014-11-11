<?php
/**
 * Project : simple-php-git-deploy
 * User: thuytien
 * Date: 11/10/2014
 * Time: 9:28 PM
 */

namespace AutoGitPuller\Util;


class Logger {
    public static function logStart()
    {
        ob_start();
    }
    public static function logEnd(){
        $result = ob_get_contents();
        $result = '<html>
                    <meta charset="utf-8">
                    <meta name="robots" content="noindex">
                    <title>Simple PHP Git deploy script</title>
                    <style>
                        body {
                            padding: 0 1em;
                            background: #222;
                            color: #fff;
                        }

                        h2, .error {
                            color: #c33;
                        }

                        .prompt {
                            color: #6be234;
                        }

                        .command {
                            color: #729fcf;
                        }

                        .output {
                            color: #999;
                        }
                    </style>' .
            $result.
            '</html>';
        if(DEBUG) {
            file_put_contents(dirname(__FILE__) . "/../log.html", $result);
        }
        ob_end_flush();
    }
}