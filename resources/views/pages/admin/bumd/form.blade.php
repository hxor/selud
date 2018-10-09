<div class="row">
    <div class="col-md-12">
        {!! Form::model($model, [
            'route' => $model->exists ? ['admin.bumd.update', $model->id] : 'admin.bumd.store',
            'method' => $model->exists ? 'PUT' : 'POST'
        ]) !!}

            <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                {!! Form::label('nama', 'Nama BUMD') !!}
                {!! Form::text('nama', null, ['id' => 'nama', 'class' => 'form-control', 'required' => 'required', 'autofocus']) !!}
                <small class="text-danger">{{ $errors->first('nama') }}</small>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                {!! Form::label('email', 'Email address') !!}
                {!! Form::email('email', null, ['id' => 'email', 'class' => 'form-control', 'required' => 'required', 'placeholder' => 'eg: foo@bar.com']) !!}
                <small class="text-danger">{{ $errors->first('email') }}</small>
            </div>

            <div class="form-group{{ $errors->has('telepon') ? ' has-error' : '' }}">
                {!! Form::label('telepon', 'Telepon') !!}
                {!! Form::text('telepon', null, ['id' => 'telepon', 'class' => 'form-control', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('telepon') }}</small>
            </div>

            <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                {!! Form::label('alamat', 'Alamat BUMD') !!}
                {!! Form::text('alamat', null, ['id' => 'alamat', 'class' => 'form-control', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('alamat') }}</small>
            </div>

        {!! Form::close() !!}
    </div>
</div>
