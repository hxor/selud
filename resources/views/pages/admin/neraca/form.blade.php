<div class="row">
    <div class="col-md-12">
        {!! Form::model($model, [
            'route' => $model->exists ? ['admin.neraca.update', $model->id] : 'admin.neraca.store',
            'method' => $model->exists ? 'PUT' : 'POST'
        ]) !!}

            <div class="form-group{{ $errors->has('judul') ? ' has-error' : '' }}">
                {!! Form::label('judul', 'Judul') !!}
                {!! Form::text('judul', null, ['id' => 'judul', 'class' => 'form-control', 'required' => 'required', 'autofocus']) !!}
                <small class="text-danger">{{ $errors->first('judul') }}</small>
            </div>

            <div class="form-group{{ $errors->has('tanggal') ? ' has-error' : '' }}">
                {!! Form::label('tanggal', 'Tanggal') !!}
                <div class="input-group">
                    {!! Form::text('tanggal', null, ['id' => 'tanggal', 'class' => 'form-control datepicker', 'required' => 'required']) !!}
                    <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                </div>
                <small class="text-danger">{{ $errors->first('tanggal') }}</small>
            </div>

            <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                {!! Form::label('status', 'Status') !!}
                {!! Form::select('status', [0 => 'Belum Selesai', 1 => 'Selesai'],null, ['id' => 'status', 'class' => 'form-control', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('status') }}</small>
            </div>

            <div class="form-group{{ $errors->has('bumd_id') ? ' has-error' : '' }}">
                {!! Form::label('bumd_id', 'BUMD') !!}
                {!! Form::select('bumd_id', $bumd, null, ['id' => 'bumd_id', 'class' => 'form-control', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('bumd_id') }}</small>
            </div>

        {!! Form::close() !!}
    </div>
</div>

<script>
    $('.datepicker').datepicker({
        format: "yyyy-mm-dd",
        autoclose: true,
        todayHighlight: true
    });
</script>
