<?php 



class DATA{
 

    public function send_data( $suf )
	{
		$url = API_URL.$suf;
		$ch = curl_init();
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt( $ch, CURLOPT_URL, $url);
		$content = curl_exec( $ch );
		curl_close( $ch );
		$content = json_decode( $content, true );
		return $content;
	}


}



?>