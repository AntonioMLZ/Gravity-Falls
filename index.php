 <!-- Nicolle si ves esto estare comprimiendo todo el codigo de la pagina por si algo se modifica.. ;)-->

<!-- 
* Linea 94-144 MINI GALERIA 
* linea 199-240 Carrusel de Imagenes de los creadores!
* Linea 246-258 Las Cookies

La galeria de imagenes esta en galeria.php
La galeria de proyectos como autocad y tikercard en proyectos.php
-->

<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gravity Falls </title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="icon"
      href="https://3.bp.blogspot.com/-HAbKTHY5UOA/Vy6YvnRJ8PI/AAAAAAAABRI/PIuvr8jXg9kqe0xKJtnhECU3bqYpI2gSACLcB/s1600/pngpng3.png"
    />
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/simple-ajax-uploader/2.6.7/SimpleAjaxUploader.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/blueimp-file-upload/10.32.0/js/jquery.fileupload.min.js"></script>
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    />

    <link rel="stylesheet" type="text/css" href="./aos/aos.css" />
    <link rel="stylesheet" type="text/css" href="./css/cookie.css" />
		<link rel="stylesheet" type="text/css" href="./css/galeriacrud.css" />

    <meta property="og:type" content="by 6A PROG TV" />
    <meta property="og:title" content="Gravity Falls" />
    <meta
      property="og:description"
      content="ExpoCAD 6A Prog TV"
    />
    <meta property="og:image" content="https://w.wallhaven.cc/full/x1/wallhaven-x1q9od.png"/>
    <meta name="theme-color" content="#22b4b7" />
  </head>

  <body>
    <div id="particles-js"></div>

    <div class="scroll-up-btn">
      <i class="fas fa-angle-up"></i>
    </div>

		<!-- NAVBAR O SISTEMA DE NAVEGACION -->
    <nav class="navbar">
      <div class="max-width">
        <div class="logo">
          <a href="#home">Gravity Falls<span></span></a>
        </div>

        <ul class="menu">
          <li><a href="#home" class="menu-btn">Inicio</a></li>
          <li>
            <a href="#features" class="menu-btn" class="menu-btn">MINI Galeria</a>
          </li>
          <li><a href="#stats" class="menu-btn">Proyectos</a></li>
          <li><a href="#contributors" class="menu-btn">Personal</a></li>
          <li><a href="redes.php" class="menu-btn">Instagram</a></li>
        </ul>
		<!-- FIN DE LA NAVEGACION -->

				
        <div class="menu-btn">
          <i class="fas fa-bars"></i>
        </div>
      </div>
    </nav>

    <section class="home" id="home">
      <div class="max-width">
        <div class="home-content">
          <div class="text-1">Bienvenido a</div>
          <div class="text-2">Gravity Falls</div>
          <div class="text-3">Nosotros somos <span class="typing"></span></div>
          <a class="this-is-pain" href="redes.php">Siguenos</a>
        </div>
      </div>
    </section>

<!-- MINI GALERIA SOLO EDITAR EL (SRC el contenido solo se puede ver .gif, .png, .jpg) -->
		
    <section class="features" id="features">
      <div class="max-width">
        <h2 class="title">Mini Galeria</h2>
        	<div class="features-content">

						
					<div class="containergf">
							<div class="gallery">
								
								<!-- Example CARD -->
								<div class="img-w">
										<img src="https://c.tenor.com/2eYuFmXBLaIAAAAM/bill-cipher-gravity-falls.gif" alt="" />
									</div>
								
  								<div class="img-w">
    								<img src="imges.png" alt="" />
									</div>
								<!-- Example CARD -->
								
  								<div class="img-w">
										<img 	src="https://c.tenor.com/YBgSO6sUEYMAAAAC/giffany-adorable.gif" alt=""/>
									</div>
								
  								<div class="img-w">
										<img src="re.jpeg" alt="" />
									</div>
								
  								<div class="img-w">
										<img src="https://c.tenor.com/xTxyHvkLrt8AAAAS/giffany-disney-gravity-falls.gif" alt="" />
									</div>
								
  								<div class="img-w">
										<img src="start.jpeg" alt="" />
									</div>
								
  								<div class="img-w">
										<img src="https://c.tenor.com/BaVfWSbyOtEAAAAC/giffany-glitch.gif" alt="" />
									</div>
								
  								
									</div>
							</div>
						</div>     
					</div>
          </div>
        </div>
    </section>
