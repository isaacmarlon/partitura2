function displayOpcoes() {
    var btnOpcoes = document.getElementById("btnOpcoes");

    var formImpress = document.getElementById("impressoraForm");
    var classformImpress = formImpress.className;

    if (classformImpress === "impressoraForm1") {
        btnOpcoes.style.opacity = .5;
        formImpress.className = "impressoraForm0";
    } else {
        formImpress.className = "impressoraForm1";
        btnOpcoes.style.opacity = 1;
    }
}