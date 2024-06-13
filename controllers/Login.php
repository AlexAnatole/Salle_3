<?php
class Login extends Controller{
    /**
     * Cette méthode affiche la liste des articles
     *
     * @return void
     */
    public function index(){

        // Ici on pourrait travail
        // avec un MODEL

        // On envoie les données à la vue index
        $scriptJS = "$(document).ready(function() {
            $('.btn').each(function() {
                $(this).removeClass('btn-info');
                $(this).removeClass('btn-secondary');
                if ($(this).attr('id') == 'btnLogin') {
                    $(this).addClass('btn-secondary');
                } else {
                    $(this).addClass('btn-info');
                }
            });
        })";
        $this->render('index', compact('scriptJS'));
    }
}
?>