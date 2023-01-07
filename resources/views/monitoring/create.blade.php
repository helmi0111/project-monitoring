@extends('template.template')
@section('content')    
<form action='{{ url('monitoring') }}' method='post'>
    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="projectName" class="col-sm-2 col-form-label">PROJECT NAME</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='projectName' id="projectName">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="client" class="col-sm-2 col-form-label">CLIENT</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='client' id="client">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="projectLeaderName" class="col-sm-2 col-form-label">PROJECT LEADER NAME</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='projectLeaderName' id="projectLeaderName">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="projectLeaderEmail" class="col-sm-2 col-form-label">PROJECT LEADER EMAIL</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='projectLeaderEmail' id="projectLeaderEmail">
            </div>
        </div>
        <div class="input group mb-3 row">
            <label for="projectLeaderPhoto" class="col-sm-2 col-form-label">PROJECT LEADER PHOTO</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" name='projectLeaderPhoto' id="projectLeaderPhoto">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="startDate" class="col-sm-2 col-form-label">START DATE</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name='startDate' id="startDate">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="endDate" class="col-sm-2 col-form-label">END DATE</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name='endDate' id="endDate">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="progress" class="col-sm-2 col-form-label">PROGRESS (%)</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='progress' id="progress">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="saveButton" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="saveButton">SAVE</button></div>
        </div>
    </div>
</form>
@endsection