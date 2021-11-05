document.addEventListener("DOMContentLoaded", function () {
    var lienJournal = document.getElementById("lienJournal");
    var lienReves = document.getElementById("lienReves");
    var lienLivres = document.getElementById("lienLivres");
    var lienTheologie = document.getElementById("lienTheologie");
    var lienShellcoding = document.getElementById("lienShellcoding");
    // this function runs when the DOM is ready, i.e. when the document has been parsed
    // Purpose is to put brackets on my links when hovering with the mouse :)
    // JOURNAL
    document.getElementById("lienJournal").addEventListener("mouseover", function () {
        lienJournal.textContent = "{Journal}";
        lienJournal.style.paddingLeft = "3px";
        lienJournal.style.paddingRight = "2px";
    })
    document.getElementById("lienJournal").addEventListener("mouseout", function () {
        lienJournal.textContent = "Journal";
        lienJournal.style.paddingLeft = "15px";
        lienJournal.style.paddingRight = "15px";
    })
    // REVES
    document.getElementById("lienReves").addEventListener("mouseover", function () {
        lienReves.textContent = "{Rêves}";
        lienReves.style.paddingLeft = "3px";
        lienReves.style.paddingRight = "2px";
    })
    document.getElementById("lienReves").addEventListener("mouseout", function () {
        lienReves.textContent = "Rêves";
        lienReves.style.paddingLeft = "15px";
        lienReves.style.paddingRight = "15px";
    })

    // REVES
    document.getElementById("lienLivres").addEventListener("mouseover", function () {
        lienLivres.textContent = "{Livres}";
        lienLivres.style.paddingLeft = "3px";
        lienLivres.style.paddingRight = "2px";
    })
    document.getElementById("lienLivres").addEventListener("mouseout", function () {
        lienLivres.textContent = "Livres";
        lienLivres.style.paddingLeft = "15px";
        lienLivres.style.paddingRight = "15px";
    })

        // Theologie
        document.getElementById("lienTheologie").addEventListener("mouseover", function () {
            lienTheologie.textContent = "{Théologie}";
            lienLivlienTheologieres.style.paddingLeft = "3px";
            lienTheologie.style.paddingRight = "2px";
        })
        document.getElementById("lienTheologie").addEventListener("mouseout", function () {
            lienTheologie.textContent = "Théologie";
            lienTheologie.style.paddingLeft = "15px";
            lienTheologie.style.paddingRight = "15px";
        })

        // Shellcoding
        document.getElementById("lienShellcoding").addEventListener("mouseover", function () {
            lienShellcoding.textContent = "{Shellcoding}";
            lienShellcoding.style.paddingLeft = "0px";
            lienShellcoding.style.paddingRight = "-4px";
        })
        document.getElementById("lienShellcoding").addEventListener("mouseout", function () {
            lienShellcoding.textContent = "Shellcoding";
            lienShellcoding.style.paddingLeft = "15px";
            lienShellcoding.style.paddingRight = "15px";
        })
});