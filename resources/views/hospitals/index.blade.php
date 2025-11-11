<table id="tbl" border="1">
    @foreach ($data as $d)
    <tr>
        <td>{{ $d->nama }}</td>
        <td>
            <button onclick="del({{ $d->id }})">Delete</button>
        </td>
    </tr>
    @endforeach
</table>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    function del(id) {
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