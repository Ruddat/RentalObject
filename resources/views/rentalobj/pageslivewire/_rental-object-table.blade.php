<?php $page = 'add-property'; ?>
@extends('rentalobj.layout.mainlayout')
@section('content')


<div class="main-content-inner">
    <div class="button-show-hide show-mb">
        <span class="body-1">Show Dashboard</span>
    </div>


@livewire('utility-costs.rental-object-table')


</div>

@endsection
