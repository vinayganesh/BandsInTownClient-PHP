<?php 

namespace BandsInTown\Service;

use Zend\Http\Client;
use Zend\Http\Headers;
use Zend\Json\Json;


final class BandsInTown
{
	static $apiUri = 'http://api.bandsintown.com/';

	
	static public function getArtists($artistName,$appId)
	{
		$search = array("'", " ", "/", "?", "&");
		$replace = array("%27", "%20", "%252", "%252", "and");

		$search_artist = str_replace($search, $replace, $artistName);
		
		$url = self::$apiUri . "artists/" . $search_artist . ".json?app_id=" . $appId;
		
		$http = new Client();
		$http->setUri($url);
		$http->setMethod('GET');
		$response = $http->send();
		return Json::decode($response->getBody());
		
	}
}
