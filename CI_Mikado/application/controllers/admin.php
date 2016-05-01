<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	
	public function __construct() {
		parent::__construct();	
		$this->load->vars(array('data' => array()));
		$this->data['content']='<h2>Instructions:  Type the Bill To/Ship To Number In The Box To The Left, Then Hit \'Enter\' Or Press The Button.</h2>';
		$this->data['message'] = "Welcome to the MICHELIN RATE CHECKER";
	}
	public function index()
	{		
		$this->load->helper('date');
		$cookie = array(
						'name' => 'MichelinBisonPC', 
						'value'=>'{"lastVisit":"'.now().'"}', 
						'expire' => '86500',
    					'domain' => '.bisonpc.net',
    					'path'   => '/Michelin',
    					'prefix' => '',
    					'secure' => FALSE
						);
		$this->input->set_cookie($cookie);
		$this->load->view('main', $this->data);
	}
	public function getRecord(){
			
			
		if(isset($_POST["ID"]))
		{			
			//$lastQuery = json_decode($this->input->cookie('MichelinBisonPC'));
			//$this->data['message'] = $lastQuery->{'message'};			
			try{
				
				$query = $this->db->query("SELECT * FROM FleetData WHERE `UniqueID` = ".$this->db->escape($this->input->post('ID')));
				if($query->num_rows()>0)
				{
					$query2 = $this->db->query("SELECT * FROM Schedule WHERE `ScheduleName` = ".$this->db->escape($query->row(0)->Schedule));
					$this->data['vendor'] = $query;	
					$this->data['schedule'] = $query2->row(0);
					$this->data['content'] = $this->load->view('record_partial', $this->data, true);
				}else{
					$this->data['content'] = "No Records Found.";
				}
			}catch(Exception $err)
			{
		$this->data['content'] = "Query Failed, Try Again";	
			}
		}else{
			$this->data['content'] = "Invalid Number, Try Again";	
		}
		$this->load->view('main', $this->data);	
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */