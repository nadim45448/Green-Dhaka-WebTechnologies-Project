function sendMessage() {
    var messageInput = document.getElementById('message-input');
    var message = messageInput.value;

    if (message.trim() !== '') {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '../Controller/chat.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                displayMessage(JSON.parse(xhr.responseText));
                messageInput.value = '';
            }
        };
        xhr.send('message=' + encodeURIComponent(message));
    }
}

function displayMessage(data) {
    var chatMessages = document.getElementById('chat-messages');
    var message = '<div><strong>' + data.username + ':</strong> ' + data.message +
        ' <span class="timestamp">' + data.timestamp + '</span></div>';
    chatMessages.innerHTML += message;
    chatMessages.scrollTop = chatMessages.scrollHeight;
}

function loadChat() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '../Controller/getChat.php', true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var messages = JSON.parse(xhr.responseText);
            messages.forEach(function (message) {
                displayMessage(message);
            });
        }
    };
    xhr.send();
}

window.onload = loadChat;
