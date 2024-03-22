const template = document.createElement('template');
template.innerHTML = `
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

        background:var(--surfaceMedium);
        border-radius:28px;
        cursor:pointer;
        transition: transform .3s cubic-bezier(0,0,0.5,1);
    }
    .card:hover{
        transform: scale(1.0161290323);


        // filter:brightness(0.95);
        // box-shadow: 0px 0px 0px 1px rgba(var(--normalInverted), 0.1);
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


    button{
        background:var(--primary);
        color:var(--onPrimary);
        border:none;

        border-radius:12px;
        width:fit-content;

        font-size: 16px;
        line-height: 16px;
        padding:8px 16px;

        font-weight:500;
        cursor:pointer;
    }
    button:hover{filter:brightness(1.1);}
    button:active{animation:buttonClick 125ms;}

    @keyframes buttonClick{
        0%{transform:scale(1);}
        50%{transform:scale(0.95);}
        100%{transform:scale(1);}
    
    }
</style>


<div class="card">
    <div class="content_divisor">
        <img src="resources/pretty_img_2.png" alt="Lights" style="width:100%">
    </div>
    <div class="content_divisor">
        <div class="simple_container">
            <event-title>...</event-title>
            <event-date>...</event-date>
        </div>
        
        <event-description>
        -
        </event-description>
        
    </div>
</div>
`;


class eventItem extends HTMLElement {
  constructor() {
    super();
    const shadow = this.attachShadow({mode: 'open'});
    shadow.append(template.content.cloneNode(true));
  }

  connectedCallback() {
    if(this.hasAttribute('data-img')) {
      this.shadowRoot.querySelector('img').setAttribute("src", this.getAttribute('data-img'));
    }
    if(this.hasAttribute('data-title')) {
        this.shadowRoot.querySelector('event-title').innerText = this.getAttribute('data-title');
    }
    if(this.hasAttribute('data-date')) {
        this.shadowRoot.querySelector('event-date').innerText = this.getAttribute('data-date');
    }
    if(this.hasAttribute('data-description')) {
        this.shadowRoot.querySelector('event-description').innerText = this.getAttribute('data-description');
    }
  }
}

customElements.define('event-item', eventItem);