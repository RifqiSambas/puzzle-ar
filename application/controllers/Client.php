<?php
class Client extends CI_Controller
{
	public $data = array(
		'title' => 'ar-based puzzle game',
		'position' => '',
	);

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->data['pages'] = 'client/index';

		$this->load->view('index', $this->data);
	}
}
