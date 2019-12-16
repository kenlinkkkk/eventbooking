@extends('client.index')
@section('title'){{ $page->name }}@endsection
@section('box')
    <section id="hero_2">
        <div class="intro_title" style="background: #4d536d url({{ asset(config('view.top')) }}) no-repeat center center; background-size: cover">
            <h1>{{ $page->name }}</h1>
            <!-- End bs-wizard -->
        </div>
        <!-- End intro-title -->
    </section>
@endsection

@section('content')
    <main>
        <div class="container">
            {!! $page->content !!}
        </div>
    </main>
@endsection

@section('script')

@endsection

