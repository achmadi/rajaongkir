<?php namespace Bcscoder\Rajaongkir;

class RajaOngkir {

	private $apikey;
    private $base_url = "http://rajaongkir.com/api/starter/";

    public function __construct($api)
    {
        $this->apikey = $api;
    }


	function getCity()
	{
        $client = new \GuzzleHttp\Client();
	    // $response = $client->get($this->base_url.'city', [
            // 'query' => [
                // 'key' => $this->apikey,
            // ]
        // ]);
            $response = $client->get($this->base_url.'city', [
            'query' => [
                'key' => '5b833981e55c55135c0d4bd736af2326',
            ]
        ]);
        $body = $response->json();
        // $body = $response;
        // print_r($body);
        return $body;
	}
	 
	function getCost($origin, $destination,$weight,$courier)
	{
        $client = new \GuzzleHttp\Client();
        // $response = $client->post($this->base_url.'cost', [
            // 'body' => [
                // 'key' => $this->apikey,
                // 'origin' => $origin,
                // 'destination' => $destination,
                // 'weight' => $weight,
                // 'courier' => $courier
            // ]
        // ]);
        $response = $client->post($this->base_url.'cost', [
            'body' => [
                'key' => '5b833981e55c55135c0d4bd736af2326',
                'origin' => $origin,
                'destination' => $destination,
                'weight' => $weight,
                'courier' => $courier
            ]
        ]);
        $body = $response->json();
        // $body = $response;
        // print_r($body);
        return $body;
	}
	 
	//$kota = get_city('ban','origin');
	//echo json_encode($kota);
}
