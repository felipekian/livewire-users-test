<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">E-mail</th>
                <th scope="col">Password</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr wire:key="{{ $user->id }}">
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>
                <td><a class="btn btn-primary" href="{{ route('edit', $user->id) }}">Edit</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>