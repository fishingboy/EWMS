<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Word_list extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		echo '<meta http-equiv="content-type" content="text/html; charset=utf-8">';
		$query = $this->db->query("SELECT * FROM word_list");
		echo "<pre>result = " . print_r($query->result(), TRUE). "</pre>";
	}
}

/* End of file word_list.php */
/* Location: ./application/controller/word_list.php */