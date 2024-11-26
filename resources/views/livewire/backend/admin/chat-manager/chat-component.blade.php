
<div class="col-lg-8 col-xxl-9 box-col-7">
    <div class="card chat-container-content-box">
        <div class="card-header">
            <div class="chat-header d-flex align-items-center">
                <div class="d-lg-none">
                    <a class="me-3 toggle-btn" role="button"><i class="ti ti-align-justified"></i></a>
                </div>
                <a href="{{route('profile')}}">
            <span class="profileimg h-45 w-45 d-flex-center b-r-50 position-relative bg-light">
              <img src="{{asset('backend/assets/images/avtar/14.png')}}" alt="" class="img-fluid b-r-50">
              <span
                  class="position-absolute top-0 end-0 p-1 bg-success border border-light rounded-circle"></span>
            </span>
                </a>
                <div class="flex-grow-1 ps-2 pe-2">
                    <div class="fs-6"> Jerry Ladies</div>
                    <div class="text-muted f-s-12 text-success">Online</div>
                </div>
                <button type="button" class="btn btn-success h-45 w-45 icon-btn b-r-22 me-sm-2"
                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="ti ti-phone-call f-s-20"></i>
                </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-body p-0">
                            <div class="call">
                                <div class="call-div">
                                    <img src="{{asset('backend/assets/images/profile-app/32.jpg')}}" class="w-100" alt="">
                                    <div class="call-caption">
                                        <h2 class="text-white">Jerry Ladies</h2>
                                        <div class="d-flex justify-content-center">
                        <span
                            class="bg-success h-40 w-40 d-flex-center b-r-50 animate__animated animate__1 animate__shakeY animate__infinite call-btn pointer-events-auto" data-bs-dismiss="modal">
                          <i class="ti ti-phone-call "></i>
                        </span>
                                            <span class="bg-danger h-40 w-40 d-flex-center b-r-50 ms-4 call-btn pointer-events-auto" data-bs-dismiss="modal">
                          <i class="ti ti-phone"></i>
                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-primary h-45 w-45 icon-btn b-r-22 me-sm-2"
                        data-bs-toggle="modal" data-bs-target="#exampleModal1">
                    <i class="ti ti-video f-s-20"></i>
                </button>
                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-body p-0">
                            <div class="call">
                                <div class="call-div pointer-events-auto">
                                    <img src="{{asset('backend/assets/images/profile-app/25.jpg')}}" class="w-100" alt="">

                                    <div class="call-caption">
                                        <div class="d-flex justify-content-center align-items-center">

                        <span class="bg-white h-35 w-35 d-flex-center b-r-50 ms-4">
                          <i class="ti ti-microphone text-dark"></i>
                        </span>
                                            <span data-bs-dismiss="modal"
                                                  class="bg-danger h-45 w-45 d-flex-center b-r-50 ms-4 animate__pulse animate__animated animate__infinite animate__faster call-btn pointer-events-auto">
                          <i class="ti ti-phone"></i>
                        </span>
                                            <span class="bg-white h-35 w-35 d-flex-center b-r-50 ms-4">
                          <i class="ti ti-phone-pause text-dark"></i>
                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="video-div">
                                    <img src="{{asset('backend/assets/images/profile-app/31.jpg')}}" class="w-100 rounded" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <button class="btn btn-secondary h-45 w-45 icon-btn b-r-22 me-sm-2"
                            data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                        <i class="ti ti-settings f-s-20"></i>
                    </button>
                    <ul class="dropdown-menu" data-popper-placement="bottom-start">
                        <li><a class="dropdown-item" href="#"><i class="ti ti-brand-hipchat"></i> <span
                                    class="f-s-13">Chat Settings</span></a>
                        </li>
                        <li><a class="dropdown-item" href="#"><i class="ti ti-phone-call"></i> <span
                                    class="f-s-13">Contact Settings</span></a>
                        </li>
                        <li><a class="dropdown-item" href="#"><i class="ti ti-settings"></i> <span
                                    class="f-s-13">Settings</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
@php
use Carbon\Carbon;

