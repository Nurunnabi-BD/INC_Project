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
    <!-- Header Section -->
    <?php include("header.php") ?>

    <!-- Main Section -->
     <main>
        <div class="back container">
            <h3>Register Page</h3>
            <div class="home-back">
                <a href="index.php">Home </a>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-right-to-arc"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 12h12" /><path d="M11 8l4 4l-4 4" /><path d="M12 21a9 9 0 0 0 0 -18" /></svg>
                <h4>Register Page</h4>
            </div>
        </div>
        <div class="container">
            <div class="form">
                <form action="registration.php" class="from-table" method="POST">
                    <div class="form-name">
                        <div class="first-name uni">
                            <label for="">First Name <span style="color: red;">*</span></label>
                            <input type="text" placeholder="Enter your first name" name="firstname" required>
                        </div>
                        <div class="last-name uni">
                            <label for="">Last Name <span style="color: red;">*</span></label>
                            <input type="text" placeholder="Enter your last name" name="lastname" required>
                        </div>
                    </div>
                    <div class="mail-number">
                        <div class="form-email uni">
                            <label for="">Email<span style="color: red;">*</span></label>
                            <input type="email" placeholder="Enter your email address" name="email" required>
                        </div>
                        <div class="form-number uni">
                            <label for="">Phone Number<span style="color: red;">*</span></label>
                            <input type="number"placeholder="Enter your phone number" name="phone" required>
                        </div>
                    </div>
                    <div class="form-password">
                        <div class="first-pass uni">
                            <label for="">Password<span style="color: red;">*</span></label>
                            <input type="password" placeholder="Enter password" name="password" required>
                        </div>
                        <div class="last-pass uni">
                            <label for="">Re-Type Password<span style="color: red;">*</span></label>
                            <input type="password"placeholder="Re-type your password " name="re-password" required>
                        </div>
                    </div>
                    <div class="address uni">
                            <label for="">Address</label>
                            <input type="text" placeholder="Address Line 1" name="address">
                    </div>
                    <div class="city-postal">
                            <div class="form-city">
                                <label for="">City</label>
                                <select name="city" id="">
                                    <option value="" disabled selected hidden>---Select---</option>
                                    <option value="Chattagaram">Chattagaram</option>
                                    <option value="Dhaka3">Dhaka</option>
                                    <option value="Rujshahi">Rujshahi</option>
                                    <option value="Barisal">
                                        Barisal
                                    </option>
                                </select>
                            </div>
                            <div class="form-post uni">
                                <label for="">Post Code</label>
                                <input type="number" placeholder="Post code" name="post">
                            </div>
                    </div>
                    <div class="country-region">
                        <div class="form-country dropdown uni">
                            <label for="">Country<span style="color: red;">*</span></label>
                            <select name="country" id="" required>
                                <option value="" selected hidden>Country</option>
                                <option value="">Bangladesh</option>
                                <option value="">India</option>
                                <option value="">Pakistan</option>
                            </select>
                        </div>
                        <div class="form-region dropdown uni">
                            <label for="">Region State</label>
                            <select name="region" id="">
                                <option value="" selected hidden>Region</option>
                                <option value="">Bandarban</option>
                                <option value="">Cox's Bazar</option>
                            </select>
                        </div>
                            
                    </div>
                    <div class="login-submit">
                        <div class="alredy-login">
                            <p>Have an account?</p>
                            <a href="login.php">Login</a>
                        </div>
                        <div class="reg-submit" name="reg-submit">
                            <button>Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
     </main>

     <!-- Footer Section -->
    <?php include("footer.php") ?>
</body>
</html>