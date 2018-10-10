@extends('layouts.app')

@push('styles')

    {{-- Datepicker --}}
    <link href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="container">

    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="page-title">Laporan Neraca</h4>
            <ol class="breadcrumb">
                <li>
                    <a href="#">Admin</a>
                </li>
                <li>
                    <a href="#">Pages</a>
                </li>
                <li class="active">
                    Laporan Neraca
                </li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-border panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Cari Laporan
                    </h3>
                </div>
                <div class="panel-body">
                    {!! Form::open(['route' => 'admin.neraca.report.search', 'method' => 'POST']) !!}
                        <div class="form-group{{ $errors->has('month') ? ' has-error' : '' }}">
                            {!! Form::label('month', 'Bulan') !!}
                            {!! Form::text('month', null, ['class' => 'form-control monthpicker', 'required' => 'required']) !!}
                            <small class="text-danger">{{ $errors->first('month') }}</small>
                        </div>
                        <div class="form-group{{ $errors->has('year') ? ' has-error' : '' }}">
                            {!! Form::label('year', 'Periode') !!}
                            {!! Form::text('year', null, ['class' => 'form-control yearpicker', 'required' => 'required']) !!}
                            <small class="text-danger">{{ $errors->first('year') }}</small>
                        </div>
                        <div class="form-group{{ $errors->has('bumd_id') ? ' has-error' : '' }}">
                            {!! Form::label('bumd_id', 'BUMD') !!}
                            {!! Form::select('bumd_id', $bumd, null, ['id' => 'bumd_id', 'class' => 'form-control', 'required' => 'required']) !!}
                            <small class="text-danger">{{ $errors->first('bumd_id') }}</small>
                        </div>
                        {!! Form::submit('Cari', ['class' => 'btn btn-info pull-right']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

</div> <!-- container -->
@endsection

@push('scripts')
    {{-- Datepicker --}}
    <script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>

    <script type="text/javascript">
        $('.monthpicker').datepicker({
            format: "mm",
            viewMode: "months",
            minViewMode: "months"
        });

        $('.yearpicker').datepicker({
            format: "yyyy",
            viewMode: "years",
            minViewMode: "years"
        });
    </script>
@endpush
