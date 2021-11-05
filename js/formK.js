document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("iconJournal");
    var btnK = document.getElementById("btnK");
    btnK.hidden = true;
    // this function runs when the DOM is ready, i.e. when the document has been parsed
    // Purpose is to put brackets on my links when hovering with the mouse :)
    // JOURNAL
    document.getElementById("iconJournal").addEventListener("click", function () {
        if(btnK.hidden == false){
            btnK.hidden = true;
        }
        else{
        btnK.hidden = false;
        }
    })
    document.getElementById("btnK").addEventListener("click", function () {
        document.location="index.php?action=listPosts&key=1"
    })
});