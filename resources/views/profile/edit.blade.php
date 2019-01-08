@extends('layouts.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Setup Profile</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        You are logged in!
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general profile -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">General Profile</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            {!! Form::open(['url' => route('profile.update', ['profile' => $profile]), 'method' => 'patch']) !!}
                                <div class="card-body">
                                    <div class="form-group">


                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                            </div>
                                            <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" placeholder="Date of Birth">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <div class="form-group">

                                        <input type="text" class="form-control" placeholder="Street">
                                    </div>
                                    <div class="form-group">

                                        <input type="text" class="form-control" placeholder="City">
                                    </div>
                                    <div class="form-group">

                                        <input type="text" class="form-control" placeholder="Country">
                                    </div>
                                    <div class="form-group">

                                        <input type="text" class="form-control" placeholder="Zip/PostalCode">
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">I agree to the <a href="#">Privacy Statement</a></label>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                  {{ Form::submit('Update', ['class' => 'btn btn-primary']) }}
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <!-- right column -->
                    <div class="col-md-6">
                        <!-- business profile -->
                        <div class="card card-secondary">
                            <div class="card-header">
                                <h3 class="card-title">Business Profile</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            {!! Form::open(['url' => route('profile.update', ['profile' => $profile]), 'method' => 'patch', 'files' => true]) !!}
                                <div class="card-body">
                                    <div class="form-group">

                                        <input type="text" class="form-control" placeholder="Company Name">
                                    </div>
                                    <div class="form-group">

                                        <input type="text" class="form-control" placeholder="Street">
                                    </div>
                                    <div class="form-group">

                                        <input type="text" class="form-control" placeholder="City">
                                    </div>
                                    <div class="form-group">

                                        <input type="text" class="form-control" placeholder="Country">
                                    </div>
                                    <div class="form-group">

                                        <input type="text" class="form-control" placeholder="Zip/PostalCode">
                                    </div>
                                    <div class="form-group">

                                        <input type="text" class="form-control" placeholder="Phone">
                                    </div>
                                    <div class="form-group">

                                        <input type="text" class="form-control" placeholder="Fax">
                                    </div>
                                    <div class="form-group">

                                        <input type="text" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="3" placeholder="Description"></textarea>
                                    </div>
                                    <div class="form-group">

                                        <input type="text" class="form-control" placeholder="Tag Line">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Company Logo</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="">Upload</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">I agree to the <a href="#">Privacy Statement</a></label>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
