<header>
    <div class="l-container">
    
    
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6 col-lg-6">
                Password Keeper
            </div>
            <div class="col-xs-12 col-sm-8 col-md-6 col-lg-6">
                <ul>
                    @if(Auth::check())
                    <li class="nav-item">
                      <a class="nav-link" href="{{route(name: 'logout')}}">Log out</a>
                    </li>
                    @else 
                    <li class="nav-item">
                      <a class="nav-link" href="{{route(name: 'register')}}">Register</a>
                    </li>
                    @endauth
                  </ul>
              
            
    
            
            </div>
        </div>
    </div>
</header>
