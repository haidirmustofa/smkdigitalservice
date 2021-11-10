<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LandingPage extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        // check_not_login();
        // check_superadmin();
        $this->load->model('M_roadmap');
    }
    public function index()
    {
        $params['roadmap'] = $this->M_roadmap->getForLanding();
        $this->template->load('template/templateLanding', 'landingPage', $params);
    }
    public function roadmap()
    {
        $params['roadmap'] = $this->M_roadmap->get();
        $this->template->load('template/templateLanding', 'roadmap', $params);
    }
    public function roadmapjurusan($slug)
    {
        $params['roadmap'] = $this->M_roadmap->getBySlug($slug);
        $this->template->load('template/templateLanding', 'roadmap-jurusan', $params);
    }
    // public function prakerin()
    // {
    //     $params['prakerin'] = $this->M_prakerin->get();
    //     $this->load->view('prakerin', $params);
    // }
}
