function easy() {
    document.getElementById("easy").classList.remove("d-none");
    document.getElementById("medium").classList.add("d-none");
    document.getElementById("hard").classList.add("d-none");
    document.getElementById("vhard").classList.add("d-none");

    document.getElementById("btn-easy").classList.add("disabled");
    document.getElementById("btn-medium").classList.remove("disabled");
    document.getElementById("btn-hard").classList.remove("disabled");
    document.getElementById("btn-vhard").classList.remove("disabled");
}

function medium() {
    document.getElementById("easy").classList.add("d-none");
    document.getElementById("medium").classList.remove("d-none");
    document.getElementById("hard").classList.add("d-none");
    document.getElementById("vhard").classList.add("d-none");

    document.getElementById("btn-easy").classList.remove("disabled");
    document.getElementById("btn-medium").classList.add("disabled");
    document.getElementById("btn-hard").classList.remove("disabled");
    document.getElementById("btn-vhard").classList.remove("disabled");
}

function hard() {
    document.getElementById("easy").classList.add("d-none");
    document.getElementById("medium").classList.add("d-none");
    document.getElementById("hard").classList.remove("d-none");
    document.getElementById("vhard").classList.add("d-none");

    document.getElementById("btn-easy").classList.remove("disabled");
    document.getElementById("btn-medium").classList.remove("disabled");
    document.getElementById("btn-hard").classList.add("disabled");
    document.getElementById("btn-vhard").classList.remove("disabled");
}

function vhard() {
    document.getElementById("easy").classList.add("d-none");
    document.getElementById("medium").classList.add("d-none");
    document.getElementById("hard").classList.add("d-none");
    document.getElementById("vhard").classList.remove("d-none");

    document.getElementById("btn-easy").classList.remove("disabled");
    document.getElementById("btn-medium").classList.remove("disabled");
    document.getElementById("btn-hard").classList.remove("disabled");
    document.getElementById("btn-vhard").classList.add("disabled");
}