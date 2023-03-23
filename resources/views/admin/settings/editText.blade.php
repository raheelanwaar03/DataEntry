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
                            <form action="{{ route('Admin.Update.Payment.Page.Text',['id'=>$paymentText->id]) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="mt-2">Text</label>
                                    <input type="text" name="text" value="{{ $paymentText->text }}" class="form-control" placeholder="Enter Payment Page Text">
                                </div>
                                <div class="form-group">
                                    <label class="mt-2">Account Holder Name</label>
                                    <input type="text" name="holder" value="{{ $paymentText->holder }}" class="form-control" placeholder="Enter Easypaisa Account Holder Name">
                                </div>
                                <div class="form-group">
                                    <label class="mt-2">Easypaisa Account Number</label>
                                    <input type="number" name="account_num" value="{{ $paymentText->account_num }}" class="form-control" placeholder="Enter Easypaisa Account Number">
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
    </div>
@endsection
