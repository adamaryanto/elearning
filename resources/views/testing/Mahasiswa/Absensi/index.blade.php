<h2>Daftar Jadwal</h2>

@foreach($jadwals as $jadwal)

    @php
        $session = \App\Models\AbsensiSession::where('jadwal_id', $jadwal->id)
            ->whereDate('tanggal', now()->toDateString())
            ->first();
    @endphp

    <div style="border:1px solid #ccc; padding:15px; margin-bottom:10px;">

        <h4>{{ $jadwal->mata_kuliah }}</h4>
        <p>Hari: {{ $jadwal->hari }}</p>
        <p>Jam: {{ $jadwal->jam_mulai }} - {{ $jadwal->jam_selesai }}</p>

        @if(!$session)
            <span style="color:gray;">Belum Dibuka</span>

        @elseif(now()->format('H:i:s') < $session->jam_buka)
            <span style="color:orange;">Belum Mulai</span>

        @elseif(now()->format('H:i:s') > $session->jam_tutup)
            <span style="color:red;">Sudah Ditutup</span>

        @else
            <form action="{{ route('mahasiswa.absen.store') }}" method="POST">
                @csrf
                <input type="hidden" name="jadwal_id" value="{{ $jadwal->id }}">
                <input type="hidden" name="tanggal" value="{{ now()->toDateString() }}">
                <button type="submit">Absen Sekarang</button>
            </form>
        @endif

    </div>

@endforeach
