<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>personal portfolio website of Html buildfy</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{asset('frontend/pstyle.css')}}">

</head>
<body> 
<!-- header section starts  -->
<header>
    <div class="user">
        <img src="{{asset('frontend/img/Portfolio/sirsatyam.jpg')}}" alt="">
        <h3 class="name">Satyam Tiwari</h3>
        <p class="post">Developer</p>
    </div>

    <nav class="navbar">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#education">Education</a></li>
            <li><a href="#portfolio">Skills</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="{{url('/about')}}">Go Back!</a></li>

        </ul>
    </nav>

</header>

<!-- header section ends -->

<div id="menu" class="fas fa-bars"></div>

<!-- home section starts  -->

<section class="home" id="home">

    <h3>HI THERE !</h3>
    <h1>I'M <span>Satyam Tiwari</span></h1>
    <p>

        Hello and welcome to my portfolio!, I am a recent graduate with a passion for Computer Science. While I may be new to the industry, I am enthusiastic and eager to learn.

        Throughout my education, I have gained valuable experience in diffrent programing Languages. I am confident that these experiences have prepared me well for a career in IT field.
        
        In this portfolio, you will find examples of my work, including [Cambly,InstrumentalPedia,HtmlBuilderfy]. Although I may not have as much experience as some other professionals in the field, I am committed to working hard and continuing to develop my skills.
        
        Thank you for taking the time to visit my portfolio. I am excited to see what opportunities lie ahead and to showcase my potential. If you have any questions or would like to discuss a potential project or opportunity, please don't hesitate to contact me.<br>
        
    </p>
    <a href="#about"><button class="btn">About me <i class="fas fa-user"></i></button></a>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

<h1 class="heading"> <span>About</span> me </h1>

<div class="row">

    <div class="info">
        <h3> <span> Name : </span>Satyam Tiwari</h3>
        <h3> <span> Age : </span> 22 </h3>
        <h3> <span> Qualification : </span> MCA </h3>
        <h3> <span> Post : </span>  developer </h3>
        <h3> <span> Language : </span> Hindi / English </h3>
        <a href="images/resume_anurag.pdf" target="_blank"><button class="btn"> Download Resume <i class="fas fa-download"></i> </button></a>
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
           Studied from KIDS CARE HR.SEC, SCHOOl
        </p>
        <p>
            Grade - 77.33% 
        </p>
    </div>

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2018-2019</span>
        <h3>Higher Secondary</h3>
        <p>
            Studied from KIDS CARE HR.SEC, SCHOOl

        </p>
        <p>Grade - 75.5%</p>
    </div>

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2022-present</span>
        <h3>MCA (Pursuing)</h3>
        <p>
            Studying in Manipal Institute of technology(MIT), Karnataka Udupi(Manipal)
        
        </p>
        <span>2019-2022</span>
        <h3>B.SC (Computer Science)</h3>
        <p>
            Studied from ST.Aloysius Institute of technology 
        </p>
        <p>Grade - 70%</p>
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

<h1 class="heading"> My <span> Certifications</span> </h1>

<div class="box-container">

    
    <div class="box">
        <img src="./img/Screenshot 2023-04-08 at 11.06.23 PM.png" alt="">
    </div>
    <div class="box">
     
        <!-- <img src="https://drive.google.com/file/d/1DRo633mL0CRtlJH2nfPaq0SObZaEsvKC/view?usp=sharing" alt="mobile app Development"> -->
        <img src="./img/Screenshot 2023-04-08 at 11.06.04 PM.png"  ></img>
    </div>
    <div class="box">
        <img src="./img/Screenshot 2023-04-08 at 11.06.39 PM.png" alt="">
        
    </div>

  

    <div class="box">
        <img src="./img/android-app-developer-hd-png.png" alt="">
    </div>

    <div class="box">
        <img src="./img/c-logo.png" alt="">
    </div>

    <div class="box">
        <img src="./img/Angular_js.png" alt="">
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
            <h3> <i class="fas fa-envelope"></i> satyamxz02@gmail.com</h3>
            <h3> <i class="fas fa-phone"></i> +91-6265988713 </h3>
            <!-- <h3> <i class="fa-brands fa-linkedin-in"></i> 
                <a href="https://www.linkedin.com/in/divyanka-mishra-134b41203/" target="_blank">Linkedin</a>
                <h3> <i class="fa-brands fa-linkedin-in"></i> 
                <a href="https://profile.indeed.com/?hl=en_IN&co=IN&from=gnav-jobseeker-profile--profile-one-frontend" target="_blank">Indeed</a>
                <h3> <i class="fa-brands fa-linkedin-in"></i> 
                <a href="https://github.com/divyanka66" target="_blank">Github</a>
            </h3> -->
            <h3> <i class="fas fa-map-marker-alt"></i> Katni(M. P.) Pin-code: 483501 </h3>
        </div>
    </div>
    <form action="https://formspree.io/f/xnqyonlg"
    method="POST">
        <input name="name" type="text" placeholder="name" class="box" required autocomplete="off">
        <input name="email" type="email" placeholder="email" class="box" required autocomplete="off">
        <input name="project" type="text" placeholder="project" class="box" required autocomplete="off">
        <textarea name="message" id="" cols="30" rows="10" class="box message" placeholder="message" required autocomplete="off"></textarea>
        <button type="submit" class="btn"> send <i class="fas fa-paper-plane"></i> </button>
    </form>
    <footer>
    <script src="{{asset('frontend/javascript/javascript.js')}}"></script>
    </body>
    </html>