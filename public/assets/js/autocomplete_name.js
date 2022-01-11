function write_name() {
    let name = document.getElementById("name").value;
    let paterno = document.getElementById("paterno").value;
    let materno = document.getElementById("materno").value;
    document.getElementById("passenger_arrival").value = name + ' ' + paterno + ' ' + materno;
    document.getElementById("passenger_departure").value = name + ' ' + paterno + ' ' + materno;
}