<!--FIN DE LA MINI GALERIA -->
		
<!-- Conotaciones -->
		<!-- Line of box that saves with a container the redirections of several pages -->
    
    <section class="stats" id="stats">
      <div class="max-width">
        <h2 class="title">
          Nuestros Proyectos
        </h2>

        <div class="stats-content">
          <div class="card">
             <a href="redirect-gallery.php">
            <div class="box">
              <i class="fa fa-camera"></i>

              <div class="text">Galeria</div>

              <p id="fa fa-camera">49</p>
            </div>
  </a>
          </div>

          <div class="card">
             <a href="proyectos.php" >
            <div class="boxx">
              <i class="fa fa-table"></i>

              <div class="text">Proyectos</div>

              <p id="fa fa-table">20</p>
            </div>
                 </a>
          </div>
          
          <div class="card">
            <a href="redes.php" >
            <div class="box">
              <i class="fa fa-user-circle"></i>

              <div class="text">Instagram</div>

              <p>172</p>

            </div>
            </a>
          </div>
        </div>
      </div>

		<!-- FIN DE LAS Conotaciones -->

			
    </section>

    <section class="contributors" id="contributors">
      <div class="max-width">
          <h2 class="title">
              Personal
          </h2>
          <div class="carousel owl-carousel">

              <div class="cardd">
                  <div class="boxx">
                      <img src="https://images-ext-2.discordapp.net/external/RjLIMta_WmWBaPHwKLPuwzsazEC-ZkGJ4Z3IoMXJhOI/%3Fsize%3D1024/https/cdn.discordapp.com/avatars/903323405951070208/acf9f13fd6b9a51977ca99b321bbab27.png?width=510&height=510" alt>
                      <div class="text">Antonio Mendez</div>
                      <p>
                          <button class="badges owner"><a  class="gamesecret" href="./GAMEreward/_[]jl.php">ADMIN</a></button>
                          <button class="badges developer">Web Desing</button>
                      </p>
                  </div>
              </div>
        <div class="cardd">
          <div class="boxx">
              <img src="https://pps.whatsapp.net/v/t61.24694-24/149372949_1286042118592355_1430450067255657738_n.jpg?ccb=11-4&oh=f2ac5b098103d15916ebf5873ff97513&oe=62A3FE58" alt>
              <div class="text">Geovanni Maldonado        </div>
              
              <p>
                <button class="badges helper">PAGINA</button>
                <button class="badges supporter">Proyectos</button>
              </p>
          </div>
      </div>
        
      <div class="cardd">
        <div class="boxx">
            <img src="https://res.cloudinary.com/ddskoq3no/image/upload/v1653778300/FB_IMG_1653778201335_bnadct.jpg" alt>
            <div class="text">Alejandro Rangel</div>
            
            <p>
              <button class="badges helper">PAGINA</button>
              <button class="badges supporter">Galeria</button>
            </p>
        </div>
    </div>
	<!-- VIDEO -->
						<div class="cardd">
        <div class="boxx">
            <img src="https://res.cloudinary.com/ddskoq3no/image/upload/v1653778114/WhatsApp_Image_2022-05-28_at_5.47.44_PM_uj2u9f.jpg" alt>
            <div class="text">Kevin Alberto</div>
            
            <p>
              <button class="badges helper">GALERIA</button>
              <button class="badges supporter">VIDEO</button>
            </p>
        </div>
    </div>

						<div class="cardd">
        <div class="boxx">
            <img src="https://res.cloudinary.com/ddskoq3no/image/upload/v1653777668/expo.cad2022-28052022-0002_inomqs.jpg" alt>
            <div class="text">Nicolle Guerrero</div>
            
            <p>
              <button class="badges helper">GALERIA</button>
              <button class="badges supporter">VIDEO</button>
            </p>
        </div>
    </div>

							<div class="cardd">
        <div class="boxx">
            <img src="https://res.cloudinary.com/ddskoq3no/image/upload/v1653778512/WhatsApp_Image_2022-05-28_at_5.54.45_PM_xqvecz.jpg" alt>
            <div class="text">Jesus (Chuy)</div>
            
            <p>
              <button class="badges helper">GALERIA</button>
              <button class="badges supporter">VIDEO</button>
            </p>
        </div>
    </div>
          
