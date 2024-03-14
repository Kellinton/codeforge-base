<ul class="outer-nav">
    <li class="{{ Request::is('/') ? 'is-active' : '' }}"><a href="{{ url('/') }}">Início</a></li>
    <li class="{{ Request::is('sobre') ? 'is-active' : '' }}"><a href="{{ url('/sobre') }}">Sobre</a></li>
    <li class="{{ Request::is('servico') ? 'is-active' : '' }}"><a href="{{ url('/servico') }}">Serviços</a></li>
    <li class="{{ Request::is('portfolio') ? 'is-active' : '' }}"><a href="{{ url('/portfolio') }}">Portfólio</a></li>
    <li class="{{ Request::is('contato') ? 'is-active' : '' }}"><a href="{{ url('/contato') }}">Contato</a></li>
</ul>
