<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kaprodi extends BaseController
{
    public function __construct() {
        parent::__construct();
        $this->isLoggedIn();
    }

    public function index(){
        $this->global['pageTitle'] = "Elusi : Pilih Role";
        $this->loadViews("kaprodi_view", $this->global, NULL, NULL);
    }

    public function switch_akademik(){
        $this->session->set_userdata('role', ROLE_AKADEMIK);
        $this->session->set_userdata('isKaprodi', TRUE);
        redirect('akademik');
    }

    public function switch_dosen(){
        $this->session->set_userdata('role', ROLE_DOSEN);
        $this->session->set_userdata('isKaprodi', TRUE);
        redirect('dosen');
    }
}