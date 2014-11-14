<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{   $d['_Pendek']   	= $this->config->item('Nama_Pendek');
	    $d['_Panjang']  	= $this->config->item('Nama_Aplikasi');
	    $d['_Perusahaan'] 	= $this->config->item('Perusahaan');
	    $d['_Alamat']		= $this->config->item('Alamat');
	    $d['_Version']		= $this->config->item('Version');
	    $this->load->view('global/_header.php',$d);
		$this->load->view('welcome_message',$d);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */