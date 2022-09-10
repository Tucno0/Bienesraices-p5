<?php include 'includes/templates/header.php'; ?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en venta Frente al Bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img src="build/img/destacada.jpg" alt="Imnagen de la Propiedad" loading="lazy">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>

            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" src="build/img/icono_wc.svg" alt="icono wc" loading="lazy">
                    <p>3</p>
                </li>

                <li>
                    <img class="icono" src="build/img/icono_estacionamiento.svg" alt="icono_estacionamiento" loading="lazy">
                    <p>3</p>
                </li>

                <li>
                    <img class="icono" src="build/img/icono_dormitorio.svg" alt="icono habitaciones" loading="lazy">
                    <p>4</p>
                </li>
            </ul>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid tempora, et maxime vel, eveniet architecto eum optio est ut dolore molestiae atque facere totam ab reiciendis autem doloremque possimus fuga?
            Fugit id numquam odit, deleniti temporibus dolore ullam nostrum est ab inventore impedit aliquid dolor explicabo, ad unde voluptate corrupti fuga molestias, obcaecati officiis vel molestiae delectus. Aliquam, veritatis delectus!</p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi veniam placeat ducimus ea? Laborum quam consequuntur soluta ad quo eaque consequatur. Dolorem magni laboriosam quo? Modi, eveniet vero! Facilis, voluptatum!</p>
        </div>
    </main>

    <?php
        include 'includes/templates/footer.php';
    ?>