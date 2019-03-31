<?php
/*
$vardas = "Titas";
$pavarde = "Dyglys";
//echo 'Manop Vardas: '.$vardas,' Mano pavarde :  '.$pavarde;
$output = "<div>";
$output.="<p>Tekstas</p>";
$output.="</div>";
echo $output;
//echo "Pasakos pavadinimas : \"Labai grazi pasaka\"";
$ilgis = strlen($vardas);//Parodo eilutes ilgi
echo $ilgis; 
echo $vardas;
echo trim($vardas);//Nukerpa tarpus pradzioj ir gale
echo strtoupper($vardas);//Didziosio raides
echo strtolower($vardas);//Mazosios raides
echo str_replace("Titas","Titanas",$vardas);//Pakeicia visus eiluteje esancius zodzius titas i titanas
echo substr($vardas,0,3);//Grazina tris simbolisu pradeda nuo 0
const vardas="Titas Dyglys";
echo vardas;
$prekes= ['Kompas',123,true];
echo $prekes[0];
$prekes = [
    "Kompiuteriai"=>["IBM","Dell","Apple"],
    "Telefonai"=>["Samsung","Apple","Nokia"]
];
?>
<ul>
<?php foreach ($prekes as $kodas => $preke ) :?>
    <li><?=$kodas?>
        <ul>
        <?php foreach ($preke as $produktai) :?>
        <li><?=$produktai?></li>
<?php endforeach;?>
        </ul>
    </li>
<?php endforeach;?>
</ul>
*/

date_default_timezone_set('UTC');

$klase5b=[
    "klase"=>[["5b",rand(1111,9999),"vardas"=>"Titas","pavarde"=>"Dyglys","Egzaminai"=>["Lietuviu"=>8,"Matematika"=>5,"Informatika"=>10],date('Y\-m\-d')],
    ["5b",rand(1111,9999),"vardas"=>"Juozas","pavarde"=>"Juozapaitis","Egzaminai"=>["Lietuviu"=>5,"Matematika"=>8,"Informatika"=>5],date('Y\-m\-d')],
    ["5b",rand(1111,9999),"vardas"=>"Antanas","pavarde"=>"Antanaitis","Egzaminai"=>["Lietuviu"=>6,"Matematika"=>6,"Informatika"=>4],date('Y\-m\-d')],
    ["5b",rand(1111,9999),"vardas"=>"Giedrius","pavarde"=>"Giedraitis","Egzaminai"=>["Lietuviu"=>7,"Matematika"=>3,"Informatika"=>3],date('Y\-m\-d')],
    ["5b",rand(1111,9999),"vardas"=>"Vardenis","pavarde"=>"Pavardenis","Egzaminai"=>["Lietuviu"=>2,"Matematika"=>9,"Informatika"=>2],date('Y\-m\-d')]]
  
];

?>
<link rel="stylesheet" type="text/css" href="index.css">
<table>
<thead>
        <tr>
            <th>Klase</th>
            <th>Kodas</th>
            <th>Vardas</th>
            <th>Pavarde</th>
            <th>Kontroliniu darbu vidurkis</th>
            <th>Duomenu formavimo data</th>
        </tr>
    </thead> 
     <tbody>
     <tr>
<?php foreach ($klase5b as $aa  ) :?>
<?php foreach ($aa as $klase => $mokinys ) :?>

  
        
            <?php foreach ($mokinys as $info) :?>
              <?php $sum=0?>

           <?php if(is_array($info)):?>
            
                <?php foreach ($info as $egzaminai => $pazimys) :?>
             
                 <?php  $sum+=$pazimys?>
               
                <?php endforeach;?>
                 <td><?=number_format((float)$sum/sizeof($info), 2, '.', '')?></td>
             
        <?php else:?>
                
             <td><?=strtoupper($info)?></td>
        
       
<?php endif ;?>
<?php endforeach;?>
           
        </tr>

<?php endforeach;?>

<?php endforeach;?>    
</tbody>
</table>