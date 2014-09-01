<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sessions extends CI_Controller {

    public function sessions_new()
    {
      // log in page
        $this->load->view('sessions/new.php');
    }
    public function sessions_create()
    {
        // sign in user
    }
    public function sessions_destroy()
    {
        // sign off user
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
