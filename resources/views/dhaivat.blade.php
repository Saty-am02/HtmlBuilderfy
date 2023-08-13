<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>personal portfolio website of Html buildfy</title>
  

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <script src="https://kit.fontawesome.com/5b25c930f3.js" crossorigin="anonymous"></script>


    <!-- custom css file link  
     custom css file link  -->
    <link rel="stylesheet" href="{{asset('frontend/portfoli/style.css')}}">

</head>
<body>
    
<!-- header section starts  -->

<header>

    <div class="user">
        <img src="{{('frontend/img/portfolio/myphoto_1.jpg')}}" alt="">
        <h3 class="name">Dhaivat Parmar</h3>
        <p class="post">Back-end Developer</p>
    </div>

    <nav class="navbar">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#education">Education</a></li>
            <li><a href="#portfolio">Skills</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

</header>

<!-- header section ends -->

<div id="menu" class="fas fa-bars"></div>

<!-- home section starts  -->

<section class="home" id="home">

    <h3>HI THERE !</h3>
    <h1>I'M <span>Dhaivat Parmar</span></h1>
    <p>
        I'm a Master's of Computer Application Student in Manipal Institute of Technology (MIT)
        karnataka Udupi(Manipal)<br> <br>

         
        Zeal to create ideas & learn, design, and develop the vision. a Tech-Enthusiastic and a quick learner.
        A hardworking and optimistic person. Looking forward to a good opportunity that will help me grow and 
        Enhance my skill and knowledge.This  project really helped me to improve myself in technical skill during this project I learned many new programming language 
        that were very challenging for me but  I'm the student who works with  the strong will power to  the never give up and always try to achieve  goal and professionalism in my work and leraning of various technologies.
        and  try to contribute to open-source platform to help other developer with my knowledge and skills.
        Always waiting for chance to learn something new and enhance my Skill , I like failure in my joureny that will help me to improve myself and  teach  new problem solving techniques.<br>
        
    </p>
    <a href="#about"><button class="btn">About me <i class="fas fa-user"></i></button></a>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

<h1 class="heading"> <span>About</span> me </h1>

<div class="row">

    <div class="info">
        <h3> <span> Name : </span> Dhaivat Parmar</h3>
        <h3> <span> Age : </span> 22 </h3>
        <h3> <span> Qualification : </span> MCA </h3>
        <h3> <span> Post : </span> Back-end developer </h3>
        <h3> <span> Language : </span> Hindi / English </h3>
        <a href="{{asset('frontend/img/Portfolio/dhaivatparmarresume.jpg')}}" target="_blank"><button class="btn"> Download Resume <i class="fas fa-download"></i> </button></a>
    </div>

    <div class="counter">

        <div class="box">
            <span>0</span>
            <h3>Years of experience</h3>
        </div>

        <div class="box">
            <span>1+</span>
            <h3>Project completed</h3>
        </div>

        <div class="box">
            <span>1000+</span>
            <h3>Lines of codes written</h3>
        </div>

        <div class="box">
            <span>3+</span>
            <h3>Leading Functions.</h3>
        </div>

    </div>

</div>

</section>

<!-- about section ends -->

<!-- education section starts  -->

<section class="education" id="education">

<h1 class="heading"> My <span>Qaulification</span> </h1>

<div class="box-container">

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2016-2017</span>
        <h3>Secondary School</h3>
        <p>
           Studied from Shree satya sai vidhayalaya, jamnagar
        </p>
        <p>
            Grade - 71.33% 
        </p>
    </div>

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2018-2019</span>
        <h3>Higher Secondary</h3>
        <p>
            Studied from Shree satya sai vidhayalaya, jamnagar
        </p>
        <p>Grade - 57.69%</p>
    </div>

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2022-present</span>
        <h3>MCA (Pursuing)</h3>
        <p>
            Studying in Manipal Institute of technology(MIT), Karnataka Udupi(Manipal)
        
        </p>
        <span>2019-2022</span>
        <h3>BCA</h3>
        <p>
            Studied from Bhavan's shree H.J.Doshi Information technology institute
        
        </p>
        <p>Grade - 79.80%</p>

    </div>

  <!---
    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2021</span>
        <h3>Certification</h3>
        <p>
            Android app development course completion <br>certified by intershala
        </p>
        <p>
            web development course completion <br>certified by intershala
        </p>


    </div>
    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2021</span>
        <h3>Workshops</h3>
        <p>
            Attended one week tech-week Workshop on "Css Framwork & python" organised by 
            Arouma club Manipal institute of technology (MIT),manipal
            And also Attended 5+ Workshops organised by Arouma.
        </p>
    </div>

