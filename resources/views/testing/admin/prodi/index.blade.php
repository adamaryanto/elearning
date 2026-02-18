<h2>Data Program Studi</h2>

<a href="{{ route('admin.prodi.create') }}">Tambah Prodi</a>


<table border="1">
    <tr>
        <th>Nama Prodi</th>
        <th>Aksi</th>
    </tr>

    @foreach($prodis as $prodi)
    <tr>
        <td>{{ $prodi->nama_prodi }}</td>
        <td>
            <form action="{{ route('admin.prodi.destroy', $prodi->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
