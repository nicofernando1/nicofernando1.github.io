<?php
defined('BASEPATH') or exit('No direct script access allowed');

function noticket_code($panjang_angka){
    $code ='1234567890'.time();
    $string ='';
    for ($i = 0; $i<$panjang_angka;$i++){
        $pos = rand(0,strlen($code)-1);
        $string .= $code[$pos];
    }
    return 'PHR/'.date('Y').'/'.date('m').'/'.date('d').'/'.$string;
}

function no_code(){
    $code ='1234567890'.time();
    $string ='';
    for ($i = 0; $i<3;$i++){
        $pos = rand(0,strlen($code)-1);
        $string .= $code[$pos];
    }
    return 'PHR/'.date('Y').'/'.date('m').'/'.date('d').'/'.$string;
}

// function data()
// {
//     $this->Ticket_model
// }

