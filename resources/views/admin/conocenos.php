<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />

    <title>Document</title>
</head>
<body>

<section class="home" id="home" style="background-image: url('{{ asset('img/home.jpg')}}'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">

    <div class="container pt-4">
        <h1>Hola, {{ $user->name }}</h1>
        <a class="btn btn-primary" href="{{ route('logout') }}">Cerrar Sesión</a>
        <h1>"Coffe Time"</h1>
        <br>
        <h4>
            Somo una cafeteria chilena comprometida a entregar el mejor servicio y calidad,
            sumar cada dia CafeLovers a nuestra cartera de clientes y que ellos mismos sean nuestra mejor publicidad
        </h4>
        <br>
    </div>

</section>

<section>
        <h3>VISION</h3>
        <h4>Nosotros aspiramos a liderar “La Cultura del Café” chilena entre profesionales y particulares,
            mediante la investigación, divulgación y comercialización de los mejores cafés,
            así como de productos y servicios afines a éstos,
            haciendo de todos ellos amigables y rentables objetos de deseo.
        </h4>
        <br>
</section>

<section>
        <h3>MISION</h3>
        <h4>Para alcanzar esta Visión, centramos nuestras actividades en:<br>
            <br>
            ° La compra de los mejores cafés en verde.<br>
            ° El tueste de este café, envasado en grano o molido, y en cápsulas.<br>
            ° La comercialización y distribución de este café, así como de productos afines elaborados por terceros, en el mercado profesional y en el mercado doméstico.<br>
            ° La prestación de servicio técnico para máquinas de café entre nuestros clientes del sector profesional.<br>
            ° La divulgación a través de la formación o de otros medios y canales de las mejores prácticas en torno a “La Cultura del Café”.<br>
            <br>
            La prestación de nuestros productos y servicios descritos, se caracteriza por:<br>
            <br>
            ° La existencia de un tienda electrónica dirigida al mercado doméstico.<br>
            ° La existencia de una red comercial y logística propias dirigida al sector HORECA.<br>
            ° La profesionalidad en el fondo y en la forma.<br>
            ° La cercanía, rapidez, fiabilidad y calidad.<br>
            ° La adaptabilidad.<br>
        </h4>
        <br>
        <h4>De esta manera, y a través de la gestión constante de un CRM,
            pretendemos convertirnos en el referente de calidad que comunique eficientemente sus actividades
            y virtudes en nuestras áreas de influencia. Y mediante este enfoque y a través de un ERP y
            un CMI debidamente adaptados a nuestras necesidades, mantenernos como una empresa lo
            suficientemente rentable para poder avalarse a sí misma y remunerar adecuadamente a sus grupos de interés.<br>
            <br>
            Coffe Time.SA debe ser un grupo en el que todos quieran trabajar, fruto de las relaciones de colaboración
            existentes dentro y fuera de la empresa, así como por forjarse a todos los niveles debido a la existencia
            de un plan de desarrollo personal y grupal que cubra las expectativas de la empresa y sus colaboradores,
            alineando los intereses de ambos.<br>
        </h4>
        <br>
</section>

<section>
        <h3>VALORES</h3>
        <h4>
            ° Conocimiento, pasión y energía por todo y en todo lo que hacemos.<br>
            ° Sentido de grupo familiar y compromiso hacia nuestros grupos de interés y la sociedad en general.<br>
            ° Austeridad y sostenibilidad con nuestros propios recursos y los recursos universales.<br>
            ° Honestidad, cercanía y vocación en el servicio al cliente.<br>
            ° Apuesta por la calidad, la mejora, la innovación, la creatividad y el cambio en positivo, tanto en la elaboración de nuestros productos como en la prestación de nuestros servicios.<br>
        </h4>
        <br>
    </div>
</section>





</body>
</html>
