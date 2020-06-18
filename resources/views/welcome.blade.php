@extends('layouts.main')


@section('content')
  

        <div class="container">
<!-- carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="slike/kalemegdan.webp" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="slike/bg.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="slike/img.webp" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- end carousel -->
<!-- informacije -->


<div>
    <table>
        <tr><td><img src="slike/tv.webp"> <br>Šta treba znati? <p>Beograd je glavni i najnaseljeniji grad Republike Srbije i privredno, kulturno i obrazovno središte zemlje. Grad leži na ušću Save u Dunav, gde se Panonska nizija spaja sa Balkanskim poluostrvom. Beograd je upravno središte Grada Beograda, posebne teritorijalne jedinice sa svojom mesnom samoupravom. Po broju stanovnika četvrti je u jugoistočnoj Evropi posle Istanbula, Atine i Bukurešta.</p></td><td><img src="slike/info.webp"> <br>Osnovne informacije <p>Jedan je od starijih gradova u Evropi. Prva naselja na teritoriji Beograda datiraju iz praistorijske Vinče, 4.800. godina pre nove ere. Sam grad su osnovali Kelti u 3. veku pre n. e, pre nego što je postao rimsko naselje Singidunum.[1][2] Beograd je glavni grad Srbije od 1405. godine i bio je prestonica južnoslovenskih država od 1918. pa do 2003, kao i Srbije i Crne Gore od 2003. do 2006.</p> </td><td><img src="slike/msg.webp"> <br>Kontakt <p>Broj stanovnika u Beogradu prema popisu stanovništva iz 2011. je iznosio 1.166.763, dok je u široj okolini živelo 1.659.440 ili 23,09% stanovnika.[4] Uži deo grada zauzima površinu od 359,96 km² i gustina naseljenosti je oko 3.736 stanovnika po km². Grad Beograd ima status posebne teritorijalne jedinice u Srbiji sa svojom lokalnom samoupravom, a njegova površina iznosi 3.222,68 km².[5] Njegova teritorija je podeljena na 17 gradskih opština, od kojih svaka ima svoje lokalne organe vlasti.</p></td></tr>
    </table>
</div>


<h1>{{$title}}</h1>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2421.527368811069!2d20.439831615047773!3d44.80844608497959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a6ff8c42e92b5%3A0x512fbf8ff6852f7f!2sSlavka%20%C5%A0landera%2046%2C%20Beograd%2C%20Serbia!5e1!3m2!1sen!2s!4v1590656946803!5m2!1sen!2s" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

<div class="bg-dark" style="width: 100%; height: 200px;">
  <table class="footer_table">
      <tr><td>Korisni linkovi:</td><td>Sponzori:</td><td>Sva prava rezervisana.</td></tr> 
      <tr><td><a href="facebook.com">Facebook</a></td><td></td><td></td></tr>
      <tr><td><a href="instagram.com">Instagram</a></td><td></td><td></td></tr> 
  </table>
    
</div>
</div>

@endsection

