<?php

namespace Pravodev\KawalCoronaCilegondev\Tests;

use PHPUnit\Framework\TestCase;
use Pravodev\KawalCoronaCilegondev\KawalCorona;

class KawalCoronaTest extends TestCase
{
    public function testGetIndonesia()
    {
        $corona = new KawalCorona();
        $data = $corona->getTotalIndonesia();
        $data = $data[0];

        $this->assertObjectHasAttribute('name', $data);
        $this->assertObjectHasAttribute('positif', $data);
        $this->assertObjectHasAttribute('sembuh', $data);
        $this->assertObjectHasAttribute('meninggal', $data);
    }

    public function testGetProvinsi()
    {
        $corona = new KawalCorona();
        $data = $corona->getProvinsi();
        $data = $data[0];

        $this->assertObjectHasAttribute('attributes', $data);
        $this->assertObjectHasAttribute('FID', $data->attributes);
        $this->assertObjectHasAttribute('Kode_Provi', $data->attributes);
        $this->assertObjectHasAttribute('Provinsi', $data->attributes);
        $this->assertObjectHasAttribute('Kasus_Posi', $data->attributes);
        $this->assertObjectHasAttribute('Kasus_Semb', $data->attributes);
        $this->assertObjectHasAttribute('Kasus_Meni', $data->attributes);
    }

    public function testGetTotalPositif()
    {
        $corona = new KawalCorona();
        $data = $corona->getTotalPositif();

        $this->assertObjectHasAttribute('name', $data);
        $this->assertObjectHasAttribute('value', $data);
    }
}
