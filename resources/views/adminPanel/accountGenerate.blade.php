@extends('adminPanel.include')
@section('calculasTitle') Generate Report {{ date('d-M-Y') }} @endsection
<style type="text/css">
    .table>:not(caption)>*>* {
        padding: .3rem 0 !important;
        padding-left: 1rem !important;
    }
</style>
@section('calculasBody')
<div class="row align-items-center v-100">
    <div class="col-6">
    </div>
    @if(isset($data))
    <div class="row">
        <div class="col-8 mx-auto text-center">
            <button class="btn btn-warning btn-sm noprint mx-auto" onclick="window.print()"><i class="fas fa-print"></i> Print</button>
            <a class="btn btn-success btn-sm noprint mx-auto" href="{{ route('accountCreation') }}"><i class="fas fa-plus"></i> Add New</a>
            <a href="{{ route('acList') }}" class="btn btn-primary btn-sm noprint mx-auto"><i class="fas fa-users"></i> Account List</a>
            <a href="{{ route('acEdit',['id'=>$data->id]) }}" class="btn btn-sm btn-success noprint mx-auto" title="Edit Data"><i class="fa-solid fa-file-pen"></i> Edit Data</a>
        </div>
    </div>
    <div class="row" id="printArea">
        <div class="col-12 col-md-7 mx-auto my-2">
            <div class="card">
                <div class="card-header fw-bold">Account Details</div>
                
                <div class="">
                    <table class="table table-bordered">
                        <tbody>
                            @if(isset($data))
                                <tr>
                                    <th scope="row">A/C Name</th>
                                    <td>{{ $data->acName }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">A/C Number</th>
                                    <td>{{ $data->acNumber }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Type of Account</th>
                                    <td>{{ $data->acType }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Mobile Number</th>
                                    <td>{{ $data->acMobile }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">A/C Finger</th>
                                    <td>{{ $data->acFinger }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Branch</th>
                                    <td>AB Jhawtala SME/Krishi</td>
                                </tr>
                                <tr>
                                    <th scope="row">District</th>
                                    <td>Cumilla</td>
                                </tr>
                                <tr>
                                    <th scope="row">Routing Number</th>
                                    <td>090191161</td>
                                </tr>
                                <tr>
                                    <th scope="row">SWIFT</th>
                                    <td>DBBLBDDH</td>
                                </tr>
                                <tr>
                                    <th scope="row">Outlet Code</th>
                                    <td>A94002</td>
                                </tr>
                                <tr>
                                    <th scope="row">Outlet Name</th>
                                    <td>Virtual IT Professional</td>
                                </tr>
                                <tr>
                                    <td scope="row" colspan="2" class="text-success fw-bold">Contact: Burichong AB, Cumilla. Mobile: 01784-989898</td>
                                </tr>
                            @else
                            <tr>
                                <td colspan="5">Sorry! No data found</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="col-12 col-md-10 mx-auto my-2">
        <div class="card">
            <div class="card-body">
                <div class="alert alert-info">Sorry! No data found with your query</div>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection