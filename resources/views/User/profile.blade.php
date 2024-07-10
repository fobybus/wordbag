@extends('../layout/root')
@section('main')
<div class="container-centered">
    <div class="profile-container">
        <div class="profile-header">
            <h1>User Profile</h1>
        </div>
        <form>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" value="{{$user->name}}" disabled>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{$user->email}}" disabled>
            </div>
            <div class="form-group">
                <label for="joined">Joined</label>
                <input type="text" id="joined" name="joined" value="{{$user->created_at}}" class="date-field" disabled>
            </div>
        </form>
    </div>
</div>
@endsection
