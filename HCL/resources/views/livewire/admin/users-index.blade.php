<div>
    <div class="card">

        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Ingrese el nombre o correo de un usuario">
        </div>

        @if ($users->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td width=10px>
                                    <a class="btn btn-primary" href="{{ route('admin.users.edit', $user) }}">Editar</a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <td width=10px>
                    <div class="col-md-12 text-center">
                        <!-- <a class="btn btn-success mt-3 btn-lg" href="{{ route('users.export', $user) }}">Exportar todos
                            los usuarios CSV</a>

                         <a class="btn btn-danger mt-3 btn-lg" href="{{ route('download-pdf') }}">Exportar todos
                            los usuarios PDF</a> -->
                    </div>
                </td>

            </div>

            <div class="card-footer">
                {{ $users->links() }}
            </div>
        @else
            <div class="card-body">
                <strong>
                    No hay registros
                </strong>
            </div>
        @endif

    </div>
</div>
