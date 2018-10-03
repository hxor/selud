<table class="table table-hover">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Telepon</th>
        <th>E-Mail</th>
        <th>Alamat</th>
    </tr>
    <tr>
        <td>{{ $model->id }}</td>
        <td>{{ $model->nama }}</td>
        <td>{{ $model->telepon }}</td>
        <td>{{ $model->email }}</td>
        <td>{{ $model->alamat }}</td>
    </tr>
</table>
