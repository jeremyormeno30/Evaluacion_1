


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <!--estos tres fueron agregados para el area mis trabajos -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>

    <title>Document</title>
</head>
<body>

    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>

    <nav class="navbar">
        <div class="max-width">
            <!--  <div class="logo"><a href="#"><span><i class="fas fa-cogs"></i></span></a></div>la palabra en la barra-->
            <div class="logo"><a href="#"><span><i class=""></i> <i class=""></i> Coffe Time</span></a></div><!--la palabra en la barra-->
            <ul class="menu"><!-- las opciones del menu -->
                <li><a href="#home" class="menu-btn">Portada</a></li>
                <li><a href="#cafe" class="menu-btn">Café</a></li>
                <li><a href="#pasteleria" class="menu-btn">Pasteleria</a></li>
                <li><a href="#sandwish" class="menu-btn">Sandwish</a></li>
                <li><a href="{{ route('conocenos') }}" class="menu-btn">Conocenos</a></li>
                <li><a href="{{ route('logout') }}" class="menu-btn">Cerrar Sesión</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

 <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------->



    <!-- home section start -->
    <section class="home" id="home" style="background-image: url('{{ asset('img/home.jpg')}}'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
        <div class="max-width">
            <div class="home-content">
               <!-- <div class="text-1">Soy</div> -->
                <div class="text-2">Bienvenido {{ $user->name }}</div>
                <div class="text-3"> <span class="typing"></span></div>

                <a class="#" href="{{ route('conocenos') }}">Conocenos</a>
            </div>
        </div>
    </section>



 <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<section class="cafe" id="cafe" style="background-image: url('{{ asset('img/home.jpg')}}'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">

    <div class="max-width">
    <h2 class="title">Café</h2>

        <div class="carousel owl-carousel">

            <div class="card">
                <div class="box">
                    <img src="img/mocca.jpg" alt="">
                    <div class="text">Mocca</div>
                    <p>Cafe Mocca</p>
                    <br>
                    <a href="">Elijeme</a>
                </div>
            </div>

            <div class="card">
                <div class="box">
                    <img src="img/irish.jpg" alt="">
                    <div class="text">Irish</div>
                    <p>Cafe Irish</p>
                    <br>
                    <a href="">Elijeme</a>
                </div>
            </div>

                <div class="card">
                    <div class="box">
                        <img src="img/latte.png"alt="">
                        <div class="text">Latte</div>
                        <p>Cafe Latte</p>
                        <br>
                        <a href="">Elijeme</a>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <img src="img/espresso.jpg"alt="">
                        <div class="text">Espresso</div>
                        <p>Cafe Espresso</p>
                        <br>
                        <a href="">Elijeme</a>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <img src="img/americano.jpg" alt="">
                        <div class="text">Americano</div>
                        <p>Cafe Americano</p>
                        <br>
                        <a href="">Elijeme</a>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <img src="img/bombon.jpeg" alt="">
                        <div class="text">Bombón</div>
                        <p>Cafe Bombón</p>
                        <br>
                        <a href="adjunto/avion.pdf">Elijeme</a>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <img src="img/carajillo.png" alt="">
                        <div class="text">Carajillo</div>
                        <p>Cafe Carajillo</p>
                        <br>
                        <a href="adjunto/avion.pdf">Elijeme</a>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <img src="img/lunjo.png" alt="">
                        <div class="text">Lunjo</div>
                        <p>Cafe Lunjo</p>
                        <br>
                        <a href="adjunto/avion.pdf">Elijeme</a>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <img src="img/ristretto.png" alt="">
                        <div class="text">Ristretto</div>
                        <p>Cafe Ristretto</p>
                        <br>
                        <a href="adjunto/avion.pdf">Elijeme</a>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <img src="img/machiatto.png" alt="">
                        <div class="text">Machiatto</div>
                        <p>Cafe Machiatto</p>
                        <br>
                        <a href="adjunto/avion.pdf">Elijeme</a>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <img src="img/conleche.jpg" alt="">
                        <div class="text">Café con Leche</div>
                        <p>Cafe con Leche</p>
                        <br>
                        <a href="adjunto/avion.pdf">Elijeme</a>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <img src="img/frappe.jpg" alt="">
                        <div class="text">Frappé</div>
                        <p>Cafe Frappé</p>
                        <br>
                        <a href="adjunto/avion.pdf">Elijeme</a>
                    </div>
                </div>

            </div>
    </div>

