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






    <!-- popup login -->
    <livewire:auth.login-user />
    <!-- popup register -->
    <livewire:auth.register-user />



    </div>
</div>


<!-- latest jquery-->
<script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>



@endsection
