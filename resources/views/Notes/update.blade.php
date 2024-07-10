@extends('../layout/root')
@section('main')
    <div class="container">
        @if (session('status'))
            <x-alert message="{{ session('status') }}" type="{{ session('type') }}"> </x-alert>
        @endif
        <div class="container-header">
            <div class="container-title">Note</div>
            <div class="container-right">
                <button id="notesubmit" class="note-button create-btn">&#128190; Save</button>
                <button id="note-close" class="note-button delete-btn"> &times;Close</button>
            </div>
        </div>

        <div class="cards">
            <div class="text-board">
                <form id="noteForm" action="{{ route('note.update', ['id' => $note->id]) }}" method="post">
                    @csrf
                    <input type="text"name="notetitle" id="note-title" value="{{ $note->title }}"
                        @error('notetitle') class="error"  @enderror>
                    @error('notetitle')
                        <div class="error">{{ $message }} </div>
                    @enderror
                    @error('notetext')
                        <div class="error">{{ $message }} </div>
                    @enderror
                    <textarea name="notetext" id="text-area" rows="25" cols="70" @error('notetext') class="error"  @enderror>{{ $note->content }}</textarea>
                </form>
            </div>
        </div>
    </div>
@endsection
