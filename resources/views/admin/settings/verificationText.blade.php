@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Payment Page Text and Account Details</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('Admin.Store.Verification.Page.Text') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="mt-2">Text</label>
                                    <input type="text" name="text" class="form-control" placeholder="Enter Verification Page Text">
                                </div>
                                <div class="mt-2">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Details --}}

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Text Shown on Payment Page</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>Text</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                   <tbody>
                                    @foreach ($verificationText as $text)
                                    <tr>
                                        <td>{{ $text->text }}</td>
                                        <td><a href="{{ route('Admin.Edit.Verification.Page.Text',['id'=>$text->id]) }}" class="btn btn-primary">Edit</a></td>
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
