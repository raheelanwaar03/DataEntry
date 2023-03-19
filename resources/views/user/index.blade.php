@extends('user.layout.app')


@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="mb-sm-4 d-flex flex-wrap align-items-center text-head">
                <h2 class="mb-3 me-auto">User Dashboard</h2>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-xl-6 col-sm-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div class="menu">
                                        <span class="font-w500 fs-16 d-block mb-2">Total Balance</span>
                                        <h2>00</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-sm-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div class="menu">
                                        <span class="font-w500 fs-16 d-block mb-2">Widthrawal Balance</span>
                                        <h2>00</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-sm-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div class="menu">
                                        <span class="font-w500 fs-16 d-block mb-2">Pending Balance</span>
                                        <h2>00</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-sm-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div class="menu">
                                        <span class="font-w500 fs-16 d-block mb-2">Approved Balance</span>
                                        <h2>00</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-sm-12">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div class="menu">
                                        <span class="font-w500 fs-16 d-block mb-3">Refer Link</span>
                                        <input type="text" style="width: 100%;border:none"
                                            value="{{ route('register', ['referal' => Auth::user()->name]) }}"
                                            id="myInput">
                                        <button onclick="copy()" class="btn btn-secondary px-2">copy</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function copy() {
            // Get the text field
            var copyText = document.getElementById("myInput");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            navigator.clipboard.writeText(copyText.value);
            // Alert the copied text
            alert("Copied the text: " + copyText.value);
        }
    </script>
@endsection
