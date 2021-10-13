@extends('layouts.common')

@section('title')
@yield('title') | HamakkoWeb
@endsection


@section('scroll','navbar-bg-onscroll')

@section('promotion','')

@section('main_contents')
<main role="main">
    <!-- About -->
    <section class="u-content-space" id="js-scroll-to-section">
        <div class="container">
            <h2 class="text-center">@yield('heading')</h2>
            <!-- About Content -->
            <article class="w-md-75 mx-auto">
                <p class="lead font-weight-normal text-center mb-4">
                    @yield('description')
                </p>
            </article>
            <!-- About Content -->
        </div>
    </section>
    <!-- End About -->
</main>
@endsection
