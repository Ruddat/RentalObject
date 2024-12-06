<?php $page = 'blog-manager'; ?>
@extends('rentalobj.layout.mainlayout')
@section('content')



<div class="main-content">
    <div class="main-content-inner">

        <section class="flat-title-page" style="background-image: url(https://rentalobject.test/build/images/page-title/large-modern-villa-with-floor.jpg);">
            <div class="container">
                <div class="breadcrumb-content">
                    <h1 class="text-center text-white title">Online-Anzeige Immobilie inserieren</h1>
                    <p class="text-center text-white">Erstellen Sie in wenigen Schritten Ihr Immobilien-Exposé. Füllen Sie einfach die folgenden Felder aus und klicken Sie auf "Weiter".</p>

                </div>
            </div>
        </section>

@livewire('frontend.rental-object.multi-step-form')








    </div>
</div>

    <!-- go top -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;"></path>
        </svg>
    </div>

<!-- latest jquery-->
<script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>




@endsection
