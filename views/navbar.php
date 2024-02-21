<sidebar>
    <!-- <selector id="cocounut_logo"><img src="resources/cocounutlogo.png" alt=""></selector> -->
    <selector class="sidebar-title ripple_effect" onclick="toggleMenu(this)">
        <div class="simple_container">Menú</div>
    </selector>
    <selector id="sel-start" onclick="toggleSection('#section-start')" class="active ripple_effect">
        <span class="material-symbols-rounded">home</span>
        Inicio
    </selector>
    <selector id="sel-test" onclick="toggleSection('#section-test');" class="ripple_effect">
        <span class="material-symbols-rounded">inbox</span>
        Prueba
    </selector>
    
    <selector class="sidebar-title">
        Opciones
    </selector>
    <selector onclick="toggleTheme()" class="ripple_effect">
        <span class="material-symbols-rounded"id="toggle-theme_icon">light_mode</span>
        Cambiar tema
    </selector>
    <selector onclick="toggleWindow('#window-account')" class="ripple_effect" data-flip-id="animate">
        <span class="material-symbols-rounded">account_circle</span>
        Cuenta
    </selector>
    <selector onclick="toggleWindow('#window-logout', 'absolute')" class="ripple_effect" data-flip-id="animate">
        <span class="material-symbols-rounded">logout</span>
        Cerrar sesión
    </selector>
</sidebar>

<bottombar>
    <selector id="btmSel-start" onclick="toggleSection('#section-start')" class="active">
        <span class="material-symbols-rounded">home</span>
        Inicio
    </selector>
    <selector id="btmSel-test" onclick="toggleSection('#section-test');">
        <span class="material-symbols-rounded">inbox</span>
        Prueba
    </selector>
</bottombar>