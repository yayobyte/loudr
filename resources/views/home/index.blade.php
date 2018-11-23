@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="h1">
                Dashboard
            </div>
            <div class="row"  >
                <div class="col-lg-3">
                    <div class="card shadow-sm h-100" style="height: 200px;">
                        <div class="card-body bg-white">
                            <div class="text-center">
                                <img src="{{ asset('img/casala-logo.png') }}" height="150px" style="min-height: 48px">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="card shadow-sm h-100" style="height: 200px;">
                        <div class="card-body bg-white">
                            <div class="text-left">
                                <div class="h2">{{ $brand->name }}</div>
                                <div class="h4 text-black-50">{{ $brand->slogan }}</div>
                                <div class="h6">{{ $brand->owner }}</div>
                                <div class="text-left text-primary">{{ $brand->address }}</div>
                                <div class="text-left text-primary">{{ $brand->city }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
            <div class="card shadow-sm mt-4">
                <div class="card-body bg-white">
                    <div class="h2 text-center text-black-50">
                        Files
                    </div>
                    <hr>
                    <div class="row justify-content-center">
                        <div class="col-lg-2 mb-2">
                            <a href="{{ asset('img/jpg-logo-64.png') }}" target="_blank" download="jpg-logo-64.png">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img src="{{ asset('img/jpg-logo-64.png') }}" height="48px" style="min-height: 48px">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-dark text-white">Logo</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-2 mb-2">
                            <a href="{{ asset('img/psd-logo-64.png') }}" target="_blank" download="psd-logo-64.png">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img src="{{ asset('img/psd-logo-64.png') }}" height="48px" style="min-height: 48px">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-dark text-white">Template</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-2 mb-2">
                            <a href="{{ asset('img/mpg-logo-64.png') }}" target="_blank" download="mpg-logo-64.png">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img src="{{ asset('img/mpg-logo-64.png') }}" height="48px" style="min-height: 48px">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-dark text-white">Video</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-2">
                            <a href="{{ asset('img/mov-logo-64.png') }}" target="_blank" download="mov-logo-64.png">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img src="{{ asset('img/mov-logo-64.png') }}" height="48px" style="min-height: 48px">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-dark text-white">Video 2</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-2 mb-2">
                            <a href="{{ asset('img/pdf-logo-64.png') }}" target="_blank" download="pdf-logo-64.png">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img src="{{ asset('img/pdf-logo-64.png') }}" height="48px" style="min-height: 48px">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-dark text-white">File</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-2 mb-2">
                            <a href="{{ asset('img/svg-logo-64.png') }}" target="_blank" download="svg-logo-64.png">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img src="{{ asset('img/svg-logo-64.png') }}" height="48px" style="min-height: 48px">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-dark text-white">Svg logo</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-2 mb-2">
                            <a href="{{ asset('img/cdr-logo-64.png') }}" target="_blank" download="cdr-logo-64.png">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img src="{{ asset('img/cdr-logo-64.png') }}" height="48px" style="min-height: 48px">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-dark text-white">CorelDraw</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-2 mb-2">
                            <a href="{{ asset('img/tif-logo-64.png') }}" target="_blank" download="tif-logo-64.png">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img src="{{ asset('img/tif-logo-64.png') }}" height="48px" style="min-height: 48px">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-dark text-white">Font</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
