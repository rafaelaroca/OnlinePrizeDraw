
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Main extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		 
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
	}
	 
	public function index()
	{
		echo "Especifique o caminho";
		die();
	}

	public function sorteio()
	{

		$crud = new grocery_CRUD();
		$crud->set_table('sorteio');

                $crud->required_fields('ddd', 'telefone_sem_ddd', 'nome', 'email', 'estado', 'cidade');
		$crud->unset_delete();
		$crud->unset_edit();
		$crud->unset_read();
		$crud->unset_list();
		$crud->unset_back_to_list();
		$crud->unset_fields('ts');
	

		$output = $crud->render();
		$this->loadView($output);
	}


	public function lista()
	{

		$crud = new grocery_CRUD();
		$crud->set_table('sorteio');

		$crud->unset_delete();
		$crud->unset_edit();
		$crud->unset_read();
		$crud->unset_back_to_list();
		$crud->unset_fields('ts');
	

		$output = $crud->render();
		$this->loadView($output);
	}


	function loadView($output = null)
	{
		$this->load->view('view.php',$output);    
	}
}
 
/* End of file Main.php */
/* Location: ./application/controllers/Main.php */




