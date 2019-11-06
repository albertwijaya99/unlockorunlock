<?php 
 defined('BASEPATH') OR exit('No direct script access allowed');
	class Login extends CI_Controller{
	
		function __construct(){
			parent::__construct();		
			$this->load->model('LoginModel');
	
		}
	
		function login(){
			$this->log_in();
		}
	
		public function log_in(){

			$email = $this->input->post('email');
			$admin = "admin@admin";
			if($email == $admin){
				$pw = $this->input->post('password');
				$password = md5($pw.$email);
				$result = $this->LoginModel->checkAdmin($email);
				if (!empty(count($result))){
					$result = $this->LoginModel->getAdminDetails($email);
					if($password == $result['Password']){
						$this->session->set_userdata('onlineUser', $result['Email']);
						redirect(base_url(). 'admin/dashboard');
					}
					else{
						$data['style'] = $this->load->view('includes/style',NULL,TRUE);
						$data['script'] = $this->load->view('includes/script',NULL,TRUE);
						$data['navbar'] = $this->load->view('templates/header',NULL,TRUE);
						$data['footer'] = $this->load->view('templates/footer',NULL,TRUE);
						$data['error'] = 'Wrong Email or Password';

						$this->load->view('pages/account/login.php',$data);
					}
				}
				else {
					$data['style'] = $this->load->view('includes/style',NULL,TRUE);
					$data['script'] = $this->load->view('includes/script',NULL,TRUE);
					$data['navbar'] = $this->load->view('templates/header',NULL,TRUE);
					$data['footer'] = $this->load->view('templates/footer',NULL,TRUE);
					$data['error'] = 'Wrong Email or Password';

					$this->load->view('pages/account/login.php',$data);
				}
			}
			else{
				$pw = $this->input->post('password');
				$password = md5($pw.$email);
				$user = $this->LoginModel->checkUser($email);
				if ($user!=null){
					$result = $this->LoginModel->getLoginDetails($user['UserID']);
					if($password == $result['Password']){
						$this->session->set_userdata('onlineUser', $result['UserID']);
						redirect(base_url());
					}
					else{
						$data['style'] = $this->load->view('includes/style',NULL,TRUE);
						$data['script'] = $this->load->view('includes/script',NULL,TRUE);
						$data['navbar'] = $this->load->view('templates/header',NULL,TRUE);
						$data['footer'] = $this->load->view('templates/footer',NULL,TRUE);
						$data['error'] = 'Wrong Email or Password';

						$this->load->view('pages/account/login.php',$data);
					}
				}
				else {
					$data['style'] = $this->load->view('includes/style',NULL,TRUE);
					$data['script'] = $this->load->view('includes/script',NULL,TRUE);
					$data['navbar'] = $this->load->view('templates/header',NULL,TRUE);
					$data['footer'] = $this->load->view('templates/footer',NULL,TRUE);
					$data['error'] = 'Wrong Email or Password';

					$this->load->view('pages/account/login.php',$data);
				}
			}
		}

		public function register(){
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');

			$this->form_validation->set_rules(
				'firstName', 'First Name','required|alpha'
			);
			$this->form_validation->set_rules(
				'lastName', 'Last Name','required|alpha'
			);
			$this->form_validation->set_rules(
				'email', 'Email','required|is_unique[users.Email]|valid_email'
			);
			$this->form_validation->set_rules(
				'password','Password','required|min_length[8]|max_length[12]'
			);
			$this->form_validation->set_rules(
				'confirmPW', 'Re-password:', 'matches[password]'
			);

			if ($this->form_validation->run() === FALSE)
			{
				$data['style'] = $this->load->view('includes/style',NULL,TRUE);
				$data['script'] = $this->load->view('includes/script',NULL,TRUE);
				$data['navbar'] = $this->load->view('templates/header',NULL,TRUE);
				$data['footer'] = $this->load->view('templates/footer',NULL,TRUE);
				
				$this->load->view('pages/account/register.php',$data);
			}
			else
			{
				$firstname = ucwords($this->input->post('firstName'));
				$lastname = ucwords($this->input->post('lastName'));
				$email = $this->input->post('email');
				$PW = $this->input->post('password');
				$password = md5($PW.$email);

				$values = array(
					'FirstName' => $firstname,
					'LastName' => $lastname,
					'Email' => $email,
					'Password' =>$password
				);
				$this->LoginModel->insertUser($values);
				$user = $this->LoginModel->checkUser($email);
				$result = $this->LoginModel->getLoginDetails($user['UserID']);
				$this->session->set_userdata('onlineUser', $result['UserID']);
				redirect(base_url());
			}
		}

		public function logout(){
			$this->session->unset_userdata('onlineUser');
			redirect(base_url(). '');
		}

		public function editProfile(){
			$this->load->model('LoginModel');
            $user = $this->session->userdata('onlineUser');
            $result = $this->LoginModel->getLoginDetails($user);
            $data['user'] = $result;
            $data['name'] = $result['FirstName'];
            $email = $result['Email'];
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');

			$this->form_validation->set_rules(
				'firstName', 'First Name','required|alpha'
			);
			$this->form_validation->set_rules(
				'lastName', 'Last Name','required|alpha'
			);
			$this->form_validation->set_rules(
				'dateOfBirth', 'Date of Birth','required'
			);
			$this->form_validation->set_rules(
				'address','Address','required|min_length[20]'
			);
			$this->form_validation->set_rules(
				'phone', 'Phone', 'required|min_length[8]|max_length[15]|numeric'
			);

			if ($this->form_validation->run() === FALSE)
			{
				$data['style'] = $this->load->view('includes/style',NULL,TRUE);
				$data['script'] = $this->load->view('includes/script',NULL,TRUE);
				$data['navbar'] = $this->load->view('templates/mainheader',$data,TRUE);
				$data['footer'] = $this->load->view('templates/footer',NULL,TRUE);
				
				$this->load->view('pages/account/editProfile.php',$data);
			}
			else
			{
				$firstname = ucwords($this->input->post('firstName'));
				$lastname = ucwords($this->input->post('lastName'));
				$dob = $this->input->post('dateOfBirth');
				$address = $this->input->post('address');
				$phone = $this->input->post('phone');

				$values = array(
					'FirstName' => $firstname,
					'LastName' => $lastname,
					'Email' => $email,
					'DateOfBirth' => $dob,
					'Address' => $address,
					'Phone' => $phone
				);
				$this->LoginModel->editProfile($values,$email);
				$user = $this->LoginModel->checkUser($email);
				$result = $this->LoginModel->getLoginDetails($user['UserID']);
				$this->session->set_userdata('onlineUser', $result['UserID']);
				redirect(base_url());
			}
		}

		public function updatePassword(){
			$this->load->model('LoginModel');
            $user = $this->session->userdata('onlineUser');
            $result = $this->LoginModel->getLoginDetails($user);
            $data['user'] = $result;
            $data['name'] = $result['FirstName'];
            $email = $result['Email'];
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');

			$this->form_validation->set_rules(
				'currPw', 'Current Password','required|callback_pw_check'
			);
			$this->form_validation->set_rules(
				'newPw', 'New Password','required|min_length[8]|max_length[15]'
			);
			$this->form_validation->set_rules(
				'conNewPw', 'Confirm New Password','required|matches[newPw]'
			);

			if ($this->form_validation->run() === FALSE)
			{
				$data['style'] = $this->load->view('includes/style',NULL,TRUE);
				$data['script'] = $this->load->view('includes/script',NULL,TRUE);
				$data['navbar'] = $this->load->view('templates/mainheader',$data,TRUE);
				$data['footer'] = $this->load->view('templates/footer',NULL,TRUE);
				$data['pw'] = 1;
				
				$this->load->view('pages/account/editProfile.php',$data);
			}
			else
			{
				$newPw = $this->input->post('newPw');
				$pw = md5($newPw.$email);
				
				$this->LoginModel->updatePw($pw,$email);
				$data['style'] = $this->load->view('includes/style',NULL,TRUE);
				$data['script'] = $this->load->view('includes/script',NULL,TRUE);
				$data['navbar'] = $this->load->view('templates/mainheader',$data,TRUE);
				$data['footer'] = $this->load->view('templates/footer',NULL,TRUE);
				
				$this->load->view('pages/account/editProfile.php',$data);
			}
		}
		
		public function pw_check($str){
			$this->load->model('LoginModel');
            $user = $this->session->userdata('onlineUser');
			$result = $this->LoginModel->getLoginDetails($user);
			$pw = md5($str.$result['Email']);
                if ($pw == $result['Password'])
                {
					return TRUE;
                }
                else
                {
					$this->form_validation->set_message('pw_check', 'Wrong Password');
					return FALSE;
                }
        }
	}
?>