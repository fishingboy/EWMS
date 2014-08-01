<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Word_editor extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
    }

    public function add()
    {
        $this->parser->parse("form/word_editor_view", []);
    }
}

/* End of file word_list.php */
/* Location: ./application/controller/word_list.php */