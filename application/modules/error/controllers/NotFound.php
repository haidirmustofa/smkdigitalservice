<?php
defined('BASEPATH') or exit('No direct script access allowed');

class NotFound extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        check_not_login();
    }
    public function index()
    {
        $this->load->view('eror');
    }
}
