<?php
require_once( 'Twitter.php' );

class TwitterPost {
	
	private $_connection;
	
	
	
	public function __construct() {
		$settings = array(
			'oauth_token' => '***REMOVED***',
			'oauth_token_secret' => '***REMOVED***',
			'consumer_key' => '***REMOVED***',
			'consumer_secret' => '***REMOVED***',
			'output_format' => 'json'
		);
		$this->_connection = new Twitter( $settings );
        
    }
    
    public function setHeader() {
	    header( 'Content-Type: application/json' );
    }
    
    public function send() {
    	$this->setHeader();
		
		
		
	    $tweet = $_POST['tweet'];
	    $status = '';
	    if( strlen( $tweet ) > 140 ) {
			$status = substr( $status, 0, 140 );    
	    } else {
		    $status = $tweet;
	    }
	    $params = array(
			'status' => $status	
		);
	    $resp = $this->_connection->post( 'statuses/update', $params );
	    echo $resp;
    }
	
		
}