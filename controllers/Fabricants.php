<?php

class Fabricants extends Controller{
    

    /**
     * Cette méthode affiche la liste des Fabricant
     *
     *
     * @return void
     */
    public function index() {
        // On instancie le modèle "Fabricant"
        
        $this->loadModel('Fabricant');
        // On stocke les Fabricant dans $Fabricant
        $fabricants= $this->Fabricant->getAll();

        // $this->loadModel('Marque');
        // $marques = $this->Marque->getAll();

        // On envoie les données à la vue index
        $this->render('index', compact('fabricants'));
    }

    /**
     * Méthode permettant d'afficher un Fabricant à partir de son ID
     *
     * @param  int $id
     * @return void
     */
    public function modif(int $id){
        // On instancie le modèle "Fabricant"
        $this->loadModel('Fabricant');

        // On stocke le Fabricant dans $Fabricant
        $this->Fabricant->id = array(
            'ID_FABRICANT' => $id
        );
        $fabricant = $this->Fabricant->getOne();

        // On envoie les données à la vue modif
        $this->render('modif', compact('fabricant'));
    }

    /**
     * Méthode permettant de traiter l'enregistrement de la MODIFICATION
     * d'un Fabricant
     *
     * @param  int $id
     * @return void
     */
    public function modif_sauve(int $id){

        // On recupère les données envoyées par le formulaire
        $id = $_REQUEST['Id'];
        $nom = $_REQUEST['Nom'];

        // On instancie le modèle "Fabricant"
        $this->loadModel('Fabricant');

        // On effectue la mise à jour
        $this->Fabricant->update($id, $nom);

        // On redirige vers la liste
        // On stocke les Fabricant dans $Fabricant
        $fabricants = $this->Fabricant->getAll();
        
        $message = "Fabricant bien modifié";
        $type_message = "success";
        // On envoie les données à la vue index
        $this->render('index', compact('fabricants', 'message', 'type_message'));
    }


    /**
     * Méthode permettant d'afficher un Fabricant à partir de son ID
     *
     * @param  int $id
     * @return void
     */
    public function suppr(int $id){
        // On instancie le modèle "Fabricant"
        $this->loadModel('Fabricant');

        // On stocke le Fabricant dans $Fabricant
        $this->Fabricant->id = array(
            'ID_FABRICANT' => $id
        );
        $fabricant = $this->Fabricant->getOne();

        // On envoie les données à la vue modif
        $this->render('suppr', compact('fabricant'));
    }

    /**
     * Méthode permettant de traiter l'enregistrement de la SUPPRESSION
     * d'un Fabricant
     *
     * @param  int $id
     * @return void
     */
    public function suppr_sauve(int $id){

        // On recupère les données envoyées par le formulaire
        $id = $_REQUEST['Id'];

        // On instancie le modèle "Fabricant"
        $this->loadModel('Fabricant');

        // On effectue la mise à jour
        $this->Fabricant->delete($id);

        // On redirige vers la liste
        // On stocke les Fabricant dans $Fabricant
        $fabricants = $this->Fabricant->getAll();
        
        $message = "Fabricant bien supprimé";
        $type_message = "success";
        // On envoie les données à la vue index
        $this->render('index', compact('fabricants', 'message', 'type_message'));
    }

    /**
     * Méthode permettant d'afficher le formulaire d'ajout d'un nouveau Fabricant
     *
     * @param  void
     * @return void
     */
    public function ajout(){
        // On affiche le formulaire
        $this->render('ajout', array());
    }

    /**
     * Méthode permettant d'enregistrer la saisie d'un nouveau Fabricant
     * d'un Fabricant
     *
     * @param  void
     * @return void
     */
    public function ajout_sauve(){

        // On recupère les données envoyées par le formulaire
        $nom = $_REQUEST['Nom'];

        // On instancie le modèle "Fabricant"
        $this->loadModel('Fabricant');

        // On effectue la mise à jour
        $this->Fabricant->insert($nom);

        // On redirige vers la liste
        // On stocke les Fabricant dans $Fabricant
        $fabricants = $this->Fabricant->getAll();
        
        $message = "Fabricant bien Ajouté";
        $type_message = "success";
        // On envoie les données à la vue index
        $this->render('index', compact('fabricants', 'message', 'type_message'));
    }
}