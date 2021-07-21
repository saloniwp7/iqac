@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="d-flex" style="justify-content: space-between; align-items: center;">
        <h4>Staff Association Program</h4>
        <div>
            <a href="/admin/staffActivity/{{ $staffId }}/association/create" class="btn btn-primary" data-toggle="tooltip" data-original-title="Add Association" >
                <span class="btn-inner--icon"><i class="ti-plus"></i></span> 
            </a>
            <a href="/admin/staffActivity/1" class="btn btn-info"><i class="ti-angle-double-left text-white"></i></a>
        </div>
    </div>
    @if(count($programs) == 0)
        <div class="text-center" style="align-items: center;">
            <h5>No Association Program Found</h5>
            <a class="btn btn-danger text-white" href="/admin/staffActivity/{{ $staffId }}/association/create">Add Association Program</a>
        </div> 
    @else 
        <table class="table table-bordered mb-0" style="font-size: 14px;">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Count(Students)</th>
                    <th>Date</th>
                    <th>Guest</th>
                    <th>Place</th>
                    <th>Nature</th>
                    <th>Level</th> 
                    <th>Action</th> 
                </tr>
            </thead>
            <tbody>
                @foreach($programs as $key=>$prg)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $prg->name }}</td>
                        <td>{{ $prg->NumberOfStudents }}</td>
                        <td>{{ $prg->date }}</td>
                        <td>{{ $prg->guest }}</td>
                        <td>{{ $prg->place }}</td>
                        <td>{{ $prg->nature }}</td>
                        <td>{{ $prg->level }}</td>
                        <td class="d-flex jes-sp" >
                            <a href="/admin/staffActivity/{{$staffId}}/association/{{ $prg->id}}" data-toggle="tooltip" data-original-title="Edit Program" >
                                <span class="btn-inner--icon"><i class="ti-pencil"></i></span> 
                            </a>
                            <a href="/admin/staffActivity/{{$staffId}}/association/delete/{{ $prg->id}}" data-toggle="tooltip" data-original-title="Delete Program" >
                                <span class="btn-inner--icon"><i class="ti-close"></i></span> 
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>    
    @endif
</div>
@endsection