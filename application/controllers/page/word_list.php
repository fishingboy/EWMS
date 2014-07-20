<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Word_list extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$query = $this->db->query("SELECT * FROM word_list");
		// echo "<pre>result = " . print_r($query->result(), TRUE). "</pre>";
		$view_data = array('list' => $query->result());
		$this->parser->parse("page/word_list_view", $view_data);
	}
}

/* End of file word_list.php */
/* Location: ./application/controller/word_list.php */