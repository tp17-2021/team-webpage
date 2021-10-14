// closes bootstrap modal after pressing back button if open
// https://stackoverflow.com/questions/64832109/hide-modal-window-modal-box-when-browser-back-button-clicked

history.pushState(null, null);
window.addEventListener('popstate', () => {
    // Add here the classes of the MODAL as they look when it is open
    var x = document.getElementsByClassName('modal show')[0];
    if (x) {
        // Add here the classes of target Close Button
        var z = x.getElementsByClassName('btn-close')[0];
        z.click();
        history.pushState(null, null);
    } else {
        window.history.back();
    }
});

