const menuItens = document.querySelectorAll('.menu a[href^="#"]')

menuItens.forEach(item => {
    item.addEventListener('click', descerParaID);
})


function descerParaID(evento){
    evento.preventDefault();
    const elemento = evento.target;
    const id = elemento.getAttribute('href');
    const to = document.querySelector(id).offsetTop;

    window.scroll({
        top: to,
        behavior: 'smooth'
    })
}