<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

    public function users_index()
    {
        // lists all users
    }
    public function users_show()
    {
        $this->load->view('users/show.php');
    }
    public function users_new()
    {
        $this->load->view('users/new.php');
    }
    public function users_create()
    {
        // creates users and redirects to profile picture
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
