<div class="row">
    <div class="col-md-12">
        {!! Form::model($model, [
            'route' => $model->exists ? ['admin.rekening-3.update', $model->id] : 'admin.rekening-3.store',
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

            <div class="form-group{{ $errors->has('rekening2_id') ? ' has-error' : '' }}">
                {!! Form::label('rekening2_id', 'Rekening 2') !!}
                {!! Form::select('rekening2_id', $rekening2, null, ['id' => 'rekening2_id', 'class' => 'form-control', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('rekening2_id') }}</small>
            </div>

            <div class="form-group{{ $errors->has('bumd_id') ? ' has-error' : '' }}">
                {!! Form::label('bumd_id', 'BUMD') !!}
                {!! Form::select('bumd_id', $bumd, null, ['id' => 'rekening2_id', 'class' => 'form-control', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('bumd_id') }}</small>
            </div>

        {!! Form::close() !!}
    </div>
</div>
