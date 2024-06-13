<?php

class Demo extends Controller{

    public function index(){
 
       $montitre2 = "Un titre 2 passé par le controller pour la demo";
 

        $this->render('index', compact('montitre2'));
    }

    public function add(){
 
        $montitre2 = "Un titre 2 passé par le controller pour la demo / Ajout";
  
 
         $this->render('ajout', compact('montitre2'));
     }

     public function delete(int $i=0){
 
        $montitre2 = "Un titre 2 passé par le controller pour la demo / Suppression du N° ".$i ;
  
 
         $this->render('supprime', compact('montitre2'));
     }
}