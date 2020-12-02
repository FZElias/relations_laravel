<div class="modal fade user-edit-{{ $e->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content p-4">
            <h3 class="text-center">Create user</h3>
            <form action="{{ route("user.store") }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" value="{{ $e->name }}" name="name" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" value="{{ $e->email }}" name="email" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" value="{{ $e->password }}" name="password" required>
                </div>
                <div class="form-group">
                    <label>Role</label>
                    <select name="role_id">
                        @foreach ($roles as $e)
                            <option value="{{ $e->id }}">{{ $e->name }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
