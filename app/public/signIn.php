<?php require_once('couch/cms.php'); ?>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <cms:load_edit />
    <cms:editable name='page_title' type='text' label='Page Title'>
        <title>WebPage</title>
    </cms:editable>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="menu.css" rel="stylesheet" type="text/css" />
</head>

<body>

    <div class="container">
        <input type="checkbox" id="menu-toggle">

        <label for="menu-toggle" class="menu-toggle-label">
            <div class="menu-toggle-icon">
                <span></span>
                <span></span>
                <span></span>

            </div>
            <cms:editable name='menu_toggle_text' type='text' label='Menu Toggle Text'>
                <span class="menu-toggle-text">Menu</span>
            </cms:editable>
        </label>

        <label for="menu-toggle" class="overlay"></label>

        <div class="side-menu">

            <a href="index.php" class="menu-item">
                <cms:editable name='menu_home' type='text' label='Menu Home'>
                    <span class="menu-item-text">Home</span>
                </cms:editable>
                <div class="menu-item-icon"></div>
            </a>


            <a href="account.php" class="menu-item">
                <cms:editable name='menu_account' type='text' label='Menu Account'>
                    <span class="menu-item-text">Account</span>
                </cms:editable>
                <div class="menu-item-icon"></div>
            </a>

            <a href="signUp.php" class="menu-item">
                <cms:editable name='menu_signup' type='text' label='Menu Sign Up'>
                    <span class="menu-item-text">Sign Up</span>
                </cms:editable>
                <div class="menu-item-icon"></div>
            </a>

            <a href="credentials.php" class="menu-item">
                <cms:editable name='menu_team' type='text' label='Menu Team'>
                    <span class="menu-item-text">Meet our Team!</span>
                </cms:editable>
                <div class="menu-item-icon"></div>
            </a>


            <a href="cart.php" class="menu-item">
                <cms:editable name='menu_cart' type='text' label='Menu Cart'>
                    <span class="menu-item-text">Cart</span>
                </cms:editable>
                <div class="menu-item-icon"></div>
            </a>


            <div class="log-out">
                <cms:editable name='menu_logout' type='text' label='Menu Log Out'>
                    <a href="#">Log Out</a>
                </cms:editable>
            </div>
        </div>
        <header>
            <cms:editable name='header_logo' type='image' label='Header Logo'>
                <a href="#"><img class="header-logo" src="imgs/logo (1).svg" alt="Logo" /></a>
            </cms:editable>
            <cms:editable name='header_title' type='text' label='Header Title'>
                <h1 id="header">Sign In</h1>
            </cms:editable>

        </header>

        <main>
            <div class="signup-section">
                <div class="signup-container">
                    <form id="signupForm">
                        <cms:editable name='form_heading' type='text' label='Form Heading'>
                            <h2>Create an account</h2>
                        </cms:editable>

                        <cms:editable name='email_label' type='text' label='Email Label'>
                            <label for="email">Email</label>
                        </cms:editable>
                        <cms:editable name='email_placeholder' type='text' label='Email Placeholder'>
                            <input id="email" name="email" type="email" required placeholder="you@example.com" />
                        </cms:editable>
                        <div class="error" id="emailError"></div>

                        <cms:editable name='password_label' type='text' label='Password Label'>
                            <label for="password">Password</label>
                        </cms:editable>
                        <cms:editable name='password_placeholder' type='text' label='Password Placeholder'>
                            <input id="password" name="password" type="password" required minlength="8"
                                placeholder="At least 8 characters" />
                        </cms:editable>
                        <div class="error" id="passwordError"></div>

                        <cms:editable name='confirm_label' type='text' label='Confirm Password Label'>
                            <label for="confirm">Confirm password</label>
                        </cms:editable>
                        <cms:editable name='confirm_placeholder' type='text' label='Confirm Password Placeholder'>
                            <input id="confirm" name="confirm" type="password" required
                                placeholder="Repeat your password" />
                        </cms:editable>
                        <div class="error" id="confirmError"></div>


                        <cms:editable name='submit_button' type='text' label='Submit Button'>
                            <button type="submit" class="btn">Sign In</button>
                        </cms:editable>

                        <cms:editable name='signup_link_text' type='text' label='Sign Up Link Text'>
                            <p class="muted">Don't have an account? <a href="signUp.php">Sign Up</a></p>
                        </cms:editable>
                    </form>
                </div>
            </div>
        </main>

        <footer id="footer">
            <cms:editable name='footer_email' type='text' label='Footer Email'>
                <p>Email</p>
            </cms:editable>
            <cms:editable name='footer_text' type='text' label='Footer Text'>
                <h3>Footer</h3>
            </cms:editable>
            <cms:editable name='footer_phone' type='text' label='Footer Phone'>
                <p>Phone</p>
            </cms:editable>
        </footer>
    </div>
</body>

</html>


<?php COUCH::invoke(); ?>