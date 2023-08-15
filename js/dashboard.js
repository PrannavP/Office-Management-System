const timeDisplay = document.getElementById('time');

const date = new Date();

timeDisplay.innerText = `${date.getHours()}:${date.getMinutes()}`;