<?php
class Hewan
{
    private $namahewan;
    private $jenis;
    public function setInformasiHewan($nama, $jenis)
    {
        $this->namahewan = $nama;
        $this->jenis = $jenis;
    }
    public function getInformasiHewan()
    {
        return $this->namahewan . ' ' . $this->jenis . '</br>';
    }
}
class keturunanHewanPertama extends Hewan {}
class keturunanHewanKedua extends Hewan {}
class keturunanHewanKetiga extends Hewan {}
$hewan = new KeturunanHewanPertama;
$hewan->setInformasiHewan('Kuda', 'Herbivora');
echo $hewan->getInformasiHewan();
$hewan = new KeturunanHewanKedua;
$hewan->setInformasiHewan('Kuda', 'Herbivora');
echo $hewan->getInformasiHewan();
$hewan = new KeturunanHewanKetiga;
$hewan->setInformasiHewan('Kuda', 'Herbivora');
echo $hewan->getInformasiHewan();
?>