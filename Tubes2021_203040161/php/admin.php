<?php 
    session_start();

    if(!isset($_SESSION["username"])) {
        header("Location: php/login.php");
        exit;
    }
    require 'functions.php';
    //melakukan query
    if (isset($_GET['cari'])) {
        $keyword = $_GET['keyword'];
        $dekorasi = query("SELECT * FROM dekor WHERE
            Nama LIKE '%$keyword%' OR
            Bentuk LIKE '%$keyword%' OR
            Warna LIKE '%$keyword%' OR
            Harga LIKE '%$keyword%' 
            ");
        } else {
        $dekorasi = query("SELECT * FROM dekor");
        }
?>
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>


      <!-- my CSS -->
      <link rel="stylesheet" href="../css/style.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <title>Room Shine</title>
    
    </head>

    <body id="home" class="scrollspy">
      <!-- navbar -->
      <div class="navbar-fixed">
        <nav class="grey">
          <div class="container"> 
          <div class="nav-wrapper">
            <a href="#home" class="brand-logo">Room Shine</a>
            <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="#about">About Us</a></li>
              <li><a href="#products">Products</a></li>
              <li><a href="#partners">Partners</a></li>
              <li><a href="#services">Services</a></li>
              <li><a href="#portfolio">Portfolio</a></li>
              <li><a href="#contact">Contact Us</a></li>
              <li><a href="logout.php" >Logout</a></li>
            </ul>
            </div>
          </div>
        </nav>
      </div>
    
      <!-- sidenav -->
      <ul class="sidenav" id="mobile-nav" style="background-color: #e0e0e0;">
        <li><a href="#about">About Us</a></li>
        <li><a href="#products">Products</a></li>
        <li><a href="#partners">Partners</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#contactr">Contact Us</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>

      <!-- slider -->
      <div class="slider">
        <ul class="slides">
          <li>
            <img src="../assets/img/slide1.png">
            <div class="caption center-align">
              <h3>Welcome!</h3>
              <h5 class="light grey-text text-lighten-3">__________</h5>
            </div>
            <li>
              <img src="../assets/img/slide7.png">
              <div class="caption center-align">
                <h3>All You Need Is Here!</h3>
                <h5 class="light grey-text text-lighten-3">__________</h5>
              </div>
            </li>
            <li>
              <img src="../assets/img/slide6.png">
              <div class="caption center-align">
                <h3>Let's Remake Your Room With Us!</h3>
                <h5 class="light grey-text text-lighten-3">__________</h5>
              </div>
            </li>
          </li>
        </ul>
      </div>

      <!-- about us -->
      <section id="about" class="about scrollspy" style="background-color: #e0e0e0;">
        <div class="container" >
          <div class="row">
            <h3 class="center light grey-text text-darken-3">About Us</h3>
            <div class="col m6">
              <p>Decoration</p>
              <div class="progress">
                <div class="determinate" style="width: 95%"></div>
            </div>
            <p>Creativity</p>
              <div class="progress">
                <div class="determinate" style="width: 98%"></div>
            </div>
            <p>Photography</p>
              <div class="progress">
                <div class="determinate" style="width: 90%"></div>
            </div>
            </div>
          </div>
        </div>
      </section>

        <!-- Product -->
      <section id="products" class="products scrollspy " style="background-color: #e0e0e0;">
       <h3 class="center light grey-text text-darken-3">Products</h3>
       <br><br>
        <br><br>
      <div class="row">
        <div class="col m6 s12">
      <form action="" method="get" style="float: left;">
        <input type="text" name="keyword" size="30" class="rounded-pill" placeholder="Cari Disini!" autofocus>
        <button type="submit" name="cari" class="btn btn-outline-success rounded-pill">Cari!</button>
      </form>
    </div>
    </div>
     <br>
    
  <div class="row">
  <div class="col m16 s26">
  <table border="1" cellpadding="13" cellspacing="0">
    <tr class="grey white-text">
      <th class="center">No</th>
      <th class="center">Aksi</th>
      <th class="center">Gambar</th>
      <th class="center">Nama</th>
      <th class="center">Bentuk</th>
      <th class="center">Warna</th>
      <th class="center">Harga</th>
    </tr>
    
    <?php if(empty($dekorasi)) : ?>
        <tr>
            <td colspan="7">
                <h1>Data tidak ditemukan</h1>
            </td>
        </tr>
    <?php else : ?>
        <?php $i = 1 ?>
        <?php foreach( $dekorasi as $dekor) : ?>
                <tr>

                
                <th><?= $i ?></th>
                <td>
                <a href="ubah.php?id=<?= $dekor['id']?>" ><button class="btn btn-outline-primary rounded-pill" >Ubah</button></a>
                <a href="hapus.php?id=<?= $dekor["id"]; ?>" onclick="return confirm('yakin?');"><button class="btn btn-outline-danger rounded-pill">Hapus</button></a>
                <br><br>
                <a href="tambah.php" class="btn btn-outline-primary rounded-pill">Add Data</a>
                </td>
                <td class="center"><img src="../assets/img/<?= $dekor["Gambar"]; ?>" style="width: 50%;"></td>
                <td><?= $dekor["Nama"] ?></td>
                <td><?= $dekor["Bentuk"] ?></td>
                <td><?= $dekor["Warna"] ?></td>
                <td><?= $dekor["Harga"] ?></td>
                </tr>
                <?php $i++ ?>
                <?php endforeach; ?>
        <?php endif; ?>
          </table>
        </div>
      </div>
      </section>
      

      <!-- partners -->
      <div id="partners" class="parallax-container scrollspy" >
        <div class="parallax"><img src="../assets/img/slide5.png"></div>
        
          <div   class="container partners ">
            <h3 class="center light grey-text text-darken-3">Partners</h3>
              <div class="row">
                <div class="col m3 s12 center">
                  <img src="../assets/img/clients1.png">
                </div>
                <div class="col m3 s12 center">
                  <img src="../assets/img/clients2.png">
                </div>
                <div class="col m3 s12 center">
                  <img src="../assets/img/clients3.png">
                </div>
                <div class="col m3 s12 center">
                  <img src="../assets/img/clients4.png">
                </div>
              </div>
          </div>
      </div>

          <!-- services -->
          <section id="services" class="services  scrollspy" style="background-color: #e0e0e0;">
            <div class="container">
              <div class="row">
                <h3 class="light center grey-text text-darken-3">Our services</h3>
                <div class="col m4 s12">
                  <div class="card-panel center">
                    <i class="material-icons medium">border_color</i>
                    <h5>Design</h5>
                  </div>
                </div>
                <div class="col m4 s12">
                  <div class="card-panel center">
                    <i class="material-icons medium">brush</i>
                    <h5>Decor</h5>
                  </div>
                </div>
                <div class="col m4 s12">
                  <div class="card-panel center">
                    <i class="material-icons medium">image</i>
                    <h5>Photo</h5>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- portfolio -->
          <section id="portfolio" class="portfolio scrollspy" style="background-color: #e0e0e0;">
            <div class="container">
              <h3 class="light center grey-text text-darken-3">Portfolio</h3>
              <div class="row">
                <div class="col m3 s12">
                  <img src="../assets/img/portfolio1.png" class="responsive-img materialboxed">
                </div>
                <div class="col m3 s12">
                  <img src="../assets/img/portfolio2.png" class="responsive-img materialboxed">
                </div>
                <div class="col m3 s12">
                  <img src="../assets/img/portfolio3.png" class="responsive-img materialboxed">
                </div>
                <div class="col m3 s12">
                  <img src="../assets/img/portfolio4.png" class="responsive-img materialboxed">
                </div>
              </div>
            </div>
          </section>

          <!-- contact us-->
          <section id="contact" class="contact scrollspy" style="background-color: #e0e0e0;">
            <div class="container">
             <h3 class="light grey-text text-darken-3 center">Contact Us</h3>
             <div class="row">
               <div class="col m5 s12">
                 <div class="card-panel grey center white-text">
                   <i class="material-icons medium">email</i>
                   <h5>Contact</h5>
                   <p>For cooperation send via email and call us <br>
                    or you can come to our office</p>
                 </div>
                 <ul class="collection with-header center">
                   <li class="collection-header"><h4>Our Office</h4></li>
                   <li class="collection-item">Room Shine</li>
                   <li class="collection-item">+62-8176-9994-897</li>
                   <li class="collection-item">roomshine@gmail.com</li>
                   <li class="collection-item">Jl. Sukahati No. 15, Bogor</li>
                   <li class="collection-item">West Java, Indonesia</li>
                 </ul>
               </div>

               <div class="col m7 s12">
                 <form>
                   <div class="card-panel">
                     <div class="input-field">
                       <input type="text" name="name" id="name" required class="validate">
                       <label for="name">Name</label>
                     </div>
                     <div class="input-field">
                      <input type="email" name="email" id="email" class="validate">
                      <label for="email">Email</label>
                    </div>
                      <div class="input-field">
                      <input type="text" name="phone" id="phone">
                      <label for="phone">Phone</label>
                    </div>
                    <div class="input-field">
                      <textarea name="message" id="message" class="materialize-textarea"></textarea>
                      <label for="message">Message</label>
                    </div>
                    <button type="submit" class="btn grey">Send</button>
                   </div>
                 </form>
               </div>
             </div>
            </div>
          </section>

          <!-- footer -->
        <footer class="grey center white-text">
          <p class="flow-text">Copyright &copy; 2020 - RoomShine </p>
        </footer>


















      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="../js/materialize.min.js"></script>
      <script>
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);


        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider,{
          indicators: false,
          height: 500,
          transition: 600,
          interval: 3000
        });


        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);

        const materialbox = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialbox);

        const scroll = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scroll, {
          scrollOffset: 50
        });
      </script>

    </body>
  </html>