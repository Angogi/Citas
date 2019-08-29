function invertirEmisorConsulta()
{ 
    var div1 = document.getElementById('T1');
    var div2 = document.getElementById('T2');

    var cogerSelect = div2.querySelector('select').outerHTML;
    var cogerSelect1 = div1.querySelector('select').outerHTML;

    div1.innerHTML = "";
    div2.innerHTML = "";

    div1.innerHTML = cogerSelect;
    div2.innerHTML = cogerSelect1;
}
