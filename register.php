<?php
    include("includes/config.php");
    include("includes/classes/Account.php");
    include("includes/classes/Constants.php");
    

    // create an object of account
    // pass the db var
    $account = new Account($con);

    include("includes/handlers/register-handler.php");
    include("includes/handlers/login-handler.php");

    // reserve the value as long as the value has been set
    function getInputValue($name){
        if(isset($_POST[$name])){
            echo $_POST[$name];
        }
    }
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to use myApp</title>
    <link rel="stylesheet" type="text/css" href="assets/css/register.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="assets/js/register.js"></script>
</head>
<body>
<head class="v-header container">
    <div class="fullscreen-bg">
        <video src="assets/video/background/background.mp4" muted="true" autoplay="true" loop="true"></video>
    </div>

    <div class="header-overlay"></div>



    <div class="header-content">
    <div id="loginContainer" >
    <div id="inputContainer" >
        
        <form id="loginForm" name="loginForm" action="register.php" method="POST">
        <div class="inner">

            <h2>Login to your account: </h2>
            <p>
                <?php echo $account->getError(Constants :: $loginFailed);?>
                <label for="loginUsername">Username: </label>
                <input id="loginUsername" name="loginUsername" type="text" class="input__field input__field--minoru"   required>
            </p>

            <p>
                <label for="loginPasswd">Password:  </label>
                <input id="loginPasswd"  name="loginPasswd" type="password" class="input__field input__field--minoru" required>
            </p>

            <button type="submit" name = "loginButton" class="button button--moema button--border-thick button--size-s">Log in</button> 
            <div class="hasAccountText">
                <span id="hideLogin" style="cursor:pointer;">Don't have an account yet? Sign up here. </span>
            </div>
            </div>
        </form>
        

       
        <form id="registerForm" action="register.php" method="POST">
        <div class="outer">
            <h2>Create your free account: </h2>
            <p>
                <?php echo $account->getError(Constants:: $usernameTaken); ?>
                <?php echo $account->getError("Your username must be between 5 and 25 characters"); ?>
                <label for="username">Username: </label>
               <input id="username" name="username" class="input__field input__field--minoru" type="text" value="<?php echo getInputValue('username'); ?>" required>
            </p>

            <p>
                <?php echo $account->getError("Your firstname must be between 2 and 25 characters"); ?>
                <label for="firstName">First name: </label>
                <input id="firstName" name="firstName" type="text"  class="input__field input__field--minoru" required>
            </p>

            <p>
                <?php echo $account->getError("Your lastname must be between 2 and 25 characters"); ?>
                <label for="lastName">Last name: </label>
                <input id="lastName" name="lastName" type="text"  class="input__field input__field--minoru" required>
            </p>

            <p>
                <?php echo $account->getError(Constants:: $emailTaken); ?>
                <?php echo $account->getError("Your emails don't match "); ?>
                <?php echo $account->getError("Email is invalid"); ?>
                <label for="email">Email: </label>
                <input id="email" name="email" type="email"  class="input__field input__field--minoru" required>
            </p>

            <p>
                <label for="email2">Confirm email: </label>
                <input id="email2" name="email2" type="email" class="input__field input__field--minoru" required>
            </p>

            <p>
            
                <?php echo $account->getError("Your passwords don't match"); ?>
                <?php echo $account->getError("The password can only contains number and letter"); ?>
                <?php echo $account->getError("Your password must be between 5 and 25"); ?>
            
                <label for="password">Password: </label>
                <input id="password" name="password" type="password" class="input__field input__field--minoru" required>
            </p>

            <p>
                <label for="password2">Confirm password:  </label>
                <input id="password2"  name="password2" type="password" class="input__field input__field--minoru" required>
            </p>

            <button type="submit" name = "registerButton" class="button button--moema button--border-thick button--size-s">Sign up</button>
            <div class="hasAccountText">
                <span id="hideRegister" style="cursor:pointer;">Already have an account. Log in here. </span>
            </div>
            </div>
        </form>
        </div>
        </div>
     </div>
    </div>
</head>
</body>
</html>