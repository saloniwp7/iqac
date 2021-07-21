@extends("layouts.admin")

@section("content")
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5>{{ $staff[0]->name }}</h5>
            </div>
            <div class="card-body">
                <form action="/admin/generate-report/create" method="POST">
                    @csrf
                    <input type="hidden" name="staffId" value="{{ $staff[0]->userId }}" />
                    <div class="row">
                        <div class="col-md-2 custom-control custom-checkbox mb-2">
                            <input type="checkbox" class="custom-control-input" id="customCheck1" name="achivements" value="achivements">
                            <label class="custom-control-label" for="customCheck1" >Staff Achivements</label>
                        </div>
                        <div class="col-md-2 custom-control custom-checkbox mb-2">
                            <input type="checkbox" class="custom-control-input" id="customCheck2" name="association_programs" value="association_programs">
                            <label class="custom-control-label" for="customCheck2">Association Program</label>
                        </div>
                        <div class="col-md-2 custom-control custom-checkbox mb-2">
                            <input type="checkbox" class="custom-control-input" id="customCheck3" name="fdp_meetings" value="fdp_meetings">
                            <label class="custom-control-label" for="customCheck3">FDP Meeting</label>
                        </div>
                        <div class="col-md-2 custom-control custom-checkbox mb-2">
                            <input type="checkbox" class="custom-control-input" id="customCheck4" name="papers" value="papers">
                            <label class="custom-control-label" for="customCheck4">Papers Presented</label>
                        </div>
                        <div class="col-md-2 custom-control custom-checkbox mb-2">
                            <input type="checkbox" class="custom-control-input" id="customCheck5" name="seminar_organiseds" value="seminar_organiseds">
                            <label class="custom-control-label" for="customCheck5">Seminar Organised</label>
                        </div>
                        <div class="col-md-2 custom-control custom-checkbox mb-2">
                            <input type="checkbox" class="custom-control-input" id="customCheck6" name="seminar_attendeds" value="seminar_attendeds">
                            <label class="custom-control-label" for="customCheck6">Seminar Attended</label>
                        </div>
                        <div class="col-md-2 custom-control custom-checkbox mb-2">
                            <input type="checkbox" class="custom-control-input" id="customCheck7" name="publications" value="publications">
                            <label class="custom-control-label" for="customCheck7">Publication</label>
                        </div>
                    </div>
                    <button class="btn btn-danger">Generate Report</button>
                </form>
            </div>
        </div>
    </div>
@endsection