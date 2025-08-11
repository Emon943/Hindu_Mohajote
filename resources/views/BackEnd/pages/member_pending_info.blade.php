@extends('BackEnd.master')

@section('title')
	member Pending Info
@endsection

@section('title')
   member Pending Info
@endsection

@section('wanthelp')
    active-link
@endsection


@section('main_content')
			<div id="page-content-wrapper">
                <div class="page-content">
                    <section class="content-header">
                        <div class="header-icon">
                            <i class="material-icons">people_outline</i>
                        </div>
                        <div class="header-title">
                            <h1>Member Pending Info</h1>
                        </div>
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                    </section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="info">
                                              <table class="table table-bordered">
    <thead>
      <tr>
        											<th>Reg. Date</th>
        											<th>Reg. No.</th>
                                                    <th>Name</th>
        											<th>Email</th>
        											<th>Reference ID</th>
        											<th>Phone Number</th>
                                                    <th>Occupation</th>
        											<th>Member Type</th>

        											<th>District</th>
        											<th>Thana</th>
        											<th class="text-center">Action</th>
      </tr>
    </thead>
    <tbody>
     @foreach($PENDING as $pend)
											    <tr>
      												<td>
        												{{ date('d-m-Y', strtotime($pend->created_at)) }}
		      												
      												</td>
      												<td>{{$pend->REGISTRATION_NO}}</td>
                                                    <td>{{$pend->NAME}}</td>
      												<td>{{$pend->EMAIL}}</td>
      												<td>{{$pend->REFERENCE_ID}}</td>
      												<td>{{$pend->TELEPHONE}}</td>
      												<td>{{$pend->DESIGNATION}}</td>
      												<td>
        												@if($pend->MeMBER_TYPE == 1)
        													General
        												@elseif($pend->MeMBER_TYPE == 2)
        													Youth
        												@elseif($pend->MeMBER_TYPE == 3)
        													Student
        												@elseif($pend->MeMBER_TYPE == 4)
        													Female
        												@endif
        											</td>
      												<td>{{$pend->DISTRICT}}</td>
      												<td>{{$pend->THANA}}</td>
      												<td class="text-center">
													<a id="pend_ind" href="{{ route('pending.check', $pend->id) }}" data-toggle="tooltip" title="Send to Aproved"><i style="font-size: 20px" class="glyphicon glyphicon-ok"></i></a>
                                                    <a id="pend_show" href="{{ route('view.member_info', $pend->id) }}" data-toggle="tooltip" title="Send to View"><i style="font-size: 20px" class="glyphicon glyphicon-eye-open"></i></a>
                                                    <a id="pend_edit" href="{{ route('edit.member_update', $pend->id) }}" data-toggle="tooltip" title="Send to Edit"><i style="font-size: 20px" class="glyphicon glyphicon-pencil"></i></a>
    

        											</td>
      											</tr>
                                                @endforeach
    </tbody>
  </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
