<div class="info-box">
    <span class="info-box-icon @isset ($bg)
        {{ $bg }}
    @endisset ">{{ $icon }}</span>
    <div class="info-box-content">
        <span class="info-box-text">{{ $slot }}</span>
        <span class="info-box-number">{{ $count }}</span>
    </div>
</div>