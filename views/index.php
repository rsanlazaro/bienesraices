<main class="contenedor seccion">
    <h2 data-cy="heading-nosotros">Más sobre nosotros</h2>
    <div class="iconos-nosotros" data-cy="iconos-nosotros">
        <div class="icono">
            <img src="/build/img/icono1.svg" alt="icono seguridad" loading="lazy" />
            <h3>Seguridad</h3>
            <p>
                Cuenta con la mayor seguridad a lo largo de todo tu proceso de compra, acompañado por nuestros asesores especializados
            </p>
        </div>
        <div class="icono">
            <img src="/build/img/icono2.svg" alt="icono Precio" loading="lazy" />
            <h3>Precio</h3>
            <p>
                Encuentra los mejores precios disponibles en el mercado. Además, contamos con facilidades de pago de acuerdo a tus necesidades
            </p>
        </div>
        <div class="icono">
            <img src="/build/img/icono3.svg" alt="icono Tiempo" loading="lazy" />
            <h3>Tiempo</h3>
            <p>
                Realiza los trámites en el menor tiempo posible gracias a nuestros procesos optimizados y atención personalizada
            </p>
        </div>
    </div>
</main>

<section class="seccion contenedor">
    <h2>Casas y departamentos en venta</h2>

    <?php
    include __DIR__ . '/listado.php';
    ?>

    <div class="alinear-derecha">
        <a href="/propiedades" class="boton-verde" data-cy="todas-propiedades">Ver todas</a>
    </div>
</section>

<section data-cy="imagen-contacto" class="imagen-contacto">
    <h2>Encuentra la casa de tus sueños</h2>
    <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
    <a href="/contacto" class="boton-amarillo">Contáctanos</a>
</section>

<div class="contenedor seccion seccion-inferior">
    <section data-cy="blog" class="blog">
        <h3>Nuestro Blog</h3>
        <!-- <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp" />
                    <source srcset="build/img/blog1.jpg" type="image/jpeg" />
                    <img loading="lazy" src="build/img/blog1.jpg" alt="Texto Entrada blog" />
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="/entrada">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p>Escrito el: <span>20/10/2021</span> por <span>Admin</span></p>

                    <p>
                        Consejos para construir una terraza en el techo de tu casa con
                        los mejores materiales y ahorrando dinero
                    </p>
                </a>
            </div>
        </article> -->
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp" />
                    <source srcset="build/img/blog2.jpg" type="image/jpeg" />
                    <img loading="lazy" src="build/img/blog2.jpg" alt="Texto Entrada blog" />
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="/entrada">
                    <h4>Guía para la decoración de tu hogar</h4>
                    <p>Escrito el: <span>20/10/2021</span> por <span>Admin</span></p>

                    <p>
                        Maximiza el espacio en tu hogar con esta guía, aprende a
                        combinar nuestros muebles y colores para darle vida a tu espacio
                    </p>
                </a>
            </div>
        </article>
    </section>

    <section data-cy="testimoniales" class="testimoniales">
        <h3>Testimoniales</h3>
        <div class="testimonial">
            <blockquote>
                El personal se comportó de una excelente forma, muy buena atención y
                la casa que me ofrecieron cumple con todas mis expectativas.
            </blockquote>
            <p>-Rafael San Lázaro</p>
        </div>
    </section>
</div>