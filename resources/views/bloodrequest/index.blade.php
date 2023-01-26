@extends('layouts.backend.app')
@section('content')
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="card new-table mt-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="card-title" style="color:rgba(0, 0, 0, 0.5)">Requested For Blood</h4>
                        </div>
                        
                    </div>

                    <div class="">
                        <table id="customTable" class="table table-striped table-bordered " style="width:100%">
                            <thead>
                                <tr>
                                    <th >SL</th>
                                    <th >Name</th>
                                    <th >Phone</th>
                                    <th >Patient Age</th>
                                    <th >Patient Problem</th>
                                    <th >Hospital Name</th>
                                    <th >Area</th>
                                    <th >District</th>
                                    <th >Date of Blood Donation</th>
                                    <th >Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <tr>
                                    
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <a href="" class="btn btn-success p-2"><i style="margin-left: 0.3125rem;" class="fa-solid fa-pen-to-square"></i></a>
                                    </td>
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')
<script>
    $(document).ready(function () {
        $('#customTable').DataTable();
    });
    
</script>
@endpush