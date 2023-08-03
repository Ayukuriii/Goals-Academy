// Turn Navbar Toggler Icon
$(".navbar-toggler").click(function () {
    $(this).toggleClass("collapsed");
    if ($(this).hasClass("collapsed")) {
        $(this).html('<i class="fas fa-times fs-1 d-flex justify-content-start"></i>');
    } else {
        $(this).html('<i class="fas fa-bars fs-1 d-flex justify-content-start"></i>');
    }
});

// Generate Rounded Canvas Cropper JS
function getRoundedCanvas(sourceCanvas) {
    const canvas = document.createElement('canvas');
    const context = canvas.getContext('2d');
    const width = sourceCanvas.width;
    const height = sourceCanvas.height;

    canvas.width = width;
    canvas.height = height;
    context.imageSmoothingEnabled = true;
    context.drawImage(sourceCanvas, 0, 0, width, height);
    context.globalCompositeOperation = 'destination-in';
    context.beginPath();
    context.arc(width / 2, height / 2, Math.min(width, height) / 2, 0, 2 * Math.PI, true);
    context.fill();
    return canvas;
}

// Download a file form a url.
function saveFile(url) {
    // Get file name from url.
    var filename = url.substring(url.lastIndexOf("/") + 1).split("?")[0];
    var xhr = new XMLHttpRequest();
    xhr.responseType = 'blob';
    xhr.onload = function() {
        var a = document.createElement('a');
        a.href = window.URL.createObjectURL(xhr.response); // xhr.response is a blob
        a.download = filename; // Set the file name.
        a.style.display = 'none';
        document.body.appendChild(a);
        a.click();
        delete a;
    };
    xhr.open('GET', url);
    xhr.send();
}

// Generate Countdown
const countdown = (element, deadline) => {
    setInterval(() => {
        const difference = deadline.diff(moment());
        if (difference <= 1) {
            clearInterval(countdown);
            element.innerText = "00:00:00";
        } else {
            const remaining = moment();

            remaining.hours(Math.floor(difference  / (1000*60*60)));
            remaining.minutes(Math.floor(difference % (1000*60*60) / (1000*60)));
            remaining.seconds(Math.floor(difference % (1000*60*60) % (1000*60) / (1000)));

            element.innerText = remaining.format("HH:mm:ss");
        }
    }, 1000);
}
