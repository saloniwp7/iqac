@extends("layouts.empty")

@section("content")
<div class="container-fluid">                
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="invoice-title">
                                <span class="mt-0 float-right font-14">Date: 12-Sept-2020</span>
                                <div class="mb-4">
                                    Staff Report
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-6">
                                    <span class="font-14"> 
                                        <strong>{{ $profile[0]->name }}</strong> <br>
                                        {{ $profile[0]->dob }} <br>
                                        {{ $profile[0]->phoneNumber }} <br>
                                        {{ $profile[0]->department }} <br>
                                    </span>
                                </div> 
                            </div> 
                        </div>
                    </div> 
                    <hr>
                    <div class="row">
                        @foreach($staffData as $key=>$data)  
                            <div class="col-md-12"> 
                                @if($key == 'achivements' and count($data) > 0)
                                    <h6 class="text-capitalize"><strong>{{ $value_arr[$key] }}<strong></h6>
                                    <table class="table" style="font-size: 14px;">
                                        <tr>
                                            <th>Sl No</th>
                                            <th>Name</th>
                                            <th>Department</th>
                                            <th>Date</th>
                                            <th>Achivement</th>
                                            <th>Place</th>
                                            <th>Organisation</th>
                                            <th>Nature</th>
                                            <th>Level</th>
                                            <th>Guided By</th>
                                        </tr>
                                        @foreach($data as $k=>$a)
                                            <tr>
                                                <td>{{ $k+1 }}</td>
                                                <td>{{ $a->name }}</td>
                                                <td>{{ $a->dept }}</td>
                                                <td>{{ $a->achive }}</td>
                                                <td>{{ $a->place }}</td>
                                                <td>{{ $a->organisation }}</td>
                                                <td>{{ $a->nature }}</td>
                                                <td>{{ $a->date }}</td>
                                                <td>{{ $a->level }}</td> 
                                                <td>{{ $a->guidedBy }}</td> 
                                            </tr>
                                        @endforeach
                                    </table>
                                    <hr>
                                @endif
                            </div> 
                            <div class="col-md-12">
                                @if($key == 'association_programs' and count($data) > 0)
                                    <h6 class="text-capitalize"><strong>{{ $value_arr[$key] }}<strong></h6>
                                    <table class="table w-100" style="font-size: 14px;">
                                        <tr>
                                            <th>Sl No</th>
                                            <th>Name</th>
                                            <th>Count(Students)</th>
                                            <th>Date</th>
                                            <th>Guest</th>
                                            <th>Place</th>
                                            <th>Nature</th>
                                            <th>Level</th>  
                                        </tr>
                                        @foreach($data as $k=>$prg)
                                            <tr>
                                                <td>{{ $k+1 }}</td>
                                                <td>{{ $prg->name }}</td>
                                                <td>{{ $prg->NumberOfStudents }}</td>
                                                <td>{{ $prg->date }}</td>
                                                <td>{{ $prg->guest }}</td>
                                                <td>{{ $prg->place }}</td>
                                                <td>{{ $prg->nature }}</td>
                                                <td>{{ $prg->level }}</td> 
                                            </tr>
                                        @endforeach
                                    </table>
                                    <hr>
                                @endif
                            </div>  
                            <div class="col-md-12"> 
                                @if($key == 'fdp_meetings' and count($data) > 0)
                                    <h6 class="text-capitalize"><strong>{{ $value_arr[$key] }}<strong></h6>
                                    <table class="table w-100" style="font-size: 14px;">
                                        <tr>
                                            <th>Sl No</th>
                                            <th>Name</th>
                                            <th>Type of Meeting</th>
                                            <th>Duration</th>
                                            <th>Date</th>
                                            <th>Organisers</th>
                                            <th>Place</th> 
                                            <th>Department</th> 
                                            <th>Level</th>  
                                        </tr>
                                        @foreach($data as $k=>$mtg)
                                            <tr>
                                                <td>{{ $k+1 }}</td>
                                                <td>{{ $mtg->name }}</td>
                                                <td>{{ $mtg->typeOfMeeting }}</td>
                                                <td>{{ $mtg->duration }}</td>
                                                <td>{{ $mtg->date }}</td>
                                                <td>{{ $mtg->organisers }}</td>
                                                <td>{{ $mtg->place }}</td>
                                                <td>{{ $mtg->department }}</td>
                                                <td>{{ $mtg->level }}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                    <hr>
                                @endif
                            </div>  
                            <div class="col-md-12"> 
                                @if($key == 'papers' and count($data) > 0)
                                    <h6 class="text-capitalize"><strong>{{ $value_arr[$key] }}<strong></h6>
                                    <table class="table w-100" style="font-size: 14px;">
                                        <tr>
                                            <th>Sl No</th>
                                            <th>Name</th>
                                            <th>Title</th>
                                            <th>Nature</th>
                                            <th>Venue</th>
                                            <th>Prizes</th>
                                            <th>Theme</th> 
                                        </tr>
                                        @foreach($data as $k=>$p)
                                            <tr>
                                                <td>{{ $k+1 }}</td> 
                                                <td>{{ $p->name }}</td>
                                                <td>{{ $p->title }}</td>
                                                <td>{{ $p->nature }}</td>
                                                <td>{{ $p->venue }}</td>
                                                <td>{{ $p->prizes }}</td>
                                                <td>{{ $p->theme }}</td> 
                                            </tr>
                                        @endforeach
                                    </table>
                                    <hr>
                                @endif
                            </div>  
                            <div class="col-md-12"> 
                                @if($key == 'publications' and count($data) > 0)
                                    <h6 class="text-capitalize"><strong>{{ $value_arr[$key] }}<strong></h6>
                                    <table class="table w-100" style="font-size: 14px;">
                                        <tr>
                                            <th>Sl No</th>
                                            <th>Name</th> 
                                            <th>ISSN /ISBN</th> 
                                            <th>Collabration</th> 
                                        </tr>
                                        @foreach($data as $k=>$prg)
                                            <tr>
                                                <td>{{ $k+1 }}</td> 
                                                <td>{{ $prg->name }}</td>
                                                <td>{{ $prg->publication_number }}</td>
                                                <td>{{ $prg->collabration }}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                    <hr>
                                @endif
                            </div> 
                            <div class="col-md-12"> 
                                @if($key == 'seminar_organiseds' and count($data) > 0)
                                    <h6 class="text-capitalize"><strong>{{ $value_arr[$key] }}<strong></h6>
                                    <table class="table w-100" style="font-size: 14px;">
                                        <tr>
                                            <th>Sl No</th>
                                            <th>Title</th> 
                                            <th>Date</th>
                                            <th>Collab Agency</th>
                                            <th>Speaker</th>
                                            <th>Topic</th>
                                            <th>Department</th>
                                            <th>Place & Designation</th> 
                                            <th>Level</th> 
                                            <th>Beneficiaries</th> 
                                        </tr>
                                        @foreach($data as $k=>$prg)
                                            <tr>
                                                <td>{{ $k+1 }}</td> 
                                                <td>{{ $prg->title }}</td>
                                                <td>{{ $prg->date }}</td>
                                                <td>{{ $prg->collabAgency }}</td>
                                                <td>{{ $prg->speaker }}</td>
                                                <td>{{ $prg->topic }}</td>
                                                <td>{{ $prg->department }}</td> 
                                                <td>{{ $prg->placeAndDesignation }}</td> 
                                                <td>{{ $prg->level }}</td> 
                                                <td>{{ $prg->beneficiaries }}</td> 
                                            </tr>
                                        @endforeach
                                    </table>
                                    <hr>
                                @endif
                            </div>  
                            <div class="col-md-12"> 
                                @if($key == 'seminar_attendeds' and count($data) > 0)
                                    <h6 class="text-capitalize"><strong>{{ $value_arr[$key] }}<strong></h6>
                                    <table class="table w-100" style="font-size: 14px;">
                                        <tr>
                                            <th>Sl No</th>
                                            <th>Name</th> 
                                            <th>Date</th>
                                            <th>Prize</th>
                                            <th>Place</th> 
                                            <th>Level</th> 
                                            <th>Title</th> 
                                        </tr>
                                        @foreach($data as $k=>$prg)
                                            <tr>
                                                <td>{{ $k+1 }}</td> 
                                                <td>{{ $prg->name }}</td>
                                                <td>{{ $prg->date }}</td>
                                                <td>{{ $prg->prize }}</td>
                                                <td>{{ $prg->place }}</td>
                                                <td>{{ $prg->level }}</td>
                                                <td>{{ $prg->title }}</td>  
                                            </tr>
                                        @endforeach
                                    </table>
                                    <hr>
                                @endif
                            </div> 
                        @endforeach
                    </div>
                </div>
            </div>
        </div>  
    </div> 
</div>
@endsection