<!--fin de galeria -->

						
          </div>
      </div>
  </section>

    <!-- Cookies -->
    <div class="wrapper">
    <img src="https://imgs.search.brave.com/oON19WyDhOYcC1sh73PtENSynxrjGg-Ni4CH81IMYdI/rs:fit:324:324:1/g:ce/aHR0cHM6Ly9pLnBp/bmltZy5jb20vb3Jp/Z2luYWxzLzY5LzVh/L2VkLzY5NWFlZDA5/NzIwOTExNmY1ZDBk/YjAwMmNkZmZiY2Q4/LnBuZw" alt="">
    <div class="content">
      <header class="texx">Consentimiento de cookies</header>
      <p class="texxx" >Este sitio web utiliza cookies para garantizar que obtenga la mejor experiencia en nuestro sitio web.</p>
      <div class="buttons">
        <button class="item">Acepto</button>
        <a href="#" class="item">Leer mas</a>
      </div>
    </div>
  </div>
<!-- Final de las cookies -->

    


    <!-- Loaging -->
    <div class="loader-wrapper">
      <img
        src="https://c.tenor.com/XhVrGXPbUOcAAAAi/giffany-disney-gravity-falls.gif"
        alt="Cargando......"
      />

      <div class="longfazers">
        <span></span>

        <span></span>

        <span></span>

        <span></span>
      </div>
    </div>


		<!-- FOOTER O PIE DE PAGINA -->
    <footer>
      <a
        style="display: none;"
        href="//www.dmca.com/Protection/Status.aspx?ID=04da08e3-40f5-4320-8093-86b1c519bf13"
        title="DMCA.com Protection Status"
        class="dmca-badge"
      >
        <img
          src="https://images.dmca.com/Badges/dmca-badge-w150-5x1-07.png?ID=04da08e3-40f5-4320-8093-86b1c519bf13"
          alt="DMCA.com Protection Status"
      /></a>
      <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"></script>

      <a
        style="display: none;"
        href="https://www.dmca.com/compliance/Mikuni.gq"
        title="DMCA Compliance information for Mikuni.gq"
        ><img src="https://www.dmca.com/img/dmca-compliant-grayscale.png"
      /></a>

      <span
        >Made with 💖 by
        <a href="github.php" target="_blank">Antonio Mendez, Giovanni Maldonado, Alejandro Rangel</a
        ><br />Copyright <span class="far fa-copyright"></span>ExpoCAD 2022</span
      >
    </footer>
		<!-- FIN DE FOOTER O PIE DE PAGINA -->

		
<script>
    const cookieBox = document.querySelector(".wrapper"),
    acceptBtn = cookieBox.querySelector("button");
    acceptBtn.onclick = ()=>{
      //setting cookie for 1 month, after one month it'll be expired automatically
      document.cookie = "CookieBy=CodingNepal; max-age="+60*60*24*30;
      if(document.cookie){ //if cookie is set
        cookieBox.classList.add("hide"); //hide cookie box
      }else{ //if cookie not set then alert an error
        alert("Cookie can't be set! Please unblock this site from the cookie setting of your browser.");
      }
    }
    let checkCookie = document.cookie.indexOf("CookieBy=CodingNepal"); //checking our cookie
    //if cookie is set then hide the cookie box else show it
    checkCookie != -1 ? cookieBox.classList.add("hide") : cookieBox.classList.remove("hide");
  </script>


    
    <script src="./aos/aos.js"></script>
    <script type="text/javascript">
      AOS.init({
        duration: 1000
      });
    </script>
    <script src="./js/script.js"></script>
    <script>
      $(window).on("load", function() {
        $(".loader-wrapper").fadeOut("slow");
      });
    </script>
    <script src="./particles/particles.js"></script>
    <script src="./particles/app.js"></script>
		 <script src="./js/galeriacrudo.js"></script>
		
  </body>
</html>
