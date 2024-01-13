<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pari Foundation</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
  
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap">
    <script src="https://cdn.tailwindcss.com"></script>
     <!-- Include jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Include Tiny Circle Slider and its dependencies -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-type/2.3.1/jquery.circleType.min.js"></script>
<script src="https://cdn.jsdelivr.net/pixi.js/4.8.7/pixi.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.tinycircleslider/1.3.8/jquery.tinycircleslider.min.js"></script>
<style>
    body {
  margin: auto;
  display: table;
}

.text-with-shadow {
    text-shadow: 0 2px 2px #10B981;
    transition: text-shadow 0.3s ease; /* Optional: Add a smooth transition effect */
}

.text-with-shadow:hover {
    text-shadow: none;
}


img {
  border: 0;
  vertical-align: middle;
}

.img-responsive {
  display: block;
  min-width: 100%;
  max-width: 100%;
  height: auto;
  border-radius: 50%;
}

.rotateframe {
  margin: 20px 0;
}

#rotatescroll {
  position: relative;
  border: 3px solid #40bf97;
  border-radius: 50%;
  list-style: none;
  overflow: hidden;
  max-height: 300px;
  max-width: 300px;
  background-color: #f5f5f5;
  padding-left: 40px;
  padding-top: 40px;
  padding-right: 44px;
  user-select: none;
  padding-bottom: 44px;
}

.viewport {
  max-height: 300px;
  position: relative;
  margin: 0 auto;
  overflow: hidden;
  max-width: 300px;
  border: 2px solid #40bf97;
  background-color: #ccc;
  border-radius: 100%;
  z-index: 0;
}

#rotatescroll .overview {
  position: relative;
  width: 798px;
  list-style: none;
  margin: 0;
  padding: 0;
  left: 0;
  top: 0;
}

#rotatescroll .overview li {
  max-height: 300px;
  max-width: 300px;
  float: left;
  position: relative;
  border-radius: 50%;
}

.thumb {
  background: #ffffff;
  border: 2px solid #40bf97;
  border-radius: 50%;
  position: absolute;
  top: -3px;
  cursor: pointer;
  left: 137px;
  width: 24px;
  z-index: 2000;
  height: 24px;
}

.dot {
  left: inherit !important;
  top: 0 !important;
  z-index: 100;
  text-align: center;
  overflow: hidden;
  position: absolute;
  right: 0;
  width: 50%;
  height: 50%;
  transform-origin: 0% 100%;
}

.dot:after {
  content: '';
  border-left: 1px solid #40bf97;
  display: table-cell;
  height: 42px;
  left: 0;
  position: absolute;
}

.text {
  padding-top: 15px;
}

.flip.text span {
  top: 5px;
}

.active .flip.text span {
  top: 18px !important;
}

.active h1 div.text {
  background-color: #26d9a0;
  color: #fff;
  padding: 15px;
  height: 8px !important;
}

.active .curve {
  position: relative;
  top: -12px;
  width: 178px;
  height: 25px;
  border: solid 18px #40bf97;
  border-color: #40bf97 transparent transparent transparent;
  padding: 0;
  border-radius: 50%/58px 58px 0 0;
  margin: 0 auto;
}

.active .flip-curve.curve {
  top: -14px !important;
}

h1 span {
  line-height: 0.65;
  white-space: pre;
  overflow: visible;
  padding: 0px;
}

.flip {
  transform: rotate(180deg);
}

.dot h1 {
  position: absolute;
  left: -100%;
  width: 200%;
  height: 200%;
  text-align: center;
  transform: skewY(45deg) rotate(22.5deg);
  font-family: Corbel, "Segoe Ui", "Trebuchet Ms", sans-serif;
  font-weight: bold;
  margin: 0;
  font-size: 12px;
  text-transform: uppercase;
  line-height: 0;
  cursor: pointer;
}

.dot:first-child {
  transform: rotate(337.5deg) skewY(-45deg);
}

.dot:nth-child(2) {
  transform: rotate(22.5deg) skewY(-45deg);
}

.dot:nth-child(3) {
  transform: rotate(67.5deg) skewY(-45deg);
}

.dot:nth-child(4) {
  transform: rotate(112.5deg) skewY(-45deg);
}

.dot:nth-child(5) {
  transform: rotate(157.5deg) skewY(-45deg);
}

.dot:nth-child(6) {
  transform: rotate(202.5deg) skewY(-45deg);
}

.dot:nth-child(7) {
  transform: rotate(247.5deg) skewY(-45deg);
}

.dot:nth-child(8) {
  transform: rotate(292.5deg) skewY(-45deg);
}


