<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

<!--my css -->

<link rel="stylesheet" href="css/style.css">


      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
<title>DEMO</title>
    <body id="home" class="scrollspy">



      <!-- navbar -->
      <div class="navbar-fixed">

       <nav class="blue darken-2">
     <div class="container">
         <div class="nav-wrapper">
           <a href="#home" class="brand-logo">DEMO</a>
            <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
           <ul class="right hide-on-med-and-down">
           <li><a href="#about">About us</a></li>
           <li><a href="#clients">Clients</a></li>
           <li><a href="#Services">Service</a></li>
           <li><a href="#Galery">Galery</a></li>
           <li><a href="#contact">Contact Us</a></li>
           <li><a href="{{ route('login') }}">Login</a></li>

         </ul>
       </div>

     </div>
   </nav>
 </div>

 <!-- sidenav -->

<ul class="sidenav" id="mobile-nav">
  <li><a href="#about">About us</a></li>
  <li><a href="#clients">Clients</a></li>
  <li><a href="#Services">Service</a></li>
  <li><a href="#Galery">Galery</a></li>
  <li><a href="#contact">Contact Us</a></li>
  <li><a href="{{ route('login') }}">Login</a></li>


</ul>








<!-- slider -->

  <div class="slider">
    <ul class="slides">
      <li>
        <img src="img/slider/1.jpg">
        <div class="caption left-align">
          <h3>Makan Kenyang</h3>
          <h5 class="light grey-text text-lighten-3">Makan sampai puas</h5>
        </div>
      </li>
      <li>
        <img src="img/slider/2.jpg">

      </li>
      <li>
        <img src="img/slider/3.jpg">

      </li>
      </ul>
      </div>

<!-- about us -->
<section id="about" class="about scrollspy">
<div class="container">

  <div class="row">

    <h3 class="center light grey-text text-darken-3">About us</h3>
    <div class="col m6 light">
      <h5>We Are Professionals</h5>
<p>Makanan paling lezat bagiku

Bukanlah yang paling mahal

Bukan pula yang paling enak

Ataupun di lokasi yang wah

Makanan paling lezat itu sederhana

Bisa didapat oleh siapa saja

Tak peduli dia miskin atau kaya

Karena lezat itu soal rasa

Makan bersama

Itu jawaban makanan terlezatku

Bukan hanya dimakan sendiri

Namun nikmat saat berbagi

Saat makanan digelar rapi

Saat semua mulai melingkari

Mulailah kita makan bersama

Dengan lahap semua gembira</p>
 </div>


      <div class="col m6 light">
        <p>PEDAS</p>
        <div class="progress">
          <div class="determinate" style="width: 70%"></div>
 </div>
      </div>

      <div class="col m6 light">
        <p>GURIH</p>
        <div class="progress">
          <div class="determinate" style="width: 100%"></div>
 </div>
    </div>
    <div class="col m6 light">
      <p>MANIS</p>
      <div class="progress">
        <div class="determinate" style="width: 30%"></div>
</div>
    </div>
</div>
</div>

  </section>


<!-- Clients -->

<div id="clients" class="parallax-container scrollspy">
     <div class="parallax"><img src="img/slider/5.jpg"></div>

<div class="container clients">
  <h3 class="center light white-text">Our Clients</h3>
<div class="row">

  <div class="col m4 s12 center">
    <img src="img/clients/11.png">
  </div>

  <div class="col m4 s12 center">
    <img src="img/clients/indosiar.png">
  </div>

  <div class="col m4 s12 center">
    <img src="img/clients/ig.png">
  </div>

