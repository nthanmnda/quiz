<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   @if(session('success')) <script> alert("{{ session('success') }}"); </script>@endif 
   @if(session('error')) <script> alert("{{ session('error') }}"); </script> @endif

    <a href="{{ url('/tambah-informasi') }}">
        Tambah Informasi
    </a>
    <br></br>
    <table border="1"> 
        <tr>
            <th>Kategori</th>
            <th>Judul</th>
            <th>Ringkasan</th>
            <th>Isi</th>
            <th>Sumber</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        @foreach ($informasis as $informasi)
        <tr>
            <td>{{$informasi->kategori->nama}}</td>
            <td>{{$informasi->judul}}</td>
            <td>{{$informasi->ringkasan}}</td>
            <td>{{$informasi->isi}}</td>
            <td>{{$informasi->sumber}}</td>
            <td>{{$informasi->status}}</td>
            <td>
                <form method="POST" action="{{ route('informasi.hapus', $informasi) }}" 
                onsubmit="return confirm('Apakah Anda yakin ingin menghapus informasi {{ $informasi->nama }}?');"> 
                @method('DELETE') @csrf <input type="submit" value="Hapus"/> </form><a href="{{ route('informasi.ubah', $informasi)}}">[UBAH]</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>