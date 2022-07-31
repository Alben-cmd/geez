@if ($conversations->isNotEmpty())
<div class="container" wire:poll>
    <div class="pt-2 row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Contacts</h3>
                </div>
                <div class="card-body">
                    <ul class="contacts-list">
                        @forelse ($conversations as $key => $conversation)
                        <li class="{{ $conversation->id === $selectedConversation->id ? 'bg-warning' : '' }} ">
                            <a href="#" wire:click.prevent="viewMessage({{ $conversation->id }} )">
                                <img class="contacts-list-img" src="{{$conversation->sender_id === auth()->id() ? asset('/assets/images/tailors/' . $conversation->receiver->picture ) : asset('/assets/images/logo/logo.png' ) }}" alt="">
                                <div class="contacts-list-info">
                                    <span class="contacts-list-name text-dark">
                                        @if ($conversation->sender_id === auth()->id())
                                        {{$conversation->receiver->fname}} {{$conversation->receiver->lname}}
                                        @else
                                        {{ $conversation->sender->fname }} {{ $conversation->sender->lname }}
                                        @endif
                                        <small class="float-right contacts-list-date text-muted">
                                            @if($conversation->messages->last()->created_at ?? null)
                                                {{$conversation->messages->last()->created_at->format('d/m/Y')}} 
                                            @else 
                                                
                                            @endif
                                             
                                        </small>
                                    </span>
                                   @if($conversation->messages->last()->body ?? null)
                                    <span class="contacts-list-msg text-secondary">
                                        
                                        {{\Illuminate\Support\Str::limit($conversation->messages->last()->body, 15, $end='...') ?? ''}}</span>
                                    @else
                                    <span class="contacts-list-msg text-secondary"></span>
                                    @endif

                                    
                                </div>
                                <!-- /.contacts-list-info -->
                            </a>
                        </li>
                        @empty
                            <font color="#fb5d5d">0 Contact</font>
                        @endforelse
                        
                        <!-- End Contact Item -->
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card direct-chat direct-chat-primary">
                <div class="card-header">
                    <h3 class="card-title">Chat with
                        <span>
                            @if ($conversation->sender_id === auth()->id())
                            {{ $selectedConversation->receiver->fname }} {{ $selectedConversation->receiver->lname }}
                            @else
                            {{ $conversation->sender->fname }} {{ $conversation->sender->lname }} 
                            @endif
                        </span>
                    </h3>
                    
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <!-- Conversations are loaded here -->
                    <div class="direct-chat-messages" id="conversation">
                        <!-- Message. Default to the left -->
                        @forelse ($selectedConversation->messages as $key => $message)
                        <div class="direct-chat-msg {{ $message->user_id === auth()->id() ? 'right' : '' }} ">
                            <div class="clearfix direct-chat-infos">
                                <span class="float-left direct-chat-name">{{ $message->user->id === auth()->id() ? 'You' : $message->user->fname }} {{$message->user->id === auth()->id() ? ' ' :  $message->user->lname }} </span>
                                <span class="float-right direct-chat-timestamp">{{ $message->created_at->format('d M h:i a ') }} </span>
                            </div>
                            <!-- /.direct-chat-infos -->
                            @if( !$message->user->picture )
                            <img class="direct-chat-img" src="{{ asset('/assets/images/logo/logo.png' ) }}">
                            @else<img class="direct-chat-img" src="{{ asset('/assets/images/tailors/' . $message->user->picture ) }}">
                            @endif
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                {!! $message->body !!}
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>
                        @empty
                            <font color="#fb5d5d"></font>
                        @endforelse
                        <!-- /.direct-chat-msg -->
                    </div>
                    <!--/.direct-chat-messages-->
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <form wire:submit.prevent="sendMessage" action="#">
                        <div class="input-group">
                            <input wire:model.defer="body" type="text" name="message" placeholder="Type Message ..." class="form-control" required>
                            <span class="input-group-append">
                                <button type="submit" class="btn-message">Send</button>
                            </span>
                        </div>
                    </form>
                    <div class="header-actions">
                        <ul>
                   
                            <li class="dropdown "><a href="#" style="color: #fb5d5d; font-weight: 600;">Send Measurements<i class="pe-7s-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <!-- location: particals/user_dashboard -->
                                    <li><a href="#" class="header-action-btn" data-bs-toggle="modal" data-bs-target="#maleMeasure">
                                        Male 
                                       </a></li>
                                    <li><a href="#" class="header-action-btn" data-bs-toggle="modal" data-bs-target="#femaleMeasure">
                                        Female 
                                      </a></li>
                                
                                </ul>
                            </li>
                        </ul>
                        <span>
                            <form wire:submit.prevent="uploadImages" enctype="multipart/form-data">
                                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                <input type="file" wire:model.defer="image" id="file_upload_id" style="display:none">

                                <label>Image</label>&nbsp;&nbsp;<a href="#"><i id="icon_upload" class="fa fa-upload" onclick="_upload()"></i></a>

                                <script>
                                function _upload(){
                                    document.getElementById('file_upload_id').click();
                                }
                                </script>
                                <span>
                                    <button type="submit" class="#">Send</button>
                                </span>
                            </form>
                        </span>
                    </div>
                </div>
                <!-- /.card-footer-->
            </div>
        </div>
    </div>
