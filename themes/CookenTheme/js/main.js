let a = document.getElementById('item-1');
let b = document.getElementById('item-2');
let c = document.getElementById('item-3');

document.getElementById('choice-next').addEventListener('click', ()=>
a.checked?b.click():b.checked?c.click():a.click() )

document.getElementById('choice-prev').addEventListener('click', () => 
    a.checked?c.click():b.checked?a.click():b.click()
)