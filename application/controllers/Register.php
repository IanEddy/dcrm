<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

		// Load form validation library
$this->load->library('form_validation');

$this->form_validation->set_rules('tdate', 'Date', 'trim|required');
$this->form_validation->set_rules('crdate', 'Date', 'trim|required');
$this->form_validation->set_rules('cnumber', 'Case_Number','trim|numeric|required');
$this->form_validation->set_rules('cyear', 'Case_year', 'trim|required');
$this->form_validation->set_rules('ctype', 'Case_type', 'trim|required');
$this->form_validation->set_rules('jofficer', 'Judicial_officer', 'trim|required');
$this->form_validation->set_rules('ccfor', 'case_coming_for', 'trim|required');
$this->form_validation->set_rules('outcome', 'outcome', 'trim|required');
$this->form_validation->set_rules('adjreason', 'Adjournment_reason', 'trim|required');
$this->form_validation->set_rules('nadate', 'Next_activity_date', 'trim|required');
$this->form_validation->set_rules('nadate', 'Next_activity_date', 'trim|required');
$this->form_validation->set_rules('oidetail', 'OtherDetails', 'trim|alpha_numeric_spaces');


if ($this->form_validation->run() == FALSE) {
$this->load->view('welcome_message');
} else {

		$data = array(
'tdate' => $this->input->post('tdate'),
'crdate' => $this->input->post('crdate'),
'code' => $this->input->post('code'),
'cnumber' => $this->input->post('cnumber'),
'cyear' => $this->input->post('cyear'),
'ctype' => $this->input->post('ctype'),
'jofficer' => $this->input->post('jofficer'),
'ccfor' => $this->input->post('ccfor'),
'outcome' => $this->input->post('outcome'),
'adjreason' => $this->input->post('adjreason'),
'nadate' => $this->input->post('nadate'),
'oidetail' => $this->input->post('oidetail'),
'accusedm' => $this->input->post('accusedm'),
'accusedf' => $this->input->post('accusedf'),
'accusedorg' => $this->input->post('accusedorg'),
'plaintiffm' => $this->input->post('plaintiffm'),
'plaintifff' => $this->input->post('plaintifff'),
'plaintifforg' => $this->input->post('plaintifforg'),
'lla' => $this->input->post('lla'),
'wtoday' => $this->input->post('wtoday'),
'cco' => $this->input->post('cco'),
'fa' => $this->input->post('fa'),
'ca' => $this->input->post('ca'),
'ba' => $this->input->post('ba')

);

$this->load->Model('Dbmodel');
$this->Dbmodel->insertdb($data);
}
	}
}
