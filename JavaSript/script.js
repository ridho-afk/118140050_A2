var data = [
    "Lemari",
    "Kucing",
    "Dinosaurus",
];


function tampil() {
    var tabel = document.getElementById("tabel");
    tabel.innerHTML = "";
    for (let i = 0; i < data.length; i++) {

        var btnEdit = "<button class='btn-edit' href='#' onclick='edit(" + i + ")'>Edit</button>";
        var btnHapus = "<button class='btn-hapus' href='#' onclick='hapus(" + i + ")'>Hapus</button>";
        tabel.innerHTML += "<ul><li>" + data[i] + " " + btnEdit + " " + btnHapus + "</li></ul>";


    }
}

function tambah() {
    var input = document.querySelector("input[name=input]");
    data.push(input.value);
    tampil();
    input.value = "";
}

function edit(id) {
    var baru = prompt("Nama baru", data[id]);
    data[id] = baru;
    tampil();
}

function hapus(id) {
    data.pop(id);
    tampil();
}

tampil();
