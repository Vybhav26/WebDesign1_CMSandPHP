<?php require_once('couch/cms.php'); ?>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <cms:load_edit/>
    <cms:editable name='page_title' type='text' label='Page Title'>
    <title>WebPage</title>
    </cms:editable>
    <link href="credentials.css" rel="stylesheet" type="text/css" />
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


        <a href="account.php" class="menu-item">
            <cms:editable name='menu_account' type='text' label='Menu Account'>
            <span class="menu-item-text">Account</span>
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
        <h1 id="header">Credentials</h1>
        </cms:editable>
    </header>



    <div id="il" style="height: 50vh"></div>
    
    <cms:editable name='ceo_image' type='image' label='CEO Image'>
    <img class = "prof-img-left" src="imgs/background.jpg" alt="Human 1" />
    </cms:editable>

    <div class="section-right">
        <hr />
        <br/>

        <cms:editable name='ceo_title' type='text' label='CEO Title'>
        <h3>CEO</h3>
        </cms:editable>

        <cms:editable name='ceo_description' type='richtext' label='CEO Description'>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing
            elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat. Duis aute irure
            dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur
            sint occaecat cupidatat non proident, sunt in
            culpa qui officia deserunt mollit anim id est laborum.
        </p>
        </cms:editable>
        <br/>
        <hr />
    </div>



    <div id="break" style="height: 50vh"></div>

    <cms:editable name='coo_image' type='image' label='COO Image'>
    <img class = "prof-img-right" src="imgs/background.jpg" alt="Human 2" />
    </cms:editable>

    <div class="section-left">
        <hr />
        <br/>

        <cms:editable name='coo_title' type='text' label='COO Title'>
        <h3>COO</h3>
        </cms:editable>

        <cms:editable name='coo_description' type='richtext' label='COO Description'>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing
            elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat. Duis aute irure
            dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur
            sint occaecat cupidatat non proident, sunt in
            culpa qui officia deserunt mollit anim id est laborum.
        </p>
        </cms:editable>
        <br/>
        <hr />
    </div>

    <div id="break" style="height: 50vh"></div>

    <cms:editable name='cto_image' type='image' label='CTO Image'>
    <img class = "prof-img-left" src="imgs/background.jpg" alt="Human 2" />
    </cms:editable>

  <div class="section-right">
        <hr />
        <br/>

        <cms:editable name='cto_title' type='text' label='CTO Title'>
        <h3>CTO</h3>
        </cms:editable>

        <cms:editable name='cto_description' type='richtext' label='CTO Description'>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing
            elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat. Duis aute irure
            dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur
            sint occaecat cupidatat non proident, sunt in
            culpa qui officia deserunt mollit anim id est laborum.
        </p>
        </cms:editable>
        <br/>
        <hr />
    </div>



    <div id="sh" style="height: 50vh"></div>


    <footer id="footer">
        <cms:editable name='footer_email' type='text' label='Footer Email'>
        <p>Email</p>
        </cms:editable>
        <cms:editable name='footer_text' type='text' label='Footer Text'>
        <h3>Footer - Placeholder IMG's From Freepik. Text from Copilot</h3>
        </cms:editable>
        <cms:editable name='footer_phone' type='text' label='Footer Phone'>
        <p>Phone</p>
        </cms:editable>
    </footer>


</body>

</html>

<?php COUCH::invoke(); ?>