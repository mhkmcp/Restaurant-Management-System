@extends('layouts.app')

@section('title', 'Slider')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('layouts.inc.msg')
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Add New Category</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('category.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Name</label>
                                            <input type="text" class="form-control" name="name">
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ route('category.index') }}" class="btn btn-danger">Back</a>
                                <button type="submit" class="btn btn-primary">Save</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        } );
    </script>
@endpush