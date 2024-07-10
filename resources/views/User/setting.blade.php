@extends('../layout/root')
@section('main')
    <div class="container-centered">
        @if (session('status'))
            <x-alert message="{{ session('status') }}" type="{{ session('type') }}"> </x-alert>
        @endif
        <div class="profile-container">
            <div class="profile-header">
                <h1>&#9881; Settings</h1>
            </div>
            <form method="post" action="{{ route('setting.change') }}">
                @csrf
                <div class="form-group">
                    <label for="current-password">&#128273; Current Password</label>
                    <input type="password" id="current-password" name="current_password" placeholder="Enter current password"
                        @error('current_password') class="error"  @enderror>
                    @error('current_password')
                        <div class="error">{{ $message }} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="new-password">&#128274; New Password</label>
                    <input type="password" id="new-password" name="password" placeholder="Enter new password"
                        @error('password') class="error"  @enderror>
                    @error('password')
                        <div class="error">{{ $message }} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="confirm-password">&#128275; Confirm New Password</label>
                    <input type="password" id="confirm-password" name="password_confirmation"
                        placeholder="Confirm new password">
                </div>
                <div class="form-group">
                    <input class="form-btn note-button" type="submit" value="&#10145; Change Password">
                </div>
            </form>
        </div>
    </div>
@endsection
