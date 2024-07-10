@extends('../layout/root')
@section('main')
    <div class="container">
        @if (session('status'))
            <x-alert message="{{ session('status') }}" type="{{ session('type') }}"> </x-alert>
        @endif
        <div class="container-header">
            <div class="container-title">Notes</div>
            <div class="container-right">
                <a href="{{ route('note.create.show') }}" class="note-button create-btn">&#128221; Create</a>
            </div>
        </div>

        <div class="cards">
            @foreach ($notes as $note)
                <div class="card">
                    <div class="note-header">
                        <div class="note-title">
                            {{ $note->title }}
                        </div>
                        <div class="note-action">
                            <a class="note-button" href="{{ route('note.info', ['id' => $note->id]) }}">View</a>
                            <a class="note-button update"
                                href="{{ route('note.update.show', ['id' => $note->id]) }}">Edit</a>
                            <a class="note-button delete"
                                onclick="showDialog('{{ route('note.delete', ['id' => $note->id]) }}')">Delete</a>
                        </div>
                    </div>
                    <div class="note-content">
                        {{ $note->content }}
                    </div>
                </div>
            @endforeach
        </div>
        <x-dialog title="Deleting an item" message="Are you sure do you want to delete the item?"> </x-dialog>
    </div>
@endsection
