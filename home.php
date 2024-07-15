  <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" >

    <link rel="stylesheet" href="home.css">
    <style>
      .card:hover i{
  color: black;
}
@keyframes animate{
  95%{
    opacity: 1;
  }
  100%{
    opacity: 0;
    left: 73%;
  }
}
html::-webkit-scrollbar-thumb{
  background: rgb(92, 88, 88);
  border-radius: 5rem;
}

@media only screen and (max-width: 991px) {
  .slide .slide-text {
    font-size: 40px;
  }
  .About .heading h1 {
    font-size: 3.2rem;
  }

  .About .row .about-content h2 {
    font-size: 3rem;
  }

  .About .row .about-content p {
    font-size: 1.4rem;
  }
  .service h1 {
    font-size: 3.2rem;
  }

  .card {
    height: auto;
    padding: 3% 5%;
  }
  .col {
    flex-basis: 33.33%;
  }

  .col:nth-child(2),
  .col:nth-child(3) {
    flex-basis: 33.33%;
  }
}

@media only screen and (max-width: 778px) {
  .slide .slide-text {
    font-size: 30px;

  }
  .About .heading h1 {
    font-size: 3.2rem;
  }
  .About .row .about-image,
  .About .row .about-content {
    flex: 1 1 100%;
  }
  .service h1 {
    font-size: 2.8rem;
  }

  .cards {
    grid-template-columns: repeat(auto-fit, minmax(350px, 2fr));
  }
  .col {
    flex-basis: 25%;
  }

  .col:nth-child(2),
  .col:nth-child(3) {
    flex-basis: 25%;
  }
}

@media only screen and (max-width: 448px) {
  .slide .slide-text {
    font-size: 20px;
  }
  .About .heading h1 {
    font-size: 1.6rem;
  }

  .About .row .about-content h2 {
    font-size: 2.5rem;
  }

  .About .row .about-content p {
    font-size: 1.2rem;
  }
  .service h1 {
    font-size: 1.5rem;
  }

  .cards {
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  }
  .col {
    flex-basis: 15%;
  }

  .col:nth-child(2),
  .col:nth-child(3) {
    flex-basis: 15%;
  }
}
/* Menu Button CSS */
.menu-btn {
      display: none;
      cursor: pointer;
   
    }
.menu-btn i {
  font-size: 24px;
  color: #fff;
}

.navbar {
  display: flex;
}

.navbar.open {
  display: block;
}

@media only screen and (max-width: 991px) {
  .menu-btn {
    display: block;
  }

  .navbar {
    display: none;
    position: absolute;
    top: 80px;
    left: 0;
    width: 100%;
    background: #333;
    padding: 0 0;
    text-align: center;
    z-index: 1;
  }


  .navbar a {
    color: #fff;
    text-decoration: none;
    font-size: 20px;
    transition: all 0.3s ease;
 
  }

  .navbar a:hover {
    color: #007bff;
  }
}
    </style>
    </head>
    <body>
      <header class="header">
        <nav>
          <div class="logo">
            <a href="#">
              <img src="image/mekedonia-logo.jfif" alt="Logo">
            </a>
          </div>
      
          <ul class="navbar" id="navbar">
            <li><a href="#Home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#service">Services</a></li>
            <li><a href="gallary.html">Gallary</a></li>
            <li><a href="signup.php">Be partner</a>
              <li><a href="donate.html">Donate</a>  </li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
           <!-- Menu Icon -->
           <div class="menu-btn" id="menu-icon">
    <i class="fas fa-bars"></i>
  </div>
        </nav>
      </header>
          <section class="home" id="home">
            <main>
              <div class="slideshow-container">
                <div class="slide active">
                  <img src="image/smile.jpg" alt="Photo 1">
                  <h1 class="slide-text">Welcome to Our<br>voluntary Club</h1>
                </div>
                <div class="slide">
                  <img src="image/home.jpg" alt="Photo 2">
                  <h1 class="slide-text">Join Us <br>in Making a Difference</h1>
                </div>
                <div class="slide">
                  <img src="image/tanzania-babies.jpg" alt="Photo 3">
                  <h1 class="slide-text">Together, <br>We Can Change Lives</h1>
                </div>
              </div>
            </div>
            <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
            <button class="next" onclick="changeSlide(1)">&#10095;</button>
          </div>
        
            </main>
          </section>
  <section class="about" id="about">
    <div class="About">
      <div class="heading">
        <h1><span>About</span> Us</h1>
      </div>
      <div class="row">
        <div class="about-image">
          <img src="image/about.jfif" alt="About Image">
        </div>
        <div class="about-content">
          <h2>Our Organization</h2>
          <p>
            Mekidonia is a voluntary organization dedicated to uplifting communities and promoting social welfare in Ethiopia.
             With a mission deeply rooted in compassion and solidarity, Mekidonia endeavors to address various societal challenges
              such as poverty, healthcare disparities, and educational limitations. Through a range of initiatives and programs, 
              including but not limited to, providing medical assistance, educational support, and community development projects,
               Mekidonia strives to make a tangible difference in the lives of individuals and families across Ethiopia. 
               With a strong commitment to service and a vision for a more equitable society,
             Mekidonia continues to inspire hope and foster positive change in communities throughout the region.</p>
        
       </div>
      </div>
    </div>
  </section>
  <!--service section starts-->
