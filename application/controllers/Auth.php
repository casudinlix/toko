<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	function __construct(){
		parent::__construct();
		
	}

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if($this->session->userdata('role') == 1)
			{
				redirect('super');
			}
			elseif($this->session->userdata('role') == 2)
			{
				redirect('user');
			}
			elseif($this->session->userdata('role') == 'user')
			{
				redirect('user');
			}
                        $data=$this->load->view('login');
		}
		
			

		
		

	
	 public function cek()
	{
		$nip = $this->input->post('username');
		$pass = md5($this->input->post('pass'));

		$cek = $this->model_login->cek($nip, $pass);
		if($cek->num_rows() == 1)
		{
			foreach($cek->result() as $data){
				$sess_data['id'] = $data->id;
				$sess_data['username'] = $data->username;
				$sess_data['nama_user'] = $data->nama_user;
				//$sess_data['foto'] = $data->foto;
				$sess_data['role'] = $data->role;
				$this->session->set_userdata($sess_data);
			}

			if($this->session->userdata('role') == 1)
			{
				redirect('super');
			}
			elseif($this->session->userdata('role') == 2)
			{
				redirect('user');
			}
			elseif($this->session->userdata('role') == 'user')
			{
				redirect('user');
			}
		}
		else
		{
			echo "<script>alert('Username Atau Password Anda Salah');</script>";
			echo "<script language='JavaScript'>top.location='javascript:history.go(-1)'; </script> ";
			//redirect('auth');

		}
	}

	function keluar()
	{
		$this->session->sess_destroy();
		redirect('auth');
	}



	}
