@extends('template.template')
@section('content')
<div class="my-3 p-3 bg-body rounded shadow-sm">
        <!-- FORM PENCARIAN -->
        <div class="pb-3">
        <form class="d-flex" action="" method="get">
            <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
            <button class="btn btn-secondary" type="submit">Cari</button>
        </form>
        </div>
        
        <!-- TOMBOL TAMBAH DATA -->
        <div class="pb-3">
        <a href='' class="btn btn-primary">+ Tambah Data</a>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th >NO</th>
                    <th >PROJECT NAME</th>
                    <th >CLIENT</th>
                    <th >PROJECT LEADER</th>
                    <th >START DATE</th>
                    <th >END DATE</th>
                    <th >PROGRESS</th>
                    <th >ACTION</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>LMS</td>
                    <td>Ani</td>
                    <td>
                        <div class="d-flex">
                            <div>
                                <p>foto</p>
                            </div>
                            <div>
                                <p>nama</p>
                                <p>email</p>
                            </div>
                        </div>
                    </td>
                    <td>01 11 2001</td>
                    <td>09 12 2002</td>
                    <td>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 25%">25%</div>
                        </div>
                    </td>
                    <td>
                        <a href='' class="btn btn-warning btn-sm">Edit</a>
                        <a href='' class="btn btn-danger btn-sm">Del</a>
                    </td>
                </tr>
            </tbody>
        </table>
</div>
@endsection