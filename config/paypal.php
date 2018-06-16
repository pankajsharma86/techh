<?php

return array(
/** set your paypal credential **/
'client_id' =>'Acb5M8Y14FvMhwwjnU3YnARtLfZBuba1hQxqyKas5ct-s87m45vDAPid-WdCc7GS_FBw-2fJOX1UYZFX',
'secret' => 'EC3BpWsY5GKQPhwjk8z9yViOPencYt2O29B-OPRbFi7ubZaH1zfDTDxrz06Rf24vnFffIq39MECzmtMp',
/**
* SDK configuration 
*/
'settings' => array(
/**
* Available option 'sandbox' or 'live'
*/
'mode' => 'sandbox',
/**
* Specify the max request time in seconds
*/
'http.ConnectionTimeOut' => 1000,
/**
* Whether want to log to a file
*/
'log.LogEnabled' => true,
/**
* Specify the file that want to write on
*/
'log.FileName' => storage_path() . '/logs/paypal.log',
/**
* Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
*
* Logging is most verbose in the 'FINE' level and decreases as you
* proceed towards ERROR
*/
'log.LogLevel' => 'FINE'
),
);

?>