<table class="table table-hover">
    <tr>
        <th>ID</th>
        <th>Kode Rekening</th>
        <th>Nama Rekening</th>
        <th>Nilai</th>
    </tr>
    <tr>
        <td>{{ $model->id }}</td>
        <td>{{ $model->parent->bumd->id.'.'.$model->rekening2->kode.'.'.$model->rekening3->kode }}</td>
        <td>{{ $model->rekening3->nama }}</td>
        <td>{{ $model->nilai }}</td>
    </tr>
</table>
