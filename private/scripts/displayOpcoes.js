function displayOpcoes() {
    var btnOpcoes = document.getElementById("btnOpcoes");

    var formImpress = document.getElementById("divFunctions");
    var classformImpress = formImpress.className;

    if (classformImpress === "functionsOn") {
        btnOpcoes.style.opacity = .5;
        formImpress.className = "functionsOff";
    } else {
        formImpress.className = "functionsOn";
        btnOpcoes.style.opacity = 1;
    }
}