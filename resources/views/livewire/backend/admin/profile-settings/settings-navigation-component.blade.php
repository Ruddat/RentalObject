<div class="row">
<div class="col-lg-4 col-xxl-3">
    <div class="card">
        <div class="card-header">
            <h5>@autotranslate("Settings", app()->getLocale())</h5>
        </div>

        <div class="card-body">


<div class="vertical-tab setting-tab">
    <ul class="nav nav-tabs app-tabs-primary" id="v-bg" role="tablist">
        @foreach($tabs as $key => $tab)
            <li class="nav-item" role="presentation">
                <button class="nav-link {{ $activeTab === $key ? 'active' : '' }}"
                        wire:click="switchTab('{{ $key }}')" type="button">
                    <i class="ph-bold {{ $tab['icon'] }} pe-2"></i>
                    {{ $tab['label'] }}
                </button>
            </li>
        @endforeach
    </ul>

</div>

</div>
</div>

<livewire:backend.admin.profile-settings.user-time-spent-chart />


<div class="card">
    <div class="card-body">
        <div class="card hover-effect card-light-primary mt-4">
            <div class="card-body">
                <h5>Used space</h5>
                <p class="mt-2 text-secondary f-s-16">Your team has used 80% of your
                    available space. Need more?</p>

                <div class="progress w-100 mt-3 mb-3" role="progressbar"
                     aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar bg-primary progress-bar-striped"
                         style="width: 78.5%"> </div>
                </div>

                <span class="mt-4">
                                    <a href="" class="me-3 text-secondary">Dismiss</a>
                                    <a href="" class="text-d-underline">Upgrade plan</a>
                                </span>

            </div>
        </div>
        <div class="app-divider-v"></div>
        <div class="d-flex align-items-center">
                            <span class="h-45 w-45 d-flex-center bg-warning b-r-50 position-relative">
                                <img src="{{asset('backend/assets/images/avtar/09.png')}}" alt="avtar"
                                     class="img-fluid b-r-50">
                                <span
                                    class="position-absolute top-0 end-0 p-1 bg-success border border-light rounded-circle"></span>
                            </span>
            <div class="flex-grow-1 ps-2 log-out-profile">
                <div class="f-w-600 fs-6"> Ninfa Monaldo</div>
                <div class="text-secondary f-s-12">Web Developer</div>
            </div>
            <div>
                <a href="{{route('profile')}}">
                                <span>
                                    <i class="ph-bold  ph-arrow-square-out f-s-20"></i>
                                </span>
                </a>
            </div>

        </div>
    </div>
</div>
</div>

    <div class="col-lg-8 col-xxl-9">
        <div class="tab-content">
        @if($activeTab === 'profile')
        <div class="tab-pane fade {{ $activeTab === 'profile' ? 'active show' : '' }}" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
            <livewire:backend.admin.profile-settings.profile-tab />
        </div>

        @elseif($activeTab === 'activity')
        <div class="tab-pane fade {{ $activeTab === 'activity' ? 'active show' : '' }}" id="activity-tab-pane" role="tabpanel" aria-labelledby="activity-tab" tabindex="0">
            <livewire:backend.admin.profile-settings.activity-tab />
        </div>

        @elseif($activeTab === 'security')
        <div class="tab-pane fade {{ $activeTab === 'security' ? 'active show' : '' }}" id="security-tab-pane" role="tabpanel" aria-labelledby="security-tab" tabindex="0">
            <livewire:backend.admin.profile-settings.security-tab />
        </div>

        @elseif($activeTab === 'privacy')
        <div class="tab-pane fade {{ $activeTab === 'privacy' ? 'active show' : '' }}" id="privacy-tab-pane" role="tabpanel" aria-labelledby="privacy-tab" tabindex="0">
            <livewire:backend.admin.profile-settings.privacy-tab />
        </div>
        <!-- Weitere Tabs -->
        @endif
    </div>
    </div>
</div>

