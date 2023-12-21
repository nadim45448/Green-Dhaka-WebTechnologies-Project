document.addEventListener("DOMContentLoaded", function () {
    loadExperts();
});

function loadExperts() {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "../Controller/get_experts.php", true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var experts = JSON.parse(xhr.responseText);
            var expertSelect = document.getElementById("expert");

            experts.forEach(function (expert) {
                var option = document.createElement("option");
                option.value = expert.id;
                option.text = expert.name;
                expertSelect.add(option);
            });
        }
    };
    xhr.send();
}

function requestAppointment() {
    var expertId = document.getElementById("expert").value;
    var date = document.getElementById("date").value;

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "../Controller/request_appointment.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4) {
            var messageContainer = document.getElementById("message");

            if (xhr.status == 200) {
                console.log(xhr.responseText); 

                if (xhr.responseText.includes("successfully")) {
                    messageContainer.innerHTML = "Appointment requested successfully!";
                } else {
                    messageContainer.innerHTML = "Error: " + xhr.responseText;
                }
            } else {
                messageContainer.innerHTML = "Error: " + xhr.status + " - " + xhr.statusText;
            }
        }
    };
    xhr.send("expertId=" + expertId + "&date=" + date);
}

