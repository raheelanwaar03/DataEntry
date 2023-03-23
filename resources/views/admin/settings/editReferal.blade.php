@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Update limite Referal Commission</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('Admin.Update.Referal.Limite',['id'=>$limite->id]) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="mt-2">User Minimum Widthraw</label>
                                    <input type="number" name="min" value="{{ $limite->min }}" class="form-control" placeholder="Enter User Referal commission">
                                </div>
                                <div class="form-group">
                                    <label class="mt-2">User Maximum Widthraw</label>
                                    <input type="number" name="max" value="{{ $limite->max }}" class="form-control" placeholder="Enter User Referal commission">
                                </div>
                                <div class="form-group">
                                    <label class="mt-2">Referal Commission</label>
                                    <input type="number" name="referal_commission" value="{{ $limite->referal_commission }}" class="form-control" placeholder="Enter User Referal commission">
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
