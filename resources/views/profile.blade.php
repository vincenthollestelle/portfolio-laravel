@extends('layout')
@section('content')

<h2> Wie ben ik?</h2>

<img class="profiel" src="img/ik.jpg" alt="ik">

<h1 style="margin-top: 30px;">Mijn naam is Vincent Hollestelle, ik ben 17 jaar oud en ik woon in Goes.</h1>
<h1>Ik ben zelf half Russisch, mijn moeder is Russisch en mijn vader is Nederlands.</h1>
<h1>Ik heb ook nog één broer die al op zichzelf woont.</h1>
<h1>Ik heb de volgende hobbies:</h1>

<div class="responsive">
<div class="gallery">
  <a target="_blank" href="img/tennis.jpg">
  <img src="img/tennis.jpg" alt="tennis">
  </a>
  <div class="desc">Ik zit op tennis</div>
</div> </div>
<div class="responsive">
<div class="gallery">
  <a target="_blank" href="img/golf.jpg">
  <img src="img/golf.jpg" alt="golf">
  </a>
  <div class="desc">Ik zit op golf</div>
</div> </div>
<div class="responsive">
<div class="gallery">
  <a target="_blank" href="img/pc.jpg">
  <img src="img/pc.jpg" alt="pc">
  </a>
  <div class="desc">Ik game veel</div>
</div> </div>
<div class="responsive">
<div class="gallery">
  <a target="_blank" href="img/media.jpg">
  <img src="img/media.jpg" alt="media">
  </a>
  <div class="desc">Ik kijk veel YouTube en Netflix</div>
</div> </div>
<div class="responsive">
<div class="gallery">
  <a target="_blank" href="img/100.png">
  <img src="img/100.png" alt="100">
  </a>
  <div class="desc">Hierboven staat mijn favoriete serie</div>
</div> </div>
    
@endsection
