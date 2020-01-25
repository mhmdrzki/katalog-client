<?php 
use GuzzleHttp\Client;
class Mobil_model extends CI_model {

    private $_client;

    function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/katalog-server/api/'
        ]);
    }
    public function getAllMobil()
    {

        $response = $this->_client->request('GET', 'mobil');

        $result = json_decode($response->getBody(), true);

        return $result['data'];
    }

    public function getMobilById($id = null)
    {
        $response = $this->_client->request('GET', 'mobil', ['query' => ['id' => $id]]);

        $result = json_decode($response->getBody(), true);

        return $result['data'][0];
    }

    public function cariDataMobil()
    {
        $kriteria   = $this->input->post('kriteria');
        $keyword    = $this->input->post('keyword');
        $response = $this->_client->request('GET', 'mobil', ['query' => [
                                                                        'kriteria' => $kriteria,
                                                                        'keyword' => $keyword
                                                                    ]
                                                                ]);

        $result = json_decode($response->getBody(), true);

        return $result['data'];
      
    }

    public function tambahDataMobil()
    {
        $data = [
            'no_kerangka'   =>  $this->input->post('no_kerangka', true),
            'no_polisi'     =>  $this->input->post('no_polisi', true),
            'brand'         =>  $this->input->post('brand', true),
            'type'          =>  $this->input->post('type', true),
            'year'          =>  $this->input->post('year', true)
        ];

        $response = $this->_client->request('POST', 'mobil', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody(), true);

        return $result;
        
    }

    public function ubahDataMobil()
    {
        $data = [
            'no_kerangka'   =>  $this->input->post('no_kerangka', true),
            'no_polisi'     =>  $this->input->post('no_polisi', true),
            'brand'         =>  $this->input->post('brand', true),
            'type'          =>  $this->input->post('type', true),
            'year'          =>  $this->input->post('year', true),
            'id'            =>  $this->input->post('id', true)
        ];

        $response = $this->_client->request('PUT', 'mobil', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody(), true);

        return $result;
    }

    public function hapusDataMobil($id)
    {
        $response = $this->_client->request('DELETE', 'mobil', [
            'form_params' => [
                'id' => $id
            ]
        ]);

        $result = json_decode($response->getBody(), true);

        return $result;
        
    }


}