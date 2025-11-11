<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-4">
    <h3 class="text-center mb-4">Data Pasien</h3>
    <div class="mb-3 w-50 mx-auto">
        <select id="hospital" class="form-select">
            <option value="">Semua</option>
            @foreach($hospitals as $h)
            <option value="{{ $h->id }}">{{ $h->nama }}</option>
            @endforeach
        </select>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">

            <table id="tbl" class="table table-bordered table-striped text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Nama Pasien</th>
                        <th>Alamat</th>
                        <th>No Telp</th>
                        <th>Rumah Sakit</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                @include('patients.table')
            </table>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    // FILTER DROPDOWN
    $("#hospital").change(function() {
        loadData($(this).val());
    });

    function loadData(id) {
        $.ajax({
            url: "/patients",
            type: "GET",
            data: {
                hospital_id: id
            },
            success: function(res) {
                $("#tbl tbody").html(res);
            }
        });
    }

    $(document).on("click", ".delete", function() {
        let id = $(this).data("id");

        if (!confirm("Yakin hapus data ini?")) return;

        $.ajax({
            url: "/patients",
            type: "DELETE",
            data: {
                id: id,
                _token: "{{ csrf_token() }}"
            },
            success: function() {
                loadData($("#hospital").val());
            }
        });
    });
</script>