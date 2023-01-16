<?php
$db = mysqli_connect("localhost","root","","logindb");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

// ubaci podatke o registraciji u bazu

if(isset($_POST['signup']))
{
    $put_name = $_POST['put_name'];
    $put_email = $_POST['put_email'];
    $put_password = $_POST['put_password'];


    $insert = mysqli_query($db,"INSERT INTO `loginttbb`(`user_name`, `user_email`,`user_password`) VALUES ('$put_name','$put_email','$put_password')");

    if(!$insert)
    {
        echo mysqli_error();
    }
    else
    {
        echo "<script>alert('Your account has been successfully created')</script>";
        $results = mysqli_query($db, $insert);
    }
}

//proveri podatke iz baze prilikom klika na login

if(isset($_POST['login']))
{
    $take_name= $_POST['take_name'];
    $take_password = $_POST['take_password'];

    $sql_u = "SELECT * FROM loginttbb WHERE user_name='$take_name' and user_password='$take_password'";
    $res_u = mysqli_query($db, $sql_u);

    if (mysqli_num_rows($res_u) > 0) {
        $_SESSION["login"] = "OK";
        echo "<script>alert('You have successfully logged into your account')</script>";
        echo "<script>window.location = 'home'</script>";
    }else{
        echo "<script>alert('Wrong username or password, please try again')</script>";
        echo "<script>window.location = 'login'</script>";
        exit();
    }
    $_SESSION['var'] = $take_name;

}

//////////////////////////////////////

if (isset($_POST['delete'])) {

    $sql = "DELETE FROM loginttbb WHERE id NOT IN (1);";

    $results = mysqli_query($db, $sql);
    if($results)
    {
        echo"Record Deleted Successfully........";
    }
    else
    {
        echo"Try Again........";
    }

}

////////////////////////////////

?>

<?php
check_message() ?>
<head>
    <title><?php /** @var TYPE_NAME $data */
        echo $data['page_title']. " | " .WEBSITE_TITLE?></title>
    <div class="menu-bottom">
        <ul class="link">
            <a href="home"><img src="assets/projekat/images/strelica2.png"/></a>
        </ul>
    </div>
</head>
<style>
    html, body {
        width: 100%;
        height: 100%;
        margin: 0;
        font-family: Helvetica, Arial, sans-serif;
        overflow: hidden;
    }

    .ghost {
        position: absolute;
        left: -100%;
    }
    #adminlogin{
        background:#c4ff0e;
        color:black;
    }

    .framed {
        position: absolute;
        top: 50%; left: 50%;
        width: 15rem;
        margin-left: -7.5rem;
    }

    .form {
        margin-top: -4.5em;
        transition: 1s ease-in-out;
    }

    .input {
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        font-size: 1.125rem;
        line-height: 3rem;
        width: 100%; height: 3rem;
        color: #262323;
        background-color: rgba(232, 223, 223, 0.9);
        border: 0;
        border-top: 1px solid rgba(255,255,255,0.7);
        padding: 0 1rem;
        font-family: 'Open Sans', sans-serif;
    }
    .input:focus {
        outline: none;
    }
    .input--top {
        border-radius: 0.5rem 0.5rem 0 0;
        border-top: 0;
    }
    .input--submit {
        background-color: rgba(92,168,214,0.9);
        color: #131313;
        font-weight: bold;
        cursor: pointer;
        border-top: 0;
        border-radius: 0 0 0.5rem 0.5rem;
        margin-bottom: 1rem;
    }

    .text {
        color: #312e2e;
        text-shadow: 0 1px 1px rgba(0,0,0,0.8);
        text-decoration: none;
    }
    .text--small {
        opacity: 0.85;
        font-size: 0.75rem;
        cursor: pointer;
    }
    .text--small:hover {
        opacity: 1;
    }
    .text--omega {
        width: 200%;
        margin: 0 0 1rem -50%;
        font-size: 1.5rem;
        line-height: 1.125;
        font-weight: normal;
    }
    .text--centered {
        display: block;
        text-align: center;
    }
    .text--border-right {
        border-right: 1px solid rgba(40, 37, 37, 0.5);
        margin-right: 0.75rem;
        padding-right: 0.75rem;
    }

    .legal {
        position: absolute;
        bottom: 1.125rem; left: 1.125rem;
    }

    .photo-cred {
        position: absolute;
        right: 1.125rem; bottom: 1.125rem;
    }

    .fullscreen-bg {
        position: fixed;
        z-index: -1;
        top:0; right:0; bottom:0; left:0;
        background: url() center;
        background-size: cover;
    }
    body{
        background: #e8f4f8;
    }

    #toggle--login:checked ~ .form--signup { left:200%; visibility:hidden; }
    #toggle--signup:checked ~ .form--login { left:-100%; visibility:hidden; }

    @media (height:300px){.legal,.photo-cred{display:none}}
</style>

<input type="radio" checked id="toggle--login" name="toggle" class="ghost" />
<input type="radio" id="toggle--signup" name="toggle" class="ghost" />

<?php check_message()?>



<!-- Sign up -->

<form class="form form--signup framed" method="post">

    <h2 class="text text--centered text--omega">Join us<br><b>Become our member</b></br></h2>

    <input required type="text" name="put_name" placeholder="username" class="input input--top" />
    <input required type="password" name="put_password" placeholder="password" class="input" />
    <input required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" type="text" name="put_email" placeholder="email" class="input" />
    <input type="submit" name="signup" value="Sign up" class="input input--submit" />

    <label for="toggle--login" class="text text--small text--centered">Not new? <b>Log in</b></label>
</form>


<!-- Log in -->

<form class="form form--login framed" method="post">
    <h2 class="text text--centered text--omega">Log in<br><b>Enter your account</b></br></h2>

    <input required type="text" name="take_name" placeholder="username" class="input input--top" />
    <input required type="password"  name="take_password" placeholder="Password" class="input" />
    <input type="submit" name="login" value="Log in" class="input input--submit" />

    <label for="toggle--signup" class="text text--small text--centered">New? <b>Sign up</b></label>
</form>

<!-- Delete -->

<div class="legal">
    <?php
    if((isset($_SESSION["login"]) && $_SESSION["login"] == "OK")){
        $a=$_SESSION['var'];
    }
    if((isset($_SESSION["login"]) && $_SESSION["login"] == "OK" && $a=="admin")):
        ?>
    <form class="form form--login framed" method="post">
    <input type="submit" id="adminlogin" name="delete" value="Delete accounts" class="input input--submit" />
    </form>
    <?php endif; ?>
    <a class="text text--small text--border-right" href="javascript:;">Terms</a>
    <a class="text text--small text--border-right" href="javascript:;">Privacy</a>
    <a class="text text--small" href="javascript:;">Password help</a>
</div>



<div class="fullscreen-bg"></div>