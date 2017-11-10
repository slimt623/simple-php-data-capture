<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *         http://example.com/index.php/welcome
     *    - or -
     *         http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    public function __construct()
    {
        parent::__construct();

/* Standard Libraries of codeigniter are required */
        $this->load->database();
        $this->load->helper('url');
        $this->load->database();
        $this->load->library(array('ion_auth', 'form_validation','unit_test'));
/* ------------------ */

        $this->load->library('grocery_CRUD');

    }

    public function index()
    {
        //Just an example to ensure that we get into the function
        if (!$this->ion_auth->logged_in()) {
            // redirect them to the login page
            redirect('auth/login', 'refresh');
        }
        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('opinion');
        // $crud->set_relation('location', 'locations', 'loc_name');
        $crud->set_relation('location', 'locations', 'loc_name');
        $crud->set_relation('subject', 'subject', 'title');

        $crud->unset_columns(array('date_entered', 'surname'));
        //$crud->field_type('locations','dropdown',
        //array('1' => 'active', '2' => 'private','3' => 'spam' , '4' => 'deleted'));
        $output = $crud->render();


        $this->_example_output($output);

    }

    public function opinion()
    {

        if (!$this->ion_auth->logged_in()) {
            // redirect them to the login page
            redirect('auth/login', 'refresh');
        }
        $crud = new grocery_CRUD();
         echo  $this->unit->run($crud , 'is_string','forth failed unit test , failed by design');
        $crud->set_theme('datatables');
        $crud->set_table('opinion');
        // $crud->set_relation('location', 'locations', 'loc_name');
        $crud->set_relation('location', 'locations', 'loc_name');
        $crud->set_relation('subject', 'subject', 'title');
        $crud->set_relation('agent', 'agents', 'name');

        $crud->unset_columns(array('date_entered', 'surname'));
        //$crud->field_type('locations','dropdown',
        //array('1' => 'active', '2' => 'private','3' => 'spam' , '4' => 'deleted'));
        $output = $crud->render();
      
        $this->_example_output($output);
        echo  $this->unit->run($output, 'is_object','first unit test');
        
    }

    public function agent()
    {

        if (!$this->ion_auth->logged_in()) {
            // redirect them to the login page
            redirect('auth/login', 'refresh');
        }
        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('agents');
        $crud->unset_columns(array('date_entered', 'surname'));
        $output = $crud->render();

        $this->_example_output($output);
         echo  $this->unit->run($output, 'is_object','second unit test');
    }
    public function subject()
    {

        if (!$this->ion_auth->logged_in()) {
            // redirect them to the login page
            redirect('auth/login', 'refresh');
        }
        $crud = new grocery_CRUD();


        $crud->set_theme('datatables');
        $crud->set_table('subject');

        $crud->unset_columns(array('date_entered', 'surname'));
        $output = $crud->render();

        $this->_example_output($output);
         echo  $this->unit->run($output, 'is_object','third unit test');
    }

    public function _example_output($output = null)
    {
        $this->load->view('our_template.php', $output);
    }
}
