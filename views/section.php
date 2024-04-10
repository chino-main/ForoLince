<section id="section-start" class="active">
    <h1>Colores para botones</h1>

    <button class="color-primary ripple_effect">Boton</button>
    <button class="color-primaryNeutral ripple_effect">Boton</button>
    <button class="color-primarycontainer ripple_effect">Boton</button>
    <button class="color-outline ripple_effect">Boton</button>
    <button class="color-normal ripple_effect">Boton</button>
    <button class="color-normalNeutral ripple_effect">Boton</button>

</section>

<section id="section-test">
    <h1>Seccion de prueba</h1>
    <button class="color-outline ripple_effect" data-flip-id="animate" onclick="toggleWindow('#window-example_big')">Abrir ventana grande</button>
</section>

<section id="section-events">

    <toolbar class="invisible">
        <div class="toolbar_divisor">
            <h1>Eventos</h1>
        </div>
        <div class="toolbar_divisor">
            <button 
                class="color-primary ripple_effect"
                onclick="toggleWindow('#window-create_event')"
                data-flip-id="animate"
            >
                + Añadir evento
            </button>
        </div>
    </toolbar>

    <div class="vf_container visual_frame invisible full-centered">
        <h1 class="emphasized-light" style="color:rgba(var(--normalInverted),0.4)">Aún no has creado ningún evento</h1>
    </div>
</section>
