<button 
    @if($type === 'primary') class="btn btn-primary"
    @elseif($type === 'secondary') class="btn btn-secondary"
    @endif>
    {{ $text }}
</button>