<div class="row">
    <div class="col-md-12">
        {!! Form::model($model, [
            'route' => $model->exists ? ['admin.rekening-1.update', $model->id] : 'admin.rekening-1.store',
            'method' => $model->exists ? 'PUT' : 'POST'
        ]) !!}

            <div class="form-group{{ $errors->has('kode') ? ' has-error' : '' }}">
                {!! Form::label('kode', 'Kode Rekening') !!}
                {!! Form::text('kode', null, ['id' => 'kode', 'class' => 'form-control', 'required' => 'required', 'autofocus']) !!}
                <small class="text-danger">{{ $errors->first('kode') }}</small>
            </div>

            <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                {!! Form::label('nama', 'Nama Rekening') !!}
                {!! Form::text('nama', null, ['id' => 'nama', 'class' => 'form-control', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('nama') }}</small>
            </div>

        {!! Form::close() !!}
    </div>
</div>
