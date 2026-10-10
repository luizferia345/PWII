const btnMenu = document.getElementById('btn-menu');
const nav = document.getElementById('nav');

if (btnMenu && nav) {
	btnMenu.addEventListener('click', () => {
		const estaAberto = nav.classList.toggle('aberto');
		btnMenu.setAttribute('aria-expanded', estaAberto);
		btnMenu.setAttribute('aria-label', estaAberto ? 'Fechar menu' : 'Abrir menu');
	});
}