const timeDisplay = document.getElementById('time');

const date = new Date();

// function formatTime(){
//     if(date.getHours() < 0){
//         return 
//     }
// };

function displayTime(){
    timeDisplay.textContent = `${date.getHours()}:${date.getMinutes()}:${date.getSeconds()}`;
    // console.log('hello');
};

displayTime();

setInterval(displayTime, 1000);