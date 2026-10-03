<div class="card">
    <h3>{{ $laporan['lokasi'] }}</h3>
    <p><strong>Pelapor:</strong> {{ $laporan['nama'] }}</p>
    <p><strong>Tinggi Genangan:</strong> {{ $laporan['tinggi'] }} cm</p>

    @if($laporan['tinggi'] < 30)
        <p>Status: <strong style="color:green;">Waspada</strong></p>
    @elseif($laporan['tinggi'] <= 70)
        <p>Status: <strong style="color:orange;">Siaga</strong></p>
    @else
        <p>Status: <strong style="color:red;">Awas</strong></p>
    @endif
</div>