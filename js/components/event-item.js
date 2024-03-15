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
        border-radius:32px;
        cursor:pointer;
    }
    .card:hover{
        filter:brightness(0.95);
        box-shadow: 0px 0px 0px 1px rgba(var(--normalInverted), 0.1);
    }

    .content_divisor{
        position:relative;
        display:flex;
        flex-direction:column;
        flex-grow:1;
        flex-basis:300px;        
        gap:8px;


        box-sizing:border-box;
        padding:8px;
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
        <img src="https://www.csuohio.edu/sites/default/files/51006432177_8688c7497b_c.jpg" alt="Lights" style="width:100%">
    </div>
    <div class="content_divisor">
        <event-title>Música por la educación</event-title>
        <event-date>29 de Feb, 2024</event-date>
        <event-description>
            En este concierto benéfico, se recaudarán fondos para apoyar la educación de niños en situación de pobreza. Se presentarán diferentes artistas locales y nacionales.
        </event-description>
    </div>
</div>
`;


class BalanceItem extends HTMLElement {
  constructor() {
    super();
    const shadow = this.attachShadow({mode: 'open'});
    shadow.append(template.content.cloneNode(true));
    // this.appendChild(template.content.cloneNode(true));
    
    // component elements that recieve values
    // var incomeElement = this.querySelector('[income-formated]');
    // var outcomeElement = this.querySelector('[outcome-formated]');
    // var balanceElement = this.querySelector('[balance-formated]');
    // var incomeBar = this.querySelector('[income-bar]');
    // var outcomeBar = this.querySelector('[outcome-bar]');
    // var balanceBar = this.querySelector('[balance-bar]');
    // var MonthTitle = this.querySelector('[data-month]');

    // values from the component attributes
    // var dataIncome = this.getAttribute('data-income');
    // var dataOutcome = this.getAttribute('data-outcome');

    // asignation of the values to the elements
    // incomeElement.innerText = formatMoney(dataIncome) ;
    // outcomeElement.innerText = formatMoney(dataOutcome) ;
    // balanceElement.innerText = formatMoney(Number(dataIncome) + Number(dataOutcome));
    // setProgressBarHeight(incomeBar, outcomeBar, dataIncome, dataOutcome);
    // setMonthTitle(MonthTitle, parseInt(this.getAttribute('data-month')));
    // setBalanceBar(balanceBar, dataIncome, dataOutcome);
  }
}

customElements.define('event-item', BalanceItem);