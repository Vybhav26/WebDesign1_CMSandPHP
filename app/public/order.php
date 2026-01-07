<?php require_once('couch/cms.php'); ?>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <cms:load_edit />
    <cms:editable name='page_title' type='text' label='Page Title'>
        <title>Product Ordering Page</title>
    </cms:editable>
    <link href="order.css" rel="stylesheet" type="text/css" />
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

            <a href="signIn.php" class="menu-item">
                <cms:editable name='menu_signin' type='text' label='Menu Sign In'>
                    <span class="menu-item-text">Sign In</span>
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
            <cms:editable name='header_title' type='text' label='Header Title'>
                <h1>Order</h1>
            </cms:editable>
            <cms:editable name='header_logo' type='image' label='Header Logo'>
                <a href="#"><img class="header-logo" src="imgs/logo (1).svg" alt="Logo" /></a>
            </cms:editable>
        </header>

        </hr>


        <section class="product-frame">
            <figure>
                <cms:editable name='product_image' type='image' label='Product Image'>
                    <img id="product-img" src="imgs/UBLSpeaker.png" alt="Product image" />
                </cms:editable>

            </figure>
            <cms:editable name='product_price' type='text' label='Product Price'>
                <p class="product-price">$99.99</p>
            </cms:editable>
        </section>


        <section class="display-formatting">
            <form action="submit_order.html" method="post">


                <fieldset>
                    <cms:editable name='fieldset_info_legend' type='text' label='Your Information Legend'>
                        <legend>Your Information</legend>
                    </cms:editable>
                    <cms:editable name='email_label' type='text' label='Email Label'>
                        <label for="email_account">Email:</label>
                    </cms:editable>
                    <cms:editable name='email_placeholder' type='text' label='Email Placeholder'>
                        <input id="email_account" name="email" type="email" placeholder="you@example.com" required />
                    </cms:editable>

                    <cms:editable name='password_label' type='text' label='Password Label'>
                        <label for="pwd_account">Password:</label>
                    </cms:editable>
                    <cms:editable name='password_placeholder' type='text' label='Password Placeholder'>
                        <input id="pwd_account" name="password" type="password" placeholder="At least 8 characters"
                            required />
                    </cms:editable>
                </fieldset>

                <fieldset>
                    <cms:editable name='fieldset_options_legend' type='text' label='Product Options Legend'>
                        <legend>Product Options</legend>
                    </cms:editable>

                    <cms:editable name='color_label' type='text' label='Color Label'>
                        <label for="color">Color:</label>
                    </cms:editable>
                    <cms:editable name='color_blue' type='text' label='Color Blue'>
                        <label><input type="radio" name="color" value="Blue" required /> Blue</label>
                    </cms:editable>
                    <cms:editable name='color_green' type='text' label='Color Green'>
                        <label><input type="radio" name="color" value="Green" /> Green</label>
                    </cms:editable>
                    <cms:editable name='color_red' type='text' label='Color Red'>
                        <label><input type="radio" name="color" value="Red" /> Red</label>
                    </cms:editable>


                    <cms:editable name='quantity_label' type='text' label='Quantity Label'>
                        <label for="quantity">Quantity:</label>
                    </cms:editable>
                    <input type="number" name="quantity" id="quantity" value="1" min="1" max="99" required>
                </fieldset>

                <fieldset>
                    <cms:editable name='fieldset_additional_legend' type='text' label='Additional Options Legend'>
                        <legend>Additional Options</legend>
                    </cms:editable>
                    <cms:editable name='gift_wrap_label' type='text' label='Gift Wrap Label'>
                        <label><input type="checkbox" name="gift_wrap" /> Gift wrap</label>
                    </cms:editable>
                    <cms:editable name='newsletter_label' type='text' label='Newsletter Label'>
                        <label><input type="checkbox" name="newsletter" /> Subscribe to newsletter</label>
                    </cms:editable>
                </fieldset>

                <cms:editable name='submit_button' type='text' label='Submit Button'>
                    <button type="submit">Place Order</button>
                </cms:editable>
            </form>
        </section>

        <footer id="footer">
            <cms:editable name='footer_email' type='text' label='Footer Email'>
                <p>Email</p>
            </cms:editable>
            <cms:editable name='footer_text' type='text' label='Footer Text'>
                <h3>Footer - Image from Copilot</h3>
            </cms:editable>
            <cms:editable name='footer_phone' type='text' label='Footer Phone'>
                <p>Phone</p>
            </cms:editable>
        </footer>

    </div>
</body>

</html>


<?php COUCH::invoke(); ?>