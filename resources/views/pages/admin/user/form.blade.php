<div class="row">
    <div class="col-md-12">
        {!! Form::model($model, [
            'route' => $model->exists ? ['admin.user.update', $model->id] : 'admin.user.store',
            'method' => $model->exists ? 'PUT' : 'POST'
        ]) !!}

           <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                {!! Form::label('name', 'Nama Lengkap') !!}
                {!! Form::text('name', null, ['id' => 'name', 'class' => 'form-control', 'required' => 'required', 'autofocus']) !!}
                <small class="text-danger">{{ $errors->first('name') }}</small>
            </div>

            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                {!! Form::label('username', 'Username') !!}
                {!! Form::text('username', null, ['id' => 'username', 'class' => 'form-control', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('username') }}</small>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                {!! Form::label('email', 'Email address') !!}
                {!! Form::email('email', null, ['id' => 'email', 'class' => 'form-control', 'required' => 'required', 'placeholder' => 'eg: foo@bar.com']) !!}
                <small class="text-danger">{{ $errors->first('email') }}</small>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                {!! Form::label('password', 'Password') !!}
                {!! Form::password('password', ['id' => 'password', 'class' => 'form-control']) !!}
                <small class="text-danger">{{ $errors->first('password') }}</small>
            </div>

            <div class="form-group{{ $errors->has('role_id') ? ' has-error' : '' }}">
                {!! Form::label('role_id', 'Jenis Pengguna') !!}
                {!! Form::select('role_id', $role, null, ['id' => 'role_id', 'class' => 'form-control', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('role_id') }}</small>
            </div>

            <div class="form-group{{ $errors->has('bumd_id') ? ' has-error' : '' }}">
                {!! Form::label('bumd_id', 'BUMD') !!}
                {!! Form::select('bumd_id', ['' => '-'] + $bumd, null, ['id' => 'bumd_id', 'class' => 'form-control', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('bumd_id') }}</small>
            </div>

        {!! Form::close() !!}
    </div>
</div>
