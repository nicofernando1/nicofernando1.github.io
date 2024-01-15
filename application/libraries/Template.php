<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template {
    var $data_template = [];

    function set ($name, $value) {
        $this->data_template [$name] = $value;
    }
    function load($template = "", $filename ="", $dataview = [], $return = FALSE)
    {
        $this->CI =& get_instance();
        $this->set('content', $this->CI->load->view($filename, $dataview, TRUE));
        return $this->CI->load->view($template, $this->data_template, $return);
    }
}
