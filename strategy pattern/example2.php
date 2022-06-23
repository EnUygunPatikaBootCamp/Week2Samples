<?php
interface Databeses{
public function select();
public function delete();
public function update();
public function create();
}
class MsSql implements Databeses{
public function create(){
echo ' Mssql Seçme işlemi yapıldı ';
}
public function delete(){
echo $databseName . 'Seçme işlemi yapıldı ';
}
public function update(){
echo $databseName . 'Seçme işlemi yapıldı ';
}
public function select(){
echo $databseName . 'Seçme işlemi yapıldı ';
}}
class Mysql implements Databeses{
public function create(){
echo ' Mysql Seçme işlemi yapıldı ';
}
public function delete(){
echo ' Mysql Seçme işlemi yapıldı ';
}
public function update(){
echo 'Mysql Seçme işlemi yapıldı ';
}
public function select(){
echo ' Mysql Seçme işlemi yapıldı ';
}}
function SistemiCalistir(Databeses $db){
$db->create();
}
SistemiCalistir(new MsSql());
SistemiCalistir(new Mysql());