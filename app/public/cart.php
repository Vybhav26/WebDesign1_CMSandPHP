<?php require_once('couch/cms.php'); ?>
<html lang="en">

<head>
    <meta charset="UTF-8" />
   <cms:load_edit/>   
    <cms:editable name='page_title' type='text' label='Page Title'>
    <title>Product Ordering Page</title>
    </cms:editable>
    <link href="cart.css" rel="stylesheet" type="text/css" />
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

   
        <a href="credentials.html" class="menu-item">
            <cms:editable name='menu_team' type='text' label='Menu Team'>
            <span class="menu-item-text">Meet our team!</span>
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
        <h1>Cart</h1>
        </cms:editable>
    </header>

<h2 id="CartLogo"> 
    
<cms:editable name='cart_icon' type='image' label='Cart Icon'>
<a>
    <img class = "cart-icon" src="imgs/background.jpg" alt="Cart Icon" />
</a>
</cms:editable>
    
<cms:editable name='shopping_cart_text' type='text' label='Shopping Cart Text'>
    Shopping Cart
</cms:editable>

</h2>
    <hr/>


    <cms:editable name='number_of_items' type='text' label='Number of Items'>
    <h2>Number of Items: ###</h2>
    </cms:editable>

    <section class = "order-section">

        <cms:editable name='item1_name' type='text' label='Item 1 Name'>
        <h4><label for="Item Name">Item Name: _____ - Color of Product</label></h4>
        </cms:editable>
        <cms:editable name='item1_date_ordered' type='text' label='Item 1 Date Ordered'>
        <p for="Ordered">Date Ordered: _____</p>
        </cms:editable>
        <cms:editable name='item1_arrival_date' type='text' label='Item 1 Arrival Date'>
        <p for="Arrival">Estimated Arrival Date: _____</p>
        </cms:editable>
        <cms:editable name='item1_status' type='text' label='Item 1 Status'>
        <p for="Status">Delivered: _____</p>
        </cms:editable>

    </section>

    <section class = "order-section">

        <cms:editable name='item2_name' type='text' label='Item 2 Name'>
        <h4><label for="Item Name">Item Name: _____ - Color of Product</label></h4>
        </cms:editable>
        <cms:editable name='item2_date_ordered' type='text' label='Item 2 Date Ordered'>
        <p for="Ordered">Date Ordered: _____</p>
        </cms:editable>
        <cms:editable name='item2_arrival_date' type='text' label='Item 2 Arrival Date'>
        <p for="Arrival">Estimated Arrival Date: _____</p>
        </cms:editable>
        <cms:editable name='item2_status' type='text' label='Item 2 Status'>
        <p for="Status">Delivered: _____</p>
        </cms:editable>

    </section>

    <section class = "order-section">

        <cms:editable name='item3_name' type='text' label='Item 3 Name'>
        <h4><label for="Item Name">Item Name: _____ - Color of Product</label></h4>
        </cms:editable>
        <cms:editable name='item3_date_ordered' type='text' label='Item 3 Date Ordered'>
        <p for="Ordered">Date Ordered: _____</p>
        </cms:editable>
        <cms:editable name='item3_arrival_date' type='text' label='Item 3 Arrival Date'>
        <p for="Arrival">Estimated Arrival Date: _____</p>
        </cms:editable>
        <cms:editable name='item3_status' type='text' label='Item 3 Status'>
        <p for="Status">Delivered: _____</p>
        </cms:editable>

    </section>

            <cms:editable name='cancel_button' type='text' label='Cancel Button'>
            <button type="button" class="button" id="cancel">Cancel Order + Refund</button>
            </cms:editable>
            <cms:editable name='clear_button' type='text' label='Clear Button'>
            <button type="button" class="button" id="clear">Clear Cart</button>
            </cms:editable>

<div id="break" style="height: 10vh"></div>
    <footer id="footer">
        <cms:editable name='footer_email' type='text' label='Footer Email'>
        <p>Email</p>
        </cms:editable>
        <cms:editable name='footer_text' type='text' label='Footer Text'>
        <h3>Footer - Placeholder cart img from Freepik</h3>
        </cms:editable>
        <cms:editable name='footer_phone' type='text' label='Footer Phone'>
        <p>Phone</p>
        </cms:editable>
    </footer>

</body>

</html>

<?php COUCH::invoke(); ?>