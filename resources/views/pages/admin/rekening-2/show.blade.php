<table class="table table-hover">
    <tr>
        <th>ID</th>
        <th>Kode</th>
        <th>Nama Rekening</th>
        <th>Rekening 1</th>
    </tr>
    <tr>
        <td>{{ $model->id }}</td>
        <td>{{ $model->kode }}</td>
        <td>{{ $model->nama }}</td>
        <td>{{ $model->rekening1->nama }}</td>
    </tr>
</table>
