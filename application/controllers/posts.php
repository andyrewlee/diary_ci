<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts extends CI_Controller {

    public function index()
    {
        $this->load->view('posts/index.php');
    }
    public function show()
    {
        $this->load->view('posts/show.php');
    }
    public function create()
    {
        $this->load->view('posts/create.php');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
