@extends('../layout/root')
@section('main')
    <div class="container">
        <div class="container-header">
            <div class="container-title">Note</div>
            <div class="container-right">
                <button id="note-close" class="note-button delete-btn"> &times;Close</button>
            </div>
        </div>

        <div class="cards">
            <div class="text-board">
                <form id="noteForm" action="{{ route('notes') }}" method="get">
                    @csrf
                    <input type="text"name="notetitle" id="note-title" disabled ="insert a title" value="{{$note->title}}">
                    <textarea name="notetext" id="text-area" rows="25" cols="70" disabled placeholder="insert a note">{{$note->content}}</textarea>
                </form>
            </div>
        </div>
    </div>
@endsection
