<?php
	class Constants{

		// a var which is no need to create an instance and can be accessed anywhere
		public static $passwordsDoNotMatch = "Your passwords don't match";
		public static $passwordsNotAlphanumeric = "The password can only contains number and letter";
		public static $passwordsCharacters =  "Your password must be between 5 and 25";
		public static $emailInvalid = "Email is invalid";
		public static $emailDoNotMatch = "Your emails don't match ";

		public static $lastnameCharacters = "Your lastname must be between 2 and 25 characters";
		public static $firstnameCharacters = "Your firstname must be between 2 and 25 characters";
		public static $usernameCharacters = "Your username must be between 5 and 25 characters";

		public static $usernameTaken = "The username already exists";
		public static $emailTaken = "The email is already in use";
		public static $loginFailed = "Your username or password was incorrect";
	} 


?>