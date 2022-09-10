<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source src="build/img/nosotros.webp" type="image/webp">
                    <source src="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 años de experiencia
                </blockquote>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa magnam eveniet optio! Amet deleniti velit nemo quia saepe fuga sequi perferendis labore nihil placeat? Tempora nam tempore libero expedita totam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident officia dolorem sunt vero quis perferendis animi, quisquam numquam maiores reiciendis, voluptatibus laboriosam tempora quae molestias consequatur quos eaque blanditiis modi!</p>

                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat alias ducimus excepturi laboriosam odit nihil, sunt necessitatibus quidem, rerum quae, magni unde vero ea iste. Libero eligendi maiores alias sint..</p>
            </div>
        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est voluptate architecto, ad iusto hic accusamus mollitia a neque sunt nobis fugit tempore odit cum cupiditate voluptates dicta, error voluptas alias.</p>
            </div>

            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est voluptate architecto, ad iusto hic accusamus mollitia a neque sunt nobis fugit tempore odit cum cupiditate voluptates dicta, error voluptas alias.</p>
            </div>

            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est voluptate architecto, ad iusto hic accusamus mollitia a neque sunt nobis fugit tempore odit cum cupiditate voluptates dicta, error voluptas alias.</p>
            </div>
        </div>
    </section>

    <?php
        incluirTemplate('footer');
    ?>