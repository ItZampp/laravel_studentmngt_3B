@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="mb-2 row">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('About us') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('About us') }}</h5>

                            <p class="card-text">
                                {{ __('Sample static text page ') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

   <div class="card">
                <div class="p-0 card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>John Doe</td>
                                <td>johndoe@sample.com</td>
                            </tr>
<<<<<<< HEAD

                            <tr>
                                <td>Samuel Mata</td>
                                <td>samuelmata@sample.com</td>
=======
                            <tr>
                                <td>Juan Dela Cruz</td>
                                <td>juandelacruz@sample.com</td>
>>>>>>> 8bfaa48a11d9a516e7057fd1644586fbe9bed281
                            </tr>
                            <tr>
                                <td>Kevin Mark Lagman</td>
                                <td>kevinmarklagman@sample.com</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
    </div>
@endsection
