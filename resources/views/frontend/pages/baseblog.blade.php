@extends('layouts.app')

@section('js')
@endsection

@section('css')
@endsection

@section('content')
    <div role="main" class="main">

        <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="text-dark font-weight-bold text-8">{{ $blog->getTranslatedAttribute('title', \Illuminate\Support\Facades\Session::get('locale')) }}</h1>
                    </div>
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb d-block text-center">
                            <li><a href="{{ route('homepage') }}">{{ __('physmart.homePage') }}</a></li>
                            <li>{{ __('physmart.blogs') }}</li>
                            <li class="active">{{ $blog->getTranslatedAttribute('title', \Illuminate\Support\Facades\Session::get('locale')) }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container py-4">

            <div class="row">

                <div class="col-lg-12 order-lg-1">
                    <div class="blog-posts single-post">

                        <article class="post post-large blog-single-post border-0 m-0 p-0">
                            <div class="post-image ms-0">
                                <a href="{{ route('phyblogs', ['slug' => $blog->slug]) }}">
                                    <img src="{{ asset($blog->image)}}" style="    max-width: 450px;max-height: 600px;"
                                         class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="">
                                </a>
                            </div>
                            <div class="post-content ms-0">

                                {!! $blog->getTranslatedAttribute('body', \Illuminate\Support\Facades\Session::get('locale')) !!}

                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
