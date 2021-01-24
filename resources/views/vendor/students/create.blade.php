@extends('layouts.admin.index')

@section('title', 'Create Students')

@section('content')
<div class="row">
    <div class="col-12">
        {{-- <div class="alert alert-primary">
            // Message
        </div> --}}
        <div class="card">
            <div class="card-header">
                <h4>Add Students</h4>
            </div>
            <form action="/students" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">First Name</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" name="first_name" class="form-control" placeholder="First name">
                            <div class="invalid-feedback">
                                {{-- <p>{{ errors.name[0] }}</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Last Name</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" name="last_name" class="form-control" placeholder="Last name">
                            <div class="invalid-feedback">
                                {{-- <p>{{ errors.name[0] }}</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">NISN</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" name="nisn" class="form-control" placeholder="NISN">
                            <div class="invalid-feedback">
                                {{-- <p>{{ errors.name[0] }}</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">NIS</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" name="nis" class="form-control" placeholder="NIS">
                            <div class="invalid-feedback">
                                {{-- <p>{{ errors.name[0] }}</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Date of Birth</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="date" name="date_of_birth" class="form-control">
                            <div class="invalid-feedback">
                                {{-- <p>{{ errors.name[0] }}</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Gender</label>
                        <div class="col-sm-12 col-md-7">
                            <select class="form-control" name="gender">
                                <option value="" selected>-- Select Gender -- </option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <div class="invalid-feedback">
                                {{-- <p>{{ errors.role[0] }}</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Classroom</label>
                        <div class="col-sm-12 col-md-7">
                            <select class="form-control" name="classroom_id">
                                <option value="" selected>-- Select Classroom -- </option>
                                <option value="1">12 RPL 1</option>
                                <option value="2">12 RPl 2</option>
                            </select>
                            <div class="invalid-feedback">
                                {{-- <p>{{ errors.role[0] }}</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Phone Number</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" name="phone_number" class="form-control">
                            <div class="invalid-feedback">
                                {{-- <p>{{ errors.name[0] }}</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Address</label>
                        <div class="col-sm-12 col-md-7">
                            <textarea type="text" name="address" class="form-control"></textarea>
                            <div class="invalid-feedback">
                                {{-- <p>{{ errors.name[0] }}</p> --}}
                            </div>
                        </div>
                    </div>
                    {{-- <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Password</label>
                        <div class="col-sm-12 col-md-7">
                            <input v-bind:class="{'is-invalid': errors.password}" type="password" v-model="password" class="form-control" autocomplete="new-password" placeholder="Set an account password.">
                            <div class="invalid-feedback" v-if="errors.password">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Confirm Password</label>
                        <div class="col-sm-12 col-md-7">
                            <input v-bind:class="{'is-invalid': errors.password_confirmation}" type="password" v-model="password_confirmation" class="form-control" placeholder="Confirm account password." autocomplete="new-password">
                            <div class="invalid-feedback" v-if="errors.password_confirmation">
                                <p></p>
                            </div>
                        </div>
                    </div> --}}
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button class="btn btn-primary">Add</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection