async function createNewEvent(){
    const parent = "#window-create_event"
    if(!checkEmpty('#window-create_event', 'input, textarea')){ return false;}
    toggleButton(parent, true);
    loadAnimation(parent, true);

    const eventName = document.getElementById("create-event_name");
    const eventDescription = document.getElementById("create-event_description");
    const eventDate = document.getElementById("create-event_date");
    const eventTime = document.getElementById("create-event_time");
    const eventAddress = document.getElementById("create-event_address");
    const eventImage = document.getElementById("create-event_image");
    const eventCredits = document.getElementById("create-event_credits");

    const data = {
        op: "createNewEvent",
        event_name: eventName.value,
        event_description: eventDescription.value,
        event_date: eventDate.value,
        event_time: eventTime.value,
        event_address: eventAddress.value,
        event_image: eventImage.value,
        event_credits: eventCredits.value,
    };
    const url = 'controllers/events.controller.php';
    const response = await fetch(url, {
        method: 'POST',
        body: JSON.stringify(data),
    });
    if (response.ok) {
        const result = await response.json();
        toggleButton(parent, false);
        loadAnimation(parent, false);

        if(!result){
            message("Hubo un error", "error");
            return false;
        }
         
        message("Evento creado", "success");4
        toggleWindow();
        getEventsTable();
        return true;
    }
}

async function getEventsCards(){
    const data = {
        op: "getEvents",
    };
    const url = 'controllers/events.controller.php';
    const response = await fetch(url, {
        method: 'POST',
        body: JSON.stringify(data),
    });
    if (response.ok) {
        const result = await response.json();
        if (!result) {
            message("Hubo un error", "error");
            return false;
        }

        document.getElementById("response-events_holder").innerHTML = result;
        return true;


    }
}

async function getEventsTable(){
    const data = {
        op: "getEventsTable",
    };
    const url = 'controllers/events.controller.php';
    const response = await fetch(url, {
        method: 'POST',
        body: JSON.stringify(data),
    });
    if (response.ok) {
        const result = await response.json();
        if (!result) {
            message("Hubo un error", "error");
            return false;
        }

        document.getElementById("response-events_table").innerHTML = result;
        return true;


    }
}