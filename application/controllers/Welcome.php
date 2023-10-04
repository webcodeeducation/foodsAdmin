<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data = array();
		//$this->load->view('welcome_message');
		$this->load->view('templates/foods/welcome_message',$data);
	}
	public function register()
	{
		$data = array();
		//$this->load->view('welcome_message');
		$this->load->view('templates/foods/register',$data);
	}
	    public function ajax_search()
    {
        $data = array();
        $page = 0;
        $search_text = $this->input->post('search');
        if(trim($search_text) !="")
        {
            $_GET['search_in_title'] = $search_text;
        }
        $salldata  = $this->Public_model->getProducts($this->num_rows, $page, $_GET);
        $all_cat  = $this->Public_model->get_search_cat($search_text);
       // print_r($all_cat);
        $data['products'] = $salldata;
        $data['all_cat'] = $all_cat;
       
        $this->load->view('templates/foods/home',$data);
    }
    public function submitlogin(){
    	print_r($_POST);
    	die();
    }
	/*public function index22($page = 0)
    {
        $data = array();
        $head = array();

        
        $arrSeo = $this->Public_model->getSeo('home');
        $head['title'] = @$arrSeo['title'];
        $head['description'] = @$arrSeo['description'];
        $head['keywords'] = str_replace(" ", ",", $head['title']);
        $all_categories = $this->Public_model->getShopCategories();
        $data['home_categories'] = $this->getHomeCategories($all_categories);
        $data['all_categories'] = $all_categories;
        $data['countQuantities'] = $this->Public_model->getCountQuantities();
        $data['bestSellers'] = $this->Public_model->getbestSellers();
        $data['newProducts'] = $this->Public_model->getNewProducts();
        $data['sliderProducts'] = $this->Public_model->getSliderProducts();
        $data['lastBlogs'] = $this->Public_model->getLastBlogs();
        $data['products'] = $this->Public_model->getProducts($this->num_rows, $page, $_GET);
        $rowscount = $this->Public_model->productsCount($_GET);
        $data['shippingOrder'] = $this->Home_admin_model->getValueStore('shippingOrder');
        $data['showOutOfStock'] = $this->Home_admin_model->getValueStore('outOfStock');
        $data['showBrands'] = $this->Home_admin_model->getValueStore('showBrands');
        $data['brands'] = $this->Brands_model->getBrands();
        $data['links_pagination'] = pagination('home', $rowscount, $this->num_rows);
        $this->render('home', $head, $data);
    }*/
}
