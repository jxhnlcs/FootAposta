let circle = document.getElementById('circle'); 
let fut = document.getElementById('meubem'); 

window.addEventListener('scroll', function(){
    let value = window.scrollY;
    fut.style.marginTop = value * 0.99 + 'px';
    circle.style.marginTop = value * 0.97 + 'px';
})