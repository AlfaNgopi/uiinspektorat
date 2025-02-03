<?php
class Model_pemkab extends CI_model
{
    public function get_berita_pemkab()
    {
        return $this->curl_data();
    }

    private function curl_data()
    {
        $token = $_SESSION['token_pemkab'];
        if(!$this->cek_token($token)){
            $get_token = $this->generate_token();
            $token = $get_token['access_token'];
            $_SESSION['token_pemkab'] = $token;
        }
        $ch = curl_init();
        $authorization = "Authorization: Bearer $token";
        $request_headers = array(
            "Content-Type: application/json",
            $authorization
        );

        curl_setopt($ch, CURLOPT_URL, "https://api-splp.layanan.go.id/t/purworejokab.go.id/purworejokab/v1.2/get_posts");
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $request_headers);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $result = curl_exec($ch);
        curl_close($ch);
        $row = json_decode($result, true);
        $posts = $row['posts']['data'];
        //var_dump($result);die();
        return $posts;
    }

    public function cek_token($token){
        $data =NULL;
        try {
            $data = json_decode(base64_decode(str_replace('_', '/', str_replace('-','+',explode('.', $token)[1]))),true);
        } catch (\Throwable $th) {
            return false;
        }
		$diff = @$data['exp'] - time();
		if($diff > 80){
            return true;
        }
        return false;
    }

    private function generate_token()
	{
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, 'https://splp.layanan.go.id/oauth2/token');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials");

		$headers = array();
		$headers[] = 'Authorization: Basic SWZGOEMwR1BLNGZIZXJOcENlRE8yOWxjYVNFYTpXWFBseU1hcVp1eXd2NFRxd3Rlc0lIQUt3SG9h';//WGRSbERBRzVmYzlDYTVlZkxkRnpIMjIzSFRVYTp3NURnSllQbHpnR0E3a25zTDdVR3hYb3RZZmNh
		$headers[] = 'Content-Type: application/x-www-form-urlencoded';
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$result = curl_exec($ch);
        //var_dump($result);die();
		if (curl_errno($ch)) {
			echo 'Error:' . curl_error($ch);
		}
		curl_close($ch);
		$result = json_decode($result, true);

		return $result;
	}

    
}