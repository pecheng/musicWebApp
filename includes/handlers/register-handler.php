<?php 

function sanitizeFormUsername($inputText) {
     $inputText = strip_tags($inputText);
     $inputText = str_replace(" ", "", $inputText); // eliminate the empty space
     return $inputText;
}

function sanitizeFormString($inputText){
     $inputText = strip_tags($inputText);
     $inputText = str_replace(" ", "", $inputText); // eliminate the empty space
     $inputText = ucfirst(strtolower($inputText)); 
     return $inputText;
}

// validate the correctness of parameter
/*
function validateUsername($un){

}

function validateFirstrname($fn){
    
}

function validateLastname($ln){
    
}

function validateEmails($em, $em2){
    
}

function validatePasswords($pw, $pw2){
    
}
*/

function sanitizeFormPassword($inputText){
     $inputText = strip_tags($inputText);
     return $inputText;
}

    if(isset($_POST['loginButton'])) {
        // login button was pressed
        // echo "login button was pressed";
    }

    if(isset($_POST['registerButton'])) {
        // login button was pressed
        // echo "register button was pressed";

        // print out the registered username
        $username = $_POST['username'];
        //echo $username;

        // prevent injection 
        $username = strip_tags($username);
        $username = str_replace(" ", "", $username); // eliminate the empty space


        $firstName = $_POST['firstName'];
        $firstName = strip_tags($firstName);
        $firstName = str_replace(" ", "", $firstName); // eliminate the empty space
        $firstName = ucfirst(strtolower($firstName)); // convert first letter to upper

        // invoke the function 
        $username = sanitizeFormUsername($_POST['username']);
        $firstName = sanitizeFormString($_POST['firstName']);
        $lastName = sanitizeFormString($_POST['lastName']);
        $email = sanitizeFormString($_POST['email']);
        $email2 = sanitizeFormString($_POST['email2']);
        $password = sanitizeFormPassword($_POST['password']);
        $password2 = sanitizeFormPassword($_POST['password2']);

        // validateUsername($username);
        // validateFirstrname($firstName);
        // validateLastname($lastName);
        // validateEmails($email, $email2);
        // validatePasswords($password,$password2);


        //$account = new Account();
        // invoke the register method: account.register() in java
        $wasSuccessful = $account->register($username, $firstName, $lastName, $email, $email2, $password, $password2);
        
        // sign in with no errors, then redirect to the main page
        if($wasSuccessful == true){
            $_SESSION['userLoggedIn'] = $username;
            header("Location: index.php");
        }

    }
 ?>