@extends('base')
@section('home')
<div class="row justify-content-center mb-5">
  <div class="col-md-9 col-sm-12">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('imgs/deporte1.jpg') }}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('imgs/deporte1.jpg') }}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('imgs/deporte1.jpg') }}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-9 col-sm-12">
    <section id="noticias">
      <div class="container mb-4">
        <div class="card border-secondary">
          <div class="card-header">
            <video class="card-img-top" src="{{ asset('imgs/Noticias-telemundo.mp4') }}" controls></video>
          </div>
          <div class="card-body">
            <h5 class="card-title">Noticia de Telemundo</h5>
            <h5 class="card-subtitle mb-2 text-muted">Categor??a: Noticias</h5>
            <p class="card-text">
              Rusia dejar?? de cooperar con Occidente en la Estaci??n Espacial Internacional hasta que se levanten las sanciones
              econ??micas
              <em>"Solo nosotros podemos suministrar combustible a la estaci??n"</em> y corregir su trayectoria para evitar colisiones
              con basura espacial, dijo el jefe de la agencia espacial rusa. Las sanciones se han impuesto para presionar a Rusia a
              poner fin a su invasi??n de Ucrania.
            </p>
          </div>
        </div>
      </div>
      <div class="container mb-4">
        <div class="card">
          <div class="card-header">
            <iframe
              class="card-img-top"
              src="https://www.youtube.com/embed/4MqYT1D99AQ"
              title="YouTube video player"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen
            ></iframe>
          </div>
          <div class="card-body">
            <h5 class="card-title">Ciencia y tecnolog??a</h5>
            <h5 class="card-subtitle mb-2 text-muted">Categor??a: Noticias</h5>
            <p class="card-text">
              La modernidad ha tra??do consigo una serie de avances y aportes creativos al desarrollo de la humanidad. Por ejemplo,
              podemos destacar el descubrimiento de nuevos planetas y galaxias con sondas y telescopios espaciales, resultado del
              surgimiento de microprocesadores y cohetes m??s eficientes. El hallazgo de la penicilina y de vacunas para combatir
              enfermedades como la Viruela y el Covid-19, que salvan millones de vidas. Tambi??n descubrimientos m??s comunes c??mo el
              Internet y los Smartphones, que nos permiten acompa??ar nuestros paseos y ratos libres con canciones, fotograf??as y
              libros favoritos, con tan s??lo un touch. Resulta interesante detenernos a revisar los efectos que estas innovaciones
              tienen sobre nosotros, especialmente sobre la apreciaci??n del tiempo y en nuestra forma de vivir (Bauman, 2003).
            </p>
          </div>
        </div>
      </div>
      <div class="container mb-4">
        <div class="card">
          <div class="card-header">
            <audio class="card-img-top" src="{{ asset('imgs/Resumen en video de la guerra Ucrania - Rusia 31 de marzo.mp3') }}" controls></audio>
          </div>
          <div class="card-body">
            <h5 class="card-title">Resumen de la Guerra en Ucrania-Rusia</h5>
            <h5 class="card-subtitle mb-2 text-muted">Categor??a: Noticias</h5>
            <p class="card-text">
              El Ministerio de Defensa ruso asegura haber utilizado durante el fin de semana misiles hipers??nicos Kinzhal para atacar
              objetivos en Ucrania. El uso por primera vez en un conflicto de este tipo de armamento, cuyo lanzamiento ha sido
              confirmado por Estados Unidos, supone un nuevo paso en la escalada b??lica por las capacidades de estos misiles, que
              pueden alcanzar objetivos a una distancia de hasta 2.000 kil??metros y transportar cargas nucleares.
            </p>
          </div>
        </div>
      </div>
      <div class="container mb-4">
        <div class="card">
          <div class="card-header">
            <img class="card-img-top" src="{{ asset('imgs/transportistas.png') }}" alt="transportistas" />
          </div>
          <div class="card-body">
            <h5 class="card-title">Huelga de transportistas</h5>
            <h5 class="card-subtitle mb-2 text-muted">Categor??a: Noticias</h5>
            <p class="card-text">
              Los transportistas que segu??an en huelga deciden acabar con los paros tras 20 d??as de movilizaciones. Tras 20 d??as de
              movilizaciones que pusieron en jaque a la econom??a espa??ola, la entidad que convoc?? los paros de transportistas (y que
              segu??a secund??ndolos) acord?? finalmente este s??bado ???suspender temporalmente??? la huelga. La decisi??n de la Plataforma de
              Defensa del Sector del Transporte por Carretera llega tras haber consultado a un centenar de transportistas de toda
              Espa??a reunidos en asamblea en San Fernando de Henares (Madrid), seg??n Efe. Las acciones de ese colectivo se hab??an
              debilitado en los ??ltimos d??as, despu??s de que la mayor??a del sector decidiera volver a trabajar a ra??z del paquete de
              medidas aprobado por el Consejo de Ministros el pasado martes, entre las cuales se encuentra la rebaja de 20 c??ntimos en
              el precio del carburante.
            </p>
          </div>
        </div>
      </div>
    </section>
  </div>
  <div class="col-md-3 col-sm-12">
    <div class="container mb-4">
      <div class="card">
        <img class="card-img-top" src="{{ asset('imgs/deporte1.jpg') }}" alt="golf" />
        <div class="card-body">
          <h5 class="card-title text-wrap2">
            Guillermo "Mito" Pereira da detalles de su amistad con Niemann y explica c??mo un neuropsic??logo lo ayud?? a entrar al PGA
            Tour
          </h5>
          <h5 class="card-subtitle mb-2 text-muted d-none">Categor??a: Deporte</h5>
          <p class="card-text text-wrap2">
            <strong>Habr??n dos chilenos en la elite del golf mundial.</strong>
            Guillermo Pereira ha tenido una temporada extraordinaria en el Korn Ferry y asegur?? su tarjeta para competir en el PGA
            Tour. Habr??n dos chilenos en la ??lite mundial del golf. "Mito" se encontrar?? con Joaqu??n Niemann.

            <em
              >"Me llevo s??per bien con Niemann. De hecho, ahora estoy en su casa. ??l est?? jugando el PGA Championship y estoy en su
              casa en Florida. Las comparaciones son complicadas porque nunca se sabe bien qu?? puede pasar. En el golf puedes comparar
              muchos jugadores y la comparaci??n te diga que va a ganar este y gana m??s veces el otro. Es complicado. Para qu?? hacerlo
              si somos de un pa??s que quiere hacerlo lo mejor posible" </em
            >, coment?? en entrevista con Agenda Deportes Emol TV.
            <em
              >"Somos muy amigos. No hablamos tanto de golf, le gustan los autos y hablamos de eso o lo que sea. De golf a veces, un
              par de cosas, pero estamos todo el d??a jugando golf, si llegas a hablar m??s vas a quedar loco"</em
            >, agreg??. Pereira conoce al talagantino desde hace muchos a??os. Se sigue sorprendiendo con su nivel.
            <em
              >"Es dificil entender lo bueno que ??s. ??C??mo no gana todas las semanas? Ah?? uno se da cuenta lo dif??cil que es, lo
              competitivo que es. No s?? si hay tanta gente que se cuenta lo bueno que es"</em
            >, apunt??. "Mito" tambi??n cont?? c??mo la ayuda de un neuropsic??logo ha sido clave para elevar su rendimiento en el deporte.
            <em
              >"Trabaja muchos con ejercicios. La l??gica es que as?? como uno entrena el cuerpo con pesas o cardio, tiene que entrenar
              el cerebro, hacerlo funcionar de tal forma. Entrenamos mucho con sensores en el cerebro y en los brazos para ver las
              reacciones a las situaciones en las que ??l me ponga. Por ejemplo, delante de pantala te pones ejercicios que requieren
              concentraci??n, otros que te requieren m??s calma y ah?? va teniendo resultados con n??meros. Puedes ir comparando qu?? est??s
              haciendo bien, qu?? est??s haciendo mal. Es s??per bueno tener un feed back, en que te digan ???tus ojos no son muy r??pidos,
              no vas a poder ver bien la ca??da del putter???. Entonces, puedes entrenar eso"</em
            >, relat??.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection('home')