</Style>


    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>
    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div class="header-top_area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-md-12 col-lg-8">
                            <div class="short_contact_list">
                                <ul>
                                    <li><a href="#"> <i class="fa fa-phone"></i> (+1) 5104496970</a></li>
                                    <li><a href="#"> <i class="fa fa-envelope"></i>parifoundation.usa@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6 col-lg-4">
                            <div class="social_media_links d-none d-lg-block">
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-instagram"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo">
                                <a href="index.html">
                                <img src="admin/logo/parilogo.png" alt="logo" width="50px" height="50px">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index.html">home</a></li>
                                       
                                        <li><a href="#">About <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                            <li><a href="blog.html">About Us</a></li>
                                                <li><a href="blog.html">People behind Pari</a></li>
                                                <li><a href="single-blog.html">Impact</a></li>
                                                <li><a href="blog.html">Reach & Presence</a></li>
                                                <li><a href="single-blog.html">Civic Driven Change</a></li>
                                                
                                               
                                            </ul>
                                        </li>
                                        <li><a href="#">Our Work <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Education</a></li>
                                                <li><a href="single-blog.html">Plantation</a></li>
                                                <li><a href="blog.html">Women Empoerment</a></li>
                                                <li><a href="single-blog.html">Health</a></li>
                                                <li><a href="#">Resource Center <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Our Blog</a></li>
                                                <li><a href="single-blog.html">Newsletter</a></li>
                                                <li><a href="blog.html">Annual Report</a></li>
                                                <li><a href="blog.html">Smiles we got</a></li>
                                                
                                            </ul>
                                        </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Get Involved <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Become a volunteer</a></li>
                                                <li><a href="single-blog.html">School Partnership</a></li>
                                                <li><a href="blog.html">Sponsorships</a></li>
                                                <li><a href="single-blog.html">Adopt a Project</a></li>
                                                
                                            </ul>
                                        </li>
                                        
                                        <li><a href="#">Achievements <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="elements.html">Impact</a></li>
                                                <li><a href="Cause.html">Awards</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                                <div class="Appointment">
                                    <div class="book_btn d-none d-lg-block">
                                        <a data-scroll-nav='1' href="#">Make a Donate</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
    


<!-- women empwerment stats start -->
<section class="bg-white pt-4 ">
            <div class="container max-w-screen-xl mx-auto px-4">
                <div class="flex flex-col lg:flex-row justify-between space-x-16">
                    <div class="flex justify-center lg:justify-start">
                        <img src="img/feature-img1.png" alt="Image">
                    </div>

                    <div class="mt-16">
                    <span class="block  text-lg  font-semibold text-green-600">
              Our Milestones
               </span>
               <h2
                  class="mb-3 text-3xl font-bold text-black  sm:text-[40px]/[48px] "
                  >
                 Women Empowerment
               </h2>

                        <div class="grid grid-cols-1 md:grid-cols-2 md:space-x-20 mb-2">
                            <div class="mb-5 md:mb-0">
                            <div class="w-20 py-6 flex justify-center bg-red-500 bg-opacity-5 rounded-xl mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-award text-red-500"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
                                </div>

                                <h3 class="font-semibold text-gray-900 text-xl md:text-3xl mb-4">
                                    10000+
                                </h3>

                                <p class="font-light text-gray-400 text-md md:text-lg">
                                    Fundraising campaign in <br>
                                    all time
                                </p>
                            </div>

                            <div>
                                <div class="w-20 py-6 flex justify-center bg-red-500 bg-opacity-5 rounded-xl mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-award text-red-500"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
                                </div>

                                <h3 class="font-semibold text-gray-900 text-xl md:text-3xl mb-4">
                                    $120M+
                                </h3>

                                <p class="font-light text-gray-400 text-md md:text-lg">
                                    Raised and counting <br>
                                    donations in all time
                                </p>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 md:space-x-20">
                            <div class="mb-5 md:mb-0">
                                <div class="w-20 py-6 flex justify-center bg-yellow-500 bg-opacity-5 rounded-xl mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users text-yellow-500"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                </div>

                                <h3 class="font-semibold text-gray-900 text-xl md:text-3xl mb-4">
                                    1200+
                                </h3>

                                <p class="font-light text-gray-400 text-md md:text-lg">
                                    Our volunteer around the <br>
                                    world
                                </p>
                            </div>

                            <div>
                                <div class="w-20 py-6 flex justify-center bg-green-500 bg-opacity-5 rounded-xl mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up text-green-500"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                                </div>

                                <h3 class="font-semibold text-gray-900 text-xl md:text-3xl mb-4">
                                    98%
                                </h3>

                                <p class="font-light text-gray-400 text-md md:text-lg">
                                    Positive review from <br>
                                    public
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
     
        </section>
        <!-- women empwerment stats end -->





	<!-- why women empowerment -->
	<section class="pb-10 lg:px-20 ">
		<div class="container box_1170">
			<h3 class="text-heading">Why women empowerment</h3>
			<p class="sample-text">
                
