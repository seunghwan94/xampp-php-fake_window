function moveURL(button) {
    var url = button.getAttribute('data-url');
    if (url) {
        window.location.href = url;
    }
}