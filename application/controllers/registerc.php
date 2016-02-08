<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class registerc extends CI_Controller
{
 
    public function __construct()
    {
        parent::__construct();
        $this->load->library('Datatables');
        $this->load->library('table');
        $this->load->database();
    }
 
    function index()
    {
 
        //set table id in table open tag
        $tmpl = array('table_open' => '<table id="big_table" border="1" cellpadding="2" cellspacing="1" class="mytable">');
        $this->table->set_template($tmpl);
 
        $this->table->set_heading('id','Todays Date', 'Case Date', 'Code','Case Number','Case Year','Case type','Judicial Officer','Case For','Outcome','Adjournment reason','Next Activity Date');
 
        $this->load->view('registerview');
    }
 
    //function to handle callbacks
    function datatable()
    {
        $this->datatables->select('id,tdate,crdate,code,cnumber,cyear,ctype,jofficer,ccfor,outcome,adjreason,nadate')
            ->unset_column('id')
            ->from('cases');
 
        echo $this->datatables->generate();
    }
}