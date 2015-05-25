<?php
require_once( 'Twitter.php' );

class TwitterPost {
	
	private $_connection;
	
	
	
	public function __construct() {
		$settings = array(
			'oauth_token' => '<OAUTH_TOKEN>',
			'oauth_token_secret' => '<OAUTH_TOKEN_SECRET>',
			'consumer_key' => '<CONSUMER_KEY>',
			'consumer_secret' => '<CONSUMER_SECRET>',
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