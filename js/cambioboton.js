function cambiar(){ 
    var div1 = document.getElementById('T1');
    var div2 = document.getElementById('T2');

    var cojerSelect = div2.querySelector('select').outerHTML;
    var cojerSelect1 = div1.querySelector('select').outerHTML;

    div1.innerHTML = "";
    div2.innerHTML = "";

    div1.innerHTML = cojerSelect;
    div2.innerHTML = cojerSelect1;
}
