<?php 
	class loginModel extends CI_Model{	
		public function getLoginDetails($user){
			$str =  "SELECT * FROM users WHERE UserID='" . $user . "'";
			$res = $this->db->query($str)->row_array();
			return $res;
		}

		public function getAdminDetails($email){
			$str =  "SELECT * FROM admin WHERE email='" . $email . "'";
			$res = $this->db->query($str)->row_array();
			return $res;
		}

		public function checkAdmin($email){
			$str =  "SELECT * FROM admin WHERE email='" . $email . "'";
			$res = $this->db->query($str)->result_array();
			return $res;
		}

		public function checkUser($email){
			$str =  "SELECT * FROM users WHERE email='" . $email . "'";
			$res = $this->db->query($str)->row_array();
			return $res;
		}

		public function insertUser($values){
			$this->db->insert('users', $values);
		}

		public function insertCart($values){
			$this->db->insert('carts', $values);
		}

		public function edit($values){
			$str = "UPDATE users 
			SET FirstName = '".$values['FirstName']."', LastName = '".$values['LastName']."', DateOfBirth = '".$values['DateOfBirth']."', Address = '".$values['Address']."', Phone = '".$values['Phone']."'
			WHERE UserID ='".$values['UserID']."'
			";
			$this->db->query($str);
		}

		public function getProductsDetails($cat){
			if($cat === 'all'){
				$str = "SELECT * FROM products ORDER BY Category ASC";
			}
			else{
				$str = "SELECT * FROM products WHERE Category='".$cat."'";
			}
			$res = $this->db->query($str)->result_array();
			return $res;
		}

		public function getCategoryDetails($cat){
			$str = "SELECT * FROM productsdetail WHERE Category='".$cat."'";
			$res = $this->db->query($str)->row_array();
			return $res;
		}
		
		public function getCartDetails($email){
			$str = "SELECT carts.Quantity AS cartQty, products.Quantity AS Quantity, Price, Pic, Name, Description, carts.ProductID as ProductID, CartID
			FROM carts
			INNER JOIN products ON carts.ProductID = products.ProductID
			WHERE UserID='".$email."'
			";
			$res = $this->db->query($str)->result_array();
			return $res;
		}

		public function updateCart($qty,$cart,$desc){
			$str = "UPDATE carts
			SET Quantity = '".$qty."', Description = '".$desc."'
			WHERE CartID = '".$cart."'
			";
			$this->db->query($str);
		}

		public function removeCart($cart){
			$str = "DELETE FROM carts WHERE CartID ='".$cart."'";
			$this->db->query($str);
		}

		public function editProfile($values,$email){
			$str = "UPDATE users
			SET FirstName = '".$values['FirstName']."',LastName = '".$values['LastName']."', Address='".$values['Address']."',DateOfBirth = '".$values['DateOfBirth']."', Phone='".$values['Phone']."'
			WHERE Email = '".$email."'
			";
			$this->db->query($str);
		}
		
		public function insertSales($values){
			$this->db->insert('sales', $values);
		}
		
		public function insertSalesDetail($values){
			$this->db->insert('salesdetail', $values);
		}

		public function getSalesDetails($email){
			$str = "SELECT *
			FROM sales
			WHERE UserID='".$email."'
			";
			$res = $this->db->query($str)->result_array();
			return $res;
		}

		public function updateQty($product,$qty){
			$str = "UPDATE products
			SET Quantity = '".$qty."'
			WHERE ProductID = '".$product."'
			";
			$this->db->query($str);
		}

		public function updatePw($pw,$email){
			$str = "UPDATE users
			SET Password = '".$pw."'
			WHERE Email = '".$email."'
			";
			$this->db->query($str);
		}
	}
?>