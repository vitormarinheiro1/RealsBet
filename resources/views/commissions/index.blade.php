<x-layout title="Consulta de Comissão de Afiliados">
<a href="{{ route('commissions.create') }}" class="btn btn-primary mt-4">
        Adicionar Comissão
    </a>


    <table class="table table-hover mt-4">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Afiliado</th>
                <th scope="col">Valor</th>
                <th scope="col">Data</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($commissions as $commission)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $commission->affiliate->name }}</td>
                    <td>{{ $commission->value }}</td>
                    <td>{{ $commission->date }}</td>
                    <td>
                        <a href="{{ route('commissions.edit', $commission->id) }}" class="btn btn-primary">Editar</a>
                        <a href="#" class="btn btn-danger">Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>