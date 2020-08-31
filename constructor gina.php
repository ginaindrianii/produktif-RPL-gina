<?php
//GINA INDRIANI
class produk{
	public $jajan,
	       $jenis,
	       $harga;

	public function getcetak(){
		return "$this->jajan, $this->jenis, $this->harga";
	}
	public function __construct ($jajan="jajan", $jenis="jenis", $harga=0){
		$this->jajan = $jajan;
		$this->jenis = $jenis;
		$this->harga = $harga;
	}

}


$produk1 = new produk("seblak ceker","pedas",10000);
$produk2 = new produk("seblak ceker","tidak pedas",80000);
$produk3 = new produk("baso mercon","pedas",15000);
$produk4 = new produk("baso mercon","tidak pedas",12000);
$produk5 = new produk("japlak karamel","pedas",15000);
$produk6 = new produk("japlak karamel","tidak pedas",13000);
$produk7 = new produk("japlak kuah","pedas",15000);
$produk8 = new produk("japlak kuah","tidak pedas",13000);
$produk9 = new produk("jus","jeruk",10000);
$produk10 = new produk("jus","mangga",10000);
$produk11= new produk("jus","naga",15000);
$produk12= new produk("jus","stobery",10000);
$produk13 = new produk("jus","anggur",15000);
echo "	JAJANAN MURCE";
echo "	<br>";
echo "	<br>";
echo "	MAKANAN";
echo "	<br>";
echo "Nama makanan: " . $produk1->getcetak();
echo "<br>";
echo "Nama makanan: " . $produk2->getcetak();
echo "<br>";
echo "Nama makanan: " . $produk3->getcetak();
echo "<br>";
echo "Nama makanan: " . $produk4->getcetak();
echo "<br>";
echo "Nama makanan: " . $produk5->getcetak();
echo "<br>";
echo "Nama makanan: " . $produk6->getcetak();
echo "<br>";
echo "Nama makanan: " . $produk7->getcetak();
echo "<br>";
echo "Nama makanan: " . $produk8->getcetak();
echo "<br>";
echo "<br>";
echo "<br>";
echo "            MINUMAN                 ";
echo "<br>";

echo "Nama minuman: " . $produk9->getcetak();
echo "<br>";
echo "Nama minuman: " . $produk10->getcetak();
echo "<br>";
echo "Nama minuman: " . $produk11->getcetak();
echo "<br>";
echo "Nama minuman: " . $produk12->getcetak();
echo "<br>";
echo "Nama minuman: " . $produk13->getcetak();