@extends('layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Working Permit
            </h1>
        </section>
    </div>
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Different Width</h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-3">
                                <input type="text" class="form-control" placeholder=".col-xs-3">
                            </div>
                            <div class="col-xs-4">
                                <input type="text" class="form-control" placeholder=".col-xs-4">
                            </div>
                            <div class="col-xs-5">
                                <input type="text" class="form-control" placeholder=".col-xs-5">
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </section>
@endsection