</div>
</div>

   </div>


   <!-- Services -->
   <section id="Services" class="Services grey lighten-3 scrollspy">
     <div class="container">
       <div class="row">
         <h3 class="light center grey-text text-darken-3">OUR Services</h3>

         <div class="col m4 s12">
           <div class="card-panel center">
             <i class="material-icons medium">child_care</i>
             <h5>Siap Saji</h5>
             <p>di kala hujan turun dirimu meminta diri ku untuk di belikan nasi goreng ohh</p>
           </div>
         </div>

         <div class="col m4 s12">
           <div class="card-panel center">
             <i class="material-icons medium">cake</i>
             <h5>BISA ASMR</h5>
             <p>di kala hujan turun dirimu meminta diri ku untuk di belikan nasi goreng sambil record ASMR</p>
           </div>
         </div>

         <div class="col m4 s12">
           <div class="card-panel center">
             <i class="material-icons medium">business_center</i>
             <h5>BISA MUKBANG</h5>
             <p>Jadi youtuber enak banget sumpah apa lagi iklannya banyak yakan?wkwkkwk</p>
           </div>
         </div>
       </div>
     </div>
   </section>

   <!-- Galery -->

   <section id="Galery" class="Galery scrollspy">
     <div class="container">
       <h3 class="light center grey_text text-darken-3"></h3>
       <div class="row">

         <div class="col m3 s12">
           <img src="img/portofolio/5.jpg" class="responsive-img materialboxed">
         </div>

         <div class="col m3 s12">
           <img src="img/portofolio/8.jpg" class="responsive-img materialboxed">
         </div>

         <div class="col m3 s12">
           <img src="img/portofolio/6.jpg" class="responsive-img materialboxed">
         </div>
         <div class="col m3 s12">
           <img src="img/portofolio/7.jpeg" class="responsive-img materialboxed">
         </div>
       </div>

       <div class="row">

         <div class="col m3 s12">
           <img src="img/portofolio/9.jpg" class="responsive-img materialboxed">
         </div>

         <div class="col m3 s12">
           <img src="img/portofolio/10.jpg" class="responsive-img materialboxed">
         </div>

         <div class="col m3 s12">
           <img src="img/portofolio/11.jpg" class="responsive-img materialboxed">
         </div>
         <div class="col m3 s12">
           <img src="img/portofolio/12.jpg" class="responsive-img materialboxed">
         </div>
       </div>
     </div>
   </section>

    <!-- contact us -->

  <section id="contact" class="contact grey lighten-3 scrollspy">
    <div class="container">
      <h3 class="light grey-text text-darken-3 center">Contact Us</h3>
<div class="row">
  <div class="col m5 s12">
    <div class="card-panel blue darken-2 center white-text">
      <i class="material-icons">email</i>
      <h5>Contact</h5>
      <p>kalo lapet bet nih ya kontak aja langsung bang</p>
    </div>
    <ul class="collection with-header">
      <li class="collection-header"><h4>Our Office</li>
      <li class="collection-item">Makan kenyang</li>
      <li class="collection-item">JL.PGC sama condet</li>
      <li class="collection-item">Jakarta Timur</li>
    </ul>
  </div>
  <div class="col m7 s12">
    <form method="POST" action="{{url('send/email')}}">
      {{ csrf_field() }}

      @if(Session::has("success"))
      <div class="alert alert-success">
        <b>Succesfull</b>, your email sent.
      </div>
      @endif

      <div class="card-panel">
          <h5>Tolong isi</h5>
          <div class="input-field">
            <input type="text" name="name" id="name" required class="validate ">
            <label for="name">Name</label>
              <!-- <input id="subject" type="subject" class="form-control{{
                $errors->has('subject') ? 'is-invalid' : ''}}" name="subject"
                value="{{old('subject')}}" required autofocus> -->

          </div>
          <div class="input-field">
            <input type="email" name="email" id="email" class="validate">
            <label for="email">Email</label>

          </div>

          <div class="input-field">
            <textarea name="message" id="message" class="materialize-textarea"></textarea>
            <label for="message">Message</label>
          </div>
          <button type="submit" class="btn blue darken-2">Send</button>

      </div>
    </form>

  </div>
</div>

    </div>

  </section>

  <!-- <footer></footer> -->
<footer class="blue darken-2 white-text center">
  <p class="flow-text">TNS Double Trouble. Copyright 2020.</p>
</footer>



      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>

        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);

        const slider = document.querySelectorAll('.slider');
         M.Slider.init(slider, {
           height: 500
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
