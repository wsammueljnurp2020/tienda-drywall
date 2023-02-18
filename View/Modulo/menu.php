
<nav class="menu" id="menu">
    <div class="contenedor contenedor-botones-menu">
        <button id="btn-menu-barras" class="btn-menu-barras"><i class="fa fa-bars"></i></button>
        <button id="btn-menu-cerrar" class="btn-menu-cerrar"><i class="fa fa-times"></i></button>
    </div>

    <div class="contenedor contenedor-enlaces-nav">
        <div class="btn-departamentos " id="btn-departamentos">
            <p><i class="fa fa-bars" aria-hidden="true"></i> <span>Categorias</span></p>
            <i class="icono-movil fa fa-caret-down"></i>

        </div>

        <div class="enlaces">
            <div class="header">
                <div class="barra-busqueda">
                    <input type="text" placeholder="Buscar" >
                    <button type="submit"><i class="fa fa-search"></i></button>
                </div>
                <div class="botones-header">
                    <button><i class="fa fa-upload"></i></button>
                    <button><i class="fa fa-th"></i></button>
                    <button><i class="fa fa-bell"></i></button>
                    <a href="#" class="avatar"><img src="<?php echo RutaController::RutaView(); ?>img/avatar.jpg" alt=""></a>
                </div>
                <div class="enlaces-movil">
                    <a href="#">Mi Cuenta</a>
                    <a href="#">Mis Pedidos</a>
                    <a href="#">Mesa de Regalos</a>
                    <a href="#">Ayuda</a>
                </div>

            </div>
        </div>
    </div>

    <div class="contenedor contenedor-grid">
        <div class="grid" id="grid">
            <div class="categorias">
                <button class="btn-regresar"><i class="fa fa-arrow-left"></i> Regresar</button>
                <h3 class="subtitulo">Categorias</h3>

                <a href="#" data-categoria="tecnologia-y-computadoras">Moviles y pc's<i class="fa fa-angle-right"></i></a>
                <a href="#" data-categoria="libros">Educacion <i class="fa fa-angle-right"></i></a>
                <a href="#" data-categoria="ropa-y-accesorios">Ropa<i class="fa fa-angle-right"></i></a>
                <a href="#" data-categoria="hogar-y-cocina">HOgar<i class="fa fa-angle-right"></i></a>
                <a href="#" data-categoria="juegos-y-juguetes">Diversion<i class="fa fa-angle-right"></i></a>
                <a href="#" data-categoria="salud-y-belleza">Cuidado personal<i class="fa fa-angle-right"></i></a>
                <a href="#" data-categoria="alimentos-y-bebidas">Alimentos<i class="fa fa-angle-right"></i></a>
            </div>

            <div class="contenedor-subcategorias">
                <div class="subcategoria " data-categoria="tecnologia-y-computadoras">
                    <div class="enlaces-subcategoria">
                        <button class="btn-regresar"><i class="fa fa-arrow-left"></i>Regresar</button>
                        <h3 class="subtitulo">Tecnología y Computadoras</h3>
                        <a href="#">Celulares</a>
                        <a href="#">Tablets</a>
                        <a href="#">Desktop</a>
                        <a href="#">tv's</a>
                        <a href="#">Musica</a>
                    </div>

                    <div class="banner-subcategoria">
                        <a href="#">
                            <img src="<?php echo RutaController::RutaView(); ?>img/tecnologia-banner-1.png" alt="">
                        </a>
                    </div>

                    <div class="galeria-subcategoria">
                        <a href="#">
                            <img src="<?php echo RutaController::RutaView(); ?>img/tecnologia-galeria-1.png" alt="">
                        </a>
                        <a href="#">
                            <img src="<?php echo RutaController::RutaView(); ?>img/tecnologia-galeria-2.png" alt="">
                        </a>
                        <a href="#">
                            <img src="<?php echo RutaController::RutaView(); ?>img/tecnologia-galeria-3.png" alt="">
                        </a>
                        <a href="#">
                            <img src="<?php echo RutaController::RutaView(); ?>img/tecnologia-galeria-4.png" alt="">
                        </a>
                    </div>
                </div>

                <div class="subcategoria" data-categoria="libros">
                    <div class="enlaces-subcategoria">
                        <button class="btn-regresar"><i class="fa fa-arrow-left"></i>Regresar</button>
                        <h3 class="subtitulo">Lectura</h3>
                        <a href="#">Anime</a>
                        <a href="#">Fantasia</a>
                        <a href="#">Terror</a>
                        <a href="#">Comedia</a>
                    </div>

                    <div class="banner-subcategoria">
                        <a href="#">
                            <img src="<?php echo RutaController::RutaView(); ?>img/libros-banner-1.png" alt="">
                        </a>
                    </div>

                    <div class="galeria-subcategoria">
                        <a href="#">
                            <img src="<?php echo RutaController::RutaView(); ?>img/libros-galeria-1.png" alt="">
                        </a>
                        <a href="#">
                            <img src="<?php echo RutaController::RutaView(); ?>img/libros-galeria-2.png" alt="">
                        </a>
                        <a href="#">
                            <img src="<?php echo RutaController::RutaView(); ?>img/libros-galeria-3.png" alt="">
                        </a>
                        <a href="#">
                            <img src="<?php echo RutaController::RutaView(); ?>img/libros-galeria-4.png" alt="">
                        </a>
                    </div>
                </div>

                <div class="subcategoria" data-categoria="ropa-y-accesorios">
                    <div class="enlaces-subcategoria">
                        <button class="btn-regresar"><i class="fa fa-arrow-left"></i>Regresar</button>
                        <h3 class="subtitulo">Ropa</h3>
                        <a href="#">Camisa</a>
                        <a href="#">Zapatos</a>
                        <a href="#">Deportes</a>
                        <a href="#">dijes</a>
                    </div>

                    <div class="banner-subcategoria">
                        <a href="#">
                            <img src="<?php echo RutaController::RutaView(); ?>img/ropa-banner-1.png" alt="">
                        </a>
                    </div>

                    <div class="galeria-subcategoria">
                        <a href="#">
                            <img src="<?php echo RutaController::RutaView(); ?>img/ropa-galeria-1.png" alt="">
                        </a>
                        <a href="#">
                            <img src="<?php echo RutaController::RutaView(); ?>img/ropa-galeria-2.png" alt="">
                        </a>
                        <a href="#">
                            <img src="<?php echo RutaController::RutaView(); ?>img/ropa-galeria-3.png" alt="">
                        </a>
                        <a href="#">
                            <img src="<?php echo RutaController::RutaView(); ?>img/ropa-galeria-4.png" alt="">
                        </a>
                    </div>
                </div>

                <div class="subcategoria" data-categoria="hogar-y-cocina">
                    <div class="enlaces-subcategoria">
                        <button class="btn-regresar"><i class="fa fa-arrow-left"></i>Regresar</button>
                        <h3 class="subtitulo">Hogar</h3>
                        <a href="#">Cocina</a>
                        <a href="#">Electrodomesticos</a>
                        <a href="#">Limpieza</a>
                        <a href="#">Baño</a>
                        <a href="#">Decoracion</a>
                        <a href="#">Arte</a>
                        <a href="#">Manualidades</a>
                        <a href="#">Jardin</a>
                    </div>

                    <div class="banner-subcategoria">
                        <a href="#">
                            <img src="<?php echo RutaController::RutaView(); ?>img/hogar-banner-1.png" alt="">
                        </a>
                    </div>

                    <div class="galeria-subcategoria">
                        <a href="#">
                            <img src="<?php echo RutaController::RutaView(); ?>img/hogar-galeria-1.png" alt="">
                        </a>
                        <a href="#">
                            <img src="<?php echo RutaController::RutaView(); ?>img/hogar-galeria-2.png" alt="">
                        </a>
                        <a href="#">
                            <img src="<?php echo RutaController::RutaView(); ?>img/hogar-galeria-3.png" alt="">
                        </a>
                        <a href="#">
                            <img src="<?php echo RutaController::RutaView(); ?>/img/hogar-galeria-4.png" alt="">
                        </a>
                    </div>
                </div>

                <div class="subcategoria" data-categoria="juegos-y-juguetes">
                    <div class="enlaces-subcategoria">
                        <button class="btn-regresar"><i class="fa fa-arrow-left"></i>Regresar</button>
                        <h3 class="subtitulo">Diversion</h3>
                        <a href="#">Dota</a>
                        <a href="#">Ajedrez</a>
                        <a href="#">Aire Libre</a>
                        <a href="#">Muñecas</a>
                    </div>

                    <div class="banner-subcategoria">
                        <a href="#">
                            <img src="<?php echo RutaController::RutaView(); ?>img/juegos-banner-1.png" alt="">
                        </a>
                    </div>

                    <div class="galeria-subcategoria">
                        <a href="#">
                            <img src="<?php echo RutaController::RutaView(); ?>img/juegos-galeria-1.png" alt="">
                        </a>
                        <a href="#">
                            <img src="<?php echo RutaController::RutaView(); ?>img/juegos-galeria-2.png" alt="">
                        </a>
                        <a href="#">
                            <img src="<?php echo RutaController::RutaView(); ?>img/juegos-galeria-3.png" alt="">
                        </a>
                        <a href="#">
                            <img src="<?php echo RutaController::RutaView(); ?>img/juegos-galeria-4.png" alt="">
                        </a>
                    </div>
                </div>

                <div class="subcategoria" data-categoria="salud-y-belleza">
                    <div class="enlaces-subcategoria">
                        <button class="btn-regresar"><i class="fa fa-arrow-left"></i>Regresar</button>
                        <h3 class="subtitulo">Cuidado Personal</h3>
                        <a href="#">Piel</a>
                        <a href="#">Cuerpo</a>
                        <a href="#">Perfumes</a>
                        <a href="#">Shampoo</a>
                    </div>

                    <div class="banner-subcategoria">
                        <a href="#">
                            <img src="<?php echo RutaController::RutaView(); ?>img/belleza-banner-1.png" alt="">
                        </a>
                    </div>

                    <div class="galeria-subcategoria">
                        <a href="#">
                            <img src="<?php echo RutaController::RutaView(); ?>img/belleza-galeria-1.png" alt="">
                        </a>
                        <a href="#">
                            <img src="<?php echo RutaController::RutaView(); ?>img/belleza-galeria-2.png" alt="">
                        </a>
                        <a href="#">
                            <img src="<?php echo RutaController::RutaView(); ?>img/belleza-galeria-3.png" alt="">
                        </a>
                        <a href="#">
                            <img src="<?php echo RutaController::RutaView(); ?>img/belleza-galeria-4.png" alt="">
                        </a>
                    </div>
                </div>

                <div class="subcategoria" data-categoria="alimentos-y-bebidas">
                    <div class="enlaces-subcategoria">
                        <button class="btn-regresar"><i class="fa fa-arrow-left"></i>Regresar</button>
                        <h3 class="subtitulo">Alimentos</h3>
                        <a href="#">Lacteos</a>
                        <a href="#">Cereales</a>
                    </div>

                    <div class="banner-subcategoria">
                        <a href="#">
                            <img src="<?php echo RutaController::RutaView(); ?>img/comida-banner-1.png" alt="">
                        </a>
                    </div>

                    <div class="galeria-subcategoria">
                        <a href="#">
                            <img src="<?php echo RutaController::RutaView(); ?>img/comida-galeria-1.png" alt="">
                        </a>
                        <a href="#">
                            <img src="<?php echo RutaController::RutaView(); ?>img/comida-galeria-2.png" alt="">
                        </a>
                        <a href="#">
                            <img src="<?php echo RutaController::RutaView(); ?>img/comida-galeria-3.png" alt="">
                        </a>
                        <a href="#">
                            <img src="<?php echo RutaController::RutaView(); ?>img/comida-galeria-4.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<br><br><br><br>

