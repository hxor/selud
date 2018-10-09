<div class="row">
    <div class="col-md-12">
        {!! Form::model($model, [
            'route' => $model->exists ? ['admin.larugi.detail.update', $larugi->id, $model->id] : ['admin.larugi.detail.store', $larugi->id],
            'method' => $model->exists ? 'PUT' : 'POST'
        ]) !!}

            <div class="form-group{{ $errors->has('rekening3_id') ? ' has-error' : '' }}">
                {!! Form::label('rekening3_id', 'Rekening 3') !!}
                {!! Form::select('rekening3_id', $rekening3, null, ['id' => 'rekening3_id', 'class' => 'form-control', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('rekening3_id') }}</small>
            </div>

            <div class="form-group{{ $errors->has('nilai') ? ' has-error' : '' }}">
                {!! Form::label('nilai', 'Nilai Rekening') !!}
                {!! Form::number('nilai', null, ['id' => 'nilai', 'class' => 'form-control', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('nilai') }}</small>
            </div>

        {!! Form::close() !!}
    </div>
</div>
