<x-layout>
</x-layout>
<body>

    <!-- ***** Preloader Start ***** -->
    {{-- <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div> --}}
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="index.html" class="active">Home</a></li>
                            <li><a href="category.html">Category</a></li>
                            <li><a href="listing.html">Listing</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li>
                                <div class="main-white-button"><a href="#"><i class="fa fa-plus"></i> Add Your Listing</a></div>
                            </li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <div class="main-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form id="search-form" name="gs" method="submit" role="search" action="#">
                        <div class="row">
                            <div class="col-lg-3 align-self-center">
                                <fieldset>
                                    <select name="area" class="form-select" aria-label="Area" id="chooseCategory" onchange="this.form.click()">
                                        <option selected>All Areas</option>
                                        <option value="New Village">New Village</option>
                                        <option value="Old Town">Old Town</option>
                                        <option value="Modern City">Modern City</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-3 align-self-center">
                                <fieldset>
                                    <input type="address" name="address" class="searchText" placeholder="Enter a location" autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-3">
                                <fieldset>
                                    <button class="main-button"><i class="fa fa-search"></i> Search Now</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-10 offset-lg-1">
                    <ul class="categories">
                        <li><a href="category.html"><span class="icon"><img src="assets/images/search-icon-01.png" alt="Home"></span> Apartments</a></li>
                        <li><a href="listing.html"><span class="icon"><img src="assets/images/search-icon-02.png" alt="Food"></span> Food &amp; Life</a></li>
                        <li><a href="#"><span class="icon"><img src="assets/images/search-icon-03.png" alt="Vehicle"></span> Cars</a></li>
                        <li><a href="#"><span class="icon"><img src="assets/images/search-icon-04.png" alt="Shopping"></span> Shopping</a></li>
                        <li><a href="#"><span class="icon"><img src="assets/images/search-icon-05.png" alt="Travel"></span> Traveling</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="col-lg-4">
                <div class="contact-us">
                    <h4>Contact Us</h4>
                    <p>27th Street of New Town, Digital Villa</p>
                    <div class="row">
                        <div class="col-lg-6">
                            <a href="#">010-020-0340</a>
                        </div>
                        <div class="col-lg-6">
                            <a href="#">090-080-0760</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="sub-footer">
                    <p>Copyright © 2021 Plot Listing Co., Ltd. All Rights Reserved.
                        <br>
                        Design: <a rel="nofollow" href="https://templatemo.com" title="CSS Templates">TemplateMo</a></p>
                </div>
            </div>
        </div>
        </div>
    </footer>


    <!-- Scripts -->
    {{-- <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/animation.js"></script>
    <script src="assets/js/imagesloaded.js"></script>
    <script src="assets/js/custom.js"></script> --}}

</body>

</html>

