<ul class="outer-nav">
    <a href="{{ url('/') }}"><li>Início</li></a>
    <a href="{{ url('/sobre') }}"><li>Sobre</li></a>
    <a href="{{ url('/servico') }}"><li>Serviços</li></a>
    <a href="{{ url('/portfolio') }}"><li>Portfólio</li></a>
    <a href="{{ url('/contato') }}"><li>Contato</li></a>
</ul>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Obtém a URL atual da página
    var currentUrl = window.location.href;

    // Obtém todos os elementos <a> dentro da lista 'outer-nav'
    var navLinks = document.querySelectorAll('.outer-nav a');

    // Verifica se cada link corresponde à URL atual e aplica a classe 'nav-link' se necessário
    navLinks.forEach(function(navLink) {
        if (navLink.href === currentUrl) {
            navLink.classList.add('nav-link');
        }
    });
});
</script>
