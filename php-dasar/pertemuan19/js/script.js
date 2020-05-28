//MENAMBIL ELEMEN
var kataKunci = document.getElementById('kata-kunci');
var tombolCari = document.getElementById('tombol-cari');
var container = document.getElementById('container');

kataKunci.addEventListener('keyup', function() {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if ( xhr.readyState == 4 && xhr.status == 200 ) {
            container.innerHTML = xhr.responseText;
        }
    }

    xhr.open('GET', 'ajax/posters.php?kataKunci=' + kataKunci.value, true);
    xhr.send();
});