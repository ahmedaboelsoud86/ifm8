<section class="minservices">
    <div class="container"><span class="tag text-center mb-2">@lang('site.check_services') </span>
        <h2 class="title text-center"> @lang('site.integrated_facility')</h2>
        <div class="slider-services">
            @if($facilities)
            @foreach ($facilities as $fa)
                <div class="latesitem">
                    <div class="photo" >
                        <img  src="{{ asset('assets/images/'. $fa->icon) }}" alt="">
                    </div>
                    <h3 class="title">{{ Str::words($fa->title, 5,'') }}</h3>
                    <p> {{ Str::words($fa->description, 70,'') }}</p>
                    <a class="more" href="{{ route('facility-inner',[$fa->id,str_replace(' ','-',$fa->title)]) }}">@lang('site.read_more')</a>
                </div>
            @endforeach
            @endif
        </div>
    </div>
</section><!--End minservices-->
