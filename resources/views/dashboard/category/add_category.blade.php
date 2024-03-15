@extends('dashboard.master');
@section('content')
    <div class="row"> <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper col-md-9">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid" style="width: 110%">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Category Form</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Category Form</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-primary " style="width: 110%">
                                <div class="card-header">
                                    <h3 class="card-title">Form</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="{{ url('view_category') }}" method="post">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="add_category">category name</label>
                                            <input type="text" class="form-control" id="cat_name"
                                                placeholder="Add category" name="f_add">
                                        </div>
                                        <div class="form-group">
                                            <label for="Slug">Slug</label>
                                            <input type="text" class="form-control" id="Slug" placeholder="Add Slug"
                                                name="f_slug">
                                        </div>

                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer text-center">
                                        <button type="submit" class="btn btn-primary ">Submit</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->

                            <!-- general form elements -->
                        </div>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    @endsection
