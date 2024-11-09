<?php $page = 'blog-manager'; ?>
@extends('rentalobj.layout.mainlayout')

@section('content')


<section class="flat-title-page" style="background-image: url( {{ URL::asset('/build/images/page-title/page-title-1.jpg') }} );">
    <div class="container">
        <div class="breadcrumb-content">
            <ul class="breadcrumb">
                <li><a href="index.html" class="text-white">Home</a></li>
                <li class="text-white">/ Pages</li>
                <li class="text-white">/ Latest News</li>
            </ul>
            <h1 class="text-center text-white title">Latest News</h1>
        </div>
    </div>
</section>

    @livewire('blog-system.blog-grid-manager', ['categoryId' => request()->route('categoryId')])
@endsection
