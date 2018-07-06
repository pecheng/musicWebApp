<?php
	class Account{
		private $errorArray;
		private $con;

		public function __construct($con){
			# initialize the array
			$this->errorArray = array();
			$this->con = $con;
		}

		public function register($un, $fn, $ln, $em, $em2, $pw, $pw2){
			$this->validateUsername($un);
	        $this->validateFirstrname($fn);
	        $this->validateLastname($ln);
	        $this->validateEmails($em, $em2);
			$this->validatePasswords($pw,$pw2);
			
			//  if there are no errors
			if(empty($this->errorArray)){
				// insert into db
				return $this->insertUserDetails($un, $fn, $ln, $em, $pw);
			}
			else{
				return false;
			}

		}

		public function login($un, $pw){
			$pw = md5($pw);
			$query = mysqli_query($this->con, "SELECT * FROM users 
										 WHERE username = '$un' AND password = '$pw' ");
			
			// check how many result found, should be identical
			if (mysqli_num_rows($query) == 1){
				return true;
			}
			else{
				array_push($this->errorArray, Constants::$loginFailed);
				return false;
			}
				
		}
		public function testPrint(){
			return "correct"; 
		}

		public function getError($error){
			
			if(!in_array($error, $this->errorArray)){
				$error = "";
			}
			return "<span class='errorMessage'>$error</span>";
		}

		private function insertUserDetails($un, $fn, $ln, $em, $pw) {
			$encryedPw = md5($pw); // password return a long string
			$profilePic = "assets/images/profile-pics/profile.jpg";
			$date = date("Y-m-d");

			// insertion : match with the users table structure
			$result = mysqli_query($this->con, "INSERT INTO users VALUES ('', '$un', '$fn', '$ln', '$em', '$encryedPw', '$date', '$profilePic') ");
			// query succeeded/ failed
			return $result;
		}

		private function validateUsername($un){
			// check the username length
			if(strlen($un)>25 || strlen($un)<5){
				//array_push($this->errorArray, "Your username must be between 5 and 25 characters");
				
				// "Constant ::" means that the access var is static, rathen than non-static using ->
				array_push($this->errorArray, Constants::$usernameCharacters);
				return;
			}

			// TODO: check if the username exists
			$checkUsernameQuery = mysqli_query($this->con, "SELECT username FROM users 
															WHERE username = '$un' ");
			// there exists such name in our db
			if(mysqli_num_rows($checkUsernameQuery) !=0 ){
				array_push($this->errorArray,Constants :: $usernameTaken);
				return;
			}
		}

		private function validateFirstrname($fn){
			if(strlen($fn)>25 || strlen($fn)<2){
				// array_push($this->errorArray, "Your firstname must be between 2 and 25 characters");
				array_push($this->errorArray, Constants::$firstnameCharacters);
				return ;
			}
		}

		private function validateLastname($ln){
			if(strlen($ln)>25 || strlen($ln)<2){
				// array_push($this->errorArray, "Your lastname must be between 2 and 25 characters");
				array_push($this->errorArray, Constants::$lastnameCharacters);
				return ;
			}
		    
		}
		private function validateEmails($em, $em2){
			if($em != $em2){
				// array_push($this->errorArray, "Your emails don't match ");
				array_push($this->errorArray, Constants::$emailDoNotMatch);
				return;
			}

			// check if the email is in correct format (@smth.extension)
			if(!filter_var($em, FILTER_VALIDATE_EMAIL)){
				// array_push($this->errorArray, "Email is invalid");
				array_push($this->errorArray, Constants::$emailInvalid);
				return;
			}
		    
			// TODO: check that email has already been used;
			$checkEmailQuery = mysqli_query($this->con, "SELECT email FROM users 
															WHERE email = '$em' ");
			// there exists such name in our db
			if(mysqli_num_rows($checkEmailQuery) !=0 ){
				array_push($this->errorArray,Constants :: $emailTaken);
				return;
			}
		}
		private function validatePasswords($pw, $pw2){
		    if($pw != $pw2){
				//array_push($this->errorArray, "Your passwords don't match");
				array_push($this->errorArray, Constants :: $passwordsDoNotMatch );
				return;
			}

			if(preg_match('/[^A-Za-z0-9]/', $pw)){
				// array_push($this->errorArray, "The password can only contains number and letter");
				array_push($this->errorArray, Constants::$passwordsNotAlphanumeric);
			}

			if(strlen($pw) > 30 || strlen($pw) < 5){
				// array_push($this->errorArray, "Your password must be between 5 and 25");
				array_push($this->errorArray, Constants::$passwordsCharacters);
			}
		}

	}
	

?>