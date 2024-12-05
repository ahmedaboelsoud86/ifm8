 <section class="teams">
        <div class="container"><span class="tag text-center mb-2">@lang('site.our_expert_staff')</span>
            <h2 class="title text-center">@lang('site.meet_our_team')</h2>
            <div class="row">

                @if($teams)
                    @foreach($teams  as $team)
                    <div class="col-sm-3 item">
                    <div class="inner">
                        <div class="photo"><img src="{{ asset('assets/images/'.$team->image) }}" alt="">
                            <nav class="social">
                                @if($team->facebook != '')
                                <a class="icon-facebook" href="{{ $team->facebook }}" target="_blank"
                                    title="Facebook">
                                    <svg id="Bold" enable-background="new 0 0 24 24" height="512"
                                        viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="m15.997 3.985h2.191v-3.816c-.378-.052-1.678-.169-3.192-.169-3.159 0-5.323 1.987-5.323 5.639v3.361h-3.486v4.266h3.486v10.734h4.274v-10.733h3.345l.531-4.266h-3.877v-2.939c.001-1.233.333-2.077 2.051-2.077z">
                                        </path>
                                    </svg>
                                </a>
                                @endif
                                @if($team->twitter != '')
                                <a class="icon-twitter" href="{{ $team->twitter }}" target="_blank" title="Twitter">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" width="256" height="256" viewBox="0 0 256 256"
                                        xml:space="preserve">
                                        <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                                            transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                                            <path
                                                d="M 0.219 2.882 l 34.748 46.461 L 0 87.118 h 7.87 l 30.614 -33.073 l 24.735 33.073 H 90 L 53.297 38.043 L 85.844 2.882 h -7.87 L 49.781 33.341 L 27.001 2.882 H 0.219 z M 11.793 8.679 h 12.303 L 78.425 81.32 H 66.122 L 11.793 8.679 z"
                                                style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #000; fill-rule: nonzero; opacity: 1;"
                                                transform=" matrix(1 0 0 1 0 0) "></path>
                                        </g>
                                    </svg>
                                </a>
                                @endif
                                @if($team->instagram != '')
                                <a class="icon-instagram" href="{{ $team->instagram }}" target="_blank"
                                    title="Instagram">
                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14.4805 0H5.51913C2.47588 0 0 2.476 0 5.51924V14.4806C0 17.524 2.47588 19.9999 5.51913 19.9999H14.4805C17.524 19.9999 19.9999 17.5239 19.9999 14.4806V5.51924C20 2.476 17.524 0 14.4805 0ZM18.2255 14.4806C18.2255 16.5455 16.5455 18.2254 14.4806 18.2254H5.51913C3.45433 18.2255 1.77449 16.5455 1.77449 14.4806V5.51924C1.77449 3.45445 3.45433 1.77449 5.51913 1.77449H14.4805C16.5454 1.77449 18.2254 3.45445 18.2254 5.51924V14.4806H18.2255Z">
                                        </path>
                                        <path
                                            d="M10.0001 4.84668C7.15848 4.84668 4.84668 7.15848 4.84668 10.0001C4.84668 12.8417 7.15848 15.1534 10.0001 15.1534C12.8418 15.1534 15.1536 12.8417 15.1536 10.0001C15.1536 7.15848 12.8418 4.84668 10.0001 4.84668ZM10.0001 13.3788C8.13705 13.3788 6.62117 11.8631 6.62117 10C6.62117 8.13681 8.13693 6.62105 10.0001 6.62105C11.8634 6.62105 13.3791 8.13681 13.3791 10C13.3791 11.8631 11.8632 13.3788 10.0001 13.3788Z">
                                        </path>
                                        <path
                                            d="M15.3696 3.3418C15.0278 3.3418 14.6919 3.48021 14.4505 3.72272C14.2078 3.96405 14.0684 4.30002 14.0684 4.64309C14.0684 4.98509 14.208 5.32094 14.4505 5.56345C14.6918 5.80478 15.0278 5.94438 15.3696 5.94438C15.7127 5.94438 16.0475 5.80478 16.29 5.56345C16.5325 5.32094 16.6709 4.98497 16.6709 4.64309C16.6709 4.30002 16.5325 3.96405 16.29 3.72272C16.0487 3.48021 15.7127 3.3418 15.3696 3.3418Z">
                                        </path>
                                    </svg>
                                </a>
                                @endif
                                @if($team->linkedin != '')
                                <a class="icon-linkedin" href="{{ $team->linkedin }}" target="_blank" title="linkedin">
                                    <svg viewBox="-21 -35 682.66669 682" width="682pt"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="m77.613281-.667969c-46.929687 0-77.613281 30.816407-77.613281 71.320313 0 39.609375 29.769531 71.304687 75.8125 71.304687h.890625c47.847656 0 77.625-31.695312 77.625-71.304687-.894531-40.503906-29.777344-71.320313-76.714844-71.320313zm0 0">
                                        </path>
                                        <path d="m8.109375 198.3125h137.195313v412.757812h-137.195313zm0 0"></path>
                                        <path
                                            d="m482.054688 188.625c-74.011719 0-123.640626 69.546875-123.640626 69.546875v-59.859375h-137.199218v412.757812h137.191406v-230.5c0-12.339843.894531-24.660156 4.519531-33.484374 9.917969-24.640626 32.488281-50.167969 70.390625-50.167969 49.644532 0 69.5 37.851562 69.5 93.339843v220.8125h137.183594v-236.667968c0-126.78125-67.6875-185.777344-157.945312-185.777344zm0 0">
                                        </path>
                                    </svg>
                                </a>
                                @endif
                            </nav>
                        </div>
                        <h3 class="title">{{  $team->username }}</h3>
                        <p>{{ $team->title }}</p>
                    </div>
                    </div>
                @endforeach
                @endif


            </div>
        </div>
    </section>
