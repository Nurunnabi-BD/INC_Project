 <?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="asstes/image/fav.png">
    <link rel="stylesheet" href="asstes/css/style.css">
    <title>Friends Creation BD</title>
</head>
<body>
    <!-- Header Section  -->
    <?php include("header.php") ?>

    <!-- Main Section -->
    <main>
        <div class="back container">
            <h3>Login Page</h3>
            <div class="home-back">
                <a href="index.php">Home </a>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-right-to-arc"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 12h12" /><path d="M11 8l4 4l-4 4" /><path d="M12 21a9 9 0 0 0 0 -18" /></svg>
                <h4>Login Page</h4>
            </div>
        </div>
        <div class="container">
            <div class="form login-form">
                <div class="display">

                </div>
                <div>

                    <?php
                    if(isset($_SESSION['login_success'])){
                        echo "<div style='color:green; font-weight:bold;'>".$_SESSION['login_success']."</div>";
                        unset($_SESSION['login_success']); // একবার show হওয়ার পর remove
                    }

                    if(isset($_SESSION['login_error'])){
                        echo "<div style='color:red; font-weight:bold;'>".$_SESSION['login_error']."</div>";
                        unset($_SESSION['login_error']);
                    }
                    ?>

                    <form action="login_process.php" method="POST">
                        <div class="login-mail">
                            <label for="">Email Address <span style="color: red;">*</span></label>
                            <input type="email" placeholder="Enter your email" name="email" required>
                        </div>
                        <div class="login-pass">
                            <label for="">Password      <span style="color: red;">*</span></label>
                            <input  type="password" placeholder="Enter your password" name="password" required>
                        </div>
                        <div class="remember-forget">
                            <div class="remember">
                                <input type="checkbox" name="" id="">
                                <label for="">Remember</label>
                            </div>
                            <div class="forget">
                             <a href="">Forgot Password?</a>
                            </div>
                        </div>
                        <div class="create-login">
                            <a href="registration.php">Create Account?</a>
                            <button type="submit" name="login_submit">Login</button>
                        </div>
                    </form>
                </div>
                <div class="form-img">
                    <img src="asstes/image/login.png" alt="image">
                </div>
            </div>
        </div>
    </main>

    <!-- Footer Sction  -->
     <?php include("footer.php") ?>
</body>
</html>