@endphp

        <div class="card-body chat-body">
            <div class="chat-container" style="height: 600px; overflow-y: auto;">
                <!-- Nachrichtentrenner für Datum -->
                <div class="text-center mb-3">
                    <span class="badge text-light-secondary">Today</span>
                </div>

                @foreach($messages as $message)
                    <div class="position-relative mb-3">
                        @if($message['user_id'] === auth()->id())
                            <!-- Nachricht des aktuellen Benutzers -->
                            <div class="chat-box-right">
                                <div>
                                    <p class="chat-text">{{ $message['content'] ?? 'No content available' }}</p>
                                    <p class="text-muted">
                                        <i class="ti ti-checks text-primary"></i>
                                        {{ $message['created_at'] ? Carbon::parse($message['created_at'])->format('H:i A') : 'Time Unknown' }}
                                    </p>
                                </div>
                            </div>
                            <div class="chatdp h-45 w-45 b-r-50 position-absolute end-0 top-0 bg-danger">
                                <img src="{{ asset('backend/assets/images/avtar/09.png') }}" alt="You" class="img-fluid b-r-50">
                            </div>
                        @else
                            <!-- Nachricht von anderen Benutzern -->
                            <div class="chatdp h-45 w-45 b-r-50 position-absolute start-0 bg-light">
                                <img src="{{ asset('backend/assets/images/avtar/14.png') }}" alt="{{ $message['user_id'] ?? 'Unknown' }}" class="img-fluid b-r-50">
                            </div>
                            <div class="chat-box">
                                <div>
                                    <p class="chat-text">{{ $message['content'] ?? 'No content available' }}</p>
                                    <p class="text-muted">
                                        <i class="ti ti-checks text-primary"></i>
                                        {{ $message['created_at'] ? Carbon::parse($message['created_at'])->format('H:i A') : 'Time Unknown' }}
                                    </p>
                                </div>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>

            <!-- Poll für neue Nachrichten -->
            <div wire:poll.2000ms="loadMessages"></div>
        </div>



        <div class="card-footer">
            <div class="chat-footer d-flex">
                <div class="app-form flex-grow-1">
                    <form wire:submit.prevent="sendMessage" class="mt-0">
                        <div class="input-group">
                            <span class="input-group-text bg-secondary ms-2 me-2 b-r-10 ">
                                <a class="emoji-btn d-flex-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Emoji" role="button">
                                    <i class="ti ti-mood-smile f-s-18"></i>
                                </a>
                            </span>

                            <input wire:model="messageText" type="text" class="form-control b-r-6" placeholder="Type a message"
                                   aria-label="Recipient's username">
                            <button class="btn btn-sm btn-primary ms-2 me-2 b-r-4" type="submit"><i class="ti ti-send"></i> <span>Send</span></button>
                        </div>
                        @error('messageText') <span class="text-danger">{{ $message }}</span> @enderror
                    </form>
                </div>



                <div class="d-none d-sm-block">
                    <a class="bg-secondary h-50 w-50 d-flex-center b-r-10 ms-1" role="button"
                       data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Microphone">
                        <i class="ti ti-microphone f-s-18"></i>
                    </a>
                </div>
                <div class="d-none d-sm-block">
                    <a class="bg-secondary h-50 w-50 d-flex-center b-r-10 ms-1" role="button"
                       data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Camera">
                        <i class="ti ti-camera-plus f-s-18"></i>
                    </a>
                </div>
                <div class="d-none d-sm-block">
                    <a class="bg-secondary h-50 w-50 d-flex-center b-r-10 ms-1" role="button"
                       data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Paperclip">
                        <i class="ti ti-paperclip f-s-18"></i>
                    </a>
                </div>
                <div>
                    <div class="btn-group dropdown-icon-none d-sm-none">
                        <a class="h-35 w-35 d-flex-center ms-1" role="button" data-bs-toggle="dropdown"
                           data-bs-auto-close="true" aria-expanded="false">
                            <i class="ti ti-dots-vertical"></i>
                        </a>
                        <ul class="dropdown-menu" data-popper-placement="bottom-start">
                            <li><a class="dropdown-item" href="#"><i class="ti ti-microphone"></i> <span
                                        class="f-s-13">Microphone</span></a>
                            </li>
                            <li><a class="dropdown-item" href="#"> <i class="ti ti-camera-plus"></i> <span
                                        class="f-s-13">camera</span></a>
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-paperclip"></i> <span
                                        class="f-s-13">paperclip</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>














</div>

