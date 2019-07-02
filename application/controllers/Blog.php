<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		echo "<p>some stuff</p>";
		$this->load->view('blog');
	}
}
