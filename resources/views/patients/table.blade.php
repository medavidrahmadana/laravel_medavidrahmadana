@foreach($data as $p)
<tr>
    <td>{{ $p->nama }}</td>
    <td>{{ $p->alamat }}</td>
    <td>{{ $p->telepon }}</td>
    <td>{{ $p->hospital->nama ?? '-' }}</td>
    <td>
        <button class="btn btn-danger btn-sm delete" data-id="{{ $p->id }}">
            Hapus
        </button>
    </td>
</tr>
@endforeach