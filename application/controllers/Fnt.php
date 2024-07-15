<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fnt extends CI_Controller {

    public function index()
    {
        $this->load->view('mainHeader');
        $this->load->view('mainBody');
        $this->load->view('mainFooter');
    }
    
    public function site()
    {
        // Load views
        $this->load->view('webHeader');
        $this->load->view('webBody'); // Assuming you have a view file 'site_content.php'
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
