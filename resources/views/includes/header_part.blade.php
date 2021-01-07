<!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
              
                <span class="badge badge-danger badge-counter">

                  @if(Auth::user()->role->name == 'tenant')
                    {{$replies ? $replies->count() : 0}}
                  @else
                    
                     {{$notes ? $notes->count() : 0}}

                @endif

                </span>
               
              </a>
             
                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Message 
                </h6>
                @if(Auth::user()->role->name == 'tenant')

                     
                      @foreach($replies as $reply)
                    
                    @if($reply->tenant_id == Auth::user()->id )
                     
                     <a class="dropdown-item d-flex align-items-center" href="{{route('reply.edit',$reply->id)}}">
                       <div class="mr-3">
                         <div class="icon-circle bg-primary">
                           <i class="fas fa-file-alt text-white"></i>
                         </div>
                       </div>
                       <div>
                        
                         <div class="small text-gray-500">{{$reply->created_at->diffForHumans()}}</div>
                         <span class="font-weight-bold">{{$reply->title}}</span>

                        
                       </div>
                     </a>

                     @endif

                     @endforeach

                     
                      {{--  <a class="dropdown-item text-center small text-gray-500" href="{{route('allReplies')}}">Show All Replies</a> --}}
                  @else
                     @foreach($notes as $note)
                    <a class="dropdown-item d-flex align-items-center" href="{{route('note.edit',$note->id)}}">
                      <div class="mr-3">
                        <div class="icon-circle bg-primary">
                          <i class="fas fa-file-alt text-white"></i>
                        </div>
                      </div>
                      <div>
                       
                        <div class="small text-gray-500">{{$note->created_at->diffForHumans()}}</div>
                        <span class="font-weight-bold">{{$note->title}}</span>

                       
                      </div>
                    </a>
                    @endforeach
                      <a class="dropdown-item text-center small text-gray-500" href="{{route('note.index')}}">Show All Notifications</a>
                @endif
              
              </div>
            </li>

            <!-- Nav Item - Messages -->
           {{--  <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li> --}}