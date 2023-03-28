function getIP(){
		$ip = isset($_SERVER['HTTP_CLIENT_IP']) 
			? $_SERVER['HTTP_CLIENT_IP'] 
			: isset($_SERVER['HTTP_X_FORWARDED_FOR']) 
			  ? $_SERVER['HTTP_X_FORWARDED_FOR'] 
			  : isset($_SERVER['REMOTE_ADDR'])
				  ? $_SERVER['REMOTE_ADDR']
                  : isset($_SERVER['HTTP_CF_CONNECTING_IP'])
				    ? $_SERVER['HTTP_CF_CONNECTING_IP']
                    : isset($_SERVER['HTTP_FASTLY_CLIENT_IP'])
				        ? $_SERVER['HTTP_FASTLY_CLIENT_IP']
                        : isset($_SERVER['HTTP_X_CLUSTER_CLIENT_IP'])
				            ? $_SERVER['HTTP_X_CLUSTER_CLIENT_IP']
				  : "NULL";
		if(!isset($ip)){
			$ip = "NULL";
		}
		return $ip;
	}


$ip = getIP();

echo $ip;