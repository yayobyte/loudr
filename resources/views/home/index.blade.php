@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="h1">
                Dashboard
            </div>
            <div class="row">
                @component('home.components.logoComponent')
                @endcomponent

                @component('home.components.brandSummaryComponent', ['brand' => $brand])
                @endcomponent
            </div>
            @if(count($brandColorGroup) > 0)
                @component('home.components.brandColors', ['brandColorGroup' => $brandColorGroup])
                @endcomponent
            @endif

            @component('home.components.filesComponent')
            @endcomponent
        </div>
    </div>
</div>
@endsection
