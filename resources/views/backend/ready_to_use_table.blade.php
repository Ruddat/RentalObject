@extends('backend.layout.master')
@section('title', 'Ready To Use Table')
@section('css')
    <!--font-awesome-css-->
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/fontawesome/css/all.css')}}">

    <!-- Data Table css-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/vendor/datatable/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/vendor/datatable/datatable2/buttons.dataTables.min.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Ready to use table</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-hand-heart f-s-16"></i> Ready to use
                      </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Ready to use table</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- ready to use table start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Patients List</h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="app-scroll table-responsive app-datatable-default">
                            <table id="exampledatatable" class="w-100 display patients-list-table">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Patients ID</th>
                                    <th>Number</th>
                                    <th>Age</th>
                                    <th>Last Visit</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div
                                                class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-dark">
                                                <img src="{{asset('../assets/images/avtar/14.png')}}" alt=""
                                                     class="img-fluid">
                                            </div>
                                            <p class="mb-0 ps-2"> Airi Satou</p>
                                        </div>
                                    </td>

                                    <td>Apt. 138 81391 Lockman, Port Eliseo, FL 95685</td>
                                    <td class="f-w-500">AR 5896</td>
                                    <td class="text-success">+13013164820</td>
                                    <td>27</td>
                                    <td>1 jan 2024</td>
                                    <td>
                                        <span class="badge text-outline-danger">Cancel</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                                            <span class="bg-danger h-30 w-30 d-flex-center b-r-50">
                                                                HK
                                                            </span>
                                            <p class="mb-0 ps-2"> Haley Kennedy</p>
                                        </div>
                                    </td>
                                    <td>7701 Britt Plain, Darebury, KY 34743-7537</td>
                                    <td class="f-w-500">AR 4578</td>
                                    <td class="text-success">+15339716009</td>
                                    <td>33</td>
                                    <td>4 jan 2024</td>
                                    <td>
                                        <span class="badge text-outline-success">Approved</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div
                                                class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-info">
                                                <img src="{{asset('../assets/images/avtar/2.png')}}" alt=""
                                                     class="img-fluid">
                                            </div>
                                            <p class="mb-0 ps-2"> Brenden Wagner</p>
                                        </div>
                                    </td>
                                    <td>363 Adan Roads, Niatown, LA 59400-2706</td>
                                    <td class="f-w-500">AR 5674</td>
                                    <td class="text-success">+14806811689</td>
                                    <td>22</td>
                                    <td>7 jan 2024</td>
                                    <td>
                                        <span class="badge text-outline-success">Approved</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div
                                                class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-primary">
                                                <img src="{{asset('../assets/images/avtar/08.png')}}" alt=""
                                                     class="img-fluid">
                                            </div>
                                            <p class="mb-0 ps-2"> Brielle Williamson</p>
                                        </div>
                                    </td>
                                    <td>619 Auer Plain, Paztown, OR 15300-7408</td>
                                    <td class="f-w-500">AR 2541</td>
                                    <td class="text-success">+17012299349</td>
                                    <td>21</td>
                                    <td>19 July 2024</td>
                                    <td>
                                        <span class="badge text-outline-success">Approved</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                                            <span class="bg-secondary h-30 w-30 d-flex-center b-r-50">
                                                                <i class="fa-solid fa-user"></i>
                                                            </span>
                                            <p class="mb-0 ps-2"> Bruno Nash</p>
                                        </div>
                                    </td>
                                    <td>Suite 315 511 Verdie Mill, Brockmouth, IL 60325</td>
                                    <td class="f-w-500">AR 2547</td>
                                    <td class="text-success">+14482507107</td>
                                    <td>25</td>
                                    <td>11 July 2024</td>
                                    <td>
                                        <span class="badge text-outline-danger">Cancel</span>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                                            <span class="bg-warning h-30 w-30 d-flex-center b-r-50">
                                                                TH
                                                            </span>
                                            <p class="mb-0 ps-2"> Thor Walton</p>
                                        </div>
                                    </td>
                                    <td>40198 Vickie Creek, Stehrborough, AZ 10745-8699
                                    </td>
                                    <td class="f-w-500">AR 1245</td>
                                    <td class="text-success">+13613790434</td>
                                    <td>39</td>
                                    <td>5 jan 2024</td>
                                    <td>
                                        <span class="badge text-outline-success">Approved</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div
                                                class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-secondary">
                                                <img src="{{asset('../assets/images/avtar/11.png')}}" alt=""
                                                     class="img-fluid">
                                            </div>
                                            <p class="mb-0 ps-2"> Cedric Kelly</p>
                                        </div>
                                    </td>
                                    <td>493 Pouros Union, Solfort, SC 85631</td>
                                    <td class="f-w-500">AR 2587</td>
                                    <td class="text-success">+12694213870</td>
                                    <td>45</td>
                                    <td>8 jan 2024</td>
                                    <td>
                                        <span class="badge text-outline-warning">Waiting</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div
                                                class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-info">
                                                <img src="{{asset('../assets/images/avtar/4.png')}}" alt=""
                                                     class="img-fluid">
                                            </div>
                                            <p class="mb-0 ps-2"> Colleen Hurst</p>
                                        </div>
                                    </td>
                                    <td>857 Jules Light, Logantown, TX 43519-1676
                                    </td>
                                    <td class="f-w-500">AR 1245</td>
                                    <td class="text-success">+15183976596</td>
                                    <td>30</td>
                                    <td>8 jan 2024</td>
                                    <td>
                                        <span class="badge text-outline-success">Approved</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                                            <span class="bg-secondary h-30 w-30 d-flex-center b-r-50">
                                                                <i class="fa-solid fa-user"></i>
                                                            </span>
                                            <p class="mb-0 ps-2"> Doris Wilder</p>
                                        </div>
                                    </td>
                                    <td>Apt. 915 302 Lowe Spurs, Kohle, CA 16056-9136
                                    </td>
                                    <td class="f-w-500">AR 1023</td>
                                    <td class="text-success">+15137988680</td>
                                    <td>25</td>
                                    <td>12 jan 2024</td>
                                    <td>
                                        <span class="badge text-outline-success">Approved</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div
                                                class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-secondary">
                                                <img src="{{asset('../assets/images/avtar/08.png')}}" alt=""
                                                     class="img-fluid">
                                            </div>
                                            <p class="mb-0 ps-2"> Garrett Winters</p>
                                        </div>
                                    </td>
                                    <td>4096 Luther Ranch, Adrienburgh, ID 63689</td>
                                    <td class="f-w-500">AR 1479</td>
                                    <td class="text-success">+393352655819</td>
                                    <td>26</td>
                                    <td>18 jan 2024</td>
                                    <td>
                                        <span class="badge text-outline-success">Approved</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                                            <span class="bg-dark h-30 w-30 d-flex-center b-r-50">
                                                                <i class="fa-solid fa-user"></i>
                                                            </span>
                                            <p class="mb-0 ps-2"> Gavin Cortez</p>
                                        </div>
                                    </td>
                                    <td>2794 Mauricio Island, Franklynfort, NC 10809</td>
                                    <td class="f-w-500">AR 2300</td>
                                    <td class="text-success">+393145150245</td>
                                    <td>37</td>
                                    <td>1 jan 2024</td>
                                    <td>
                                        <span class="badge text-outline-success">Approved</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                                            <span class="bg-info h-30 w-30 d-flex-center b-r-50">
                                                                MA
                                                            </span>
                                            <p class="mb-0 ps-2"> Martena Mccray</p>
                                        </div>
                                    </td>
                                    <td>Suite 881 8086 Liliana Island, Leifview, MN 54784</td>
                                    <td class="f-w-500">AR 1763</td>
                                    <td class="text-success">+395546976937</td>
                                    <td>28</td>
                                    <td>8 jan 2024</td>
                                    <td>
                                        <span class="badge text-outline-success">Approved</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div
                                                class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-primary">
                                                <img src="{{asset('../assets/images/avtar/10.png')}}" alt=""
                                                     class="img-fluid">
                                            </div>
                                            <p class="mb-0 ps-2"> Gavin Joyce</p>
                                        </div>
                                    </td>
                                    <td>8629 Christopher Garden, Brunoview, MN 18754</td>
                                    <td class="f-w-500">AR 7452</td>
                                    <td class="text-success">+393705696813</td>
                                    <td>36</td>
                                    <td>14 jan 2024</td>
                                    <td>
                                        <span class="badge text-outline-success">Approved</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div
                                                class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-dark">
                                                <img src="{{asset('../assets/images/avtar/12.png')}}" alt=""
                                                     class="img-fluid">
                                            </div>
                                            <p class="mb-0 ps-2"> Gloria Little</p>
                                        </div>
                                    </td>
                                    <td>Suite 992 1831 Julian Mountain, Veumfurt, WA 47309</td>
                                    <td class="f-w-500">AR 1023</td>
                                    <td class="text-success">+393259639722</td>
                                    <td>34</td>
                                    <td>25 jan 2024</td>
                                    <td>
                                        <span class="badge text-outline-success">Approved</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div
                                                class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-danger">
                                                <img src="{{asset('../assets/images/avtar/3.png')}}" alt=""
                                                     class="img-fluid">
                                            </div>
                                            <p class="mb-0 ps-2"> Jena Gaines</p>
                                        </div>
                                    </td>
                                    <td>9899 Watsica Turnpike, Port Latashiahaven, VA 71721</td>
                                    <td class="f-w-500">AR 2305</td>
                                    <td class="text-success">+393411753161</td>
                                    <td>30</td>
                                    <td>16 jan 2024</td>
                                    <td>
                                        <span class="badge text-outline-danger">Cancel</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div
                                                class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-info">
                                                <img src="{{asset('../assets/images/avtar/6.png')}}" alt=""
                                                     class="img-fluid">
                                            </div>
                                            <p class="mb-0 ps-2"> Jenette Caldwell</p>
                                        </div>
                                    </td>
                                    <td>6314 Littel Summit, Kennithside, GA 19596
                                    </td>
                                    <td class="f-w-500">AR2058</td>
                                    <td class="text-success">+393377674203</td>
                                    <td>32</td>
                                    <td>20 jan 2024</td>
                                    <td>
                                        <span class="badge text-outline-success">Approved</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                                            <span class="bg-success h-30 w-30 d-flex-center b-r-50">
                                                                <i class="fa-solid fa-user"></i>
                                                            </span>
                                            <p class="mb-0 ps-2"> Jennifer Acosta</p>
                                        </div>
                                    </td>
                                    <td>Suite 152 88047 Keebler Ranch, North Jacinta, MO 65595</td>
                                    <td class="f-w-500">AR 1935</td>
                                    <td class="text-success">+393406690407</td>
                                    <td>25</td>
                                    <td>7 June 2024</td>
                                    <td>
                                        <span class="badge text-outline-success">Approved</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                                            <span class="bg-secondary h-30 w-30 d-flex-center b-r-50">
                                                                <i class="fa-solid fa-user"></i>
                                                            </span>
                                            <p class="mb-0 ps-2"> Jennifer Chang</p>
                                        </div>
                                    </td>
                                    <td>Apt. 362 1222 Miller Mill, East Luigiport, MO 78290
                                    </td>
                                    <td class="f-w-500">AR 3056</td>
                                    <td class="text-success">+39353149638</td>
                                    <td>42</td>
                                    <td>7 June 2024</td>
                                    <td>
                                        <span class="badge text-outline-danger">Cancel</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div
                                                class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-info">
                                                <img src="{{asset('../assets/images/avtar/15.png')}}" alt=""
                                                     class="img-fluid">
                                            </div>
                                            <p class="mb-0 ps-2"> Michael Silva</p>
                                        </div>
                                    </td>
                                    <td>Apt. 563 69751 Kerluke Drive, Kiehnmouth, VT 82350-5899</td>
                                    <td class="f-w-500">AR 0358</td>
                                    <td class="text-success">+393778786938</td>
                                    <td>33</td>
                                    <td>14 June 2024</td>
                                    <td>
                                        <span class="badge text-outline-warning">Waiting</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div
                                                class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-danger">
                                                <img src="{{asset('../assets/images/avtar/14.png')}}" alt=""
                                                     class="img-fluid">
                                            </div>
                                            <p class="mb-0 ps-2"> Michelle House</p>
                                        </div>
                                    </td>
                                    <td>780 Bridgett Ridges, East Tammara, NH 66366</td>
                                    <td class="f-w-500">AR 4590</td>
                                    <td class="text-success">+393725601100</td>
                                    <td>41</td>
                                    <td>4 July 2024</td>
                                    <td>
                                        <span class="badge text-outline-success">Approved</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div
                                                class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-primary">
                                                <img src="{{asset('../assets/images/avtar/11.png')}}" alt=""
                                                     class="img-fluid">
                                            </div>
                                            <p class="mb-0 ps-2"> Olivia Liang</p>
                                        </div>
                                    </td>
                                    <td>38109 Abel Crossing, Warnerfurt, VT 30399-7755</td>
                                    <td class="f-w-500">AR 6085</td>
                                    <td class="text-success">+39386668608</td>
                                    <td>36</td>
                                    <td>19 August 2024</td>
                                    <td>
                                        <span class="badge text-outline-success">Approved</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div
                                                class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-light">
                                                <img src="{{asset('../assets/images/avtar/5.png')}}" alt=""
                                                     class="img-fluid">
                                            </div>
                                            <p class="mb-0 ps-2"> Quinn Flynn</p>
                                        </div>
                                    </td>
                                    <td>Appartamento 43 Incrocio Pericle 473, Marzio salentino, RG 92012
                                    </td>
                                    <td class="f-w-500">AR 0378</td>
                                    <td class="text-success">+12049100499</td>
                                    <td>32</td>
                                    <td>12 Sep 2024</td>
                                    <td>
                                        <span class="badge text-outline-danger">Cancel</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div
                                                class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-primary">
                                                <img src="{{asset('../assets/images/avtar/16.png')}}" alt=""
                                                     class="img-fluid">
                                            </div>
                                            <p class="mb-0 ps-2"> Prescott Bartlett</p>
                                        </div>
                                    </td>
                                    <td>Appartamento 76 Borgo Caputo 79, Settimo Maria a mare, CO 45647
                                    </td>
                                    <td class="f-w-500">AR 9065</td>
                                    <td class="text-success">+12049100499</td>
                                    <td>41</td>
                                    <td>15 jan 2024</td>
                                    <td>
                                        <span class="badge text-outline-success">Approved</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>

                                        <div class="d-flex align-items-center">
                                                            <span class="bg-secondary h-30 w-30 d-flex-center b-r-50">
                                                                <i class="fa-solid fa-user"></i>
                                                            </span>
                                            <p class="mb-0 ps-2"> Suki Burks</p>
                                        </div>

                                    </td>
                                    <td>Appartamento 64 Incrocio De Angelis 533, Settimo Caio, TR 86219
                                    </td>
                                    <td class="f-w-500">AR 7806</td>
                                    <td class="text-success">+12049100499</td>
                                    <td>45</td>
                                    <td>2 September 2024</td>
                                    <td>
                                        <span class="badge text-outline-success">Approved</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div
                                                class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-success">
                                                <img src="{{asset('../assets/images/avtar/13.png')}}" alt=""
                                                     class="img-fluid">
                                            </div>
                                            <p class="mb-0 ps-2"> Tatyana Fitzpatrick</p>
                                        </div>
                                    </td>
                                    <td>Appartamento 72 Contrada De luca 96, Carmelo lido, VB 80578</td>
                                    <td class="f-w-500">AR 0379</td>
                                    <td class="text-success">+12049100499</td>
                                    <td>35</td>
                                    <td>19 July 2024</td>
                                    <td>
                                        <span class="badge text-outline-success">Approved</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                                            <span class="bg-secondary h-30 w-30 d-flex-center b-r-50">
                                                                <i class="fa-solid fa-user"></i>
                                                            </span>
                                            <p class="mb-0 ps-2"> Yuri Berry</p>
                                        </div>
                                    </td>
                                    <td>Appartamento 81 Incrocio Avide 297, Settimo Avide umbro, LO
                                        54266
                                    </td>
                                    <td class="f-w-500">AR 0485</td>
                                    <td class="text-success">+12049100499</td>
                                    <td>20</td>
                                    <td>11 July 2024</td>
                                    <td>
                                        <span class="badge text-outline-success">Approved</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                                            <span class="bg-dark h-30 w-30 d-flex-center b-r-50">
                                                                <i class="fa-solid fa-user"></i>
                                                            </span>
                                            <p class="mb-0 ps-2"> Zorita Serrano</p>
                                        </div>
                                    </td>
                                    <td>Esc. 983 Conjunto Benito 55, Alcalá de Guadaira, Ext 54606</td>
                                    <td class="f-w-500">AR 7506</td>
                                    <td class="text-success">+12049100499</td>
                                    <td>30</td>
                                    <td>23 June 2024</td>
                                    <td>
                                        <span class="badge text-outline-danger">Cancel</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div
                                                class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-primary">
                                                <img src="{{asset('../assets/images/avtar/1.png')}}" alt=""
                                                     class="img-fluid">
                                            </div>
                                            <p class="mb-0 ps-2">Jonas Alexander</p>
                                        </div>
                                    </td>
                                    <td>Esc. 983 Conjunto Benito 55, Alcalá de Guadaira, Ext 54606</td>
                                    <td class="f-w-500">AR 7450</td>
                                    <td class="text-success">+12049100499</td>
                                    <td>30</td>
                                    <td>23 June 2024</td>
                                    <td>
                                        <span class="badge text-outline-success">Approved</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                                            <span class="bg-danger h-30 w-30 d-flex-center b-r-50">
                                                                <i class="fa-solid fa-user"></i>
                                                            </span>
                                            <p class="mb-0 ps-2">Howard Hatfield</p>
                                        </div>
                                    </td>
                                    <td>Gran Subida Carlos, 21 Esc. 635, Pozuelo de Alarcón, Ara 63348
                                    </td>
                                    <td class="f-w-500">AR 6034</td>
                                    <td class="text-success">+12049100499</td>
                                    <td>25</td>
                                    <td>23 June 2024</td>
                                    <td>
                                        <span class="badge text-outline-warning">Waiting</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                                            <span class="bg-dark h-30 w-30 d-flex-center b-r-50">
                                                                SY
                                                            </span>
                                            <p class="mb-0 ps-2"> Sakura Yamamoto</p>
                                        </div>
                                    </td>
                                    <td>Vía Julio César Archuleta 5, Madrid, Ara 51374
                                    </td>
                                    <td class="f-w-500">AR 0224</td>
                                    <td class="text-success">+12049100499</td>
                                    <td>63</td>
                                    <td>20 June 2024</td>
                                    <td>
                                        <span class="badge text-outline-danger">Cancel</span>
                                    </td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Patients ID</th>
                                    <th>Number</th>
                                    <th>Age</th>
                                    <th>Last Visit</th>
                                    <th>Status</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- student list tabel 2-->

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Students List</h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="app-scroll table-responsive app-datatable-default">
                            <table id="exampledatatable1" class="w-100 display student-list-table">
                                <thead>
                                <tr>
                                    <th>
                                        <input class="form-check-input mt-0" type="checkbox" id="select-all">
                                    </th>
                                    <th>Name</th>
                                    <th>Parent Name</th>
                                    <th>ID</th>
                                    <th>Contact</th>
                                    <th>City</th>
                                    <th>Date</th>
                                    <th>Grad</th>
                                    <th>Acthion</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <input class="form-check-input mt-0" type="checkbox">
                                    </td>
                                    <td>
                                        Gavin Cortez
                                    </td>
                                    <td>Patty OFurniture</td>
                                    <td class="f-w-500">AR 2044</td>
                                    <td class="text-success">+393145150245</td>
                                    <td>New york</td>
                                    <td>1 jan 2024</td>
                                    <td><span class="badge text-light-success">A</span></td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button
                                                class="btn border-0 icon-btn b-r-4 dropdown-toggle active"
                                                type="button" data-bs-toggle="dropdown"
                                                data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-edit"></i> Edit </a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-trash"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="form-check-input mt-0" type="checkbox">
                                    </td>
                                    <td>
                                        Martena Mccray
                                    </td>
                                    <td>Olive Yew</td>
                                    <td class="f-w-500">AR 1763</td>
                                    <td class="text-success">+395546976937</td>
                                    <td>New york</td>
                                    <td>8 jan 2024</td>
                                    <td><span class="badge text-light-success">A</span></td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button
                                                class="btn border-0 icon-btn b-r-4 dropdown-toggle active"
                                                type="button" data-bs-toggle="dropdown"
                                                data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-edit"></i> Edit </a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-trash"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="form-check-input mt-0" type="checkbox">
                                    </td>
                                    <td>
                                        Gavin Joyce
                                    </td>
                                    <td>Maureen Biologist</td>
                                    <td class="f-w-500">AR 7452</td>
                                    <td class="text-success">+393705696813</td>
                                    <td>New york</td>
                                    <td>14 jan 2024</td>
                                    <td><span class="badge text-light-success">A</span></td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button
                                                class="btn border-0 icon-btn b-r-4 dropdown-toggle active"
                                                type="button" data-bs-toggle="dropdown"
                                                data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-edit"></i> Edit </a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-trash"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="form-check-input mt-0" type="checkbox">
                                    </td>
                                    <td>
                                        Gloria Little
                                    </td>
                                    <td>Maureen Biologist</td>
                                    <td class="f-w-500">AR 1023</td>
                                    <td class="text-success">+393259639722</td>
                                    <td>New york</td>
                                    <td>25 jan 2024</td>
                                    <td><span class="badge text-light-success">A</span></td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button
                                                class="btn border-0 icon-btn b-r-4 dropdown-toggle active"
                                                type="button" data-bs-toggle="dropdown"
                                                data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-edit"></i> Edit </a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-trash"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="form-check-input mt-0" type="checkbox">
                                    </td>
                                    <td>
                                        Jena Gaines
                                    </td>
                                    <td>Maureen Biologist</td>
                                    <td class="f-w-500">AR 2305</td>
                                    <td class="text-success">+393411753161</td>
                                    <td>New york</td>
                                    <td>16 jan 2024</td>
                                    <td><span class="badge text-light-success">A</span></td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button
                                                class="btn border-0 icon-btn b-r-4 dropdown-toggle active"
                                                type="button" data-bs-toggle="dropdown"
                                                data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-edit"></i> Edit </a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-trash"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="form-check-input mt-0" type="checkbox">
                                    </td>
                                    <td>
                                        Jenette Caldwell
                                    </td>
                                    <td>6Del Phineum
                                    </td>
                                    <td class="f-w-500">AR2058</td>
                                    <td class="text-success">+393377674203</td>
                                    <td>New york</td>
                                    <td>20 jan 2024</td>
                                    <td><span class="badge text-light-success">A</span></td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button
                                                class="btn border-0 icon-btn b-r-4 dropdown-toggle active"
                                                type="button" data-bs-toggle="dropdown"
                                                data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-edit"></i> Edit </a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-trash"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="form-check-input mt-0" type="checkbox">
                                    </td>
                                    <td>
                                        Jennifer Acosta
                                    </td>
                                    <td>Percy Kewshun</td>
                                    <td class="f-w-500">AR 1935</td>
                                    <td class="text-success">+393406690407</td>
                                    <td>New york</td>
                                    <td>7 June 2024</td>
                                    <td><span class="badge text-light-success">A</span></td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button
                                                class="btn border-0 icon-btn b-r-4 dropdown-toggle active"
                                                type="button" data-bs-toggle="dropdown"
                                                data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-edit"></i> Edit </a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-trash"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="form-check-input mt-0" type="checkbox">
                                    </td>
                                    <td>
                                        Jennifer Chang
                                    </td>
                                    <td>Roy L. Commishun
                                    </td>
                                    <td class="f-w-500">AR 3056</td>
                                    <td class="text-success">+39353149638</td>
                                    <td>New york</td>
                                    <td>7 June 2024</td>
                                    <td><span class="badge text-light-warning">B</span></td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button
                                                class="btn border-0 icon-btn b-r-4 dropdown-toggle active"
                                                type="button" data-bs-toggle="dropdown"
                                                data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-edit"></i> Edit </a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-trash"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="form-check-input mt-0" type="checkbox">
                                    </td>
                                    <td>
                                        Michael Silva
                                    </td>
                                    <td>Roy L. Commishun</td>
                                    <td class="f-w-500">AR 0358</td>
                                    <td class="text-success">+393778786938</td>
                                    <td>New york</td>
                                    <td>14 June 2024</td>
                                    <td><span class="badge text-light-warning">B</span></td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button
                                                class="btn border-0 icon-btn b-r-4 dropdown-toggle active"
                                                type="button" data-bs-toggle="dropdown"
                                                data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-edit"></i> Edit </a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-trash"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="form-check-input mt-0" type="checkbox">
                                    </td>
                                    <td>
                                        Michelle House
                                    </td>
                                    <td>Roy L. Commishun</td>
                                    <td class="f-w-500">AR 4590</td>
                                    <td class="text-success">+393725601100</td>
                                    <td>New york</td>
                                    <td>4 July 2024</td>
                                    <td><span class="badge text-light-warning">B</span></td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button
                                                class="btn border-0 icon-btn b-r-4 dropdown-toggle active"
                                                type="button" data-bs-toggle="dropdown"
                                                data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-edit"></i> Edit </a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-trash"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="form-check-input mt-0" type="checkbox">
                                    </td>
                                    <td>
                                        Olivia Liang
                                    </td>
                                    <td>Bridget Theriveaquai</td>
                                    <td class="f-w-500">AR 6085</td>
                                    <td class="text-success">+39386668608</td>
                                    <td>New york</td>
                                    <td>19 August 2024</td>
                                    <td><span class="badge text-light-warning">B</span></td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button
                                                class="btn border-0 icon-btn b-r-4 dropdown-toggle active"
                                                type="button" data-bs-toggle="dropdown"
                                                data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-edit"></i> Edit </a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-trash"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="form-check-input mt-0" type="checkbox">
                                    </td>
                                    <td>
                                        Quinn Flynn
                                    </td>
                                    <td>Bridget Theriveaquai
                                    </td>
                                    <td class="f-w-500">AR 0378</td>
                                    <td class="text-success">+12049100499</td>
                                    <td>New york</td>
                                    <td>12 Sep 2024</td>
                                    <td><span class="badge text-light-warning">B</span></td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button
                                                class="btn border-0 icon-btn b-r-4 dropdown-toggle active"
                                                type="button" data-bs-toggle="dropdown"
                                                data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-edit"></i> Edit </a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-trash"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="form-check-input mt-0" type="checkbox">
                                    </td>
                                    <td>
                                        Prescott Bartlett
                                    </td>
                                    <td>Frank N. Stein</td>
                                    <td class="f-w-500">AR 9065</td>
                                    <td class="text-success">+12049100499</td>
                                    <td>New york</td>
                                    <td>15 jan 2024</td>
                                    <td><span class="badge text-light-warning">B</span></td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button
                                                class="btn border-0 icon-btn b-r-4 dropdown-toggle active"
                                                type="button" data-bs-toggle="dropdown"
                                                data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-edit"></i> Edit </a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-trash"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="form-check-input mt-0" type="checkbox">
                                    </td>
                                    <td>
                                        Suki Burks
                                    </td>
                                    <td>Frank N. Stein</td>
                                    <td class="f-w-500">AR 7806</td>
                                    <td class="text-success">+12049100499</td>
                                    <td>New york</td>
                                    <td>2 September 2024</td>
                                    <td><span class="badge text-light-success">A</span></td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button
                                                class="btn border-0 icon-btn b-r-4 dropdown-toggle active"
                                                type="button" data-bs-toggle="dropdown"
                                                data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-edit"></i> Edit </a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-trash"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="form-check-input mt-0" type="checkbox">
                                    </td>
                                    <td>
                                        Tatyana Fitzpatrick
                                    </td>
                                    <td>
                                        Laura Norda
                                    </td>
                                    <td class="f-w-500">AR 0379</td>
                                    <td class="text-success">+12049100499</td>
                                    <td>New york</td>
                                    <td>19 July 2024</td>
                                    <td><span class="badge text-light-success">A</span></td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button
                                                class="btn border-0 icon-btn b-r-4 dropdown-toggle active"
                                                type="button" data-bs-toggle="dropdown"
                                                data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-edit"></i> Edit </a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-trash"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="form-check-input mt-0" type="checkbox">
                                    </td>
                                    <td>
                                        Yuri Berry
                                    </td>
                                    <td>Mal Nurrisht
                                    </td>
                                    <td class="f-w-500">AR 0485</td>
                                    <td class="text-success">+12049100499</td>
                                    <td>New york</td>
                                    <td>11 July 2024</td>
                                    <td><span class="badge text-light-success">A</span></td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button
                                                class="btn border-0 icon-btn b-r-4 dropdown-toggle active"
                                                type="button" data-bs-toggle="dropdown"
                                                data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-edit"></i> Edit </a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-trash"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="form-check-input mt-0" type="checkbox">
                                    </td>
                                    <td>
                                        Zorita Serrano
                                    </td>
                                    <td>
                                        Laura Norda
                                    </td>
                                    <td class="f-w-500">AR 7506</td>
                                    <td class="text-success">+12049100499</td>
                                    <td>New york</td>
                                    <td>23 June 2024</td>
                                    <td><span class="badge text-light-success">A</span></td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button
                                                class="btn border-0 icon-btn b-r-4 dropdown-toggle active"
                                                type="button" data-bs-toggle="dropdown"
                                                data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-edit"></i> Edit </a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-trash"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="form-check-input mt-0" type="checkbox">
                                    </td>
                                    <td>
                                        Jonas Alexander
                                    </td>
                                    <td>Wayde N. Thabalanz</td>
                                    <td class="f-w-500">AR 7450</td>
                                    <td class="text-success">+12049100499</td>
                                    <td>New york</td>
                                    <td>23 June 2024</td>
                                    <td><span class="badge text-light-success">A</span></td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button
                                                class="btn border-0 icon-btn b-r-4 dropdown-toggle active"
                                                type="button" data-bs-toggle="dropdown"
                                                data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-edit"></i> Edit </a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-trash"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="form-check-input mt-0" type="checkbox">
                                    </td>
                                    <td>
                                        Howard Hatfield
                                    </td>
                                    <td>Oscar Nommanee</td>
                                    <td class="f-w-500">AR 6034</td>
                                    <td class="text-success">+12049100499</td>
                                    <td>New york</td>
                                    <td>23 June 2024</td>
                                    <td><span class="badge text-light-success">A</span></td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button
                                                class="btn border-0 icon-btn b-r-4 dropdown-toggle active"
                                                type="button" data-bs-toggle="dropdown"
                                                data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-edit"></i> Edit </a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-trash"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="form-check-input mt-0" type="checkbox">
                                    </td>
                                    <td>
                                        Sakura Yamamoto
                                    </td>
                                    <td>Polly Pipe
                                    </td>
                                    <td class="f-w-500">AR 0224</td>
                                    <td class="text-success">+12049100499</td>
                                    <td>New york</td>
                                    <td>20 June 2024</td>
                                    <td><span class="badge text-light-success">A</span></td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button
                                                class="btn border-0 icon-btn b-r-4 dropdown-toggle active"
                                                type="button" data-bs-toggle="dropdown"
                                                data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-edit"></i> Edit </a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-trash"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- payment list tabel 3 -->

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Payment Details</h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="app-scroll table-responsive app-datatable-default">
                            <table id="exampledatatable2" class="w-100 display payment-details-table">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Bill No</th>
                                    <th>Tax</th>
                                    <th>Charges</th>
                                    <th>Discount</th>
                                    <th>Bill Date</th>
                                    <th>Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <p class="mb-0"> Gavin Cortez</p>
                                    </td>
                                    <td>11</td>
                                    <td>10</td>
                                    <td>100</td>
                                    <td class="f-w-500 text-success">15%</td>
                                    <td>1 jan 2024</td>
                                    <td>500</td>
                                </tr>
                                <tr>
                                    <td>

                                        <p class="mb-0"> Martena Mccray</p>

                                    </td>
                                    <td>11</td>
                                    <td>10</td>
                                    <td>100</td>
                                    <td class="f-w-500 text-success">15%</td>
                                    <td>8 jan 2024</td>
                                    <td>500</td>
                                </tr>
                                <tr>
                                    <td>

                                        <p class="mb-0"> Gavin Joyce</p>

                                    </td>
                                    <td>12</td>
                                    <td>10</td>
                                    <td>100</td>
                                    <td class="f-w-500 text-success">15%</td>
                                    <td>14 jan 2024</td>
                                    <td>500</td>
                                </tr>
                                <tr>
                                    <td>

                                        <p class="mb-0"> Gloria Little</p>

                                    </td>
                                    <td>12</td>
                                    <td>10</td>
                                    <td>100</td>
                                    <td class="f-w-500 text-success">15%</td>
                                    <td>25 jan 2024</td>
                                    <td>500</td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="mb-0"> Jena Gaines</p>

                                    </td>
                                    <td>13</td>
                                    <td>10</td>
                                    <td>100</td>
                                    <td class="f-w-500 text-success">15%</td>
                                    <td>16 jan 2024</td>
                                    <td>500</td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="mb-0"> Jenette Caldwell</p>

                                    </td>
                                    <td>14</td>
                                    <td>10</td>
                                    <td>100</td>
                                    <td class="f-w-500 text-success">15%</td>
                                    <td>20 jan 2024</td>
                                    <td>500</td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="mb-0"> Jennifer Acosta</p>
                                    </td>
                                    <td>14</td>
                                    <td>10</td>
                                    <td>100</td>
                                    <td class="f-w-500 text-success">15%</td>
                                    <td>7 June 2024</td>
                                    <td>500</td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="mb-0"> Jennifer Chang</p>

                                    </td>
                                    <td>14</td>
                                    <td>10</td>
                                    <td>100</td>
                                    <td class="f-w-500 text-success">15%</td>
                                    <td>7 June 2024</td>
                                    <td>500</td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="mb-0"> Michael Silva</p>
                                    </td>
                                    <td>15</td>
                                    <td>10</td>
                                    <td>100</td>
                                    <td class="f-w-500 text-success">15%</td>
                                    <td>14 June 2024</td>
                                    <td>500</td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="mb-0"> Michelle House</p>
                                    </td>
                                    <td>15</td>
                                    <td>10</td>
                                    <td>100</td>
                                    <td class="f-w-500 text-success">15%</td>
                                    <td>4 July 2024</td>
                                    <td>500</td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="mb-0"> Olivia Liang</p>
                                    </td>
                                    <td>15</td>
                                    <td>10</td>
                                    <td>100</td>
                                    <td class="f-w-500 text-success">15%</td>
                                    <td>19 August 2024</td>
                                    <td>500</td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="mb-0"> Quinn Flynn</p>
                                    </td>
                                    <td>16</td>
                                    <td>10</td>
                                    <td>100</td>
                                    <td class="f-w-500 text-success">15%</td>
                                    <td>12 Sep 2024</td>
                                    <td>500</td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="mb-0"> Prescott Bartlett</p>
                                    </td>
                                    <td>16</td>
                                    <td>10</td>
                                    <td>100</td>
                                    <td class="f-w-500 text-success">15%</td>
                                    <td>15 jan 2024</td>
                                    <td>500</td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="mb-0"> Suki Burks</p>

                                    </td>
                                    <td>16</td>
                                    <td>10</td>
                                    <td>100</td>
                                    <td class="f-w-500 text-success">15%</td>
                                    <td>2 September 2024</td>
                                    <td>500</td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="mb-0"> Tatyana Fitzpatrick</p>
                                    </td>
                                    <td>17</td>
                                    <td>10</td>
                                    <td>100</td>
                                    <td class="f-w-500 text-success">15%</td>
                                    <td>19 July 2024</td>
                                    <td>500</td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="mb-0"> Yuri Berry</p>
                                    </td>
                                    <td>17</td>
                                    <td>10</td>
                                    <td>100</td>
                                    <td class="f-w-500 text-success">15%</td>
                                    <td>11 July 2024</td>
                                    <td>500</td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="mb-0"> Zorita Serrano</p>
                                    </td>
                                    <td>18</td>
                                    <td>10</td>
                                    <td>100</td>
                                    <td class="f-w-500 text-success">15%</td>
                                    <td>23 June 2024</td>
                                    <td>500</td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="mb-0">Jonas Alexander</p>
                                    </td>
                                    <td>18</td>
                                    <td>10</td>
                                    <td>100</td>
                                    <td class="f-w-500 text-success">15%</td>
                                    <td>23 June 2024</td>
                                    <td>500</td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="mb-0">Howard Hatfield</p>
                                    </td>
                                    <td>18</td>
                                    <td>10</td>
                                    <td>100</td>
                                    <td class="f-w-500 text-success">15%</td>
                                    <td>23 June 2024</td>
                                    <td>500</td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="mb-0"> Sakura Yamamoto</p>
                                    </td>
                                    <td>19</td>
                                    <td>10</td>
                                    <td>100</td>
                                    <td class="f-w-500 text-success">15%</td>
                                    <td>20 June 2024</td>
                                    <td>500</td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Bill No</th>
                                    <th>Tax</th>
                                    <th>Charges</th>
                                    <th>Discount</th>
                                    <th>Bill Date</th>
                                    <th>Total</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- job Resumes tabel 4 -->

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Job Resumes</h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="app-scroll table-responsive app-datatable-default">
                            <table id="exampledatatable3" class="w-100 display job-resumes-table">
                                <thead>
                                <tr>
                                    <th>

                                    </th>
                                    <th>NAME</th>
                                    <th>COURSE</th>
                                    <th>EXPERIENCE</th>
                                    <th>RATE</th>
                                    <th>ADDRESS</th>
                                    <th>REVIEW</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div
                                            class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-dark">
                                            <img src="{{asset('../assets/images/avtar/14.png')}}" alt=""
                                                 class="img-fluid">
                                        </div>
                                    </td>
                                    <td>
                                        Gavin Cortez
                                    </td>
                                    <td>PHP</td>
                                    <td>2+ year</td>
                                    <td>$34 per hour</td>
                                    <td>363 Adan Roads, Niatown, LA 59400-2706</td>
                                    <td>
                                        <div>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-light f-s-16"></i>
                                            <i class="ti ti-star-filled text-light f-s-16"></i>
                                            <i class="ti ti-star-filled text-light f-s-16"></i>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button
                                                class="btn border-0 icon-btn b-r-4 dropdown-toggle active"
                                                type="button" data-bs-toggle="dropdown"
                                                data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-edit"></i> Edit </a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-trash"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div
                                            class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-info">
                                            <img src="{{asset('../assets/images/avtar/2.png')}}" alt=""
                                                 class="img-fluid">
                                        </div>
                                    </td>
                                    <td>
                                        Martena Mccray
                                    </td>
                                    <td>PHP</td>
                                    <td>2+ year</td>
                                    <td>$34 per hour</td>
                                    <td>363 Adan Roads, Niatown, LA 59400-2706</td>
                                    <td>
                                        <div>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-light f-s-16"></i>
                                            <i class="ti ti-star-filled text-light f-s-16"></i>
                                            <i class="ti ti-star-filled text-light f-s-16"></i>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button
                                                class="btn border-0 icon-btn b-r-4 dropdown-toggle active"
                                                type="button" data-bs-toggle="dropdown"
                                                data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-edit"></i> Edit </a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-trash"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div
                                            class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-info">
                                            <img src="{{asset('../assets/images/avtar/2.png')}}" alt=""
                                                 class="img-fluid">
                                        </div>
                                    </td>
                                    <td>
                                        Gavin Joyce
                                    </td>
                                    <td>Web Developer</td>
                                    <td>4+ year</td>
                                    <td>$34 per hour</td>
                                    <td>363 Adan Roads, Niatown, LA 59400-2706</td>
                                    <td>
                                        <div>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-light f-s-16"></i>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button
                                                class="btn border-0 icon-btn b-r-4 dropdown-toggle active"
                                                type="button" data-bs-toggle="dropdown"
                                                data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-edit"></i> Edit </a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-trash"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div
                                            class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-primary">
                                            <img src="{{asset('../assets/images/avtar/08.png')}}" alt=""
                                                 class="img-fluid">
                                        </div>
                                    </td>
                                    <td>
                                        Gloria Little
                                    </td>
                                    <td>Web Developer</td>
                                    <td>4+ year</td>
                                    <td>$29 per hour</td>
                                    <td>363 Adan Roads, Niatown, LA 59400-2706</td>
                                    <td>
                                        <div>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled  text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-light f-s-16"></i>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button
                                                class="btn border-0 icon-btn b-r-4 dropdown-toggle active"
                                                type="button" data-bs-toggle="dropdown"
                                                data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-edit"></i> Edit </a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-trash"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div
                                            class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-secondary">
                                            <img src="{{asset('../assets/images/avtar/11.png')}}" alt=""
                                                 class="img-fluid">
                                        </div>
                                    </td>
                                    <td>
                                        Jena Gaines
                                    </td>
                                    <td>Web Developer</td>
                                    <td>4+ year</td>
                                    <td>$34 per hour</td>
                                    <td>363 Adan Roads, Niatown, LA 59400-2706</td>
                                    <td>
                                        <div>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button
                                                class="btn border-0 icon-btn b-r-4 dropdown-toggle active"
                                                type="button" data-bs-toggle="dropdown"
                                                data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-edit"></i> Edit </a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-trash"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div
                                            class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-info">
                                            <img src="{{asset('../assets/images/avtar/4.png')}}" alt=""
                                                 class="img-fluid">
                                        </div>
                                    </td>
                                    <td>
                                        Jent Caldwell
                                    </td>
                                    <td>PHP</td>
                                    <td>6+ year</td>
                                    <td>$55 per hour</td>
                                    <td>363 Adan Roads, Niatown, LA 59400-2706</td>
                                    <td>
                                        <div>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-light f-s-16"></i>
                                            <i class="ti ti-star-filled text-light f-s-16"></i>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button
                                                class="btn border-0 icon-btn b-r-4 dropdown-toggle active"
                                                type="button" data-bs-toggle="dropdown"
                                                data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-edit"></i> Edit </a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-trash"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div
                                            class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-secondary">
                                            <img src="{{asset('../assets/images/avtar/08.png')}}" alt=""
                                                 class="img-fluid">
                                        </div>
                                    </td>
                                    <td>
                                        Jennifer Acosta
                                    </td>
                                    <td>Java Developer</td>
                                    <td>6+ year</td>
                                    <td>$63 per hour</td>
                                    <td>363 Adan Roads, Niatown, LA 59400-2706</td>
                                    <td>
                                        <div>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-light f-s-16"></i>
                                            <i class="ti ti-star-filled text-light f-s-16"></i>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button
                                                class="btn border-0 icon-btn b-r-4 dropdown-toggle active"
                                                type="button" data-bs-toggle="dropdown"
                                                data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-edit"></i> Edit </a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-trash"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div
                                            class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-primary">
                                            <img src="{{asset('../assets/images/avtar/16.png')}}" alt=""
                                                 class="img-fluid">
                                        </div>
                                    </td>
                                    <td>
                                        Jennifer Chang
                                    </td>
                                    <td>Java Developer</td>
                                    <td>6+ year</td>
                                    <td>$63 per hour</td>
                                    <td>363 Adan Roads, Niatown, LA 59400-2706</td>
                                    <td>
                                        <div>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-light f-s-16"></i>
                                            <i class="ti ti-star-filled text-light f-s-16"></i>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button
                                                class="btn border-0 icon-btn b-r-4 dropdown-toggle active"
                                                type="button" data-bs-toggle="dropdown"
                                                data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-edit"></i> Edit </a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-trash"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div
                                            class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-success">
                                            <img src="{{asset('../assets/images/avtar/13.png')}}" alt=""
                                                 class="img-fluid">
                                        </div>
                                    </td>
                                    <td>
                                        Michael Silva
                                    </td>
                                    <td>Java Developer</td>
                                    <td>1+ year</td>
                                    <td>$20 per hour</td>
                                    <td>363 Adan Roads, Niatown, LA 59400-2706</td>
                                    <td>
                                        <div>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-light f-s-16"></i>
                                            <i class="ti ti-star-filled text-light f-s-16"></i>
                                            <i class="ti ti-star-filled text-light f-s-16"></i>
                                            <i class="ti ti-star-filled text-light f-s-16"></i>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button
                                                class="btn border-0 icon-btn b-r-4 dropdown-toggle active"
                                                type="button" data-bs-toggle="dropdown"
                                                data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-edit"></i> Edit </a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-trash"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div
                                            class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-info">
                                            <img src="{{asset('../assets/images/avtar/4.png')}}" alt=""
                                                 class="img-fluid">
                                        </div>
                                    </td>
                                    <td>
                                        Michelle House
                                    </td>
                                    <td>UI UX Designer</td>
                                    <td>1+ year</td>
                                    <td>$20 per hour</td>
                                    <td>363 Adan Roads, Niatown, LA 59400-2706</td>
                                    <td>
                                        <div>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-light f-s-16"></i>
                                            <i class="ti ti-star-filled text-light f-s-16"></i>
                                            <i class="ti ti-star-filled text-light f-s-16"></i>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button
                                                class="btn border-0 icon-btn b-r-4 dropdown-toggle active"
                                                type="button" data-bs-toggle="dropdown"
                                                data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-edit"></i> Edit </a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-trash"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div
                                            class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-success">
                                            <img src="{{asset('../assets/images/avtar/09.png')}}" alt=""
                                                 class="img-fluid">
                                        </div>
                                    </td>
                                    <td>
                                        Olivia Liang
                                    </td>
                                    <td>UI UX Designer</td>
                                    <td>1+ year</td>
                                    <td>$20 per hour</td>
                                    <td>363 Adan Roads, Niatown, LA 59400-2706</td>
                                    <td>
                                        <div>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-light f-s-16"></i>
                                            <i class="ti ti-star-filled text-light f-s-16"></i>
                                            <i class="ti ti-star-filled text-light f-s-16"></i>
                                            <i class="ti ti-star-filled text-light f-s-16"></i>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button
                                                class="btn border-0 icon-btn b-r-4 dropdown-toggle active"
                                                type="button" data-bs-toggle="dropdown"
                                                data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-edit"></i> Edit </a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-trash"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div
                                            class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-light">
                                            <img src="{{asset('../assets/images/avtar/5.png')}}" alt=""
                                                 class="img-fluid">
                                        </div>
                                    </td>
                                    <td>
                                        Quinn Flynn
                                    </td>
                                    <td>UI UX Designer</td>
                                    <td>1+ year</td>
                                    <td>$20 per hour</td>
                                    <td>363 Adan Roads, Niatown, LA 59400-2706</td>
                                    <td>
                                        <div>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-light f-s-16"></i>
                                            <i class="ti ti-star-filled text-light f-s-16"></i>
                                            <i class="ti ti-star-filled text-light f-s-16"></i>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button
                                                class="btn border-0 icon-btn b-r-4 dropdown-toggle active"
                                                type="button" data-bs-toggle="dropdown"
                                                data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-edit"></i> Edit </a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-trash"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div
                                            class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-info">
                                            <img src="{{asset('../assets/images/avtar/6.png')}}" alt=""
                                                 class="img-fluid">
                                        </div>
                                    </td>
                                    <td>
                                        Prescott Bartlett
                                    </td>
                                    <td>Java Developer</td>
                                    <td>1+ year</td>
                                    <td>$20 per hour</td>
                                    <td>363 Adan Roads, Niatown, LA 59400-2706</td>
                                    <td>
                                        <div>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-light f-s-16"></i>
                                            <i class="ti ti-star-filled text-light f-s-16"></i>
                                            <i class="ti ti-star-filled text-light f-s-16"></i>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button
                                                class="btn border-0 icon-btn b-r-4 dropdown-toggle active"
                                                type="button" data-bs-toggle="dropdown"
                                                data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-edit"></i> Edit </a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-trash"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div
                                            class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-dark">
                                            <img src="{{asset('../assets/images/avtar/07.png')}}" alt=""
                                                 class="img-fluid">
                                        </div>
                                    </td>
                                    <td>
                                        Suki Burks
                                    </td>
                                    <td>Web Developer</td>
                                    <td>8+ year</td>
                                    <td>$75 per hour</td>
                                    <td>363 Adan Roads, Niatown, LA 59400-2706</td>
                                    <td>
                                        <div>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button
                                                class="btn border-0 icon-btn b-r-4 dropdown-toggle active"
                                                type="button" data-bs-toggle="dropdown"
                                                data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-edit"></i> Edit </a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-trash"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div
                                            class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-success">
                                            <img src="{{asset('../assets/images/avtar/07.png')}}" alt=""
                                                 class="img-fluid">
                                        </div>
                                    </td>
                                    <td>
                                        Tatyana Fitzpatrick
                                    </td>
                                    <td>PHP</td>
                                    <td>8+ year</td>
                                    <td>$76 per hour</td>
                                    <td>363 Adan Roads, Niatown, LA 59400-2706</td>
                                    <td>
                                        <div>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled  text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled  text-warning f-s-16"></i>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button
                                                class="btn border-0 icon-btn b-r-4 dropdown-toggle active"
                                                type="button" data-bs-toggle="dropdown"
                                                data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-edit"></i> Edit </a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-trash"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                                            <span class="bg-success h-30 w-30 d-flex-center b-r-50">
                                                                <i class="fa-solid fa-user"></i>
                                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        Yuri Berry
                                    </td>
                                    <td>Java Developer</td>
                                    <td>8+ year</td>
                                    <td>$76 per hour</td>
                                    <td>363 Adan Roads, Niatown, LA 59400-2706</td>
                                    <td>
                                        <div>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button
                                                class="btn border-0 icon-btn b-r-4 dropdown-toggle active"
                                                type="button" data-bs-toggle="dropdown"
                                                data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-edit"></i> Edit </a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-trash"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div
                                            class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-info">
                                            <img src="{{asset('../assets/images/avtar/15.png')}}" alt=""
                                                 class="img-fluid">
                                        </div>
                                    </td>
                                    <td>
                                        Zorita Serrano
                                    </td>
                                    <td>PHP</td>
                                    <td>3+ year</td>
                                    <td>$35 per hour</td>
                                    <td>363 Adan Roads, Niatown, LA 59400-2706</td>
                                    <td>
                                        <div>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-light f-s-16"></i>
                                            <i class="ti ti-star-filled text-light f-s-16"></i>
                                            <i class="ti ti-star-filled text-light f-s-16"></i>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button
                                                class="btn border-0 icon-btn b-r-4 dropdown-toggle active"
                                                type="button" data-bs-toggle="dropdown"
                                                data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-edit"></i> Edit </a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-trash"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div
                                            class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-primary">
                                            <img src="{{asset('../assets/images/avtar/1.png')}}" alt=""
                                                 class="img-fluid">
                                        </div>
                                    </td>
                                    <td>
                                        Jonas Alexander
                                    </td>
                                    <td>Web Developer</td>
                                    <td>3+ year</td>
                                    <td>$35 per hour</td>
                                    <td>363 Adan Roads, Niatown, LA 59400-2706</td>
                                    <td>
                                        <div>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-light f-s-16"></i>
                                            <i class="ti ti-star-filled text-light f-s-16"></i>
                                            <i class="ti ti-star-filled text-light f-s-16"></i>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button
                                                class="btn border-0 icon-btn b-r-4 dropdown-toggle active"
                                                type="button" data-bs-toggle="dropdown"
                                                data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-edit"></i> Edit </a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-trash"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                                            <span class="bg-danger h-30 w-30 d-flex-center b-r-50">
                                                                AD
                                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        Howard Hatfield
                                    </td>
                                    <td>Web Designer</td>
                                    <td>3+ year</td>
                                    <td>$35 per hour</td>
                                    <td>363 Adan Roads, Niatown, LA 59400-2706</td>
                                    <td>
                                        <div>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-light f-s-16"></i>
                                            <i class="ti ti-star-filled text-light f-s-16"></i>
                                            <i class="ti ti-star-filled text-light f-s-16"></i>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button
                                                class="btn border-0 icon-btn b-r-4 dropdown-toggle active"
                                                type="button" data-bs-toggle="dropdown"
                                                data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-edit"></i> Edit </a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-trash"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                                            <span class="bg-info h-30 w-30 d-flex-center b-r-50">
                                                                CS
                                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        Sakura Yamamoto
                                    </td>
                                    <td>Java Developer</td>
                                    <td>4+ year</td>
                                    <td>$38 per hour</td>
                                    <td>363 Adan Roads, Niatown, LA 59400-2706</td>
                                    <td>
                                        <div>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-light f-s-16"></i>
                                            <i class="ti ti-star-filled text-light f-s-16"></i>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button
                                                class="btn border-0 icon-btn b-r-4 dropdown-toggle active"
                                                type="button" data-bs-toggle="dropdown"
                                                data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-edit"></i> Edit </a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="ti ti-trash"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <!-- TICKET DETAIL tabel 5 -->

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Ticket Detail</h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="app-scroll table-responsive app-datatable-default">
                            <table id="exampledatatable4" class="w-100 display ticket-detail-table">
                                <thead>
                                <tr>
                                    <th>AGENT</th>
                                    <th>DEPARTMENT</th>
                                    <th>ID</th>
                                    <th>TITLE</th>
                                    <th>ACTIVITY</th>
                                    <th>DATE</th>
                                    <th>PRIORITY</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        Gavin Cortez
                                    </td>
                                    <td>Pre-Sales</td>
                                    <td class="f-w-500">AR 2044</td>
                                    <td><p>It uses a dictionary of over 200 Latin</p></td>
                                    <td class="text-danger f-w-500">No reply yet</td>
                                    <td>1 jan 2024</td>
                                    <td>
                                        <span class="badge text-outline-warning">Medium</span>
                                    </td>


                                </tr>
                                <tr>
                                    <td>
                                        Martena Mccray
                                    </td>
                                    <td>Sales</td>
                                    <td class="f-w-500">AR 1763</td>
                                    <td><p>It uses a dictionary of over 200 Latin</p></td>
                                    <td class="text-success f-w-500">5 reply</td>
                                    <td>8 jan 2024</td>
                                    <td>
                                        <span class="badge text-outline-danger">lower</span>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        Gavin Joyce
                                    </td>
                                    <td>Technical</td>
                                    <td class="f-w-500">AR 7452</td>
                                    <td><p>It uses a dictionary of over 200 Latin</p></td>
                                    <td class="text-success f-w-500">5 reply</td>
                                    <td>14 jan 2024</td>
                                    <td>
                                        <span class="badge text-outline-success">High</span>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        Gloria Little
                                    </td>
                                    <td>Sales</td>
                                    <td class="f-w-500">AR 1023</td>
                                    <td><p>It uses a dictionary of over 200 Latin</p></td>
                                    <td class="text-success f-w-500">5 reply</td>
                                    <td>6 hours ago</td>
                                    <td>
                                        <span class="badge text-outline-warning">Medium</span>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        Jena Gaines
                                    </td>
                                    <td>Pre-Sales</td>
                                    <td class="f-w-500">AR 2305</td>
                                    <td><p>It uses a dictionary of over 200 Latin</p></td>
                                    <td class="text-success f-w-500">2 reply</td>
                                    <td>6 hours ago</td>
                                    <td>
                                        <span class="badge text-outline-warning">Medium</span>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        Jenette Caldwell
                                    </td>
                                    <td>Sales</td>
                                    <td class="f-w-500">AR2058</td>
                                    <td><p>It uses a dictionary of over 200 Latin</p></td>
                                    <td class="text-success f-w-500">2 reply</td>
                                    <td>20 jan 2024</td>
                                    <td>
                                        <span class="badge text-outline-success">High</span>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        Jennifer Acosta
                                    </td>
                                    <td>Pre-Sales</td>
                                    <td class="f-w-500">AR 1935</td>
                                    <td><p>It uses a dictionary of over 200 Latin</p></td>
                                    <td class="text-success f-w-500">2 reply</td>
                                    <td>7 June 2024</td>
                                    <td>
                                        <span class="badge text-outline-danger">lower</span>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        Jennifer Chang
                                    </td>
                                    <td>Pre-Sales</td>
                                    <td class="f-w-500">AR 3056</td>
                                    <td><p>It uses a dictionary of over 200 Latin</p></td>
                                    <td class="text-danger f-w-500">No reply yet</td>
                                    <td>10 hours ago</td>
                                    <td>
                                        <span class="badge text-outline-success">High</span>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        Michael Silva
                                    </td>
                                    <td>Pre-Sales</td>
                                    <td class="f-w-500">AR 0358</td>
                                    <td><p>It uses a dictionary of over 200 Latin</p></td>
                                    <td class="text-danger f-w-500">No reply yet</td>
                                    <td>14 June 2024</td>
                                    <td>
                                        <span class="badge text-outline-success">High</span>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        Michelle House
                                    </td>
                                    <td>Technical</td>
                                    <td class="f-w-500">AR 4590</td>
                                    <td><p>It uses a dictionary of over 200 Latin</p></td>
                                    <td> 5 reply</td>
                                    <td>4 July 2024</td>
                                    <td>
                                        <span class="badge text-outline-warning">Medium</span>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        Olivia Liang
                                    </td>
                                    <td>Technical</td>
                                    <td class="f-w-500">AR 6085</td>
                                    <td><p>It uses a dictionary of over 200 Latin</p></td>
                                    <td class="text-danger f-w-500">No reply yet</td>
                                    <td>19 August 2024</td>
                                    <td>
                                        <span class="badge text-outline-success">High</span>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        Quinn Flynn
                                    </td>
                                    <td>Pre-Sales</td>
                                    <td class="f-w-500">AR 0378</td>
                                    <td><p>It uses a dictionary of over 200 Latin</p></td>
                                    <td class="text-success f-w-500">2 reply</td>
                                    <td>12 Sep 2024</td>
                                    <td>
                                        <span class="badge text-outline-warning">Medium</span>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        Prescott Bartlett
                                    </td>
                                    <td>Sales</td>
                                    <td class="f-w-500">AR 9065</td>
                                    <td><p>It uses a dictionary of over 200 Latin</p></td>
                                    <td class="text-success f-w-500">2 reply</td>
                                    <td>6 hours ago</td>
                                    <td>
                                        <span class="badge text-outline-success">High</span>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        Suki Burks
                                    </td>
                                    <td>Pre-Sales</td>
                                    <td class="f-w-500">AR 7806</td>
                                    <td><p>It uses a dictionary of over 200 Latin</p></td>
                                    <td class="text-success f-w-500">2 reply</td>
                                    <td>2 Sep 2024</td>
                                    <td>
                                        <span class="badge text-outline-warning">Medium</span>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        Tatyana Fitzpatrick
                                    </td>
                                    <td>Pre-Sales</td>
                                    <td class="f-w-500">AR 0379</td>
                                    <td><p>It uses a dictionary of over 200 Latin</p></td>
                                    <td>3 reply</td>
                                    <td>19 July 2024</td>
                                    <td>
                                        <span class="badge text-outline-success">High</span>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        Yuri Berry
                                    </td>
                                    <td>Pre-Sales</td>
                                    <td class="f-w-500">AR 0485</td>
                                    <td><p>It uses a dictionary of over 200 Latin</p></td>
                                    <td class="text-danger f-w-500">No reply yet</td>
                                    <td>11 July 2024</td>
                                    <td>
                                        <span class="badge text-outline-danger">lower</span>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        Zorita Serrano
                                    </td>
                                    <td>Sales</td>
                                    <td class="f-w-500">AR 7506</td>
                                    <td><p>It uses a dictionary of over 200 Latin</p></td>
                                    <td class="text-success f-w-500">2 reply</td>
                                    <td>23 June 2024</td>
                                    <td>
                                        <span class="badge text-outline-warning">Medium</span>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        Jonas Alexander
                                    </td>
                                    <td>Technical</td>
                                    <td class="f-w-500">AR 7450</td>
                                    <td><p>It uses a dictionary of over 200 Latin</p></td>
                                    <td class="text-success f-w-500">5 reply</td>
                                    <td>10 hours ago</td>
                                    <td>
                                        <span class="badge text-outline-danger">lower</span>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        Howard Hatfield
                                    </td>
                                    <td>Pre-Sales</td>
                                    <td class="f-w-500">AR 6034</td>
                                    <td><p>It uses a dictionary of over 200 Latin</p></td>
                                    <td class="text-success f-w-500">2 reply</td>
                                    <td>23 June 2024</td>
                                    <td>
                                        <span class="badge text-outline-success">High</span>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        Sakura Yamamoto
                                    </td>
                                    <td>Pre-Sales</td>
                                    <td class="f-w-500">AR 0224</td>
                                    <td><p>It uses a dictionary of over 200 Latin</p></td>
                                    <td class="text-danger f-w-500">No reply yet</td>
                                    <td>10 hours ago</td>
                                    <td>
                                        <span class="badge text-outline-success">High</span>
                                    </td>

                                </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- ready to use table end -->
    </div>
@endsection

@section('script')
    <!--customizer-->
    <div id="customizer"></div>

    <!-- latest jquery-->
    <script src="{{asset('backend/assets/vendor/datatable/jquery.dataTables.min.js')}}"></script>

    <!-- data table js-->
    <script src="{{asset('backend/assets/js/ready_to_use_table.js')}}"></script>
@endsection
