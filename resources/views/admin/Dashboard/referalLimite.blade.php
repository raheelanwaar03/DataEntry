@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Set User Referal Commission</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('Admin.Store.Set.Limite') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="mt-2">User Minimum Widthraw</label>
                                    <input type="number" name="min" class="form-control" placeholder="Enter User Referal commission">
                                </div>
                                <div class="form-group">
                                    <label class="mt-2">User Maximum Widthraw</label>
                                    <input type="number" name="max" class="form-control" placeholder="Enter User Referal commission">
                                </div>
                                <div class="form-group">
                                    <label class="mt-2">Referal Commission</label>
                                    <input type="number" name="referal_commission" class="form-control" placeholder="Enter User Referal commission">
                                </div>
                                <div class="mt-2">
                                    <button type="submit" class="btn btn-primary">Apply</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
