<div class="row">
    <div class="col-md-12">
        {!! Form::model($model, [
            'route' => $model->exists ? ['admin.pajak.update', $model->id] : 'admin.pajak.store',
            'method' => $model->exists ? 'PUT' : 'POST'
        ]) !!}

            <div class="form-group{{ $errors->has('tanggal') ? ' has-error' : '' }}">
                {!! Form::label('tanggal', 'Tanggal') !!}
                <div class="input-group">
                    {!! Form::text('tanggal', null, ['id' => 'tanggal', 'class' => 'form-control datepicker', 'required' => 'required', 'autofocus']) !!}
                    <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                </div>
                <small class="text-danger">{{ $errors->first('tanggal') }}</small>
            </div>

            <div class="form-group{{ $errors->has('nilai') ? ' has-error' : '' }}">
                {!! Form::label('nilai', 'Nilai Pajak') !!}
                {!! Form::number('nilai', null, ['id' => 'nilai', 'class' => 'form-control', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('nilai') }}</small>
            </div>

            <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                {!! Form::label('status', 'Telepon') !!}
                {!! Form::select('status', [0 => 'Tidak Digunakan', 1 => 'Digunakan'],null, ['id' => 'status', 'class' => 'form-control', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('status') }}</small>
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
