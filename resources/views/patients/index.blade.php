<select id="hospital">
    <option value="">Semua</option>
    @foreach($hospitals as $h)
    <option value="{{ $h->id }}">{{ $h->nama }}</option>
    @endforeach
</select>

<table border="1" id="tbl">
    <thead>
        <tr>
            <th>Nama Pasien</th>
            <th>Alamat</th>
            <th>No Telp</th>
            <th>Rumah Sakit</th>
            <th>Aksi</th>
        </tr>
    </thead>

    {{-- load awal --}}
    @include('patients.table')
</table>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
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

    // DELETE
    $(document).on("click", ".delete", function() {
        let id = $(this).data("id");

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