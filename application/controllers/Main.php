<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Main extends CI_Controller{
        public function __construct(){
            parent::__construct();

            $this->load->database();
            $this->load->helper('url');

            $this->load->library('grocery_CRUD');
        }

        public function index(){
            $this->load->model('LoginModel');
            $user = $this->session->userdata('onlineUser');
            $result = $this->LoginModel->getLoginDetails($user);
            $data['name'] = $result['FirstName'];

            $data['style'] = $this->load->view('includes/style',NULL,TRUE);
            $data['script'] = $this->load->view('includes/script',NULL,TRUE);
            $data['navbar'] = $this->load->view('templates/mainheader',$data,TRUE);
            $data['footer'] = $this->load->view('templates/footer',NULL,TRUE);

            
            if($this->session->userdata('onlineUser') == 'admin@admin'){
                $data['style'] = $this->load->view('includes/style',NULL,TRUE);
                $data['header'] = $this->load->view('templates/headerCMS',NULL,TRUE);
                $data['script'] = $this->load->view('includes/script',NULL,TRUE);
                $data['sidenav'] = $this->load->view('includes/sidenav',NULL,TRUE);
                $data['footer'] = $this->load->view('templates/footer',NULL,TRUE);
                
                $this->load->view('pages/admin/dashboard.php',$data);
            }
            else{
                $this->load->view('pages/main/home.php',$data);
            }
        }

        public function products($cat=null){
            $this->load->model('LoginModel');
            $user = $this->session->userdata('onlineUser');
            $result = $this->LoginModel->getLoginDetails($user);
            $data['name'] = $result['FirstName'];
            $data['email'] =  $result['Email'];

            $data['style'] = $this->load->view('includes/style',NULL,TRUE);
            $data['script'] = $this->load->view('includes/script',NULL,TRUE);
            $data['navbar'] = $this->load->view('templates/mainheader',$data,TRUE);
            $data['footer'] = $this->load->view('templates/footer',NULL,TRUE);
            $data['cat'] = $cat;
            if($cat === 'all'){
                $data['products'] = $this->LoginModel->getProductsDetails($cat);
                $data['category'] = 'All Products';
            }
            else{
                $data['products'] = $this->LoginModel->getProductsDetails($cat);
                $data['category'] = $this->LoginModel->getCategoryDetails($cat);
            }
            $data['carts'] = $this->LoginModel->getCartDetails($data['email']);
            
            if($this->session->userdata('onlineUser') == 'admin@admin'){
                $data['style'] = $this->load->view('includes/style',NULL,TRUE);
                $data['header'] = $this->load->view('templates/headerCMS',NULL,TRUE);
                $data['script'] = $this->load->view('includes/script',NULL,TRUE);
                $data['footer'] = $this->load->view('templates/footer',NULL,TRUE);
                $data['sidenav'] = $this->load->view('includes/sidenav',NULL,TRUE);
                
                $this->load->view('pages/admin/dashboard.php',$data);
            }
            else{
                $this->load->view('pages/main/products.php',$data);
            }
        }

        public function login(){
            $data['style'] = $this->load->view('includes/style',NULL,TRUE);
            $data['script'] = $this->load->view('includes/script',NULL,TRUE);
            $data['navbar'] = $this->load->view('templates/header',NULL,TRUE);
            $data['footer'] = $this->load->view('templates/footer',NULL,TRUE);
            
            if($this->session->has_userdata('onlineUser')){	
                redirect(base_url());
            }
            else{
                $this->load->view('pages/account/login.php',$data);
            } 
            
        }
        
        public function register(){
            $data['style'] = $this->load->view('includes/style',NULL,TRUE);
            $data['script'] = $this->load->view('includes/script',NULL,TRUE);
            $data['navbar'] = $this->load->view('templates/header',NULL,TRUE);
            $data['footer'] = $this->load->view('templates/footer',NULL,TRUE);
            
            if($this->session->has_userdata('onlineUser')){	
                redirect(base_url());
            }
            else{
                $this->load->view('pages/account/register.php',$data);
            } 
            
        }

        public function addToCart(){
            if($this->session->has_userdata('onlineUser')){	
                $this->load->model('LoginModel');
                $user = $this->session->userdata('onlineUser');
                $result = $this->LoginModel->getLoginDetails($user);
                $data['name'] = $result['FirstName'];

                $data['style'] = $this->load->view('includes/style',NULL,TRUE);
                $data['script'] = $this->load->view('includes/script',NULL,TRUE);
                $data['navbar'] = $this->load->view('templates/mainheader',$data,TRUE);
                $data['footer'] = $this->load->view('templates/footer',NULL,TRUE);
                $cart = $this->LoginModel->getCartDetails($email);

                $userId = $result['Email'];
                $productId = $this->input->post('ProductID');
                $quantity = $this->input->post('Quantity');
                $description = $this->input->post('Description');
                

                $values = array(
                    'UserID' => $userId,
                    'ProductID' => $productId,
                    'Quantity' => $quantity,
                    'Description' =>$description
                );
                $this->LoginModel->insertCart($values);

                $this->load->view('pages/main/products.php',$data);
            }
            else{
                redirect(base_url());
            }
        }

        public function shoppingCart($update=null){
            if($this->session->has_userdata('onlineUser')){	
                $this->cart($update);
            }
            else{
                $this->login();
            } 
        }

        public function cart($update=null){
            $this->load->model('LoginModel');
            $user = $this->session->userdata('onlineUser');
            $result = $this->LoginModel->getLoginDetails($user);
            $data['name'] = $result['FirstName'];
            $email = $result['Email'];
            $data['address'] = $result['Address'];
            $data['products'] = $this->LoginModel->getCartDetails($email);

            $data['style'] = $this->load->view('includes/style',NULL,TRUE);
            $data['script'] = $this->load->view('includes/script',NULL,TRUE);
            $data['navbar'] = $this->load->view('templates/mainheader',$data,TRUE);
            $data['footer'] = $this->load->view('templates/footer',NULL,TRUE);
            $data['update'] = $update;


            $this->load->view('pages/main/cart.php',$data);
        }

        public function updateCart(){
            $this->load->model('LoginModel');
            $user = $this->session->userdata('onlineUser');
            $result = $this->LoginModel->getLoginDetails($user);
            $data['name'] = $result['FirstName'];
            $email = $result['Email'];
            $carts = $this->LoginModel->getCartDetails($email);

            $qty = $this->input->post('Quantity');
            $cart = $this->input->post('CartID');
            $desc = $this->input->post('Description');
            if($qty == 0){
                $this->LoginModel->removeCart($cart);
            }else{
                $this->LoginModel->updateCart($qty,$cart,$desc);
            }
        }

        public function checkOut(){
            $this->load->model('LoginModel');
            $user = $this->session->userdata('onlineUser');
            $result = $this->LoginModel->getLoginDetails($user);
            $data['name'] = $result['FirstName'];
            $email = $result['Email'];
            $data['profile'] = $result;
            $data['products'] = $this->LoginModel->getCartDetails($email);
            $data['carts'] = $this->LoginModel->getCartDetails($email);
            $data['address'] = $result['Address'];

            $data['script'] = $this->load->view('includes/script',NULL,TRUE);
                $data['navbar'] = $this->load->view('templates/mainheader',$data,TRUE);
                $data['footer'] = $this->load->view('templates/footer',NULL,TRUE);
                $data['style'] = $this->load->view('includes/style',NULL,TRUE);

            if(!empty($data['carts'])){
                if(!empty($data['address']))
                {
               
                

                $this->session->set_userdata('confirm', TRUE);
                $this->load->view('pages/main/checkOut.php',$data);
                }
                else{
                    $this->editProfile();
                }
                
            }else{
                $data['error'] = 'Please add an item to your cart';
               
    
                $this->load->view('pages/main/cart.php',$data);
            }
        }

        public function editProfile($pw=null){
            $this->load->model('LoginModel');
            $user = $this->session->userdata('onlineUser');
            $result = $this->LoginModel->getLoginDetails($user);
            $data['user'] = $result;
            $data['name'] = $result['FirstName'];
            $email = $result['Email'];
            $data['pw'] = $pw;
            $data['style'] = $this->load->view('includes/style',NULL,TRUE);
            $data['script'] = $this->load->view('includes/script',NULL,TRUE);
            $data['navbar'] = $this->load->view('templates/mainheader',$data,TRUE);
            $data['footer'] = $this->load->view('templates/footer',NULL,TRUE);

            if($this->session->has_userdata('onlineUser')){
                $this->load->view('pages/account/editProfile.php',$data);
            }
            else{
                $this->login();
            }
        }

        public function faq(){
            $this->load->model('LoginModel');
            $user = $this->session->userdata('onlineUser');
            $result = $this->LoginModel->getLoginDetails($user);
            $data['name'] = $result['FirstName'];
            $email = $result['Email'];
    
            $data['style'] = $this->load->view('includes/style',NULL,TRUE);
            $data['script'] = $this->load->view('includes/script',NULL,TRUE);
            $data['navbar'] = $this->load->view('templates/mainheader',$data,TRUE);
            $data['footer'] = $this->load->view('templates/footer',NULL,TRUE);
    
            $this->load->view('pages/main/faq.php',$data);
        }
    
        public function contact(){
            $this->load->model('LoginModel');
            $user = $this->session->userdata('onlineUser');
            $result = $this->LoginModel->getLoginDetails($user);
            $data['name'] = $result['FirstName'];
            $email = $result['Email'];
    
            $data['style'] = $this->load->view('includes/style',NULL,TRUE);
            $data['script'] = $this->load->view('includes/script',NULL,TRUE);
            $data['navbar'] = $this->load->view('templates/mainheader',$data,TRUE);
            $data['footer'] = $this->load->view('templates/footer',NULL,TRUE);
    
            $this->load->view('pages/main/contact.php',$data);
        }

        public function confirm(){
            $this->load->model('LoginModel');
            $user = $this->session->userdata('onlineUser');
            $result = $this->LoginModel->getLoginDetails($user);
            $data['name'] = $result['FirstName'];
            $lastName= $result['FirstName'];
            $email = $result['Email'];
            $address = $result['Address'];
            $phone = $result['Phone'];

            $data['style'] = $this->load->view('includes/style',NULL,TRUE);
            $data['script'] = $this->load->view('includes/script',NULL,TRUE);
            $data['navbar'] = $this->load->view('templates/mainheader',$data,TRUE);
            $data['footer'] = $this->load->view('templates/footer',NULL,TRUE);

            if($this->session->userdata('confirm')){
                $this->session->unset_userdata('confirm');

                $carts = $this->LoginModel->getCartDetails($email);
                $price=0;
                foreach($carts as $cart){
                    $price += $cart['Price'] * $cart['cartQty'];
                }

                date_default_timezone_set("Asia/Jakarta");
                $date = date("Y-m-d");
                $values = array(
                    'UserID' => $email,
                    'FirstName' => $data['name'],
                    'LastName' => $lastName,
                    'Total' => $price,
                    'Date' => $date,
                    'Address' => $address,
                    'Phone' => $phone
                );
                $sales = $this->LoginModel->insertSales($values);
                $sales = $this->LoginModel->getSalesDetails($email);
                if(empty($sales)){

                }
                else{
                    foreach($sales as $sale){
                        $salesId = $sale['SalesID'];
                    }
                    foreach($carts as $cart){
                        $values = array(
                            'SalesID' => $salesId,
                            'ProductID' => $cart['ProductID'],
                            'Quantity' => $cart['cartQty'],
                            'Description' => $cart['Description']
                        );
                        $sales = $this->LoginModel->insertSalesDetail($values);
                    }
                    foreach($carts as $cart){
                        $this->LoginModel->removeCart($cart['CartID']);
                        $quantity = $cart['Quantity'] - $cart['cartQty'];
                        $this->LoginModel->updateQty($cart['ProductID'],$quantity);
                    }
                }
                $this->load->view('pages/main/confirm.php',$data);
            }
            else{
                $this->cart();
            }
        }

        public function about(){
            $this->load->model('LoginModel');
            $user = $this->session->userdata('onlineUser');
            $result = $this->LoginModel->getLoginDetails($user);
            $data['name'] = $result['FirstName'];
            $email = $result['Email'];
    
            $data['style'] = $this->load->view('includes/style',NULL,TRUE);
            $data['script'] = $this->load->view('includes/script',NULL,TRUE);
            $data['navbar'] = $this->load->view('templates/mainheader',$data,TRUE);
            $data['footer'] = $this->load->view('templates/footer',NULL,TRUE);
    
            $this->load->view('pages/main/about.php',$data);
        }

        public function history(){
            $this->load->model('LoginModel');
            $user = $this->session->userdata('onlineUser');
            $result = $this->LoginModel->getLoginDetails($user);
            $data['name'] = $result['FirstName'];
            $email = $result['Email'];
            $data['sales'] = $this->LoginModel->getSalesByEmail($email);
            $data['salesdetail'] = $this->LoginModel->getSalesProduct();
    
            $data['style'] = $this->load->view('includes/style',NULL,TRUE);
            $data['script'] = $this->load->view('includes/script',NULL,TRUE);
            $data['navbar'] = $this->load->view('templates/mainheader',$data,TRUE);
            $data['footer'] = $this->load->view('templates/footer',NULL,TRUE);
    
            $this->load->view('pages/main/history.php',$data);
        }
    }
?>