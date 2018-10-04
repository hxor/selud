@extends('layouts.app')

@push('styles')

@endpush

@section('content')
<div class="container">

    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="page-title">RKAP Detail</h4>
            <ol class="breadcrumb">
                <li>
                    <a href="#">Admin</a>
                </li>
                <li>
                    <a href="#">Pages</a>
                </li>
                <li class="active">
                    RKAP Detail
                </li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-border panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                    RKAP : {{ $rkap->bumd->nama }}
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
                                    <b>Tahun Ini</b>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $arr = [];
                            @endphp
                            @foreach ($rekening2 as $row)
                            <tr>
                                <td style="vertical-align: top; text-align: center;">
                                    <b>{{ $row->rekening2->kode }}</b>
                                </td>
                                <td style="vertical-align: top;">
                                    <b>{{ $row->rekening2->nama }}</b>
                                </td>
                                <td style="vertical-align: top; text-align: right;"><br>
                                </td>
                            </tr>
                            @php
                                $jumlah = 0;
                            @endphp
                            @foreach (\App\Models\RKAPDetail::where('rekening2_id', $row->rekening2->id)->where('rkap_id', $rkap->id)->get() as $rekening)
                            <tr>
                                <td style="vertical-align: top; text-align: center;">
                                    {{ $rekening->parent->bumd->id . '.' . $rekening->rekening2->kode . '.' . $rekening->rekening3->kode }}
                                </td>
                                <td style="vertical-align: top;">
                                    {{ $rekening->rekening3->nama }}
                                </td>
                                <td style="vertical-align: top; text-align: right;">
                                    Rp{{ number_format($rekening->nilai, '2', ',', '.') }}
                                </td>
                            </tr>
                            @php
                                $jumlah += $rekening->nilai;
                            @endphp
                            @endforeach
                            <tr>
                                <td style="vertical-align: top; text-align: center;">
                                </td>
                                <td style="vertical-align: top;">
                                    <b>Jumlah {{ $row->rekening2->nama }}</b>
                                </td>
                                <td style="vertical-align: top; text-align: right;">
                                    Rp{{ number_format($jumlah, '2', ',', '.') }}
                                </td>
                            </tr>
                            @php
                                array_push($arr, $jumlah);
                            @endphp
                            @endforeach
                            <tr>
                                <td style="vertical-align: top; text-align: center;">

                                </td>
                                <td style="vertical-align: top;">
                                    <b>Laba Rugi Sebelum Pajak</b>
                                </td>
                                <td style="vertical-align: top; text-align: right;">
                                    Rp{{ number_format($laba = ($arr[0] - $arr[1]), '2', ',', '.') }}
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top; text-align: center;">

                                </td>
                                <td style="vertical-align: top;">
                                    <b>Pajak Penghasilan</b>
                                </td>
                                <td style="vertical-align: top; text-align: right;">
                                    <?php
                                        $pajak = 5;
                                        $hasilPajak = ($pajak * $laba)/100;
                                    ?>
                                    Rp{{ number_format($hasilPajak, '2', ',', '.') }}
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top; text-align: center;">

                                </td>
                                <td style="vertical-align: top;">
                                    <b>Pajak Penghasilan</b>
                                </td>
                                <td style="vertical-align: top; text-align: right;">
                                    <?php
                                        $pajak = 5;
                                        $labaPajak = ($laba-$hasilPajak);
                                    ?>
                                    Rp{{ number_format($labaPajak, '2', ',', '.') }}
                                </td>
                            </tr>
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
