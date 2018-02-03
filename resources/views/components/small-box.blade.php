<div class="small-box bg-aqua">
    <div class="inner">
        <h3>{{ $count }}</h3>

        <p>{{ $slot }}</p>
    </div>
    <div class="icon">
        {{ $icon }}
    </div>
    <a href="#" class="small-box-footer">
        @isset ($more_info_text)
            {{ $more_info_text }}
        @endisset
        @unless ($more_info_text)
            More info
        @endunless  <i class="fa fa-arrow-circle-right"></i>
    </a>
</div>