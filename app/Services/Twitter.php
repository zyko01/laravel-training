<?php 

namespace App\Services;

/**
 * 
 */
class Twitter
{

	protected $apiKey;
	
	function __construct($apiKey)
	{
		$this->apiKey = $apiKey;
	}
}