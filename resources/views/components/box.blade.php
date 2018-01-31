<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">{{ $title }}</h3>
        <div class="box-tools pull-right">
            @isset ($boxTools)
                {{ $boxTools }}
            @endisset
        </div>
    </div>
    <div class="box-body">
            {{ $slot }}
    </div>
</div>