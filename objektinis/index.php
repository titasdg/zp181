<?php 
/*
class Klase {
private $pavadinimas;
private $kodas;
private $kiekis;
private $kaina;

public function Rodyk()
{
  return get_object_vars($this);
}
public function __construct($kodas,$pavadinimas,$kiekis,$kaina)
{
    $this->pavadinimas=$pavadinimas;
    $this->kodas=$kodas;
    $this->kiekis=$kiekis;
    $this->kaina=$kaina;

}
public static function printAll($array)
{
    $list= '<table style="border-collapse:collapse ; width:50%;"><tr >';
    foreach ($array as $var)
    {
            $list.='<th style="border:1px solid black">'.$var.'</th>'; 
    }
    $list.= "</tr></table>";
    echo $list;
}
*/
?>
<?php
/*
$objektas = new Klase("DD55","MaxBook",15,1500);

$vars = $objektas->Rodyk();

Klase::printAll($objektas->Rodyk());

$list= "<ul>";
foreach ($vars as $var)
{
    if (!is_array($var))
    {
        $list.="<li>".$var."</li>"; 
    }
    else {
        $list.="<li>Koretele <ul>";
        foreach($var as $kortele)
        {
            $list.="<li>".$kortele."</li>"; 
        }
        $list.="</ul></li>";

    }
   
}
$list.= "</ul>";

echo $list;
*/
?>


<?php
class TransportoPriemones
{
    private $modelis;
    private $marke;
    private $kaina;
    private $svoris;
    private $variklis;
    private $maxgreitis;
    private $aprasymas;
    private $zmoniukiekis;
    public function __construct($modelis, $marke)
    {
        $this->modelis = $modelis;
        $this->marke = $marke;
    }
    public function RodykKonstruktoriu()
    {
        $array = [
        $this->modelis,
        $this->marke
        ];
        return $array;
    }
      public function getZmoniukiekis()
    {
        return $this->zmoniukiekis;
    }

    public function setZmoniukiekis($zmoniukiekis)
    {
        $this->zmoniukiekis = $zmoniukiekis;

        return $this;
    }

    public function getKaina()
    {
        return $this->kaina;
    }

    public function setKaina($kaina)
    {
        $this->kaina = $kaina;

        return $this;
    }

    public function getSvoris()
    {
        return $this->svoris;
    }

    public function setSvoris($svoris)
    {
        $this->svoris = $svoris;

        return $this;
    }

    public function getVariklis()
    {
        return $this->variklis;
    }

    public function setVariklis($variklis)
    {
        $this->variklis = $variklis;

        return $this;
    } 
    public function getMaxgreitis()
    {
        return $this->maxgreitis;
    }
    public function setMaxgreitis($maxgreitis)
    {
        $this->maxgreitis = $maxgreitis;

        return $this;
    }
    public function getAprasymas()
    {
        return $this->aprasymas;
    }
    public function setAprasymas($aprasymas)
    {
        $this->aprasymas = $aprasymas;

        return $this;
    }
    public function Rodyk()
{
  return get_object_vars($this);
}
}

class Dviratis extends TransportoPriemones
{

    private $pedalai;
    public function getpedalai()
    {
        return $this->pedalai;
    }
    public function setpedalai($pedalai)
    {
        $this->pedalai = $pedalai;

        return $this;
    }

    public function show()
{
  return get_object_vars($this);
}

}
class Motociklas extends TransportoPriemones {
    private $sedyne;
    public function getSedyne()
    {
        return $this->sedyne;
    }
    public function setSedyne($sedyne)
    {
        $this->sedyne = $sedyne;

        return $this;
    }
    public function showMoticiklas()
    {
      return get_object_vars($this);
    }
}
class Automobilis extends TransportoPriemones {
    private $tipas;
    public function getTipas()
    {
        return $this->tipas;
    }
    public function setTipas($tipas)
    {
        $this->tipas = $tipas;

        return $this;
    }
    public function showAutomobilis()
    {
      return get_object_vars($this);
    }
}

?>
<?php

$automobilis = new Automobilis("A6", "Audi");
$dviratis = new Dviratis("Dviratis", "Dviratis");
$motociklas = new Motociklas("Motociklas", "Motociklas");

$automobilis->setKaina(1500);
$automobilis->setVariklis("2.2");
$automobilis->setSvoris(1500);
$automobilis->setMaxgreitis(350);


foreach ($automobilis->RodykKonstruktoriu() as $data) {
    echo $data;
}

$array =$automobilis->Rodyk();
$list= '<table style="border-collapse:collapse ; width:50%;"><tr >';
foreach ($array as $var)
{
    if ($var!=null)
    {
          $list.='<th style="border:1px solid black">'.$var.'</th>'; 
    }
      
}
$list.= "</tr></table>";
echo $list;

echo $automobilis->getMaxgreitis(); 

$dviratis->setpedalai("nuostabus");
$motociklas->setSedyne("Nuostabi");
 echo $dviratis->getpedalai();
 echo $motociklas->getSedyne();

?>







