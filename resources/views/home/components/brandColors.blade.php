<div class="card shadow-sm mt-4">
    <div class="card-body bg-white">
        <div class="h2 text-center text-black-50">
            Main Colors
        </div>
        <hr>
        <div class="row justify-content-center">
            @foreach ($brandColorGroup as $brandColor)
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header bg-white text-center">
                            <div class="h3">
                                @switch($brandColor->color_hierarchy)
                                    @case(1)
                                    Primary
                                    @break
                                    @case(2)
                                    Secondary
                                    @break
                                    @default
                                    Color #{{$brandColor->color_hierarchy}}
                                @endswitch
                            </div>
                        </div>
                        <div class="card-body text-white text-center" style="background-color: {{$brandColor->hex}}">
                            <div class="font-weight-light">HEX({{$brandColor->hex}})</div>
                            <div class="font-weight-light">
                                RGB({{$brandColor->rgb_r . ',' . $brandColor->rgb_g . ',' . $brandColor->rgb_r}})
                            </div>
                            <div class="font-weight-light">
                                CMYK({{$brandColor->cmyk_c . ',' . $brandColor->cmyk_m . ',' . $brandColor->cmyk_y . ',' . $brandColor->cmyk_k}})
                            </div>
                            <div class="font-weight-light">
                                HSL({{$brandColor->hsl_h . ',' . $brandColor->hsl_s . ',' . $brandColor->hsl_l}})
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>