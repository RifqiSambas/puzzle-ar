
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Site extends CI_Controller
{
	public $data = array(
		'title' => 'ar-based puzzle game',
		'position' => 'bottom',
		'src' => 'site/common/src',
	);

	public function __construct()
	{
		parent::__construct();
		$this->load->library('upload');
		$this->load->model('Model');
	}

	public function index()
	{
		$this->data['pages'] = 'site/index';

		$this->load->view('index', $this->data);
	}

	public function about()
	{
		$this->data['pages'] = 'site/about';

		$this->load->view('index', $this->data);
	}
}
