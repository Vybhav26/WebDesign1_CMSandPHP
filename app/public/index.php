<?php require_once('couch/cms.php'); ?>
<html lang="en">

<head>
    <meta charset="UTF-8" />
   <cms:load_edit/>    
<title>WebPage</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="menu.css" rel="stylesheet" type="text/css" />
        <link href="hero.css" rel="stylesheet" type="text/css" />
        <link href="review.css" rel="stylesheet" type="text/css" />

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

<div class="parallax hero-section">
    <div class="hero-content">
        <cms:editable name='hero_logo' type='image' label='Hero Logo'>
        <a><img class = "logo" src="imgs/logo (1).svg" alt="Logo" /></a>
        </cms:editable>

        <cms:editable name='hero_title' type='text' label='Hero Title'>
        <h1 class="hero-title">Speakers</h1>
        </cms:editable>
     
        <cms:editable name='hero_subtitle' type='text' label='Hero Subtitle'>
        <p class="hero-subtitle">Discover quality and innovation in every detail</p>
        </cms:editable>

        <cms:editable name='hero_cta_text' type='text' label='Hero CTA Text'>
        <a href="order.html" class="cta-button">Shop Now</a>
        </cms:editable>
    </div>
</div>

 <div class="parallax" style="height: 5px;"></div>


<div class="reviews-section">
        <cms:editable name='reviews_heading' type='text' label='Reviews Heading'>
        <h2>Featured Reviews</h2>
        </cms:editable>

        <div class="reviews-container">
            
            <div class="review-card">
                <div class="review-img">
                    <cms:editable name='review1_title' type='text' label='Review 1 Title'>
                    <h3>Premium Sound</h3>
                    </cms:editable>
                </div>
                <div class="review-description">
                    <cms:editable name='review1_description' type='richtext' label='Review 1 Description'>
                    <p>Lorieum Impsum text. bla bla bla</p>
                    </cms:editable>
                    <cms:editable name='review1_rating' type='text' label='Review 1 Rating'>
                    <p class="rating">★★★★★ 5/5</p>
                    </cms:editable>
                </div>
            </div>

            <div class="review-card">
                <div class="review-img">
                    <cms:editable name='review2_title' type='text' label='Review 2 Title'>
                    <h3>Studio Quality</h3>
                    </cms:editable>
               </div>
                <div class="review-description">
                    <cms:editable name='review2_description' type='richtext' label='Review 2 Description'>
                    <p>Lorieum Impsum text. bla bla bla</p>
                    </cms:editable>
                    <cms:editable name='review2_rating' type='text' label='Review 2 Rating'>
                    <p class="rating">★★★★★ 5/5</p>
                    </cms:editable>
                </div>
            </div>

            <div class="review-card">
                <div class="review-img">
                    <cms:editable name='review3_title' type='text' label='Review 3 Title'>
                    <h3>Elegant Design</h3>
                    </cms:editable>
                </div>
                <div class="review-description">
                    <cms:editable name='review3_description' type='richtext' label='Review 3 Description'>
                    <p>Lorieum Impsum text. bla bla bla</p>
                    </cms:editable>
                    <cms:editable name='review3_rating' type='text' label='Review 3 Rating'>
                    <p class="rating">★★★★☆ 4/5</p>
                    </cms:editable>
                </div>
            </div>

        </div>
    </div>

 <div class="parallax"></div>
     <div class="section">
        <hr />

        <cms:editable name='section1_title' type='text' label='Section 1 Title'>
        <h3>Section Title</h3>
        </cms:editable>

        <cms:editable name='section1_content' type='richtext' label='Section 1 Content'>
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
        <hr />
    </div>
    <div class="parallax"></div>





    <div class="section">

        <cms:editable name='section2_title' type='text' label='Section 2 Title'>
        <h3>Section Title</h3>
        </cms:editable>

        <cms:editable name='section2_content' type='richtext' label='Section 2 Content'>
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
    </div>
    <div class="parallax"></div>


    <footer id="footer">
        <cms:editable name='footer_email' type='text' label='Footer Email'>
        <p>Email</p>
        </cms:editable>
        <cms:editable name='footer_text' type='text' label='Footer Text'>
        <h3>Footer - Background From Freepik</h3>
        </cms:editable>
        <cms:editable name='footer_phone' type='text' label='Footer Phone'>
        <p>Phone</p>
        </cms:editable>
    </footer>


</body>

</html>

<?php COUCH::invoke(); ?>