Women empowerment is a crucial societal imperative that transcends gender considerations, emphasizing the need for equality, justice, and the full realization of human potential. It involves granting women the tools, resources, and opportunities necessary to participate actively in all spheres of life, from education and employment to decision-making processes. By empowering women, we contribute to the overall progress and development of communities and nations. The promotion of gender equality fosters diversity and enriches perspectives, driving innovation and sustainable growth. Beyond the moral imperative, studies consistently show that societies benefiting from women's empowerment experience improved economic performance, enhanced social cohesion, and increased resilience. Therefore, supporting and championing women empowerment is not only a matter of ethical responsibility but also a strategic investment in building a more equitable, prosperous, and harmonious world.
            </p>
		</div>
	</section>
	<!-- why women empowerment -->





    
	<!-- what we do in women empowerment -->
	<section class=" lg:px-20 mb-10">
		<div class="container box_1170">
			<h3 class="text-heading">What we do in women empowerment</h3>
			<p class="sample-text">
            In the pursuit of women empowerment, our efforts are directed towards creating an inclusive environment that facilitates the holistic development of women. We prioritize educational initiatives to ensure equal access to quality education, enabling women to acquire the knowledge and skills needed for personal and professional growth. Additionally, we actively promote economic opportunities for women, advocating for fair employment practices and entrepreneurial support. Through mentorship programs, workshops, and networking events, we strive to build a strong support system that empowers women to overcome challenges and reach their full potential. Our commitment extends to advocating for gender-inclusive policies and fostering a culture that values and respects diversity. By addressing systemic barriers and promoting a culture of inclusivity, we aim to contribute to a society where women are empowered to make meaningful contributions and lead with confidence in various aspects of life. </p>
		</div>
	</section>
	<!-- what we do in women empowerment -->



<footer class="bg-emerald-50">
  <div class="mx-auto max-w-screen-xl px-4 pb-4 pt-10 sm:px-6 lg:px-8 lg:pt-6">
    <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
      <div>
        <div class="flex justify-center text-teal-600 sm:justify-start">
        <img src="admin/logo/parilogo.png" class="mr-2  h-auto w-14" alt="logo" />
    <h1 class="text-xl font-bold mt-3">Pari Foundation</h1>
        </div>

        <p class="mt-6 max-w-md text-center leading-relaxed text-gray-500 sm:max-w-xs sm:text-left">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt consequuntur amet culpa
          cum itaque neque.
        </p>

        <ul class="mt-8 flex justify-center gap-6 sm:justify-start md:gap-8">
          <li>
            <a
              href="/"
              rel="noreferrer"
              target="_blank"
              class="text-teal-700 transition hover:text-teal-700/75"
            >
              <span class="sr-only">Facebook</span>
              <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path
                  fill-rule="evenodd"
                  d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                  clip-rule="evenodd"
                />
              </svg>
            </a>
          </li>

          <li>
            <a
              href="/"
              rel="noreferrer"
              target="_blank"
              class="text-teal-700 transition hover:text-teal-700/75"
            >
              <span class="sr-only">Instagram</span>
              <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path
                  fill-rule="evenodd"
                  d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                  clip-rule="evenodd"
                />
              </svg>
            </a>
          </li>

          <li>
            <a
              href="/"
              rel="noreferrer"
              target="_blank"
              class="text-teal-700 transition hover:text-teal-700/75"
            >
              <span class="sr-only">Twitter</span>
              <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path
                  d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"
                />
              </svg>
            </a>
          </li>

          <li>
            <a
              href="/"
              rel="noreferrer"
              target="_blank"
              class="text-teal-700 transition hover:text-teal-700/75"
            >
              <span class="sr-only">GitHub</span>
              <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path
                  fill-rule="evenodd"
                  d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                  clip-rule="evenodd"
                />
              </svg>
            </a>
          </li>

          <li>
            <a
              href="/"
              rel="noreferrer"
              target="_blank"
              class="text-teal-700 transition hover:text-teal-700/75"
            >
              <span class="sr-only">Dribbble</span>
              <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path
                  fill-rule="evenodd"
                  d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                  clip-rule="evenodd"
                />
              </svg>
            </a>
          </li>
        </ul>
      </div>

      <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-4 lg:col-span-2">
        <div class="text-center sm:text-left">
               <p class="text-lg font-bold text-gray-900  px-4   transition-transform transform hover:scale-105 hover:-translate-y-1   text-emerald-600 hover:text-emerald-600 text-with-shadow" >
 About Us