</div>-->>
</section>

<!-- education section ends -->

<!-- portfolio section starts  -->

<section class="portfolio" id="portfolio">

<h1 class="heading"> My <span> Technical Skills</span> </h1>

<div class="box-container">

    <div class="box">
     
        <img src="{{asset('frontend/img/portfolio/html5.webp')}}" alt="mobile app Development">
    </div>

    <div class="box">
        <img src="{{asset('frontend/img/portfolio/Java-Logo.png')}}" alt="">
        
    </div>

    <div class="box">
        <img src="{{asset('frontend/img/portfolio/React.png')}}" alt="">
    </div>

    <div class="box">
        <img src="{{asset('frontend/img/portfolio/android-logo.png')}}" alt="">
    </div>

    <div class="box">
        <img src="{{asset('frontend/img/portfolio/c-logo.png')}}" alt="">
    </div>

    <div class="box">
        <img src="{{asset('frontend/img/portfolio/Angular_js.png')}}" alt="">
    </div>

</div>
</section>

<!-- portfolio section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

<h1 class="heading"> <span>Contact</span> Me </h1>

<div class="row">

    <div class="content">

        <h3 class="title">Contact Information</h3>

        <div class="info">
            <h3> <i class="fas fa-envelope"></i> dhaivatparmar13@gmail.com </h3>
            <h3> <i class="fas fa-phone"></i> +91-7485900153 </h3>
            <h3> <i class="fa-brands fa-linkedin-in"></i> 
                <a href="#" target="_blank">Linkedin</a>
               

                <a href="#" target="_blank"></a>
              
                    <h3><i class="fa-brands fa-github"></i><a href="#" target="_blank">Github</a>


            </h3>
            <h3> <i class="fas fa-map-marker-alt"></i> Jamnagar(gujrat ) Pin code: 361001<h3>
        </div>

    </div>

    <form action="https://formspree.io/f/xjvjepgr" method="POST">
        
        <input name="name" type="text" placeholder="name" class="box" required autocomplete="off">
        <input name="email" type="email" placeholder="email" class="box" required autocomplete="off">
        <input name="project" type="text" placeholder="project" class="box" required autocomplete="off">
        <textarea name="message" id="" cols="30" rows="10" class="box message" placeholder="message" required autocomplete="off"></textarea>
        <button type="submit" class="btn"> send <i class="fas fa-paper-plane"></i> </button>
        

    </form>
    <footer style="background-color: #f1a809; width: 1220px; " class="py-10 text-center ">
        <div class="container mx-auto flex justify-between px-4">
          <div style="background-color: #f1a809; font-size: 10px;text-decoration: solid; margin-top: 15px;" class="text-2xl text-center">
          </div>
          <div style="margin-top: 50px;" class="text-lg">
        <a  style="color :white; margin-left: 10px;"href="htlm.html"class=underline></a>
          </div>
          <div class="my-10">
  
            <!--Media buttons-->
      
            <a href="#"  class=" p-3 text-3xl hover:scale-15 animate-bounce text-black items-center"><i class="fa-brands fa-instagram hover:scale-150"></i></a>
            <a href="#"  class="  p-3 text-3xl hover:scale-15 animate-bounce text-black items-center"><i   class="fa-brands fa-github text-center hover:scale-150"></i></a>
            <a href="#"  class=" p-3 text-3xl hover:scale-15 animate-bounce text-black  items-center"  ><i  class=" fa-brands fa-linkedin text-3xl hover:scale-150"></i></a>
            <a href="#"  class=" p-3 text-3xl hover:scale-15 animate-bounce text-black items-center"  ><i class=" fa-brands fa-discord  text-3xl hover:scale-150"></i></a>
          </div>
          <div style="margin-top: 50px; text-align: center;">htmlbuildfy@copyright2023</div>
        </div>
        </div>
      </footer>
      <script src="{{asset('frontend/javascript/javascript.js')}}"></script>
    </body>
    </html>