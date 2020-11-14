<?php
/**
 * Created by PhpStorm.
 * User: EDWARD OSORIO
 * Date: 14/11/2020
 * Time: 8:55 AM
 */

namespace App\Business\api;


use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class FakeStoreApi
{

    protected $fakeStoreApi;
    protected $clientHttp;

    public function __construct()
    {
        $this->fakeStoreApi = config('apiroute.fake_store_api');
        $this->clientHttp = new Client(['base_uri' => $this->fakeStoreApi['url']]);
    }

    /**
     * Metodo que retorna todos los productos existentes desde fakeStoreApi.com
     * @return mixed
     * @throws Exception
     */
    public function getAllProducts(){
        try {
            $response = $this->clientHttp->request('GET',
                $this->fakeStoreApi['products']);
            return json_decode($response->getBody()->getContents(), true);
        }catch (GuzzleException $guex){
            throw new Exception($guex->getMessage());
        }catch (Exception $ex){
            throw new Exception($ex->getMessage());
        }
    }

}