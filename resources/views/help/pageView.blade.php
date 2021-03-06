@extends('layouts.app')

@section('content')
    <div class="container help">
        <div class="row">
            <div class="row m-l-lg m-r-lg m-b-lg">
                <h2><img class="icon m-r-sm" src="{{ asset('/img/help_section.svg') }}">{{ utrans('custom.help_sections') }}</h2>
                <form method="GET" action="{{ url('help/search') }}">
                    <input
                        type="text"
                        class="input-border-r-12 form-control js-ga-event m-t-lg"
                        placeholder="{{ __('custom.search') }}"
                        value="{{ isset($search) ? $search : '' }}"
                        name="q"
                        data-ga-action="search"
                        data-ga-label="data search"
                        data-ga-category="data"
                    >
                </form>
            </div>
            <div class="row">
                <div class="result-cont">
                    <h2></h2>
                    <hr>
                    <div class="result-wrap">
                        <div class="nano">
                            <div class="nano-content">
                                <ul class="nav">
                                    <li class="js-show-submenu">
                                        <a href="#" class="clicable">{{ $page->title }}&nbsp;&nbsp;<i class="fa fa-angle-down"></i></a>
                                        <ul class="sidebar-submenu">
                                            <li>
                                                {!!  $page->body !!}
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