</section>
 <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <section class="cafe" id="pasteleria" style="background-image: url('{{ asset('img/home.jpg')}}'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">

    <div class="max-width">
            <h2 class="title">Pasteleria</h2>

            <div class="carousel owl-carousel">

                <div class="card">
                    <div class="box">
                        <img src="img/tresleches.jpg" alt="">
                        <div class="text">Tres Leches</div>
                            <p>Tres Leches</p>
                        <br>
                        <a href="adjunto/avion.pdf">Elijeme</a>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <img src="img/selvanegra.png" alt="">
                        <div class="text">Selva Negra</div>
                        <p>Selva Negra</p>
                        <br>
                        <a href="adjunto/banco.pdf">Elijeme</a>
                        <!-- <a href="crud/index.html">Mirame</a> -->
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <img src="img/redvelvet.jpg"alt="">
                        <div class="text">Red Velvet</div>
                        <p>Red Velvet</p>
                        <br>
                        <a href="adjunto/termo.pdf">Elijeme</a>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <img src="img/mostachon.png"alt="">
                        <div class="text">Mostachon</div>
                        <p>Mostachon</p>
                        <br>
                        <a href="adjunto/futbol.pdf">Elijeme</a>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <img src="img/mokaespecial.jpg" alt="">
                        <div class="text">Mocka Especial</div>
                        <p>Mocka Especial</p>
                        <br>
                        <a href="adjunto/maestromella.pdf">Elijeme</a>
                    </div>
                </div>

            </div>
        </div>

    </section>
 <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <section class="cafe" id="sandwish" style="background-image: url('{{ asset('img/home.jpg')}}'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">

    <div class="max-width">
            <h2 class="title">Sandwish</h2>

            <div class="carousel owl-carousel">

                <div class="card">
                    <div class="box">
                        <img src="img/español.jpg" alt="">
                        <div class="text">Español</div>
                            <p>Ingredientes</p>
                        <br>
                        <a href="adjunto/avion.pdf">Elijeme</a>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <img src="img/omelette.jpg" alt="">
                        <div class="text">Omelette</div>
                        <p>Ingredientes</p>
                        <br>
                        <a href="adjunto/banco.pdf">Elijeme</a>
                        <!-- <a href="crud/index.html">Mirame</a> -->
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <img src="img/vegetariano.jpg"alt="">
                        <div class="text">Vegetariano</div>
                        <p>Ingredientes</p>
                        <br>
                        <a href="adjunto/termo.pdf">Elijeme</a>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <img src="img/sandwishamericano.jpg"alt="">
                        <div class="text">Americano</div>
                        <p>Ingredientes</p>
                        <br>
                        <a href="adjunto/futbol.pdf">Elijeme</a>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <img src="img/depechuga.jpg" alt="">
                        <div class="text">De Pechuga</div>
                        <p>Ingredientes</p>
                        <br>
                        <a href="adjunto/maestromella.pdf">Elijeme</a>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <img src="img/deatun.jpg" alt="">
                        <div class="text">De Atún</div>
                            <p>Ingredientes</p>
                        <br>
                        <a href="adjunto/avion.pdf">Elijeme</a>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <img src="img/roastbeef.jpg" alt="">
                        <div class="text">Roast Beef</div>
                            <p>Ingredientes</p>
                        <br>
                        <a href="adjunto/avion.pdf">Elijeme</a>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <img src="img/depollo.jpg" alt="">
                        <div class="text">De Pollo</div>
                            <p>Ingredientes</p>
                        <br>
                        <a href="adjunto/avion.pdf">Elijeme</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
 <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
     <!-- footer section start -->
     <footer>
        <span>Creado y Editado -<a href=""> Alonso y Jeremy -</a> <span class="far fa-copyright"></span> 2023 All rights reserved.</span>
    </footer>
 <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

 <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>

<!-- todo este estilo no encuentro como agregarlo en una carpeta aparte -->

<style>



</style>
