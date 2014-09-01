<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts extends CI_Controller {

    public function index()
    {
        $this->load->view('posts/new.php');
    }
    public function posts_show()
    {
        $this->load->view('posts/show.php');
    }
    public function posts_new()
    {
        $this->load->view('posts/new.php');
    }
    public function posts_create()
    {
        var_dump($this->input->post());
        die();
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
