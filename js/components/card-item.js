const cardItemTemplate = document.createElement('template');
cardItemTemplate.innerHTML = `
<style>
    :host{
        display:flex;
        flex-grow:1;
        flex-basis:400px;

        height:auto;
        user-select:none;
    }

    .card {
        display:flex;
        flex-grow:1;
        flex-wrap:wrap;

        background:var(--surfaceMediumSolid);
        border-radius:28px;
        cursor:pointer;
        inset:0;
    }


    .content_divisor{
        position:relative;
        display:flex;
        flex-direction:column;
        flex-grow:1;
        flex-basis:300px;        
        gap:8px;


        box-sizing:border-box;
    }
    .content_divisor:last-child{
        padding:24px;
    }
    ::-webkit-scrollbar {
        display: none;
    }


    img{
        width:100%;
        height:100%;
        object-fit: cover;
        border-radius:24px;
        aspect-ratio: 16/10;
    
    }

    event-title{
        font-size:24px;
        font-weight:600;
        color:rgba(var(--normalInverted), 8);
    }
    event-date{
        font-size:16px;
        color:rgba(var(--normalInverted), 0.5);
    }
    event-description{
        font-size:16px;
        color:rgba(var(--normalInverted), 0.8);
    
    }
    .simple_container{
        display:flex;
        flex-direction:column;
        margin-bottom:8px;
        gap:0px;
    }

    .card.open{
        position:absolute;
    }


    @media only screen and (min-width: 680px){
      .card{inset:10% 5%;}
    }

</style>

<div class="transparent-cards" style="display:none; z-index:10; width:100%; height:100vh; inset:0; position:fixed; background:rgba(var(--normalInverted), 0)">

</div>


<div class="card">
    <div class="content_divisor">
        
        <img src="resources/pretty_img_2.png" alt="Lights" style="width:100%">
    </div>
    <div class="content_divisor">
        <div class="simple_container">
            <event-title>Evento bonito</event-title>
            <event-date>29 de Feb, 2024</event-date>
        </div>
        
        <event-description>
        es un evento universitario que destaca el poder de la música en la enseñanza y el aprendizaje. Explora cómo la música mejora la retención de conceptos y promueve el desarrollo emocional y social de los estudiantes. Incluye talleres, paneles y presentaciones para capacitar a educadores en el uso efectivo de la música en el aula
        </event-description>
        
    </div>
</div>
`;


class cardItem extends HTMLElement {
  constructor() {
    super();
    const shadow = this.attachShadow({mode: 'open'});
    shadow.append(cardItemTemplate.content.cloneNode(true));

   
  }

  connectedCallback() {
    // if(this.hasAttribute('data-img')) {
    //   this.shadowRoot.querySelector('img').setAttribute("src", this.getAttribute('data-img'));
    // }
    


    this.shadowRoot.querySelector('.card').addEventListener('click', () => {
        var cardElement = this.shadowRoot.querySelector('.card');
        

        var hostElement = this.shadowRoot.host;
        var transparentCards = this.shadowRoot.querySelector(".transparent-cards");

        if (cardElement.classList.contains("open")) {
            

            // document.getElementById("section-events").style.position = "relative";
            // host.style.height="auto";  
        }else{
            var cardHeight = cardElement.offsetHeight;
            transparentCards.style.display = "flex";

            hostElement.style.height=cardHeight+"px";
            // document.getElementById("section-events").style.position = "";

        }

        let state = Flip.getState(cardElement);

        if (cardElement.classList.contains("open")) {
            cardElement.classList.remove("open");
            this.shadowRoot.appendChild(cardElement);
            transparentCards.style.display = "none";
        }else{
            cardElement.classList.add("open");
            transparentCards.appendChild(cardElement);
        }

        Flip.from(state, {
            duration: 0.5,
            scale: false,
            ease: CustomEase.create("custom", "M0,0 C0.308,0.19 0.107,0.633 0.288,0.866 0.382,0.987 0.656,1 1,1 "),
            absolute: true,
        });


    });
  }
}




customElements.define('card-item', cardItem);