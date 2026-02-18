<h2>Data Dosen</h2>

<a href="{{ route('admin.dosen.create') }}">
    Tambah Dosen
</a>

@if(session('success'))
    <p style="color:green;">{{ session('success') }}</p>
@endif

<table border="1" cellpadding="6">
    <tr>
        <th>Kode</th>
        <th>Nama</th>
        <th>Email</th>
        <th>No HP</th>
        <th>Alamat</th>
    </tr>

    @foreach($dosens as $dosen)
    <tr>
        <td>{{ $dosen->kode_dosen }}</td>
        <td>{{ $dosen->user->name }}</td>
        <td>{{ $dosen->user->email }}</td>
        <td>{{ $dosen->user->no_hp }}</td>
        <td>{{ $dosen->user->alamat }}</td>
    </tr>
    @endforeach
</table>
