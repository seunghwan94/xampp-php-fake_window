<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fnt extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->output->set_header('Access-Control-Allow-Origin: *');
        $this->output->set_header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE');
        $this->output->set_header('Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding');
    }
    
    public function index()
    {
        $this->load->view('mainHeader');
        $this->load->view('mainBody');
        $this->load->view('mainFooter');
    }
    
    public function site()
    {
        $this->load->view('webHeader');
        $this->load->view('webBody');
        $this->load->view('webFooter');
    }

    public function trash()
    {
        $this->load->view('folderHeader');
        $this->load->view('trashBody');
        $this->load->view('folderFooter');
    }
    public function folder()
    {
        $this->load->view('folderHeader');
        $this->load->view('folderBody');
        $this->load->view('folderFooter');
    }
}
?>
