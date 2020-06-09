<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Exagon.</title>


         <!--Bootstrap ETC-->
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
         <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/main.js') }}" defer></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <style>
            html, body {
    margin: 0;
    padding: 0;
    width: 100%;
    scroll-behavior: smooth;
}

            body {
    font-family: "Helvetica Neue",sans-serif;
    font-weight: lighter;
    
}


            header {
    width: 100%;
    height: 100vh;
    background-image: url("images/d.jpg");
    background-size: cover;
    background-attachment: fixed;
    z-index: 4;


    

    .content {
    width: 94%;
    margin: 4em auto;
    font-size: 20px;
    line-height: 30px;
    text-align: justify;
    height: 20vh;
}

.center{
    font-family: serif;
    font-size: 48px;
    height: 10em;
  width: 12em;
  display: flex;
  flex-direction: column;
  justify-content: center;
  text-align: center;
  color: white;
  position: sticky;
}

.logo {
    line-height: 60px;
    position: fixed;
    float: left;
    margin: 16px 46px;
    color: #fff;
    font-weight: bold;
    font-size: 20px;
    letter-spacing: 2px;
}
.logo:hover{
    color:red;
    cursor: wait;
}

nav {
    position: fixed;
    width: 100%;
    line-height: 60px;
}

nav ul {
    line-height: 60px;
    list-style: none;
    background: rgba(0, 0, 0, 0);
    overflow: hidden;
    color: #fff;
    padding: 0;
    text-align: right;
    margin: 0;
    padding-right: 40px;
    transition: 1s;
}

nav.black ul {
    background:#2f3640;
}

nav ul li {
    display: inline-block;
    padding: 16px 40px;;
}

nav ul li a {
    text-decoration: none;
    color: #fff;
    font-size: 32px;
}

.menu-icon {
    line-height: 60px;
    width: 100%;
    background: #000;
    text-align: right;
    box-sizing: border-box;
    padding: 15px 24px;
    cursor: pointer;
    color: #fff;
    display: none;
}

@media(max-width: 786px) {

    .logo {
          position: fixed;
          top: 0;
          margin-top: 16px;
    }

    .center {
        font-size: 1.875em;
      }

    nav ul {
          max-height: 0px;
          background: #000;
    }

    nav.black ul {
          background: #000;
    }

    .showing {
          max-height: 34em;
    }

    nav ul li {
          box-sizing: border-box;
          width: 100%;
          padding: 24px;
          text-align: center;
          font-size: 24px;
    }
    nav ul li:hover{
        font-size: 38px;
        transition: .5s;
    }

    .menu-icon {
          display: block;
    }

}

.card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 300px;
    margin: auto;
    text-align: center;
    font-family: arial;
    top: 2em;
  }
  
  .title {
    color: grey;
    font-size: 18px;
    top: 3em;
  }
  
  button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
    border-radius: 10px;
  }
  a {
    text-decoration: none;
    font-size: 22px;
    color: black;
  }

  button:hover, a:hover {
    opacity: 0.7;
    border-radius: 10px;
  } 

  #overlay {
    position: fixed; /* Sit on top of the page content */
    width: 0; /* Full width (cover the whole page) */
    height: 100vh; /* Full height (cover the whole page) */
    top: 0;
    left: 0;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.7); /* Black background with opacity */
    z-index: 1; /* Specify a stack order in case you're using a different order for other elements */
    overflow-x: hidden;
    transition: 0.5s;
  }
  #text{
    position: absolute;
    top: 50%;
    left: 50%;
    font-size: 50px;
    color: white;
    transform: translate(-50%,-50%);
    -ms-transform: translate(-50%,-50%);
  }


  /*Cards for the thing*/
  .destacados{
    padding: 20px 0;
	text-align: center;
}
.destacados > div > div{
	padding: 10px;
	border: 1px solid transparent;
	border-radius: 4px;
	transition: 0.2s;
}
.destacados > div:hover > div{
	margin-top: -10px;
	border: 1px solid rgb(200, 200, 200);
	box-shadow: rgba(0, 0, 0, 0.1) 0px 5px 5px 2px;
	background: rgba(200, 200, 200, 0.1);
    transition: 0.5s;
    border-radius: 20px;
}

#profile:hover{
    transform: scale(1.05);
    transition: .5s;
    border-radius: 15px;
    border-color: white;
}
.contact:hover{
    opacity: .5;
    transition: .5s;
}

.close{
    width: 40px;
    height: 40px;
    float: right;
    top: 1em;
    cursor: pointer;
    filter: invert(100%);
    transition: 0.70s;
}
.close:hover{
    transform: rotate(360deg);
}
.home:hover{
    font-size: 36px;
    transition: .5s;
}
.about:hover{
    font-size: 36px;
    transition: .5s;
}
.blog:hover{
    font-size:36px;
    transition: .5s;
}
.contact0:hover{
    font-size:36px;
    transition: .5s;
}
.contact2:hover{
    font-size:36px;
    transition: .5s;
}
.contact3:hover{
    font-size:36px;
    transition: .5s;
}

