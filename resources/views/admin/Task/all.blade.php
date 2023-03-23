@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All Users</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Image</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                   <tbody>
                                    @foreach ($dailyWork as $task)
                                    <tr>
                                        <td>{{ $task->id }}</td>
                                        <td>
                                            <img src="{{ asset('images/'.$task->image) }}" class="mg-fluid img-thumbnail" height="50px" width="50px" alt="{{ $task->image }}">
                                        </td>
                                        <td>{{ $task->created_at }}</td>
                                        <td>
                                            <a href="{{ route('Admin.Edit.Daily.Tasks',['id'=>$task->id]) }}" class="btn btn-sm btn-primary">Edit</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                   </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
