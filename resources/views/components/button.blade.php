@if (isset($link) && $link)
    <a href="{{ $link }}" 
       class="btn {{ $type === 'primary' ? 'btn-primary' : ($type === 'secondary' ? 'btn-secondary' : '') }}">
        {{ $text }}
    </a>
@else
    <button 
       class="btn {{ $type === 'primary' ? 'btn-primary' : ($type === 'secondary' ? 'btn-secondary' : '') }}">
        {{ $text }}
    </button>
@endif