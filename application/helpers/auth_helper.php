<?php
defined('BASEPATH') or exit('No direct script access allowed');

function cek_login()
{
    $CI = &get_instance();
    $email = $CI->session->email;

    if ($email == NULL){
        $CI->session->set_flashdata('pesan','<div class="alert alert-danger bg-danger">
        Login terlebih dahulu</div>');

        redirect('auth');
    }
}

function is_it()
{
    $ci = &get_instance();  
    $tipeuser = $ci->session->level_user;

    if($tipeuser == '1'){
        return $tipeuser;
    }

    return null;
}

function is_yet()
{
    $ci = &get_instance();  
    $tipeuser = $ci->session->level_user;

    if($tipeuser == '3'){
        return $tipeuser;
    }

    return null;
}