</div>
@else 
<div class="container">
    <div class="row justify-content-center align-item-center">
        <div class="text-center"><img src="{{ asset('assets/images/icons/open_message.png') }} " width="130" height="">
            <h3><strong>You do not have any message!</strong></h3>
            
        </div>
    </div>
</div>
@endif

<!-- Search Modal Start -->
<div class="modal popup-search-style" id="maleMeasure">
    <button type="button" class="close-btn" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
    <div class="modal-overlay">
        <div class="modal-dialog p-0" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h2>Fill your Measurment Below (Male)</h2>
                    <form method="POST" action="{{ route('user.sendMaleMeasure') }}" class="form-horizontal">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <input type="text" name="male_name" placeholder="Male Name">
                                <input type="text" name="shoulder" placeholder="Shoulder">
                                <input type="text" name="chest" placeholder="Chest">
                                <input type="text" name="wrist" placeholder="Wrist">
                                <input type="text" name="throuser_length" placeholder="Throuser Length">
                                <input type="text" name="m_others" placeholder="Others">
                            </div>
                            <div class="col-6">
                                <input type="text" name="top_length" placeholder="Top Length">
                                <input type="text" name="arm_length" placeholder="Arm Length">
                                <input type="text" name="lap" placeholder="Lap">
                                <input type="text" name="neck" placeholder="Neck">  
                                <input type="hidden" name="conversation_id" value="{{ $conversation->id }}">                     
                            </div>                          
                        </div>
                        <br>
                        <button type="submit" class="btn-message2">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Search Modal End -->
<!-- Search Modal Start -->
<div class="modal popup-search-style" id="femaleMeasure">
    <button type="button" class="close-btn" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
    <div class="modal-overlay">
        <div class="modal-dialog p-0" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h2>Fill your Measurment Below (Female)</h2>
                    <form method="POST" action="{{ route('user.sendFemaleMeasure') }}" class="form-horizontal">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <input type="text" name="female_name" placeholder="Female Name">
                                <input type="text" name="shoulder" placeholder="Shoulder">
                                <input type="text" name="chest" placeholder="Chest">
                                <input type="text" name="round_slip" placeholder="Round Slip">
                                <input type="text" name="throuser_length" placeholder="Throuser Length">
                                <input type="text" name="sleeve_length" placeholder="Sleeve Length">
                                <input type="text" name="hips" placeholder="Hips">
                                <input type="hidden" name="conversation_id" value="{{ $conversation->id }}"> 
                            </div>
                            <div class="col-6">
                                <input type="text" name="top_length" placeholder="Top Length">
                                <input type="text" name="arm_length" placeholder="Arm Length">
                                <input type="text" name="tommy" placeholder="Tummy">
                                <input type="text" name="gown_length" placeholder="Gown Length">
                                <input type="text" name="f_others" placeholder="Others">
                            </div>
                            
                        </div>
                        <br>
                            <button type="submit" class="btn-message2">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Search Modal End -->