<section class="service" id="service">
  <div class="container">
    <div class="service-wrapper">
      <div class="service">
        <h1>our service <span></span></h1>
        <div class="cards">
          <div class="card">
              <i class="fas fa-medkit"></i>
              <h2>Emergency Relief Efforts</h2>
              <p>Providing immediate assistance during crises and disasters.</p>
            </div>
            <div class="card">
              <i class="fas fa-hands-helping"></i>
              <h2>Community Support</h2>
              <p>Empowering local communities through various support initiatives.</p>
            </div>
            <div class="card">
              <i class="fas fa-graduation-cap"></i>
              <h2>Education Programs</h2>
              <p>Offering educational opportunities for underprivileged children.</p>
            </div>
            <div class="card">
              <i class="fas fa-heartbeat"></i>
              <h2>Healthcare Services</h2>
              <p>Ensuring access to basic healthcare services for vulnerable populations.</p>
            </div>
            <div class="card">
              <i class="fas fa-home"></i>
              <h2>Shelter Assistance</h2>
              <p>Providing temporary housing solutions for those in need.</p>
            </div>
            <div class="card">
              <i class="fas fa-tree"></i>
              <h2>Environmental Conservation</h2>
              <p>Promoting sustainability and environmental awareness.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--service part end-->

<!--footer section start-->
<footer>
  <div class="roww">
  <div class="col">
  <img src="image/mekedonia-logo.jfif" class="logo" alt="logo">
    <p>Thank You for visit our website</p>
  </div>

  <div class="col">
    <h3>LOCATION <div class="underline"><span></span></div>
    </h3>
    <p>ayat condominium,adiss abeba</p>
    <p>Adama</p>
    <p>Harer</p>
    <p>Arbamch, and other place to know all information contact us</p>
     <p class="email-id">mekidonia2024@gmail.com</p>
     <h4>0116452561</h4>
  </div>
  <div class="col">
    <h3>links<div class="underline"><span></span></div></h3>
<ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#service">Services</a></li>
            <li><a href="#gallery">Gallary</a></li>
            <li><a href="signup.php">Be partner</a>
              <li><a href="donate.php">Donate</a>  </li>
            <li><a href="#Contact">Contact</a></li>
          </ul>
  </div>
  <div class="col">
    <h3>newsletter<div class="underline"><span></span></div></h3>
    <form>
      <i class="far fa-envelope"></i>
      <input type="text" name="email" id="email" placeholder="please enter your email" required>
    <button type="submit"> <i class="fas fa-arrow-right"></i></button>
    </form>
    <div class="social-icons">
<i class="fab fa-facebook"></i>
<i class="fab fa-twitter"></i>
<i class="fab fa-whatsapp"></i>
<i class="fab fa-telegram"></i>
    </div>
  </div>
  </div>
  <hr>
  <p class="copyright"> Mekidonia vlountary club © 2024- All Right Reserved.</p>
</footer>
<!--footer section end-->
  <script src="home.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>
