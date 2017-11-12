function incrementValue() {
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    if (value <= 4) {
        value++;
        document.getElementById('number').value = value;
    }
}

function decrementValue() {
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;

    if (value >= 4) {
        value--;
        document.getElementById('number').value = value;
    }

}






function benchValue() {

    

    
    var x = document.getElementById('bench-data').value;
    

    // var pager = new Pager(y);
    var z = parseInt(x);
    var z = z + 20;
    // var data =  new data (z);


    var bench = document.getElementById('bench-data-f').value = z;

}
