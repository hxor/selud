<table class="table table-hover">
    <tr>
        <th>ID</th>
        <th>Judul</th>
        <th>Tanggal</th>
        <th>Status</th>
        <th>BUMD</th>
    </tr>
    <tr>
        <td>{{ $model->id }}</td>
        <td>{{ $model->judul }}</td>
        <td>{{ $model->tanggal->format('d/m/Y') }}</td>
        <td>{{ $model->status ? 'Selesai' : 'Belum Selesai' }}</td>
        <td>{{ $model->bumd->nama }}</td>
    </tr>
</table>
