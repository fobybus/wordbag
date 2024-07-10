@extends('../layout/guest')
@section('main')
    <div class="form-container">
        @if (session('status'))
            <x-alert type="{{session('type')}}" message="{{ session('status') }}"></x-alert>
        @endif
        <div class="form">
            <form action="{{route('login.login')}}" method="post">
                @csrf
                <div class="field form-title">
                    &#128273; Login
                </div>
                <div class="field">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="field">
                    <label for="password">password</label>
                    <input type="password" name="password" id="password">
                </div>
                <div class="field">
                    <button class="note-button form-btn" type="submit">submit</button>
                </div>
                <div class="field">
                    <span class="form-right"><a href="{{route('signup')}}">create Account</a></span>
                </div>
                <div class="field">
                    <span class="form-right"><a href="#">Forget Password?</a></span>
                </div>
            </form>
        </div>
    </div>
@endsection
