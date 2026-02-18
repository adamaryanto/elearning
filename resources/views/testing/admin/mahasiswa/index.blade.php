<h2>Data Mahasiswa</h2>

<a href="{{ route('admin.mahasiswa.create') }}">Tambah Mahasiswa</a>

<table border="1">
<tr>
    <th>Nama</th>
    <th>NIM</th>
    <th>Kelas</th>
</tr>

@foreach($mahasiswas as $mhs)
<tr>
    <td>{{ $mhs->user->name }}</td>
    <td>{{ $mhs->nim }}</td>
    <td>{{ $mhs->kelas->nama_kelas }}</td>
</tr>
@endforeach

</table>
