<!--dialog custom  component  implemented by foby, last updated 7/2024  -->
<div class="dialog">
    <div class="dialog-header">
        <span>{{$title}}</span>
        <span class="dialog-x" onclick="closeDialog()">&times;</span>
    </div>
    <div class="dialog-content">
        {{$message}}
    </div>
    <div class="dialog-actions">
        <button class="note-button delete" id="dialog-delete">Delete</button>
        <button class="note-button" onclick="closeDialog()">cancel</button>
    </div>
</div>