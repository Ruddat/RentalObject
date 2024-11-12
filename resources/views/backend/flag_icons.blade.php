@extends('layout.master')
@section('title', 'Flag Icons')
@section('css')
    <!--Notifications-css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/notifications/toastify.min.css')}}">
@endsection
@section('main-content')
    <main>
        <div class="container-fluid">
            <!-- Breadcrumb start -->
            <div class="row m-1">
                <div class="col-12 ">
                    <h4 class="main-title">Flag</h4>
                    <ul class="app-line-breadcrumbs mb-3">
                        <li class="">
                            <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-shapes f-s-16"></i>Icons
                      </span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="#" class="f-s-14 f-w-500">Flag</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumb end -->

            <!-- Flag icon start -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="search-bar app-form app-icon-form position-relative">
                                        <input type="search" class="form-control" name="search" placeholder="type to search">
                                        <i class="ti ti-search"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 text-end pt-2">
                                    <div class="btn-group btn-group-sm flag-icon-toggle" role="group"
                                         aria-label="Flag Icon button group">
                                        <button type="button" class="btn btn-outline-secondary active"> Default </button>
                                        <button type="button" class="btn btn-outline-secondary"> Squared </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="icon-list space-top-icon">
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-abw"></i><strong>
                                        Aruba </strong><span class="badge text-bg-primary mb-3">abw</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-afg"></i><strong>
                                        Afghanistan </strong><span class="badge text-bg-primary mb-3">afg</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-ago"></i><strong>
                                        Angola </strong><span class="badge text-bg-primary mb-3">ago</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-aia"></i><strong>
                                        Anguilla </strong><span class="badge text-bg-primary mb-3">aia</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-ala"></i><strong>
                                        Åland Islands </strong><span class="badge text-bg-primary mb-3">ala</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-alb"></i><strong>
                                        Albania </strong><span class="badge text-bg-primary mb-3">alb</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-and"></i><strong>
                                        Andorra </strong><span class="badge text-bg-primary mb-3">and</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-are"></i><strong>
                                        United Arab Emirates </strong><span class="badge text-bg-primary mb-3">are</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-arg"></i><strong>
                                        Argentina </strong><span class="badge text-bg-primary mb-3">arg</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-arm"></i><strong>
                                        Armenia </strong><span class="badge text-bg-primary mb-3">arm</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-asm"></i><strong>
                                        American Samoa </strong><span class="badge text-bg-primary mb-3">asm</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-ata"></i><strong>
                                        Antarctica </strong><span class="badge text-bg-primary mb-3">ata</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-atf"></i><strong>
                                        French Southern Territories </strong><span class="badge text-bg-primary mb-3">atf</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-atg"></i><strong>
                                        Antigua and Barbuda </strong><span class="badge text-bg-primary mb-3">atg</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-aus"></i><strong>
                                        Australia </strong><span class="badge text-bg-primary mb-3">aus</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-aut"></i><strong>
                                        Austria </strong><span class="badge text-bg-primary mb-3">aut</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-aze"></i><strong>
                                        Azerbaijan </strong><span class="badge text-bg-primary mb-3">aze</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-bdi"></i><strong>
                                        Burundi </strong><span class="badge text-bg-primary mb-3">bdi</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-bel"></i><strong>
                                        Belgium </strong><span class="badge text-bg-primary mb-3">bel</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-ben"></i><strong>
                                        Benin </strong><span class="badge text-bg-primary mb-3">ben</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-bes"></i><strong>
                                        Bonaire, Sint Eustatius and Saba </strong><span class="badge text-bg-primary mb-3">bes</span>
                                </li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-bfa"></i><strong>
                                        Burkina Faso </strong><span class="badge text-bg-primary mb-3">bfa</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-bgd"></i><strong>
                                        Bangladesh </strong><span class="badge text-bg-primary mb-3">bgd</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-bgr"></i><strong>
                                        Bulgaria </strong><span class="badge text-bg-primary mb-3">bgr</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-bhr"></i><strong>
                                        Bahrain </strong><span class="badge text-bg-primary mb-3">bhr</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-bhs"></i><strong>
                                        Bahamas </strong><span class="badge text-bg-primary mb-3">bhs</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-bih"></i><strong>
                                        Bosnia and Herzegovina </strong><span class="badge text-bg-primary mb-3">bih</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-blm"></i><strong>
                                        Saint Barthélemy </strong><span class="badge text-bg-primary mb-3">blm</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-blr"></i><strong>
                                        Belarus </strong><span class="badge text-bg-primary mb-3">blr</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-blz"></i><strong>
                                        Belize </strong><span class="badge text-bg-primary mb-3">blz</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-bmu"></i><strong>
                                        Bermuda </strong><span class="badge text-bg-primary mb-3">bmu</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-bol"></i><strong>
                                        Bolivia (Plurinational State of Bolivia) </strong><span
                                        class="badge text-bg-primary mb-3">bol</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-bra"></i><strong>
                                        Brasil </strong><span class="badge text-bg-primary mb-3">bra</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-brb"></i><strong>
                                        Barbados </strong><span class="badge text-bg-primary mb-3">brb</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-brn"></i><strong>
                                        Brunei Darussalam </strong><span class="badge text-bg-primary mb-3">brn</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-btn"></i><strong>
                                        Bhutan </strong><span class="badge text-bg-primary mb-3">btn</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-bvt"></i><strong>
                                        Bouvet Island </strong><span class="badge text-bg-primary mb-3">bvt</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-bwa"></i><strong>
                                        Botswana </strong><span class="badge text-bg-primary mb-3">bwa</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-caf"></i><strong>
                                        Central African Republic </strong><span class="badge text-bg-primary mb-3">caf</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-can"></i><strong>
                                        Canada </strong><span class="badge text-bg-primary mb-3">can</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-cat"></i><strong>
                                        Catalonia (autonomous community in Spain) </strong><span
                                        class="badge text-bg-primary mb-3">cat</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-cck"></i><strong>
                                        Cocos (Keeling) Islands </strong><span class="badge text-bg-primary mb-3">cck</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-che"></i><strong>
                                        Switzerland </strong><span class="badge text-bg-primary mb-3">che</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-chl"></i><strong>
                                        Chile </strong><span class="badge text-bg-primary mb-3">chl</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-chn"></i><strong>
                                        China (People's Republic of China) </strong><span
                                        class="badge text-bg-primary mb-3">chn</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-civ"></i><strong> Côte
                                        d'Ivoire </strong><span class="badge text-bg-primary mb-3">civ</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-cmr"></i><strong>
                                        Cameroon </strong><span class="badge text-bg-primary mb-3">cmr</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-cod"></i><strong>
                                        Congo (Democratic Republic of the Congo) </strong><span
                                        class="badge text-bg-primary mb-3">cod</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-cog"></i><strong>
                                        Congo (Congo-Brazzaville) </strong><span class="badge text-bg-primary mb-3">cog</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-cok"></i><strong> Cook
                                        Islands </strong><span class="badge text-bg-primary mb-3">cok</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-col"></i><strong>
                                        Colombia </strong><span class="badge text-bg-primary mb-3">col</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-com"></i><strong>
                                        Comoros </strong><span class="badge text-bg-primary mb-3">com</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-cpv"></i><strong> Cabo
                                        Verde </strong><span class="badge text-bg-primary mb-3">cpv</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-cri"></i><strong>
                                        Costa Rica </strong><span class="badge text-bg-primary mb-3">cri</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-cub"></i><strong> Cuba
                                    </strong><span class="badge text-bg-primary mb-3">cub</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-cuw"></i><strong>
                                        Curaçao </strong><span class="badge text-bg-primary mb-3">cuw</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-cxr"></i><strong>
                                        Christmas Island </strong><span class="badge text-bg-primary mb-3">cxr</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-cym"></i><strong>
                                        Cayman Islands </strong><span class="badge text-bg-primary mb-3">cym</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-cyp"></i><strong>
                                        Cyprus </strong><span class="badge text-bg-primary mb-3">cyp</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-cze"></i><strong>
                                        Czech Republic </strong><span class="badge text-bg-primary mb-3">cze</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-deu"></i><strong>
                                        Germany (Federal Republic of Germany) </strong><span
                                        class="badge text-bg-primary mb-3">deu</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-dji"></i><strong>
                                        Djibouti </strong><span class="badge text-bg-primary mb-3">dji</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-dma"></i><strong>
                                        Dominica </strong><span class="badge text-bg-primary mb-3">dma</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-dnk"></i><strong>
                                        Denmark </strong><span class="badge text-bg-primary mb-3">dnk</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-dom"></i><strong>
                                        Dominican Republic </strong><span class="badge text-bg-primary mb-3">dom</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-dza"></i><strong>
                                        Algeria </strong><span class="badge text-bg-primary mb-3">dza</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-ecu"></i><strong>
                                        Ecuador </strong><span class="badge text-bg-primary mb-3">ecu</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-egy"></i><strong>
                                        Egypt </strong><span class="badge text-bg-primary mb-3">egy</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-eng"></i><strong>
                                        England (country that is part of the United Kingdom) </strong><span
                                        class="badge text-bg-primary mb-3">eng</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-eri"></i><strong>
                                        Eritrea </strong><span class="badge text-bg-primary mb-3">eri</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-esh"></i><strong>
                                        Western Sahara </strong><span class="badge text-bg-primary mb-3">esh</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-esp"></i><strong>
                                        Spain </strong><span class="badge text-bg-primary mb-3">esp</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-est"></i><strong>
                                        Estonia </strong><span class="badge text-bg-primary mb-3">est</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-eth"></i><strong>
                                        Ethiopia </strong><span class="badge text-bg-primary mb-3">eth</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-eun"></i><strong>
                                        European Union (EU) </strong><span class="badge text-bg-primary mb-3">eun</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-fin"></i><strong>
                                        Finland </strong><span class="badge text-bg-primary mb-3">fin</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-fji"></i><strong> Fiji
                                    </strong><span class="badge text-bg-primary mb-3">fji</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-flk"></i><strong>
                                        Falkland Islands (Malvinas) </strong><span class="badge text-bg-primary mb-3">flk</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-fra"></i><strong>
                                        France </strong><span class="badge text-bg-primary mb-3">fra</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-fro"></i><strong>
                                        Faroe Islands </strong><span class="badge text-bg-primary mb-3">fro</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-fsm"></i><strong>
                                        Micronesia (Federated States of Micronesia) </strong><span
                                        class="badge text-bg-primary mb-3">fsm</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-gab"></i><strong>
                                        Gabon </strong><span class="badge text-bg-primary mb-3">gab</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-gbr"></i><strong>
                                        United Kingdom of Great Britain and Northern Ireland </strong><span
                                        class="badge text-bg-primary mb-3">gbr</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-geo"></i><strong>
                                        Georgia </strong><span class="badge text-bg-primary mb-3">geo</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-ggy"></i><strong>
                                        Guernsey </strong><span class="badge text-bg-primary mb-3">ggy</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-gha"></i><strong>
                                        Ghana </strong><span class="badge text-bg-primary mb-3">gha</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-gib"></i><strong>
                                        Gibraltar </strong><span class="badge text-bg-primary mb-3">gib</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-gin"></i><strong>
                                        Guinea </strong><span class="badge text-bg-primary mb-3">gin</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-glp"></i><strong>
                                        Guadeloupe </strong><span class="badge text-bg-primary mb-3">glp</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-gmb"></i><strong>
                                        Gambia </strong><span class="badge text-bg-primary mb-3">gmb</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-gnb"></i><strong>
                                        Guinea-Bissau </strong><span class="badge text-bg-primary mb-3">gnb</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-gnq"></i><strong>
                                        Equatorial Guinea </strong><span class="badge text-bg-primary mb-3">gnq</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-grc"></i><strong>
                                        Greece </strong><span class="badge text-bg-primary mb-3">grc</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-grd"></i><strong>
                                        Grenada </strong><span class="badge text-bg-primary mb-3">grd</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-grl"></i><strong>
                                        Greenland </strong><span class="badge text-bg-primary mb-3">grl</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-gtm"></i><strong>
                                        Guatemala </strong><span class="badge text-bg-primary mb-3">gtm</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-guf"></i><strong>
                                        French Guiana </strong><span class="badge text-bg-primary mb-3">guf</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-gum"></i><strong> Guam
                                    </strong><span class="badge text-bg-primary mb-3">gum</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-guy"></i><strong>
                                        Guyana </strong><span class="badge text-bg-primary mb-3">guy</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-hkg"></i><strong> Hong
                                        Kong (Special Administrative Region of the China) </strong><span
                                        class="badge text-bg-primary mb-3">hkg</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-hmd"></i><strong>
                                        Heard Island and McDonald Islands </strong><span class="badge text-bg-primary mb-3">hmd</span>
                                </li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-hnd"></i><strong>
                                        Honduras </strong><span class="badge text-bg-primary mb-3">hnd</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-hrv"></i><strong>
                                        Croatia </strong><span class="badge text-bg-primary mb-3">hrv</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-hti"></i><strong>
                                        Haiti </strong><span class="badge text-bg-primary mb-3">hti</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-hun"></i><strong>
                                        Hungary </strong><span class="badge text-bg-primary mb-3">hun</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-idn"></i><strong>
                                        Indonesia </strong><span class="badge text-bg-primary mb-3">idn</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-imn"></i><strong> Isle
                                        of Man </strong><span class="badge text-bg-primary mb-3">imn</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-ind"></i><strong>
                                        India </strong><span class="badge text-bg-primary mb-3">ind</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-iot"></i><strong>
                                        British Indian Ocean Territory </strong><span class="badge text-bg-primary mb-3">iot</span>
                                </li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-irl"></i><strong>
                                        Ireland </strong><span class="badge text-bg-primary mb-3">irl</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-irn"></i><strong> Iran
                                        (Islamic Republic of Iran) </strong><span class="badge text-bg-primary mb-3">irn</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-irq"></i><strong> Iraq
                                    </strong><span class="badge text-bg-primary mb-3">irq</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-isl"></i><strong>
                                        Iceland </strong><span class="badge text-bg-primary mb-3">isl</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-isr"></i><strong>
                                        Israel </strong><span class="badge text-bg-primary mb-3">isr</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-ita"></i><strong>
                                        Italy </strong><span class="badge text-bg-primary mb-3">ita</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-jam"></i><strong>
                                        Jamaica </strong><span class="badge text-bg-primary mb-3">jam</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-jey"></i><strong>
                                        Jersey </strong><span class="badge text-bg-primary mb-3">jey</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-jor"></i><strong>
                                        Jordan </strong><span class="badge text-bg-primary mb-3">jor</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-jpn"></i><strong>
                                        Japan </strong><span class="badge text-bg-primary mb-3">jpn</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-kaz"></i><strong>
                                        Kazakstan </strong><span class="badge text-bg-primary mb-3">kaz</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-ken"></i><strong>
                                        Kenya </strong><span class="badge text-bg-primary mb-3">ken</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-kgz"></i><strong>
                                        Kyrgyzstan </strong><span class="badge text-bg-primary mb-3">kgz</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-khm"></i><strong>
                                        Cambodia </strong><span class="badge text-bg-primary mb-3">khm</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-kir"></i><strong>
                                        Kiribati </strong><span class="badge text-bg-primary mb-3">kir</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-kna"></i><strong>
                                        Saint Kitts and Nevis </strong><span class="badge text-bg-primary mb-3">kna</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-kor"></i><strong>
                                        Korea (Republic of Korea) </strong><span class="badge text-bg-primary mb-3">kor</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-kos"></i><strong>
                                        Kosovo (partially recognised state of Serbia) </strong><span
                                        class="badge text-bg-primary mb-3">kos</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-kwt"></i><strong>
                                        Kuwait </strong><span class="badge text-bg-primary mb-3">kwt</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-lao"></i><strong> Lao
                                        People's Democratic Republic </strong><span class="badge text-bg-primary mb-3">lao</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-lbn"></i><strong>
                                        Lebanon </strong><span class="badge text-bg-primary mb-3">lbn</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-lbr"></i><strong>
                                        Liberia </strong><span class="badge text-bg-primary mb-3">lbr</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-lby"></i><strong>
                                        Libya </strong><span class="badge text-bg-primary mb-3">lby</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-lca"></i><strong>
                                        Saint Lucia </strong><span class="badge text-bg-primary mb-3">lca</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-lie"></i><strong>
                                        Liechtenstein </strong><span class="badge text-bg-primary mb-3">lie</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-lka"></i><strong> Sri
                                        Lanka </strong><span class="badge text-bg-primary mb-3">lka</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-lso"></i><strong>
                                        Lesotho </strong><span class="badge text-bg-primary mb-3">lso</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-ltu"></i><strong>
                                        Lithuania </strong><span class="badge text-bg-primary mb-3">ltu</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-lux"></i><strong>
                                        Luxembourg </strong><span class="badge text-bg-primary mb-3">lux</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-lva"></i><strong>
                                        Latvia </strong><span class="badge text-bg-primary mb-3">lva</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-mac"></i><strong>
                                        Macau (Macao Special Administrative Region of China) </strong><span
                                        class="badge text-bg-primary mb-3">mac</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-maf"></i><strong>
                                        Saint Martin (French part) </strong><span class="badge text-bg-primary mb-3">maf</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-mar"></i><strong>
                                        Marokko </strong><span class="badge text-bg-primary mb-3">mar</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-mco"></i><strong>
                                        Monaco </strong><span class="badge text-bg-primary mb-3">mco</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-mda"></i><strong>
                                        Moldova (Republic of Moldova) </strong><span class="badge text-bg-primary mb-3">mda</span>
                                </li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-mdg"></i><strong>
                                        Madagascar </strong><span class="badge text-bg-primary mb-3">mdg</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-mdv"></i><strong>
                                        Maldives </strong><span class="badge text-bg-primary mb-3">mdv</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-mex"></i><strong>
                                        Mexico </strong><span class="badge text-bg-primary mb-3">mex</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-mhl"></i><strong>
                                        Marshall Islands </strong><span class="badge text-bg-primary mb-3">mhl</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-mkd"></i><strong>
                                        Makedonia </strong><span class="badge text-bg-primary mb-3">mkd</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-mli"></i><strong> Mali
                                    </strong><span class="badge text-bg-primary mb-3">mli</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-mlt"></i><strong>
                                        Malta </strong><span class="badge text-bg-primary mb-3">mlt</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-mmr"></i><strong>
                                        Myanmar </strong><span class="badge text-bg-primary mb-3">mmr</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-mne"></i><strong>
                                        Montenegro </strong><span class="badge text-bg-primary mb-3">mne</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-mng"></i><strong>
                                        Mongolia </strong><span class="badge text-bg-primary mb-3">mng</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-mnp"></i><strong>
                                        Northern Mariana Islands </strong><span class="badge text-bg-primary mb-3">mnp</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-moz"></i><strong>
                                        Mozambique </strong><span class="badge text-bg-primary mb-3">moz</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-mrt"></i><strong>
                                        auritania </strong><span class="badge text-bg-primary mb-3">mrt</span></li>

                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-msr"></i><strong>
                                        Montserrat </strong><span class="badge text-bg-primary mb-3">msr</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-mtq"></i><strong>
                                        Martinique </strong><span class="badge text-bg-primary mb-3">mtq</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-mus"></i><strong>
                                        Mauritius </strong><span class="badge text-bg-primary mb-3">mus</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-mwi"></i><strong>
                                        Malawi </strong><span class="badge text-bg-primary mb-3">mwi</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-mys"></i><strong>
                                        Malaysia </strong><span class="badge text-bg-primary mb-3">mys</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-myt"></i><strong>
                                        Mayotte </strong><span class="badge text-bg-primary mb-3">myt</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-nam"></i><strong>
                                        Namibia </strong><span class="badge text-bg-primary mb-3">nam</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-ncl"></i><strong> New
                                        Caledonia </strong><span class="badge text-bg-primary mb-3">ncl</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-ner"></i><strong>
                                        Niger </strong><span class="badge text-bg-primary mb-3">ner</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-nfk"></i><strong>
                                        Norfolk Island </strong><span class="badge text-bg-primary mb-3">nfk</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-nga"></i><strong>
                                        Nigeria </strong><span class="badge text-bg-primary mb-3">nga</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-nic"></i><strong>
                                        Nicaragua </strong><span class="badge text-bg-primary mb-3">nic</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-nir"></i><strong>
                                        Northern Ireland (country that is part of the United Kingdom) </strong><span
                                        class="badge text-bg-primary mb-3">nir</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-niu"></i><strong> Niue
                                    </strong><span class="badge text-bg-primary mb-3">niu</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-nld"></i><strong>
                                        Netherlands (Holland) </strong><span class="badge text-bg-primary mb-3">nld</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-nor"></i><strong>
                                        Norway </strong><span class="badge text-bg-primary mb-3">nor</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-npl"></i><strong>
                                        Nepal </strong><span class="badge text-bg-primary mb-3">npl</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-nru"></i><strong>
                                        Nauru </strong><span class="badge text-bg-primary mb-3">nru</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-nzl"></i><strong> New
                                        Zealand </strong><span class="badge text-bg-primary mb-3">nzl</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-omn"></i><strong> Oman
                                    </strong><span class="badge text-bg-primary mb-3">omn</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-pak"></i><strong>
                                        Pakistan </strong><span class="badge text-bg-primary mb-3">pak</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-pan"></i><strong>
                                        Panama </strong><span class="badge text-bg-primary mb-3">pan</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-pcn"></i><strong>
                                        Pitcairn </strong><span class="badge text-bg-primary mb-3">pcn</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-per"></i><strong> Peru
                                    </strong><span class="badge text-bg-primary mb-3">per</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-phl"></i><strong>
                                        Phillipines </strong><span class="badge text-bg-primary mb-3">phl</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-plw"></i><strong>
                                        Palau </strong><span class="badge text-bg-primary mb-3">plw</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-png"></i><strong>
                                        Papua New Guinea </strong><span class="badge text-bg-primary mb-3">png</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-pol"></i><strong>
                                        Poland </strong><span class="badge text-bg-primary mb-3">pol</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-pri"></i><strong>
                                        Puerto Rico </strong><span class="badge text-bg-primary mb-3">pri</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-prk"></i><strong>
                                        Korea (Democratic People's Republic of Korea) </strong><span
                                        class="badge text-bg-primary mb-3">prk</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-prt"></i><strong>
                                        Portugal </strong><span class="badge text-bg-primary mb-3">prt</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-pry"></i><strong>
                                        Paraguay </strong><span class="badge text-bg-primary mb-3">pry</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-pse"></i><strong>
                                        State of Palestine </strong><span class="badge text-bg-primary mb-3">pse</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-pyf"></i><strong>
                                        French Polynesia </strong><span class="badge text-bg-primary mb-3">pyf</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-qat"></i><strong>
                                        Qatar </strong><span class="badge text-bg-primary mb-3">qat</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-reu"></i><strong>
                                        Réunion </strong><span class="badge text-bg-primary mb-3">reu</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-rou"></i><strong>
                                        Roumania </strong><span class="badge text-bg-primary mb-3">rou</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-rus"></i><strong>
                                        Russia (russian Federation) </strong><span class="badge text-bg-primary mb-3">rus</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-rwa"></i><strong>
                                        Rwanda </strong><span class="badge text-bg-primary mb-3">rwa</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-sau"></i><strong>
                                        Saudi Arabia </strong><span class="badge text-bg-primary mb-3">sau</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-sco"></i><strong>
                                        Scotland (country that is part of the United Kingdom) </strong><span
                                        class="badge text-bg-primary mb-3">sco</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-sdn"></i><strong>
                                        Sudan </strong><span class="badge text-bg-primary mb-3">sdn</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-sen"></i><strong>
                                        Senegal </strong><span class="badge text-bg-primary mb-3">sen</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-sgp"></i><strong>
                                        Singapore </strong><span class="badge text-bg-primary mb-3">sgp</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-sgs"></i><strong>
                                        South Georgia and the South Sandwich Islands </strong><span
                                        class="badge text-bg-primary mb-3">sgs</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-shn"></i><strong>
                                        Saint Helena, Ascension and Tristan da Cunha </strong><span
                                        class="badge text-bg-primary mb-3">shn</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-sjm"></i><strong>
                                        Svalbard and Jan Mayen </strong><span class="badge text-bg-primary mb-3">sjm</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-slb"></i><strong>
                                        Solomon Islands </strong><span class="badge text-bg-primary mb-3">slb</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-sle"></i><strong>
                                        Sierra Leone </strong><span class="badge text-bg-primary mb-3">sle</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-slv"></i><strong> El
                                        Salvador </strong><span class="badge text-bg-primary mb-3">slv</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-smr"></i><strong> San
                                        Marino </strong><span class="badge text-bg-primary mb-3">smr</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-som"></i><strong>
                                        Somalia </strong><span class="badge text-bg-primary mb-3">som</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-spm"></i><strong>
                                        Saint Pierre and Miquelon </strong><span class="badge text-bg-primary mb-3">spm</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-srb"></i><strong>
                                        Serbia </strong><span class="badge text-bg-primary mb-3">srb</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-ssd"></i><strong>
                                        South Sudan </strong><span class="badge text-bg-primary mb-3">ssd</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-stp"></i><strong> Sao
                                        Tome and Principe </strong><span class="badge text-bg-primary mb-3">stp</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-sun"></i><strong>
                                        Union of Soviet Socialist Republics (USSR) </strong><span
                                        class="badge text-bg-primary mb-3">sun</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-sur"></i><strong>
                                        Suriname </strong><span class="badge text-bg-primary mb-3">sur</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-svk"></i><strong>
                                        Slovakia </strong><span class="badge text-bg-primary mb-3">svk</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-svn"></i><strong>
                                        Slovenia </strong><span class="badge text-bg-primary mb-3">svn</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-swe"></i><strong>
                                        Sweden </strong><span class="badge text-bg-primary mb-3">swe</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-swz"></i><strong>
                                        Swaziland </strong><span class="badge text-bg-primary mb-3">swz</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-sxm"></i><strong> Sint
                                        Maarten (Dutch part)</strong><span class="badge text-bg-primary mb-3">sxm</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-syc"></i><strong>
                                        Seychelles</strong><span class="badge text-bg-primary mb-3">syc</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-syr"></i><strong>
                                        Syrian Arab Republic</strong><span class="badge text-bg-primary mb-3">syr</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-tca"></i><strong>
                                        Turks and Caicos Islands</strong><span class="badge text-bg-primary mb-3">tca</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-tcd"></i><strong>
                                        Chad</strong><span class="badge text-bg-primary mb-3">tcd</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-tgo"></i><strong>
                                        Togo</strong><span class="badge text-bg-primary mb-3">tgo</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-tha"></i><strong>
                                        Thailand</strong><span class="badge text-bg-primary mb-3">tha</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-tjk"></i><strong>
                                        Tajikistan</strong><span class="badge text-bg-primary mb-3">tjk</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-tkl"></i><strong>
                                        Tokelau </strong><span class="badge text-bg-primary mb-3">tkl</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-tkm"></i><strong>
                                        Turkmenistan </strong><span class="badge text-bg-primary mb-3">tkm</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-tls"></i><strong>
                                        Timor-Leste </strong><span class="badge text-bg-primary mb-3">tls</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-ton"></i><strong>
                                        Tonga </strong><span class="badge text-bg-primary mb-3">ton</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-tto"></i><strong>
                                        Trinidad and Tobago </strong><span class="badge text-bg-primary mb-3">tto</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-tun"></i><strong>
                                        Tunisia </strong><span class="badge text-bg-primary mb-3">tun</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-tur"></i><strong>
                                        Turkey </strong><span class="badge text-bg-primary mb-3">tur</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-tuv"></i><strong>
                                        Tuvalu </strong><span class="badge text-bg-primary mb-3">tuv</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-twn"></i><strong>
                                        Taiwan, Province of China </strong><span class="badge text-bg-primary mb-3">twn</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-tza"></i><strong>
                                        United Republic of Tanzania </strong><span class="badge text-bg-primary mb-3">tza</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-uga"></i><strong>
                                        Uganda </strong><span class="badge text-bg-primary mb-3">uga</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-ukr"></i><strong>
                                        Ukraine </strong><span class="badge text-bg-primary mb-3">ukr</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-umi"></i><strong>
                                        United States Minor Outlying Islands </strong><span
                                        class="badge text-bg-primary mb-3">umi</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-ury"></i><strong>
                                        Uruguay </strong><span class="badge text-bg-primary mb-3">ury</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-usa"></i><strong>
                                        United States of America (USA) </strong><span class="badge text-bg-primary mb-3">usa</span>
                                </li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-uzb"></i><strong>
                                        Uzbekistan </strong><span class="badge text-bg-primary mb-3">uzb</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-vat"></i><strong>
                                        Vanuatu </strong><span class="badge text-bg-primary mb-3">vat</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-vct"></i><strong>
                                        Vatican </strong><span class="badge text-bg-primary mb-3">vct</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-ven"></i><strong>
                                        Venezuela (Bolivarian Republic of Venezuela) </strong><span
                                        class="badge text-bg-primary mb-3">ven</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-vgb"></i><strong>
                                        Virgin Islands (British) </strong><span class="badge text-bg-primary mb-3">vgb</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-vir"></i><strong>
                                        Virgin Islands (U.S.) </strong><span class="badge text-bg-primary mb-3">vir</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-vnm"></i><strong>
                                        Vietnam </strong><span class="badge text-bg-primary mb-3">vnm</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-vut"></i><strong>
                                        Vanuatu </strong><span class="badge text-bg-primary mb-3">vut</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-wal"></i><strong>
                                        Wales (country that is part of the United Kingdom) </strong><span
                                        class="badge text-bg-primary mb-3">wal</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-wlf"></i><strong>
                                        Wallis and Futuna </strong><span class="badge text-bg-primary mb-3">wlf</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-wsm"></i><strong>
                                        Samoa </strong><span class="badge text-bg-primary mb-3">wsm</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-yem"></i><strong>
                                        Yemen </strong><span class="badge text-bg-primary mb-3">yem</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-zaf"></i><strong>
                                        South Africa </strong><span class="badge text-bg-primary mb-3">zaf</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-zmb"></i><strong>
                                        Zambia </strong><span class="badge text-bg-primary mb-3">zmb</span></li>
                                <li class="icon-box" onclick="copyText(this)"><i class="flag-icon flag-icon-zwe"></i><strong>
                                        Zimbabwe </strong><span class="badge text-bg-primary mb-3">zwe</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Flag icon end -->
        </div>
    </main>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!-- toastify js -->
<script src="{{asset('assets/vendor/notifications/toastify-js.js')}}"></script>

<!--flag js-->
<script src="{{asset('assets/js/flag_icons.js')}}"></script>
@endsection

