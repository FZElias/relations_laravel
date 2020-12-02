<div class="modal fade photo-create" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content p-4">
            <h3 class="text-center">Create photo</h3>
            <form action="{{ route("photo.store") }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="form-group">
                    <label>Album</label>
                    <select name="album_id">
                        @foreach ($albums as $e)
                            @if ($e->photos === null)
                                <option value="{{ $e->id }}">{{ $e->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
