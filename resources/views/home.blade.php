<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-5">
    <h3 class="fw-bold mb-5 text-center">Dashboard</h3>
    <div class="d-flex flex-wrap justify-content-center gap-4">
        <div class="card text-center shadow-sm" style="width: 250px; cursor: pointer;"
            onclick="window.location='{{ route('hospitals.index') }}'">
            <div class="card-body py-4">
                <div class="display-4">🏥</div>
                <h5 class="card-title mt-3">Data Rumah Sakit</h5>
            </div>
        </div>
        <div class="card text-center shadow-sm" style="width: 250px; cursor: pointer;"
            onclick="window.location='{{ route('patients.index') }}'">
            <div class="card-body py-4">
                <div class="display-4">👤</div>
                <h5 class="card-title mt-3">Data Pasien</h5>
            </div>
        </div>
    </div>
</div>

<style>
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        transition: all 0.3s ease;
    }
</style>