<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Word_editor extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 取得空的 view 資料
     * 
     * @return mixed view 資料
     */
    private function _get_null_data()
    {
        return array
        (
            'id'     => 0,
            'word'   => '',
            'symbol' => '',
            'type'   => '',
            'mean'   => '',
            'en1'    => '',
            'ch1'    => '',
            'en2'    => '',
            'ch2'    => '',
        );
    }

    public function add()
    {
        $this->parser->parse("form/word_editor_view", $this->_get_null_data());
    }

    public function do_update()
    {
        
    }
}

/* End of file word_list.php */
/* Location: ./application/controller/word_list.php */