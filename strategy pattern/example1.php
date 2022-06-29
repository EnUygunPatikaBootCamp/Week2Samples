<?php
interface Rota{
public function rotayap();
}
class otomobil implements Rota{
public function rotayap(){
echo 'otomobil için en iyi rota oluşturuluor ';
}
}
class yaya implements Rota{
public function rotayap(){
echo 'yaya için en iyi rota oluşturuluor';
}
}
function RotaCalıstır(Rota $rota){
$rota->rotayap();
}
RotaCalıstır( new otomobil());
RotaCalıstır( new yaya());