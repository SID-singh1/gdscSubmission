document.addEventListener("DOMContentLoaded", function() {
    var currentDate = new Date();
    var day = currentDate.getDate();
    var month = currentDate.getMonth() + 1;
    var year = currentDate.getFullYear();

    
    var daysOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    var dayOfWeek = daysOfWeek[currentDate.getDay()];

    var formattedDate = `${day < 10 ? '0' + day : day}-${month < 10 ? '0' + month : month}-${year}`;
    
    var dateDisplay = document.getElementById("dateDisplay");
    dateDisplay.innerHTML = `<span style="color: #444;">${formattedDate}</span> <span style="color: #16a085;">${dayOfWeek}</span>`;
    dateDisplay.style.fontWeight = "bold";
});
