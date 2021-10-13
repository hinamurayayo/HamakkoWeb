@extends('layouts.common')

@section('title','Webシステムなら | HamakkoWeb')

@section('scroll','js-navbar-scroll')

@section('promotion')
<!-- Promo Block -->
<section class="js-parallax u-promo-block" style="background-image: url(static/assets/img/img1.png);">
    <!-- Promo Content -->
    <div class="container text-white u-ver-center u-content-space">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="text-center">
                    <p class="h6 text-uppercase u-letter-spacing-sm mb-0">Nanka Kakkoi Ro-ma Ji Mojiretsu...</p>
                    <h1 class="display-2 display-md-1 u-font-accent font-weight-light">WebSys <span class="d-none d-md-inline-block">-</span>Training</h1>
                    <a href="#js-scroll-to-section" class="text-uppercase text-white font-weight-bold u-font-size-75">Discover now</a>
                    <span class="fa fa-angle-down d-block"></span>
                </div>
            </div>
        </div>
    </div>
    <!-- End Promo Content -->
</section>
<!-- End Promo Block -->
@endsection

@section('main_contents')
<main role="main">
    <!-- About -->
    <section class="u-content-space" id="js-scroll-to-section">
        <div class="container">
            <h2 class="text-center">ここは何のためのページ？</h2>
            <!-- About Content -->
            <article class="w-md-75 mx-auto">
                <p class="lead font-weight-normal text-center mb-4">
                    ここはindexページです。<br>
                    まずはWEBシステム開発に慣れましょう。<br>
                    (approot)/ (approot)/seo - @hinamurayayo担当<br>
                    (approot)/community - @101konpeitou担当<br>
                    (approot)/article - @whiskerpaddy担当<br>
                    ヘッダー右上のボタンがそれぞれのURLに対応していますが...<br><br>
                    アクセスすると初期状態だと404Errorになってしまいます。<br>
                    それぞれのページが表示されるようにしてみましょう。<br>
                    しょぼいページでも大丈夫です。みんな最初はそうです。<br>
                </p>
            </article>
            <!-- About Content -->
        </div>
    </section>
    <!-- End About -->


    <hr>

    <!-- Other Components -->
    <section class="u-content-space">
        <div class="container">
            <h2 class="text-center">ページのスクロールチェック用コンテナ</h2>
            <!-- About Content -->
            <article class="w-md-75 mx-auto">
                <p class="lead font-weight-normal text-center mb-4">
                    あああああああああああああああああああ<br>
                    あああああああああああああああああああ<br>
                    あああああああああああああああああああ<br>
                    あああああああああああああああああああ<br>
                    あああああああああああああああああああ<br>
                    あああああああああああああああああああ<br>
                    あああああああああああああああああああ<br>
                    あああああああああああああああああああ<br>
                    あああああああああああああああああああ<br>
                    あああああああああああああああああああ<br>
                    あああああああああああああああああああ<br>
                    あああああああああああああああああああ<br>
                    あああああああああああああああああああ<br>
                    あああああああああああああああああああ<br>
                    あああああああああああああああああああ<br>
                    あああああああああああああああああああ<br>
                    あああああああああああああああああああ<br>
                    あああああああああああああああああああ<br>
                    あああああああああああああああああああ<br>
                    あああああああああああああああああああ<br>
                    あああああああああああああああああああ<br>
                </p>
            </article>
            <!-- About Content -->
        </div>
    </section>
    <!-- End Other Components -->
</main>
@endsection
