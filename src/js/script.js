document.addEventListener('DOMContentLoaded', () => {
    const botao = document.querySelector('#btn');

    botao.addEventListener('click', (e) => {
        e.preventDefault();
        window.scroll({ top: window.innerHeight, behavior: "smooth" });
    });
});
