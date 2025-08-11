@extends('BackEnd.master')

@section('title')
	member Info
@endsection

@section('title')
   member Info
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
                            <h1>Member Update Info</h1>
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
                    <form action="{{ route('update.registration', $signup->id) }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="REGISTRATION_NO" class="block text-sm font-medium text-gray-700">Registration Number</label>
                        <input type="text" name="REGISTRATION_NO" id="REGISTRATION_NO"
                            value="{{ old('REGISTRATION_NO', $signup->REGISTRATION_NO) }}"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">

                    </div>

                    <div class="flex justify-between">
                        <a href="{{  url('/member-pending-info') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Back</a>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
                    </div>
                </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
