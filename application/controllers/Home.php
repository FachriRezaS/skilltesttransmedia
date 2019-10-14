<?php  

/**
 * summary
 */
class Home extends CI_Controller
{
    /**
     * summary
     */
    public function __construct()
    {
      parent::__construct();
      $this->load->model('M_data');
    }

    public function index()
    {
        $data['body'] = 'pages/dashboard';
        $data['list'] = $this->M_data->show_list();
    	  $this->load->view('template', $data);
    }
}


?>