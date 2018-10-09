@extends('layouts.app')

@push('styles')

@endpush

@section('content')
<div class="container">

    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="page-title">Neraca Detail</h4>
            <ol class="breadcrumb">
                <li>
                    <a href="#">Admin</a>
                </li>
                <li>
                    <a href="#">Pages</a>
                </li>
                <li class="active">
                    Neraca Detail
                </li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-border panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                    Neraca : {{ $neraca->bumd->nama }}
                    </h3>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered m-0">
                        <thead>
                            <tr>
                                <td style="vertical-align: top; text-align: center;">
                                    <b>No. Rekening</b>
                                </td>
                                <td style="vertical-align: top; text-align: center;">
                                    <b>Nama Account</b>
                                </td>
                                <td style="vertical-align: top; text-align: center;">
                                    <b>Bulan Lalu</b>
                                </td>
                                <td style="vertical-align: top; text-align: center;">
                                    <b>Bulan Ini</b>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $total = [];
                                $lastTotal = [];
                                $no = -1;
                            @endphp
                            @foreach ($rekening2 as $row)
                            @php $no++; @endphp
                            <tr>
                                <td style="vertical-align: top; text-align: center;">
                                    <b>{{ $row->rekening2->kode }}</b>
                                </td>
                                <td style="vertical-align: top;">
                                    <b>{{ $row->rekening2->nama }}</b>
                                </td>
                                <td style="vertical-align: top; text-align: right;"><br>
                                </td>
                                <td style="vertical-align: top; text-align: right;"><br>
                                </td>
                            </tr>

                            @php
                                $jumlah = 0;
                                $lastJumlah = 0;
                                $lastNeracaDetail = 0;
                            @endphp
                                @foreach (\App\Models\NeracaDetail::where('rekening2_id', $row->rekening2->id)->where('neraca_id', $neraca->id)->get() as $rekening)
                                <tr>
                                    <td style="vertical-align: top; text-align: center;">
                                        {{ $rekening->parent->bumd->id . '.' . $rekening->rekening2->kode . '.' . $rekening->rekening3->kode }}
                                    </td>
                                    <td style="vertical-align: top;">
                                        {{ $rekening->rekening3->nama }}
                                    </td>
                                    <td style="vertical-align: top; text-align: right;">
                                        @if ($lastNeraca)
                                            Rp{{ number_format($lastNeracaDetail = $lastNeraca->detail()->where('rekening3_id', $rekening->rekening3_id)->first()->nilai, '2', ',', '.') }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td style="vertical-align: top; text-align: right;">
                                        Rp{{ number_format($rekening->nilai, '2', ',', '.') }}
                                    </td>
                                </tr>

                                @php
                                    $jumlah += $rekening->nilai;
                                    $lastJumlah += $lastNeracaDetail;
                                @endphp
                                @endforeach
                            <tr>
                                <td style="vertical-align: top; text-align: center;">

                                </td>
                                <td style="vertical-align: top;">
                                    <b>Jumlah {{ $row->rekening2->nama }}</b>
                                </td>
                                <td style="vertical-align: top; text-align: right;">
                                    Rp{{ number_format($lastJumlah, '2', ',', '.') }}
                                </td>
                                <td style="vertical-align: top; text-align: right;">
                                    Rp{{ number_format($jumlah, '2', ',', '.') }}
                                </td>
                            </tr>

                            @php
                                array_push($total, $jumlah);
                                array_push($lastTotal, $lastJumlah);
                            @endphp

                            @if ($no == 1)
                                <tr>
                                    <td style="vertical-align: top; text-align: center;">
                                        -
                                    </td>
                                    <td style="vertical-align: top;">
                                        <b>Jumlah Asset</b>
                                    </td>
                                    <td style="vertical-align: top; text-align: right;">
                                        <b>Rp{{ number_format($lastTotal[0] + $lastTotal[1], '2', ',', '.') }}</b>
                                    </td>
                                    <td style="vertical-align: top; text-align: right;">
                                        <b>Rp{{ number_format($total[0] + $total[1], '2', ',', '.') }}</b>
                                    </td>
                                </tr>
                            @endif

                            @if ($no == 4)
                                <tr>
                                    <td style="vertical-align: top; text-align: center;">
                                        -
                                    </td>
                                    <td style="vertical-align: top;">
                                        <b>Jumlah Kewajiban dan Ekuitas</b>
                                    </td>
                                    <td style="vertical-align: top; text-align: right;">
                                        <b>Rp{{ number_format($lastTotal[2] + $lastTotal[3] + $lastTotal[4], '2', ',', '.') }}</b>
                                    </td>
                                    <td style="vertical-align: top; text-align: right;">
                                        <b>Rp{{ number_format($total[2] + $total[3] + $total[4], '2', ',', '.') }}</b>
                                    </td>
                                </tr>
                            @endif

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div> <!-- container -->
@endsection

@push('scripts')

@endpush