.divcontent{
    width: 100%;
    height: 100vh;
    background: url(/images/design.jpg) no-repeat 50% 50%;
    background-size: cover;
    background-attachment: fixed;
}
.example{
    position: fixed; /* Sit on top of the page content */
    width: 0; /* Full width (cover the whole page) */
    height: 100vh; /* Full height (cover the whole page) */
    top: 0;
    left: 0;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.7); /* Black background with opacity */
    z-index: 1; /* Specify a stack order in case you're using a different order for other elements */
    overflow-x: scroll;
    transition: 0.5s;
}
}

        </style>
    </head> 
    <body>
      <div class="wrapper">
      <header>
      <div class="logo">
                  EXAGON.
               </div>
            <nav style="z-index: 1;">
               <div class="menu-icon">
                  <i class="fa fa-bars fa-2x"></i>
               </div>
               <ul>
               <div class="menu">
                  <ul>
                     <li><a href="{{ route('home') }}" class="home" style="text-decoration: none;">Home </a></li>
                     <li><a href="{{ route('aboutMe') }}" class="about" style="text-decoration: none;">About</a></li>
                     <li><a href="#" class="blog" style="text-decoration: none;">Blog</a></li>
                     <li><a href="#" class="contact0" style="text-decoration: none;">Contact</a></li>
                     
                <li>
                     @if (Route::has('login'))
                    @auth
                    <a class="home">{{ Auth::user()->name }} <span class="caret"></span></a>
                </li>

                <li>
                    <a href="{{ route('logout') }}" class="home"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                    </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        </form>
                </li>

                @else
                <li>
                    <a href="{{ route('login') }}" class="home">Login</a>
                </li>
                @if (Route::has('register'))

                <li>
                    <a href="{{ route('register') }}" class="home">Register</a>
                </li>

                @endif
                @endauth
                @endif
                  </ul>
               </div>
               </ul>
            </nav>
            <br>
            <br>
            <div class="center" style="text-align: center; top: 20em"><h1>You imagine,<br>We create</h1></div>
         </header>


         <div class="card">
      <img src="images/markus.jpg" alt="User" id="profile" style="width:100%">
      <h1>Markus Reinumäe</h1>
      <p class="title">Photographer</p>
      <p>TBD</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble" onclick="joke()"></i></a> 
    <a href="#"><i class="fa fa-twitter" onclick="joke()"></i></a>  
    <a href="#"><i class="fa fa-linkedin" onclick="joke()"></i></a>  
    <a href="#"><i class="fa fa-facebook" onclick="joke()"></i></a> 
  </div>
  <div id="overlay" onclick="off()">
   <img src="images/close.png" onclick="off()" class="close" alt="">
   <div id="text">
      <h1>Name: Markus Reinumäe</h1>
      <h2>Contact: mreinumae@gmail.com</h2>
   </div>
   </div>
  <p><button onclick="on()" class="contact">Contact</button></p>
</div>

         <div class="content">
            <p style="float: left;">
               Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
            <p style="float: right;">
               Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
         </div>
         <div class="content">
            <div class="container">
               <div class="row destacados">
                  <div class="col-md-4">
                      <div>
                        <img src= "images/programming.jfif" alt="Texto Alternativo" class="img-circle img-thumbnail">
                        <h2>Programming</h2>
                        <p>Interesing web designs</p>
                        <a href="https://www.freecodecamp.org/" class="btn btn-primary" title="Enlace">Learn more»</a>
                     </div>
                  </div>
            
                  <div class="col-md-4">
                     <div>
                        <img src="images/photography.jfif" alt="Texto Alternativo" class="img-circle img-thumbnail">
                        <h2>Photography</h2>
                        <p>Amazing photos</p>
                        <a href="https://www.diyphotography.net/" class="btn btn-primary" title="Enlace">Learn more»</a>
                     </div>
                  </div>
            
                  <div class="col-md-4">
                     <div>
                        <img src="images/design1.jfif" alt="Texto Alternativo" class="img-circle img-thumbnail">
                        <h2>Design</h2>
                        <p>Creating logos</p>
                        <a href="https://www.artun.ee/en/curricula/graphic-design/" class="btn btn-primary" title="Enlace">Learn more»</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="content">My work</div>
      <br><br><br>

      <div class="wrapper divcontent">
         <div class="click" onscroll="click()"></div>
         <h1 style="text-align: center;">Examples</h1>
      </div>
      <script>

      </script>





      <br><br><br>
      <!-- Footer -->
<footer class="page-footer font-small cyan darken-3">
   <!-- Copyright -->
   <div class="footer-copyright text-center py-3">© 2020 Copyright:
     <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
   </div>
   <!-- Copyright -->
 
 </footer>
 <!-- Footer -->
    </body>
</html>
