@extends('layouts.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" id="content-wrapper">
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
                    <span id="alert-message"></span>
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
                            {!! Form::open([
                                'route'  => [
                                    'profile.update',
                                    'profile'       => $profile,
                                ],
                                'method'       => 'PATCH',
                                'name'         => 'form-update-profile',
                                'id'           => 'form-update-profile',

                            ]) !!}

                            <div class="card-body">
                                <div class="form-group">


                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                        </div>
                                        {{ Form::text('dob', $profile->dob, ['class' => 'form-control', 'placeholder' => 'Date of Birth', 'data-inputmask' => "'alias': 'dd/mm/yyyy'"]) }}

                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">

                                    {{ Form::text('street', $profile->street, ['class' => 'form-control', 'placeholder' => 'Street']) }}
                                </div>
                                <div class="form-group">

                                    {{ Form::text('city', $profile->city, ['class' => 'form-control', 'placeholder' => 'City']) }}
                                </div>
                                <div class="form-group">

                                    {{ Form::text('country', $profile->country, ['class' => 'form-control', 'placeholder' => 'Country']) }}
                                </div>
                                <div class="form-group">

                                    {{ Form::number('zip', $profile->zip, ['class' => 'form-control', 'placeholder' => 'Zip / Postal Code']) }}

                                </div>
                                <div class="form-check">

                                    {{ Form::checkbox('privacy', 1, old('category_id', $profile->privacy) , ['class' => 'form-check-input']) }}
                                    {!! Form::label('privacylebel', 'I agree to the Privacy Statement', ['class' => 'form-check-label'])  !!}
                                    {{ Form::Hidden('setup', 1) }}


                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                {!! Form::button('Update', ['class' => 'btn btn-primary btn-block submit-form', 'type' => 'button', 'data-target' => '#form-update-profile']) !!}
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

                            {!! Form::open([
                                'route'  => [
                                    'companies.update',
                                    'companies'       => $companies,
                                ],
                                'method'       => 'PATCH',
                                'name'         => 'form-update-companies',
                                'id'           => 'form-update-companies',
                                'files'        => true,
                                'enctype'      => 'multipart/form-data',

                            ]) !!}
                            <div class="card-body">
                                <div class="form-group">
                                    {{ Form::text('name', $companies->name, ['class' => 'form-control', 'placeholder' => 'Company Name']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::text('street', $companies->street, ['class' => 'form-control', 'placeholder' => 'Street']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::text('city', $companies->city, ['class' => 'form-control', 'placeholder' => 'City']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::text('country', $companies->country, ['class' => 'form-control', 'placeholder' => 'Country']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::number('zip', $companies->zip, ['class' => 'form-control', 'placeholder' => 'Zip / Postal Code']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::text('phone', $companies->phone, ['class' => 'form-control', 'placeholder' => 'Phone']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::text('fax', $companies->fax, ['class' => 'form-control', 'placeholder' => 'Fax']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::text('email', $companies->email, ['class' => 'form-control', 'placeholder' => 'Email']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::textarea('description', $companies->description, ['class' => 'form-control', 'placeholder' => 'Description']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::text('tagline', $companies->tagline, ['class' => 'form-control', 'placeholder' => 'Tag Line']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::file('logo') }}
                                </div>
                                <div class="form-check">

                                    {{ Form::checkbox('privacy', 1, old('category_id', $companies->privacy) , ['class' => 'form-check-input']) }}
                                    {!! Form::label('privacylebel', 'I agree to the Privacy Statement', ['class' => 'form-check-label'])  !!}
                                    {{ Form::Hidden('setup', 1) }}


                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                {!! Form::button('Update', ['class' => 'btn btn-primary btn-block submit-form', 'type' => 'button', 'data-target' => '#form-update-companies']) !!}
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){

    $.ajaxSetup({
        "headers": {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function submitAjaxForm(formIdentifier) {
        if (formIdentifier === undefined) {
            console.log("formidentifier not set properly");
            return false;
        }

        if ($(formIdentifier).length === 0) {
            console.log("target form not found for: " + formIdentifier);
            return false;
        }

        if ($(formIdentifier).attr("data-confirm") !== undefined) {
            if (!confirm($(formIdentifier).attr("data-confirm"))) {
                console.log("user aborted sending the form: " + formIdentifier);
                return false;
            }
        }

        // Fix for unchecked checkbox values not posting in form data:
        // Add a hidden field for all unchecked checkboxes prior to posting
        $(formIdentifier).find('input.checkboxfix').remove();
        $(formIdentifier).find("input:checkbox:not(.ignore):not(:checked)").each(function () {
            $('<input>').attr({
                type: 'hidden',
                name: $(this).attr('name'),
            }).val(0).addClass('checkboxfix').appendTo($(formIdentifier));
        });

        var formData = new FormData($(formIdentifier).get(0));

        $.ajax({
            data: formData,
            type: "POST",
            url: $(formIdentifier).attr("action"),
            DataType: "json",
            contentType: false,
            cache: false,
            processData: false,
            success : function (data) {
                console.log('this is response ' + data.message);
                $('#alert-message').html('<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h5><i class="icon fa fa-check"></i> Alert!</h5>' + data.message + '.</div>');
            },
            error : function (data) {
                console.log('this is response ' + data.message);
                $('#alert-message').html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h5><i class="icon fa fa-times"></i> Alert!</h5> Action Failed! ' + data.message + '.</div>');

            }
            
        });
            
    }

    $("#content-wrapper").on("click", ".submit-form", function (event) {
        console.log('button clicked');
        let $form = $(this).attr("data-target");
        submitAjaxForm($form);
    });



});
</script>

