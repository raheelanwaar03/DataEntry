@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Update Task Details</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('Admin.Update.Daily.Tasks',['id'=>$dailyWork->id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="mt-2">Image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                                <div class="">
                                    <img src="{{ asset('images/'.$dailyWork->image) }}" height="100px" width="100px" alt="Image">
                                </div>
                                <div class="mt-2">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
