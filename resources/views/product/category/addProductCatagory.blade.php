@extends('master.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="py-5">
        <div class="container">

            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h4 class="text-success">{{ Session::get('message') }}</h4>
                    <div class="card">

                        <div class="card-header">Add Product Category </div>
                        <div class="card-body">
                            <form action="addCategory" method="POST">
                                @csrf

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label">Category Name</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="categoryName" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label">Category Code</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="categoryCode" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label">Description</label>
                                    <div class="col-md-8">
                                        <textarea  class="form-control" name="note">
                                               </textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-success" value="Add" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- /.content-wrapper -->
@endsection
