<div class="modal fade photo-edit-{{ $e->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content p-4">
            <h3 class="text-center">Edit photo</h3>
            <form action="/photo/{{ $e->id }}" method="POST">
                @csrf
                @method("put")
                <div class="form-group">
                    <label>Name photo</label>
                    <input type="text" class="form-control" value="{{ $e->name }}" name="name" required>
                </div>
                <div class="form-group">
                    <label>Album</label>
                    <select name="album_id">
                        <option value="{{ $e->album_id }}">{{ $e->albums->name }}</option>
                        @foreach ($albums as $elem)
                            @if ($elem->photos === null)
                                <option value="{{ $elem->id }}">{{ $elem->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
