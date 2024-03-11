<!-- Seccion de Inicio -->
<section id="section-start" class="active">
    <h1>Hola mundo</h1>
</section>

<!-- Seccion de Noticias -->
<section id="section-news">

    <!-- Barra Noticias -->
    <toolbar class="invisible">
        <div class="toolbar_divisor">
            <h1 class="ultra-large">Noticias</h1>
        </div>

        <div class="toolbar_divisor">
        <button class="color-primary ripple_effect" data-flip-id="animate" onclick="toggleWindow('#window-create_news')">Crear Noticia</button>
        </div>
    </toolbar>

    <!-- Mensaje de No hay noticias aun
    <div class="container_centred">
        <text class="message">No hay noticias aún</text>
    </div> -->

</section>

<!-- Seccion de Pruebas -->
<section id="section-test">
    <h1>Seccion de prueba</h1>
    <button class="color-outline ripple_effect" data-flip-id="animate" onclick="toggleWindow('#window-example_big')">Abrir ventana grande</button>
</section>


<!-- Estilos que no le gustaron al davo pedorro wapo -->
<style>
    div.container_centred {
        width: 98%;
        height: 98%; 
        display: flex;  
        justify-content: center;
        align-items: center;
    }

    text.message{
        color:rgba(v    ar(--normalInverted), 0.85);
        font-weight: normal;
        /*font-family: 'Inter', sans-serif;*/
        font-size:40px;
        line-height: 48px;
        opacity: 20%;
        user-select: none;
        font-weight: bold;
    }
</style>