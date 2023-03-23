@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add New Task For Users</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('Admin.Store.Daily.Task') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="mt-2">Image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                                <div class="mt-2">
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
