<?php 
/**
 * Nave espacial que se mueve de Guillermo
 * Parte4 con arrays, generamos atributos y metodos nuevos:
 */
class Ia{
  
//Atributos o propiedades: variables simples
  
  public $columna;

  public $fila;

  public $mapaCol=4;

  public $mapaFil=4;

  private $numNaves=3;
  
//array vacio 
  public $navesHumano=[];
  
//Variables multiples=ARRAYS con claves y valores;  array dinamico 
  public $navesIA=[
      0=>["tipo"=>"ataque","col"=>0,"fil"=>3],
      1=>[ "tipo"=>"defensa","col"=>1,"fil"=>3],
      2=>[ "tipo"=>"ayuda","col"=>2,"fil"=>3]
      ];

//Metodo o funcion get: pide la variable con return$this->
  public function getColumna() {
    return $this->columna;
  }
  public function getFila() {
    return $this->fila;
  }

  public function getMapaCol(){
    return $this->columna;
  }
  public function getMapaFil(){
    return $this->fila;
  }
  public function getNumNaves(){
    return $this->numNaves;
  }
  public function getNavesHumano(){
    return $this->navesHumano;
  }

//SETERS se establece estructura de control a la columna y fila,
  public function setColumna($col){
    if($col>3 ){
       $this->columna = 3;
    }
    elseif ($col<0) {
      $this->columna = 0;
    }
    else{
      $this->columna = $col;
    }
  }
  public function setFila($fil){
    if($fil>3 ){
       $this->fila = 3;
    }elseif ($fil<0) {
      $this->fila = 0;
    }else{
      $this->fila = $fil;
    }
  }


  public function setMapaCol($mapaCol){
    $this->mapaCol=$mapaCol;
  }
  public function setMapaFil($mapaFil){
    $this->mapaFil=$mapaFil;
  }

  //OTROS METODOS funcion =rand();      
  public function randomPos() {
      $this->columna=rand(0,3);
      $this->fila=rand(0,3);
  }
  //haces seter para navesHumano variables que pide y con array: FUNCION ARRAY PUSH DE $NAVE,
  public function setNaveHumana($tipo,$fila,$columna){
    $nave=["tipo"=>$tipo,"col"=>$columna,"fil"=>$fila];

    array_push($this->navesHumano, $nave);
  }

  public function getNavesIa(){
    return $this->navesIA;
  }

}
?>
