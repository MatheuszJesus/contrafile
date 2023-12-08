/*Animação do header*/
window.addEventListener("scroll", function(){
    const header = document.querySelector('#header')
    header.classList.toggle('rolagem', window.scrollY > 0)
})

/*Animação do sobre nós*/

const sobre = document.querySelector('#sobre');
const animacaoSobre = () => {
    const topo = window.pageYOffset + window.innerHeight * 0.85
    if (topo > sobre.offsetTop) {
        sobre.classList.add("animate")
    }else{
        sobre.classList.remove("animate")
    }
}

animacaoSobre()

window.addEventListener("scroll", ()=>{
    animacaoSobre()
})

/*Botão voltar ao topo*/

const btn = document.querySelector("#back-to-top")


btn.addEventListener("click", function () {
    window.scrollTo(0,0)
})

document.addEventListener("scroll", ocultar)

function ocultar() {
    if (scrollY > 10) {
        btn.style.display = ""
    }else{
        btn.style.display = "none"
    }
}

/*Responsive*/

const menuBtn = document.querySelector(".menu-btn")
const navegacao =  document.querySelector(".navegacao")
menuBtn.addEventListener("click", ()=>{
    menuBtn.classList.toggle("active")
    navegacao.classList.toggle("active")
})