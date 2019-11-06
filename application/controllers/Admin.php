<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Admin extends CI_Controller{
        public function dashboard(){
            $data['style'] = $this->load->view('includes/style',NULL,TRUE);
            $data['header'] = $this->load->view('templates/headerCMS',NULL,TRUE);
            $data['script'] = $this->load->view('includes/script',NULL,TRUE);
            $data['sidenav'] = $this->load->view('includes/sidenav',NULL,TRUE);
            $data['footer'] = $this->load->view('templates/footer',NULL,TRUE);
            
            if($this->session->has_userdata('onlineUser')){	
                if($this->session->userdata('onlineUser') == 'admin@admin'){
                    $this->load->view('pages/admin/dashboard.php',$data);
                }
                else{
                    redirect(base_url());
                }
            }
            else{
                redirect(base_url().'main/login');
            }
            
        }
    
        public function products() {
            $crud = new grocery_CRUD();
           
		    $crud->set_table('products')
            ->columns('ProductID','Name', 'Category', 'Price', 'Quantity', 'Pic')
			->fields('ProductID','Name', 'Category', 'Price', 'Quantity', 'Pic')
			->set_field_upload('Pic','assets/uploads/pic')
            ->field_type('Category','dropdown',
            array('1'=>'Cook Ware', '2' =>'Drink Collection', '3'=>'Dry Storage', '4'=>'Freezer', '5'=>'Lunch Set', '6'=>'Microwave Reheat'));

            $crud->add_fields('Name','Category','Price','Quantity','Pic');
            $crud->edit_fields('Name','Category','Price','Quantity','Pic');
            
            $output = $crud->render();
            $data['crud'] = get_object_vars($output);
        
            $data['style'] = $this->load->view('includes/style',NULL,TRUE);
            $data['header'] = $this->load->view('templates/headerCMS',NULL,TRUE);
            $data['script'] = $this->load->view('includes/script',NULL,TRUE);
            $data['sidenav'] = $this->load->view('includes/sidenav',NULL,TRUE);
            $data['footer'] = $this->load->view('templates/footer',NULL,TRUE);

            if($this->session->has_userdata('onlineUser')){	
                if($this->session->userdata('onlineUser') == 'admin@admin'){
                    $this->load->view('pages/admin/products.php',$data);
                }
                else{
                    redirect(base_url());
                }
            }
            else{
                redirect(base_url().'main/login');
            }           
        }

        public function sales(){
            $this->load->model('LoginModel');

            $data['style'] = $this->load->view('includes/style',NULL,TRUE);
            $data['script'] = $this->load->view('includes/script',NULL,TRUE);
            $data['header'] = $this->load->view('templates/headerCMS',NULL,TRUE);
            $data['sidenav'] = $this->load->view('includes/sidenav',NULL,TRUE); 
            $data['footer'] = $this->load->view('templates/footer',NULL,TRUE);
            $data['sales'] = json_encode($this->LoginModel->salesReport());
            $data['salesdetail'] = json_encode($this->LoginModel->getSalesProduct());

            if($this->session->has_userdata('onlineUser')){	
                if($this->session->userdata('onlineUser') == 'admin@admin'){
                    $this->load->view('pages/admin/sales.php',$data);
                }
                else{
                    redirect(base_url());
                }
            }
            else{
                redirect(base_url().'main/login');
            }             
        }
    }
?>