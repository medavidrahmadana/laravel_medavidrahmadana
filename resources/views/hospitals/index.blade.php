<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-4">
    <div class="card-body">
        <table id="tbl" class="table table-striped table-bordered text-center">
            <thead class="table-dark">
                <tr>
                    <th>Nama RS</th>
                    <th width="150px">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $d)
                <tr>
                    <td>{{ $d->nama }}</td>
                    <td>
                        <button class="btn btn-danger btn-sm" onclick="del({{ $d->id }})">
                            Hapus
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    function del(id) {
        if (!confirm("Yakin hapus data ini?")) return;

        $.ajax({
            url: "/hospitals",
            type: "DELETE",
            data: {
                id: id,
                _token: "{{ csrf_token() }}"
            },
            success: function() {
                location.reload();
            }
        });
    }
</script>