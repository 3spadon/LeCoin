document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("iconJournal");
    var inpK = document.getElementById("inpK");
    var btnK = document.getElementById("btnK");

    // this function runs when the DOM is ready, i.e. when the document has been parsed
    // Purpose is to put brackets on my links when hovering with the mouse :)
    // JOURNAL
    document.getElementById("iconJournal").addEventListener("click", function () {
        if(inpK.hidden == false){
            inpK.hidden = true;
            btnK.hidden = true;
        }
        else{
        inpK.hidden = false;
        btnK.hidden = false;
        }
    })
});