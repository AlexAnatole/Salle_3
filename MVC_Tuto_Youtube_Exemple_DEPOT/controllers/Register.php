<?php

class Register extends Controller{

    public function index(){
        $scriptJS = "$(document).ready(function() {
            $('.btn').each(function() {
                $(this).removeClass('btn-info');
                $(this).removeClass('btn-secondary');
                if ($(this).attr('id') == 'btnRegister') {
                    $(this).addClass('btn-secondary');
                } else {
                    $(this).addClass('btn-info');
                }
            });
        })";
        $this->render('index',compact('scriptJS'));
    }

}