<?php

class Puzzle extends CI_Controller
{
	public $data = array(
		'title' => 'ar-based puzzle game',
		'position' => '',
		'src' => 'puzzle/common/src',
	);

	public function __construct()
	{
		parent::__construct();
		$this->load->library('upload');
		$this->load->model('Model');
	}

	public function index()
	{
		$this->data['pages'] = 'puzzle/index';

		$this->Model->upload();
		$this->Model->split();

		$this->load->view('index', $this->data);
	}

	public function finish()
	{
		$this->data['pages'] = 'puzzle/success';
		$this->load->view('index', $this->data);
	}
}
