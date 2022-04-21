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
                                    <span class="contacts-list-msg text-secondary">{{$conversation->messages->last()->body ?? ''}}</span>

                                    
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
                                {{ $message->body }}
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
                            <input wire:model.defer="body" type="text" name="message" placeholder="Type Message ..." class="form-control">
                            <span class="input-group-append">
                                <button type="submit" class="btn btn-secondary">Send</button>
                            </span>
                        </div>
                    </form>
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

