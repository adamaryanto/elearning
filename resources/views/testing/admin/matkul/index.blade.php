<h2>Data Mata Kuliah</h2>

<a href="{{ route('admin.mata-kuliah.create') }}">
    Tambah Mata Kuliah
</a>

<table border="1" cellpadding="5">
    <tr>
        <th>Kode</th>
        <th>Nama</th>
        <th>SKS</th>
        <th>Program Studi</th>
        <th>Aksi</th>
    </tr>

    @foreach($mataKuliahs as $mk)
    <tr>
        <td>{{ $mk->kode_matkul }}</td>
        <td>{{ $mk->nama_matkul }}</td>
        <td>{{ $mk->sks }}</td>
        <td>{{ $mk->prodi->nama_prodi }}</td>
        <td>
            <form action="{{ route('admin.mata-kuliah.destroy', $mk->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
