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
                            <form action="{{ route('Admin.Update.Verification.Page.Text',['id'=>$verificationText->id]) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="mt-2">Verification Page Text</label>
                                    <input type="text" name="text" value="{{ $verificationText->text }}" class="form-control" placeholder="Enter Verification Page Text">
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
