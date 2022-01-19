function write_name() {
    let name = document.getElementById("name").value;
    let paterno = document.getElementById("paterno").value;
    let materno = document.getElementById("materno").value;

    var fullname =  name + ' ' + paterno + ' ' + materno;
    $(".fullname_passenger").val(fullname);

    // document.getElementsByClassName("fullname_passenger").value = name + ' ' + paterno + ' ' + materno;
    // document.getElementById("passenger_departure").value = name + ' ' + paterno + ' ' + materno;

}
