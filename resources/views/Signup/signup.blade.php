@extends('../layout/guest')
@section('main')
    @if (session('status'))
        <x-alert type="error" message="{{ session('status') }}"></x-alert>
    @endif
    <div class="form-container">
        <div class="form form-signup">
            <form method="post" action="{{ route('create') }}">
                @csrf
                <div class="field form-title">
                    &#128231; Signup
                </div>
                <div class="field">
                    <label for="name">Name</label>
                    <input type="name" name="name" id="name" placeholder="john"
                        class="@error('name') error @enderror">
                    @error('name')
                        <label class="error"> {{ $message }}</label>
                    @enderror
                </div field>
                <div class="field">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="john@gmail.com"
                        class="@error('email') error @enderror">
                    @error('email')
                        <label class="error"> {{ $message }}</label>
                    @enderror
                </div>
                <div class="field">
                    <label for="password">password</label>
                    <input type="password" name="password" id="password" class="@error('password') error @enderror">
                    @error('password')
                        <label class="error"> {{ $message }}</label>
                    @enderror
                </div>
                <div class="field">
                    <label for="confirm">confirm</label>
                    <input type="password" name="password_confirmation" id="confirm">
                </div>
                <div class="field">
                    <button class="note-button form-btn" type="submit">submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
