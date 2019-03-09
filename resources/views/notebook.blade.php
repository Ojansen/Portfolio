@extends('layout.base')

@php
$notebooks = [];
foreach (glob("../resources/views/notebook/*.html") as $filename) {
    array_push($notebooks, $filename);
}
@endphp

@section('content')
    <div class="show-on-small">
        This page is not optimized for mobile, please visit it on a desktop device.
    </div>
    <div class="col s12 m10 l10">
        <div class="section scrollspy" id="repos">
            <h1 class="center-align light-blue-text">Jupyter Notebook</h1>
            @foreach($notebooks as $page)
                <div id="{{$page}}">
                    @php include($page) @endphp
                </div>
            @endforeach
        </div>
        <div class="divider"></div>
    </div>
    <div class="col m2 l2" style="position: sticky; top: 0;">
        <ul class="section table-of-contents">
            <h2>Notebook pages</h2>
            @foreach($notebooks as $page)
                <li><a href="#{{$page}}" style="font-size: 17px">{{basename($page, ".html")}}</a></li>
            @endforeach
        </ul>
    </div>
@endsection
