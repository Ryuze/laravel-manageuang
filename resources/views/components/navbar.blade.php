<div class="container-fluid fixed-top bg-white d-flex justify-content-between shadow-sm py-3">
    <div>
        {{-- TODO: logo nya blom ada --}}
        disini bagian logo
    </div>
    <div>
        @auth
            <div class="dropdown">
                <button class="btn btn-white shadow-sm dropdown-toggle" type="button" id="dropdownMenuUser"
                    data-bs-toggle="dropdown">
                    <img src="{{ asset('storage/profiles/32.jpg') }}" class="rounded-circle" style="width: 40px" alt="">
                    {{ auth()->user()->name }}
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#" class="dropdown-item">{{ __('blades.Setting') }}</a></li>
                    <li><a href="{{ route('logout') }}" class="dropdown-item"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('blades.Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        @else
            <div class="d-flex flex-row">
                <div class="me-2">
                    <a class="btn btn-primary" href="{{ Route('login') }}">{{ __('blades.Login') }}</a>
                </div>
                <div>
                    <a class="btn btn-success" href="{{ route('register') }}">{{ __('blades.Register') }}</a>
                </div>
            </div>
        @endauth
    </div>
</div>