<main class="contenedor">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?php echo RutaController::RutaView(); ?>img/slider/slider1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo RutaController::RutaView(); ?>img/slider/slider2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo RutaController::RutaView(); ?>img/slider/slider3.jpg" alt="Third slide">
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
    <br>
    <div class="carousel">
        <div class="carousel__contenedor">
            <button aria-label="Anterior" class="carousel__anterior">
                <i class="fa fa-chevron-left"></i>
            </button>

            <div class="carousel__lista">
                <div class="carousel__elemento">                            
                    <a href="google.com">
                        <img src="img/belleza-banner-1.png" alt="belleza">
                        <div>
                            <p style="color: black">prueba</p>
                        </div>

                    </a>
                </div>

                <div class="carousel__elemento">
                    <img src="img/slider2/2.png" alt="Constitution Square - Tower I">
                    <p>Constitution Square - Tower I</p>
                </div>
                <div class="carousel__elemento">
                    <img src="img/slider2/3.png" alt="Empire State Building">
                    <p>Empire State Building</p>
                </div>
                <div class="carousel__elemento">
                    <img src="img/slider2/4.png" alt="Harmony Tower">
                    <p>Harmony Tower</p>
                </div>

                <div class="carousel__elemento">
                    <img src="img/slider2/5.png" alt="Empire State Building">
                    <p>Empire State Building</p>
                </div>
                <div class="carousel__elemento">
                    <img src="img/slider2/6.png" alt="Harmony Tower">
                    <p>Harmony Tower</p>
                </div>
                <div class="carousel__elemento">
                    <img src="img/slider2/7.png" alt="Empire State Building">
                    <p>Empire State Building</p>
                </div>
                <div class="carousel__elemento">
                    <img src="img/slider2/8.png" alt="Harmony Tower">
                    <p>Harmony Tower</p>
                </div>
            </div>

            <button aria-label="Siguiente" class="carousel__siguiente">
                <i class="fa fa-chevron-right"></i>
            </button>
        </div>

        <div role="tablist" class="carousel__indicadores"></div>
    </div>


</main>

