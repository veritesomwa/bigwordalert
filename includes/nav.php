<header class="header" id="header">
         <nav class="nav container">
            <a href="" class="nav__logo">
            <div id="banner">
				<img class="banner" src="includes/images/icons/favicon.ico" alt="bigwordalert" width="80" height="80">
			</div>
            </a>
            

            <div class="nav__menu" id="nav-menu">
               <ul class="nav__list">
                  <li class="nav__item">
                     <a href="" class="nav__link">Home</a>
                  </li>

                  <li class="nav__item">
                     <a href="#" class="nav__link">Saved Words</a>
                  </li>

                  <!-- <li class="nav__item">
                     <a href="#" class="nav__link">Services</a>
                  </li> -->

                  <li class="nav__item">
                     <a href="#" class="nav__link">Featured</a>
                  </li>
<!-- 
                  <li class="nav__item">
                     <a href="#" class="nav__link">Contact Me</a>
                  </li> -->
               </ul>

               <!-- Close button -->
               <div class="nav__close" id="nav-close">
                  <i class="ri-close-line"></i>
               </div>
            </div>

            <div class="nav__actions">
               <!-- Search button -->
               <!-- <i class="ri-search-line nav__search" id="search-btn"></i> -->
               <form action="" class="search__form">
                    <i class="ri-search-line search__icon"></i>
                    <input type="search" placeholder="What are you looking for?" class="search__input">
                </form>

               <!-- Login button -->
               <i class="ri-user-line nav__login" id="login-btn"></i>

               <!-- Toggle button -->
               <div class="nav__toggle" id="nav-toggle">
                  <i class="ri-menu-line"></i>
               </div>
            </div>
         </nav>
      </header>

      <!--==================== SEARCH ====================-->
      <div class="search" id="search">
         <form action="" class="search__form">
            <i class="ri-search-line search__icon"></i>
            <input type="search" placeholder="What are you looking for?" class="search__input">
         </form>

         <i class="ri-close-line search__close" id="search-close"></i>
      </div>


      <div class="user-menu" id="user-menu">
         
        <nav class="user-menu__form">
            <ul>
                <li>
                <i class="ri-edit-line search__icon" style="float:left"></i>
                    <a href="">Edit Profile</a>
                </li>
                <li>
                <i class="ri-settings-line search__icon" style="float:left"></i>
                    <a href="">Settings</a>
                </li>
                <li id="btn-signout">
                <i class="ri-logout-circle-line search__icon" style="float:left"></i>
                    <a id="btn-signout-link" href="includes/signout.php" class="unselectable">Sign Out</a>
                </li>
            </ul>
        </nav>
         <i class="ri-close-line login__close" id="login-close"></i>
      </div>
