setInterval(ClockTime, 1000); // 1000ms=1sec
function ClockTime() {
     var clock1, clock2, clock3;

    clock1 = new Date();

    clock2 = clock1.toLocaleDateString();
    document.getElementById('DateToday').innerHTML = clock2;
    document.getElementById('DateToday').style.color = "white";

    clock3 = clock1.toLocaleTimeString();
    document.getElementById('ShowClockToday').innerHTML = clock3;
    document.getElementById('ShowClockToday').style.color = "white";
}
