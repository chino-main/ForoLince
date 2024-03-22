async function createEvent(){
    const parent = "#window-create_event"
    if(!checkEmpty('#window-create_event', 'input')){ return false;}
    toggleButton(parent, true);
    loadAnimation(parent, true);

    const eventName = document.getElementById("create-event_name");
    const eventDescription = document.getElementById("create-event_description");
    const eventDate = document.getElementById("create-event_date");
    


}