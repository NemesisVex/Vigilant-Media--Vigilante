<?php

class Vg extends CI_Controller
{
	public $site_name = 'Vigilante';

	function __construct()
	{
		parent::__construct();
		$this->load->library('VigilantMediaView');

		$this->vmview->layout_template = 'vg_global_layout.tpl';
	}

	function index()
	{
		$this->vmview->display('vg_root_index.tpl');
	}

	function error($code)
	{
		$this->vmview->display_error_page($code, 'vg_error_' . $code . '.tpl');
	}

}
?>
