<?php require_once('couch/cms.php'); ?>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <cms:load_edit />
    <link href="account.css" rel="stylesheet" type="text/css" />
    <link href="menu.css" rel="stylesheet" type="text/css" />

</head>

<body>

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


        <a href="credentials.php" class="menu-item">
            <cms:editable name='menu_team' type='text' label='Menu Team'>
                <span class="menu-item-text">Meet our team!</span>
            </cms:editable>
            <div class="menu-item-icon"></div>
        </a>

        <a href="signIn.php" class="menu-item">
            <cms:editable name='menu_signin' type='text' label='Menu Sign In'>
                <span class="menu-item-text">Sign In</span>
            </cms:editable>
            <div class="menu-item-icon"></div>
        </a>

        <a href="order.php" class="menu-item">
            <cms:editable name='menu_order' type='text' label='Menu Order'>
                <span class="menu-item-text">Order</span>
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
            <h1 id="header">Account</h1>
        </cms:editable>
    </header>

    <cms:editable name='settings_heading' type='text' label='Settings Heading'>
        <h2>Settings</h2>
    </cms:editable>

    <hr>
    </hr>

    <div class="display-formatting">
        <cms:editable name='email_label' type='text' label='Email Label'>
            <label for="email">Email: </label>
        </cms:editable>
        <cms:editable name='email_placeholder' type='text' label='Email Placeholder'>
            <input id="email_account" name="email" type="email" placeholder="XXXXXXXXXXXX" />
        </cms:editable>
        <br>
        <cms:editable name='password_label' type='text' label='Password Label'>
            <label for="password">Password: </label>
        </cms:editable>
        <cms:editable name='password_placeholder' type='text' label='Password Placeholder'>
            <input id="pwd_account" name="password" type="password" placeholder="XXXXXXXXXXXX" />
        </cms:editable>
        <cms:editable name='twofa_label' type='text' label='2FA Label'>
            <label for="2FA login">2FA Settings: </label>
        </cms:editable>
        <br />
        <cms:editable name='biometric_text' type='text' label='Biometric Text'>
            <p class="txt-checkbox">Biometric Enabled</p>
        </cms:editable>
        <input id="Biometric" name="biometric" type="checkbox"></input>
        <div class="break" style="height: 2vh"></div>
        <cms:editable name='pin_text' type='text' label='PIN Text'>
            <p class="txt-checkbox">PIN Enabled</p>
        </cms:editable>
        <input id="PIN" name="PIN" type="checkbox"></input>
        <div class="break" style="height: 2vh"></div>
        <cms:editable name='forgot_password_button' type='text' label='Forgot Password Button'>
            <button type="#" class="Button">Forgot Password</button>
        </cms:editable>
        <br />
        <cms:editable name='delete_account_button' type='text' label='Delete Account Button'>
            <button type="#" class="Button">Delete Account</button>
        </cms:editable>

    </div>

    <br />
    <br />
    <br />
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


</body>

</html>


<?php COUCH::invoke(); ?>