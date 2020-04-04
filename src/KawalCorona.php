<?php

namespace Pravodev\KawalCoronaCilegondev;

class KawalCorona
{
    public $api_url = 'https://api.kawalcorona.com';

    /**
     * Fungsi untuk mengambil data.
     *
     * @param string $url - endpoint
     */
    public function getData($url)
    {
        $data = file_get_contents($this->api_url.'/'.$url);

        return json_decode($data);
    }

    public function getTotalIndonesia()
    {
        return $this->getData('indonesia');
    }

    public function getProvinsi()
    {
        return $this->getData('indonesia/provinsi');
    }

    public function getGlobalData()
    {
        return $this->getData();
    }

    public function getTotalPositif()
    {
        return $this->getData('positif');
    }

    public function getTotalMeninggal()
    {
        return $this->getData('meninggal');
    }

    public function getTotalSembuh()
    {
        return $this->getData('sembuh');
    }
}
