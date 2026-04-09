<?php
// echo '<!-- Functions Loaded -->' . chr(10);
@ini_set('default_charset', 'UTF-8');
@ini_set('upload_max_filesize', '50M');
@date_default_timezone_set('Europe/Lisbon');
ini_set("display_errors", 0);
// error_reporting(E_ALL);

if (!function_exists('f_functionName')) {
    /**
     * Function to do something
     * @param $parameters
     * @return void
     */
    function f_functionName(): void
    {
    }
    // endFunction
} // endif

if (!function_exists('f_cacheForceRenew')) {
    /**
     * Function to force cache renewal
     * @param $parameters
     * @return void
     */
    function f_cacheForceRenew(): void
    {
        // Force cache renewal by appending a timestamp to the URL
        $timestamp = time();
        echo '?v=' . $timestamp;
        
    }
    // endFunction
} // endif
