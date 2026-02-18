<h2>Data Kelas</h2>

<a href="{{ route('admin.kelas.create') }}">Tambah Kelas</a>

<table border="1">
<tr>
    <th>Nama</th>
    <th>Semester</th>
    <th>Prodi</th>
</tr>

@foreach($kelas as $k)
<tr>
    <td>{{ $k->nama_kelas }}</td>
    <td>{{ $k->semester }}</td>
    <td>{{ $k->prodi->nama_prodi }}</td>
</tr>
@endforeach

</table>
