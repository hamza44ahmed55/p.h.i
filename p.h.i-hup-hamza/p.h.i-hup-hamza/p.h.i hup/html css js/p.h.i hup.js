var modal = document.getElementById('signInModal');
var btn = document.getElementById('signInBtn');
var span = document.getElementById('closeModal');

btn.onclick = function() {
    modal.style.display = 'flex';
}

function createAndDownloadFile() {
    var content = "Hello, this is some text content. ";
    var blob = new Blob([content], {
        type: "text/plain "
    });

    var a = document.createElement("a ");
    document.body.appendChild(a);


    a.href = window.URL.createObjectURL(blob);


    a.download = "example.txt ";


    a.click();

    window.URL.revokeObjectURL(a.href);
    document.body.removeChild(a);

    window.location.href = "mercuryapp://open?file=" + encodeURIComponent(a.download);
}