</p>

          <ul class="mt-8 space-y-4 text-sm">
            <li>
              <a class="text-gray-700 transition hover:text-gray-700/75" href="/">
               About Us
              </a>
            </li>

            <li>
              <a class="text-gray-700 transition hover:text-gray-700/75" href="/">
               People behind Pari
              </a>
            </li>

            <li>
              <a class="text-gray-700 transition hover:text-gray-700/75" href="/">
                Impact
              </a>
            </li>

            <li>
              <a class="text-gray-700 transition hover:text-gray-700/75" href="/"> Reach & Presence </a>
            </li>
          </ul>
        </div>

        <div class="text-center sm:text-left">
               <p class="text-lg font-bold text-gray-900  px-4   transition-transform transform hover:scale-105 hover:-translate-y-1   text-emerald-600 hover:text-emerald-600 text-with-shadow" >
  Our Works
</p>


          <ul class="mt-8 space-y-4 text-sm">
            <li>
              <a class="text-gray-700 transition hover:text-gray-700/75" href="/">
                Education
              </a>
            </li>

            <li>
              <a class="text-gray-700 transition hover:text-gray-700/75" href="/"> Plantation </a>
            </li>

            <li>
              <a class="text-gray-700 transition hover:text-gray-700/75" href="/"> Women Empowerment </a>
            </li>

            <li>
              <a class="text-gray-700 transition hover:text-gray-700/75" href="/"> Health</a>
            </li>
          </ul>
        </div>

        <div class="text-center sm:text-left">
               <p class="text-lg font-bold text-gray-900  px-4   transition-transform transform hover:scale-105 hover:-translate-y-1   text-emerald-600 hover:text-emerald-600 text-with-shadow" >
Get Involved
</p>

          <ul class="mt-8 space-y-4 text-sm">
            <li>
              <a class="text-gray-700 transition hover:text-gray-700/75" href="/"> Become a Volunteer </a>
            </li>

            <li>
              <a class="text-gray-700 transition hover:text-gray-700/75" href="/"> School Partnership </a>
            </li>
            <li>
              <a class="text-gray-700 transition hover:text-gray-700/75" href="/"> sponsorship </a>
            </li>
            <li>
              <a
                class="group flex justify-center gap-1.5 ltr:sm:justify-start rtl:sm:justify-end"
                href="/"
              >
                <span class="text-gray-700 transition group-hover:text-gray-700/75">
                  Adopt a Project
                </span>

                <span class="relative flex h-2 w-2">
                  <span
                    class="absolute inline-flex h-full w-full animate-ping rounded-full bg-teal-400 opacity-75"
                  ></span>
                  <span class="relative inline-flex h-2 w-2 rounded-full bg-teal-500"></span>
                </span>
              </a>
            </li>
          </ul>
        </div>

        <div class="text-center sm:text-left">
      
               <p class="text-lg font-bold text-gray-900  px-4   transition-transform transform hover:scale-105 hover:-translate-y-1   text-emerald-600 hover:text-emerald-600 text-with-shadow" >
Contact Us
</p>



          <ul class="mt-8 space-y-4 text-sm">
            <li>
              <a
                class="flex items-center justify-center gap-1.5 ltr:sm:justify-start rtl:sm:justify-end"
                href="/"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-5 w-5 shrink-0 text-gray-900"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                  stroke-width="2"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                  />
                </svg>

                <span class="flex-1 text-gray-700">parifoundation.usa@gmail.com</span>
              </a>
            </li>

            <li>
              <a
                class="flex items-center justify-center gap-1.5 ltr:sm:justify-start rtl:sm:justify-end"
                href="/"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-5 w-5 shrink-0 text-gray-900"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                  stroke-width="2"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
                  />
                </svg>

                <span class="flex-1 text-gray-700">(+1) 5104496970</span>
              </a>
            </li>

            <li
              class="flex items-start justify-center gap-1.5 ltr:sm:justify-start rtl:sm:justify-end"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 shrink-0 text-gray-900"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                />
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"
                />
              </svg>

              <address class="-mt-0.5 flex-1 not-italic text-gray-700">
              1599 MOUNT SHASTA AVE
MILPITAS, CA, 95035-6934
              </address>
            </li>
          </ul>
        </div>
      </div>
    </div>

 
  </div>

<div class=" flex flex-col md:flex-row md:justify-between items-center text-sm text-white bg-emerald-600 py-4 ">
    <a href="https://atomsdigitalsolutions.atomsgroup.net/" class="order-2 md:order-1 mt-10 lg:px-20 md:mt-0 z-999 hover:text-cyan-400"> ©   Made with ❤️ by Atoms Digital Solutions </a>
    <div class="order-1 md:order-2 flex justify-center z-999 md:mr-10">
    <p class="text-sm text-gray-500">
            <span class="block sm:inline text-white">All rights reserved.</span>

            <a class="inline-block text-white underline transition hover:text-teal-600/75" href="/">
                Terms & Conditions
            </a>

            <span>&middot;</span>

            <a class="inline-block text-white underline transition hover:text-teal-600/75" href="/">
                Privacy Policy
            </a>
        </p>
    </ul>
</div>
</div>

</footer>