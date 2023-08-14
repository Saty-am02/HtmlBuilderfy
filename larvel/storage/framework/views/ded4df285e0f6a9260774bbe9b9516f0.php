<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML BUILDERFY</title>
    <link rel="stylesheet" href="<?php echo e(asset('frontend/about.css')); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald&display=swap" rel="stylesheet">
</head>

<body>
    <header id="header">
        <div class="image">
            <img src="<?php echo e(asset('frontend/img/logo.png')); ?>" alt="image is there">
        </div>
        <div class="navigation">
            <ul class="navigation">
                <li><a href="<?php echo e(url('/about')); ?>" class="active">.about()</a></li>
                <li><a href="<?php echo e(url('/index1')); ?>">.is()</a></li>
            </ul>
        </div>
    </header>

    <div class="-black" ></div>

    <section id="leader">
        <div class="spine">
            <div class="circle"></div>
        </div>
      
        <div class="std" id="std"  style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
            <a href="<?php echo e(url('/satyam')); ?>">
            <span class="hb" title="Click on me">Satyam</span>
            <span class="is">Tiwari</span>
            </a>
            <p class="-purple">Team Leader</p>
            <p class="-gray">Documentaion,UX/UI Design,Frontend & Backend Upholder,SRS</p>
            <p class="-gray">langaues used: Html,Scss,Css & Tailwind,Javascript,React</p>
        </div>
      
        <div class="std" id="std" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
            <a href="<?php echo e(url('/dhaivat')); ?>">
            <span class="hb">Dhaivat</span>
            <span class="is">Parmar</span>
            </a>
            <p class="-purple">Backend Devloper</p>
            <p class="-gray">DataBase Design,UML Diagrams,Backend Upholder</p>
            <p class="-gray">langaues used: Node js(Express Framework),PHP(Larvel),Javascript</p>
        </div>
        
        <div class="std" id="std" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
            <a href="<?php echo e(url('/sneha')); ?>">
            <span class="hb">Sneha</span>
            </a>
            <!-- <span class="is"></span> -->
            <p class="-purple">Backend Devloper</p>
            <p class="-gray">UML Diagrams,Backend Devlopement</p>
            <p class="-gray">langaues used: Node js(Express Framework),PHP(Larvel)</p>
            <svg xmlns="http://www.w3.org/2000/svg" id="octo" height="400" width="200" viewBox="0 0 100 100" aria-labelledby="octoDesc">
                <desc id="octoDesc">
                    A green one-eyed octopus, smiling and swimming around with his little
                    tentacles
                </desc>
                <g class="octo-octo"  data-svg-origin="25.776517868041992 1.9618823528289795"
                    transform="matrix(0.99999,0.00061,-0.00061,0.99999,-0.14028869323641102,12.648776808913063)">
                    <path fill="none" stroke="#00c7c7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                        stroke-width="8.301" class="octo-arm-6">
                        <animate dur="1.01s" repeatCount="indefinite" attributeName="d" values="M27.4 44s6.3 13.4 14 1.8;
                           M27.4 77.2s6.3-19.8 14-31.4;
                           M27.4 44s6.3 13.4 14 1.8;" calcMode="spline" keySplines="0.455 0.03 0.515 0.955;
                           0.455 0.03 0.515 0.955"></animate>
                    </path>
                    <path fill="none" stroke="#00c7c7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                        stroke-width="8.301" class="octo-arm-5">
                        <animate dur="1s" repeatCount="indefinite" attributeName="d" values="M27.4 50.8s9.3 11.4 17.6-.9;
                           M32.1 86.8s4.5-24.6 12.8-36.9;
                           M27.4 50.8s9.3 11.4 17.6-.9;" calcMode="spline" keySplines="0.455 0.03 0.515 0.955;
                           0.455 0.03 0.515 0.955"></animate>
                    </path>
                    <path fill="none" stroke="#00c7c7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                        stroke-width="8.301" class="octo-arm-4">
                        <animate dur="1.02s" repeatCount="indefinite" attributeName="d" values="M34.2 56.9s10.5 9.2 14.6-4.7;
                           M40.3 92.7s4.4-26.6 8.6-40.5;
                           M34.2 56.9s10.5 9.2 14.6-4.7;" calcMode="spline" keySplines="0.455 0.03 0.515 0.955;
                           0.455 0.03 0.515 0.955"></animate>
                    </path>
                    <path fill="none" stroke="#00c7c7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                        stroke-width="8.301" class="octo-arm-3">
                        <animate dur=".99s" repeatCount="indefinite" attributeName="d" values="M72.8 51.9s-11.4 10.8-14.7-2.7;
                           M62.6 86.8s-1.2-24.1-4.5-37.6;
                           M72.8 51.9s-11.4 10.8-14.7-2.7" calcMode="spline" keySplines="0.455 0.03 0.515 0.955;
                           0.455 0.03 0.515 0.955"></animate>
                    </path>
                    <path fill="none" stroke="#00c7c7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                        stroke-width="8.301" class="octo-arm-2">
                        <animate dur="1s" repeatCount="indefinite" attributeName="d" values="M68.7 57.5s-11.6 8.8-15.4-5.6;
                           M57 92.7s.1-26.4-3.7-40.8;
                           M68.7 57.5s-11.6 8.8-15.4-5.6;" calcMode="spline" keySplines="0.455 0.03 0.515 0.955;
                           0.455 0.03 0.515 0.955"></animate>
                    </path>
                    <path fill="none" stroke="#00c7c7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                        stroke-width="8.301" class="octo-arm-1">
                        <animate dur="1.03s" repeatCount="indefinite" attributeName="d" values="M58.7 65.5s-9.9 9.3-9.9-12.7;
                           M47.8 93.9s1.1-19.1 1.1-41.1;
                           M58.7 65.5s-9.9 9.3-9.9-12.7;" calcMode="spline" keySplines="0.455 0.03 0.515 0.955;
                           0.455 0.03 0.515 0.955"></animate>
                    </path>
                    <g class="octo-head">
                        <ellipse cx="54.1" cy="31.9" fill="#00c7c7" rx="25.7" ry="23.6"
                            transform="rotate(-78.217 54.138 31.903)"></ellipse>
                        <path fill="none" stroke="#004e88" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.038"
                            d="M60.2 45.3c-.7 3.3-5 5.3-9.5 4.3-4.6-.9-7.7-4.5-7.1-7.8"></path>
                        <g class="octo-eye" style="transform-origin: 0px 0px 0px;"
                            data-svg-origin="54.46403121948242 30.635750770568848" transform="matrix(1,0,0,1,0,0)">
                            <ellipse cx="54.5" cy="30.6" fill="#fff" rx="12.2" ry="11.7"
                                transform="rotate(-78.217 54.504 30.64)"></ellipse>
                            <ellipse cx="54.5" cy="30.9" fill="#003456" rx="4.5" ry="4.3"
                                transform="rotate(-78.217 54.49 30.873)"></ellipse>
                            <ellipse cx="57" cy="29.9" fill="#fff" rx="1.1" ry="1.1"></ellipse>
                        </g>
                    </g>
                </g>
            </svg>
        </div>
        <div class="std" id="std" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
            <a href="<?php echo e(url('/divyanka')); ?>">
            <span class="hb">Divyanka</span>
            <span class="is">Mishra</span>
            </a>
            <p class="-purple">Frontend Devloper</p>
            <p class="-gray">Frontend Devlopement,Portfolios Replicas</p>
            <p class="-gray">langaues used: Html,Css,Tailwind,Bootstrap,Javascript</p>
            
        </div>
        <div class="std" id="std" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
            <a href="<?php echo e(url('/subramanya')); ?>">
            <span class="hb">Subhramnya</span>
            <span class="is">Hegde</span>
            </a>
            <p class="-purple">Frontend Devloper</p>
            <p class="-gray">Frontend Devlopement</p>
            <p class="-gray">langaues used: Html,Css,Javascript</p>
        </div>
        <div class="std" id="std" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
            <a href="<?php echo e(url('/prasanna')); ?>">
            <span class="hb">Prashanna</span>
            <span class="is">Hegde</span>
            </a>
            <p class="-purple">Frontend Devloper</p>
            <p class="-gray">Frontend Devlopement</p>
            <p class="-gray">langaues used: Html,Css,Javascript</p>
        </div>
        <div class="std" id="std" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
            <a href="#leader">
    
                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" fill="#682AE9" data-name="Layer 1" viewBox="0 0 24 24" width="51"
                    height="512" rotate="30deg">
                    <path
                        d="M18,8.5a2.5,2.5,0,0,1-5,0A2.5,2.5,0,0,1,18,8.5Zm-.006,6.866a11.065,11.065,0,0,1-1.163,4.569A7.634,7.634,0,0,1,10,24H9V18.5A3.517,3.517,0,0,0,5.5,15H0V14A7.634,7.634,0,0,1,4.065,7.169,11.065,11.065,0,0,1,8.634,6.006,15.487,15.487,0,0,1,20.972,0h0A3.009,3.009,0,0,1,24,3,15.507,15.507,0,0,1,17.994,15.366ZM2.084,13H4.346A34.361,34.361,0,0,1,6.955,8.237a8.993,8.993,0,0,0-1.993.72A5.519,5.519,0,0,0,2.084,13Zm13.679,4.045A34.361,34.361,0,0,1,11,19.654v2.262a5.519,5.519,0,0,0,4.043-2.878A8.993,8.993,0,0,0,15.763,17.045ZM22,2.972A1,1,0,0,0,21,2c-5.16.147-8.65,2.124-12.018,6.822a29.92,29.92,0,0,0-2.471,4.271,5.5,5.5,0,0,1,4.4,4.4,29.92,29.92,0,0,0,4.271-2.471C19.876,11.65,21.853,8.16,22,2.972ZM6.122,17.879a3.015,3.015,0,0,1,0,4.242c-.907.906-3.622,1.465-4.748,1.664l-1.406.247.247-1.406c.2-1.126.758-3.841,1.664-4.748A3.073,3.073,0,0,1,6.122,17.879ZM5,20a.993.993,0,0,0-.293-.707,1,1,0,0,0-1.414,0A7.318,7.318,0,0,0,2.5,21.5a7.342,7.342,0,0,0,2.208-.794A.993.993,0,0,0,5,20Z" />
                </svg>
            </a>
            </div>
        <div class="std" id="std" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">

            <span class="hb">Prashanna</span>
            <span class="is">Hegde</span>
            <p class="-purple">Frontend Devloper</p>
            <p class="-gray">Frontend Devlopement</p>
            <p class="-gray">langaues used: Html,Css,Javascript</p>
        </div>

    </section>
    <!-- <script>
        $(document).ready(function() {
           $("span").css({
                "background-color": "green",
                "color": "red"
            });
            $("p").css({
                "background-color": "green",
                "color": "red"
            });
        });
    </script> -->
   
    <div class="-black2"></div>
    <svg xmlns="http://www.w3.org/2000/svg" id="dino" viewBox="0 0 100 100" aria-labelledby="dinoDesc" height="600" width="600" visibility:="" inherit;="" opacity:="" 1;="" onClick="document.getElementById('audi').play(); return false;">
          <desc id="dinoDesc" onscroll="dino()">
              A purple dinosaur with a red headset, listening and dancing to the music
          </desc>
          <g class="dino-dino">
              <g class="dino-l-arm" data-svg-origin="36.195858001708984 54.499996185302734"
                  transform="matrix(1,0,0,1,0,1.3858328601840775)">
                  <path fill="none" stroke="#7f4fb2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                      stroke-width="5.138" d="M55,63.8c0,0-8,2.9-12.6,0.9s-6.3-6.3-6.2-10.2"></path>
              </g>
              <g class="dino-tail" style="transform-origin: 0px 0px 0px;"
                  data-svg-origin="64.87775802612305 78.39898681640625"
                  transform="matrix(0.97549,0.22001,-0.22001,0.97549,18.83882214021753,-12.353098574667243)">
                  <path fill="#7f4fb2"
                      d="M69 74.1c5.7.7 10.7-1.8 12.8-3 .5-.3 1.1.1 1 .7-1.8 11.9-23.1 13.6-23.9 14L69 74.1z"></path>
              </g>
              <g class="dino-l-leg" style="transform-origin: 0px 0px 0px;"
                  data-svg-origin="49.81098175048828 94.91090393066406"
                  transform="matrix(1,0,-0.27479,0.9615,26.081363772991857,3.65389242646998)">
                  <path fill="#7f4fb2"
                      d="M55.3 93.6c-.2-2.2-.4-6.9-.1-10.7.2-2-1.2-3.7-3.2-4-1.8-.3-3.5.9-4 2.6l-3.6 11.8c-.3.8.3 1.6 1.2 1.6H54c.8.1 1.3-.5 1.3-1.3z">
                  </path>
              </g>
              <g class="dino-head" style="transform-origin: 0px 0px 0px;" data-svg-origin="76.02258262634277 87.5"
                  transform="matrix(0.99433,0.10627,-0.10627,0.99433,9.729877968031857,-7.583964885069207)">
                  <g class="dino-back-hair">
                      <path fill="#002c58" d="M59.6 15.7S59.7 7 56.8 7s-7 7.4-7 7.4l9.8 1.3z"></path>
                      <path fill="#002c58" d="M66.5 19.7s2.3-8.4-.5-9.1-8.6 5.4-8.6 5.4l9.1 3.7z"></path>
                  </g>
                  <path fill="#e7edf1" d="M47.1 48.6H44l1.2 2.7c.1.3.6.3.7 0l1.2-2.7z" class="teeth1"
                      ></path>
                  <path fill="#ab63d6"
                      d="M66.5 53c-.9-2.1-1.2-5.3-1.2-8.9 0-7.4 1.5-16.6 2.1-22.1.3-2.5-1.3-4.9-3.8-5.5-2.7-.6-6.6-1.5-10.8-2-10.8-1.2-24.7-.5-31.3 10-1.8 2.8-8 17.9-1.1 21.7 5.6 3 24.3 3.4 30.1 2.7-.3 4-11.5 10.7-11.5 22.3 0 9.1 7.7 16.3 16.9 16.3 9.3 0 16.9-7.6 16.9-16.9 0-7.4-4.6-13.6-6.3-17.6z">
                  </path>
                  <path fill="#9660c7"
                      d="M67.5 22c-.7 5.4-2.1 14.6-2.1 22.1 0 0-3.8.6-4.8-8.7s7.1-18.6-7.7-20.8h-.1c4.3.5 8.1 1.3 10.8 2 2.5.6 4.2 2.9 3.9 5.4z">
                  </path>
                  <path fill="none" stroke="#002c58" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                      stroke-width=".428" d="M47.7 49.1c9 .1 12.9-2 14-5.5" class="mouth-chillout" >
                  </path>
                  <path fill="none" stroke="#002c58" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                      stroke-width=".428" d="M54.6,47.1c-0.6,0-0.7,1-3,1" class="mouth-fuck-yeah"style="display: none;"  ></path>
                  <path fill="#e7edf1" d="M47.7 49.1l1.6 3c.2.3.7.3.9 0l1.2-2.6.2-.5-3.9.1z" class="teeth2"
                    ></path>
                  <g class="dino-headphone" id="dino-headphone" style="transform-origin: 0px 0px 0px;"
                      data-svg-origin="43.715554809570314 15.66422233581543"
                      transform="matrix(1.09899,0,0,1.09899,-4.32783992614722,-1.5507580112456392)">
                      <path fill="#ff0110" d="M71.5 28.1l.6-3.5-6.2-.6-.9 3.8 6.5.3z"></path>
                      <path fill="#ff0110"
                          d="M61.1 35.1c0 7.9 6.3 8 8.5 8 3.5 0 4.1-3.6 4.1-8s-.6-8-4.1-8c-4.1 0-8.5.9-8.5 8z"></path>
                      <path fill="#ff5153" d="M63.8 35.1c0 4.5 2.3 8 5.8 8 3 0 6.3-3.6 6.3-8s-2.8-8-6.3-8-5.8 3.5-5.8 8z">
                      </path>
                      <path fill="#ff5153"
                          d="M33.4 15.7c-.4-.4-.4-.7-.3-1.2 2.1-12.1 24.2-7.2 34-3.8 8.3 3 6.7 11 5.8 14-.2.7-.9 1.1-1.5 1l-4.4-.3h-.7c-.9-.1-1.6-1-1.3-1.9.5-1.4 1-3.4 1.2-5.4.2-2.6-.4-5.1-3-5.9-5.7-1.6-24-7.1-27.2 2.8 0 0-.8.2-1.4.3-.5.2-1.2.4-1.2.4z">
                      </path>
                      <path vector-effect="non-scaling-stroke" fill="none" stroke="#fff" stroke-linecap="round"
                          stroke-linejoin="round" stroke-miterlimit="10"
                          d="M76.5 32.5c2.1-1.8 4.4-3.5 6.7-4.9m-10 .5c.7-1.7.8-7.1-.6-8.6m4.6 18.7c2.5-.4 2 .1 2 2.3 2-.8 5.4.3 7.2 1.8m-11.6.8c-4 3.8 3.6 1.8 3 4.3-.3.9-2.5 1.4-2.4 2.5.7.8 1.7 1.2 2.8 1.3"
                          class="dino-sounds"></path>
                  </g>
                  <g class="dino-eye" style="transform-origin: 0px 0px 0px;"
                      data-svg-origin="53.00000071525574 40.299999952316284">
                      <circle cx="53" cy="40.3" r="2.8" fill="#002c58"></circle>
                      <circle cx="53.7" cy="38.7" r=".7" fill="#e7edf1" class="dino-bright" >
                      </circle>
                  </g>
                  <g class="dino-front-hair">
                      <path fill="#002c58"
                          d="M34.8 15.3c-.3-.6-2.8-4.8-4.4-3.7-1.5 1.1-.9 4.8-.8 5.6 1.7-.8 3.4-1.4 5.2-1.9z"></path>
                      <path fill="#002c58"
                          d="M42.2 14.2c-.5-1.1-3.2-6.6-4.8-6-1.4.5-2.1 5.1-2.4 7.1 2.3-.6 4.8-1 7.2-1.1z"></path>
                      <path fill="#002c58" d="M50.8 14.4c-.2-1.4-2-9.4-4.2-9.4-2.3 0-4.1 8-4.3 9.2 2.9-.2 5.8-.1 8.5.2z">
                      </path>
                  </g>
              </g>
              <g class="dino-r-leg" style="transform-origin: 0px 0px 0px;"
                  data-svg-origin="61.91644096374512 94.91090393066406"
                  transform="matrix(1,0,0.27479,0.9615,-26.081363772991864,3.65389242646998)">
                  <path fill="#ab63d6"
                      d="M67.4 93.6c-.2-2.2-.4-6.9-.1-10.7.2-2-1.2-3.7-3.2-4-1.8-.3-3.5.9-4 2.6l-3.6 11.8c-.3.8.3 1.6 1.2 1.6h8.4c.8.1 1.4-.5 1.3-1.3z">
                  </path>
              </g>
              <g class="dino-r-arm" \data-svg-origin="52.70000457763672 59.400001525878906"
                  transform="matrix(1,0,0,1,0,1.1288066810610855)">
                  <path fill="none" stroke="#ae71db" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                      stroke-width="5.138" d="M64.8 59.4s4.1 6.6-.6 8.3c-4.8 1.6-9-.3-11.5-3.3"></path>
              </g>
          </g>
      </svg>
      <audio id="audi">
        <source src="<?php echo e(asset('frontend/music/baby.mp3')); ?>" type="audio/wav">
    </audio>
      <script type="text/javascript">
        let dino = document.getElementById('dino');
        let bird1 = document.getElementById('bird1');
        window.addEventListener('scroll',function(){
            let value = window.scrollY;
            dino.style.left = value * 0.07 + '%';
            dino.style.top =value * 0.9 + 'px';
        })
        </script>
</body>
</html><?php /**PATH C:\xampp\htdocs\Laravel\htnlbuilderfy-app\resources\views/about.blade.php ENDPATH**/ ?>