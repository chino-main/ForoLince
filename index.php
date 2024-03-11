<?php 
include_once 'views/header.php'; 
include_once 'config/cookies.php';
cookiesRedirect($cookie_uid);
?>

<transparent>
  <window id="signup" class="slim" data-flip-id="animate">
    <toolbar>
      <div class="content_box invisible">
        <button class="action red" onclick="toggleWindow()"><span class="material-symbols-rounded">close</span></button>
      </div> 
    </toolbar>
    <section>

      <div class="simple_container" style="margin-bottom:8px;">
        <!-- <img src="resources/texticon.png" class="texticon-index"> -->
        <h1 class="ultra-large">Crear cuenta</h1>
      </div>

      <div class="simple_container">
        <span class="modern-input">
          <label for="email">Correo electrónico</label>
          <input type="text" id="email" autocomplete="none">
        </span>
        <span class="modern-input">
          <label for="pwdsignup">Contraseña</label>
          <input type="password" id="pwdsignup" autocomplete="none">
        </span>
        <span class="modern-input">
          <label for="pwdrepeat">Repite la contraseña</label>
          <input type="password" id="pwdrepeat" autocomplete="none">
        </span>
      </div>
      <button class="color-primary ripple_effect" onclick="signUp()">Crear cuenta</button>

    </section>
  </window>

  <window id="login" class="slim" data-flip-id="animate">
    <toolbar>
      <div class="content_box invisible">
        <button class="action red" onclick="toggleWindow()"><span class="material-symbols-rounded">close</span></button>
      </div> 
    </toolbar>
    <section>
      <div class="simple_container" style="margin-bottom:8px;">
        <!-- <img src="resources/texticon.png" class="texticon-index"> -->
        <h1 class="ultra-large">Iniciar sesión</h1>
      </div>
      
      <div class="simple_container">
        <span class="modern-input">
          <label for="name">Correo o nombre de usuario</label>
          <input type="text" id="name" autocomplete="none">
        </span>
        <span class="modern-input">
          <label for="pwd">Contraseña</label>
          <input type="password" id="pwd">
        </span>
      </div>
      <button class="color-primary ripple_effect" onclick="logIn()">Iniciar sesión</button>

    </section>
  </window>
    
</transparent>

<main>
  <holder>
    <toolbar>
      <button data-flip-id="animate" onclick="toggleWindow('#signup')" class="toolbar-button ripple_effect">Crear cuenta</button>
    </toolbar>

    <section class="active indexSection" id="section-start">
      <div class="vf_container visual_frame centered invisible">
        <div class="centered_container">
          <h1 class="ultra-large ">Foro Lince</h1>
          <h1 class="thin b-margin">Inicia sesión como estudiante o como profesor</h1>
          <img src="resources/login_img.png" style="width:100%; border-radius:24px; margin-bottom:16px">
          
          <div class="content_box invisible" style="margin-bottom:64px">
            <button onclick="toggleWindow('#signup')" class="big-button color-primaryNeutral ripple_effect" data-flip-id="animate">
              Registrarse
            </button>
            <button onclick="toggleWindow('#login')" class="big-button color-outline ripple_effect" data-flip-id="animate">
              <span class="material-symbols-rounded dynamic fill ">login</span>
              Iniciar sesión
            </button>
          </div>

        </div>
      </div>

      <!-- <div class="content_box small" style="justify-content: center; padding:32px;">
        <h1 style="font-size:6vh; line-height:6vh;">Para estudiantes</h1>
        <h2 style="margin-bottom:24px;">Pandel de administración para estudiantes</h2>
        <button class="color-primary" onclick="toggleWindow('#login')" data-flip-id="animate">Iniciar sesión</button>
          <button class="color-outline" onclick="toggleWindow('#signup')" data-flip-id="animate">Crear cuenta</button>
      </div>
      <div class="content_box small" style="justify-content: center; padding:32px;">
          <h1 style="font-size:6vh; line-height:6vh;">Foro Lince</h1>
          <h1 style="margin-bottom:24px;">Panel de administración</h1>
          <button class="color-primary" onclick="toggleWindow('#login')" data-flip-id="animate">Iniciar sesión</button>
          <button class="color-outline" onclick="toggleWindow('#signup')" data-flip-id="animate">Crear cuenta</button>
      </div> -->
    </section>

  </holder>
</main>

<style>
  .visual_frame.centered{
    padding:24px;
    justify-content:center;
    align-items:center;  
  }
  .centered_container{
    width:100%;
    max-width:800px;
    height:100%;
  }

  @media only screen and (min-width: 680px){
    .big-button{max-width:300px}
    .centered_container{
      display:flex;
      flex-wrap:wrap;
      align-content: center;
    }
  }
</style>


<?php include_once 'views/footer.php'; ?>