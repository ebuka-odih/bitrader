@extends('admin.layout.app')
@section('content')

    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">

                    <div class="nk-block">

                        <div class="row g-gs">

                            <div class="col-lg-12">
                                <div class="card card-bordered card-full">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    @if(session()->has('success'))
                                        <div class="alert alert-success">
                                            {{ session()->get('success') }}
                                        </div>
                                    @endif
                                    <div class="card-inner">
                                        <button type="button" class="btn btn-primary m-4" data-bs-toggle="modal"
                                                data-bs-target="#modalForm">Add Package
                                        </button>
                                        <h4 class="m-2">Copy Traders</h4>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>Package</th>
                                                    <th>Min Amount</th>
                                                    <th>Term</th>
                                                    <th>PNL</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($data as $index => $item)
                                                    <tr>

                                                        <td>{{ $item->name ?? '' }}</td>
                                                        <td>${{ number_format($item->min_amount, 2) ?? '' }}</td>
                                                        <td>{{ $item->term ?? ''}} Days</td>
                                                        <td>{{ $item->pnl ?? ''}}%</td>
                                                        <td>
                                                            <a href="" data-bs-toggle="modal"
                                                               data-bs-target="#modalForm-{{ $item->id }}"
                                                               class="btn btn-sm btn-primary">Edit</a>
                                                            <a href="#" class="btn btn-sm btn-danger"
                                                               data-bs-toggle="modal"
                                                               data-bs-target="#deleteModal-{{ $item->id }}">Delete</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>

                                        <!-- Move modals outside the table -->
                                        @foreach($data as $item)
                                            <!-- Edit Modal -->
                                            <div class="modal fade" id="modalForm-{{ $item->id }}">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Edit Trader Info</h5>
                                                            <a href="#" class="close" data-bs-dismiss="modal"
                                                               aria-label="Close">
                                                                <em class="icon ni ni-cross"></em>
                                                            </a>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form
                                                                action="{{ route('admin.copyTrader.update', $item->id) }}"
                                                                method="POST" class="form-validate is-alter"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                @method('PATCH')
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="full-name">Username</label>
                                                                            <div class="form-control-wrap">
                                                                                <input type="text" name="name"
                                                                                       value="{{ old('name', $item->name ?? '') }}"
                                                                                       class="form-control" >
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label"
                                                                                   for="email-address">Profile
                                                                                Pic</label>
                                                                            <div class="form-control-wrap">
                                                                                <input type="file" name="avatar"
                                                                                       class="form-control" >
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="full-name">Win</label>
                                                                            <div class="form-control-wrap">
                                                                                <input type="number" step="0.001"
                                                                                       name="win"
                                                                                       value="{{ old('win', $item->win ?? '') }}"
                                                                                       class="form-control" >
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label"
                                                                                   for="email-address">Loss</label>
                                                                            <div class="form-control-wrap">
                                                                                <input type="number" step="0.001"
                                                                                       name="loss"
                                                                                       value="{{ old('loss', $item->loss ?? '') }}"
                                                                                       class="form-control" >
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="full-name">Win
                                                                                Rate</label>
                                                                            <div class="form-control-wrap">
                                                                                <input type="number" step="0.001"
                                                                                       name="win_rate"
                                                                                       value="{{ old('win_rate', $item->win_rate ?? '') }}"
                                                                                       class="form-control" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label"
                                                                                   for="email-address">Profit
                                                                                Share</label>
                                                                            <div class="form-control-wrap">
                                                                                <input type="number" step="0.001"
                                                                                       name="profit_share"
                                                                                       value="{{ old('profit_share', $item->profit_share ?? '') }}"
                                                                                       class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="form-group">
                                                                            <label class="form-label"
                                                                                   for="email-address">Min
                                                                                Amount</label>
                                                                            <div class="form-control-wrap">
                                                                                <input type="number" step="0.001"
                                                                                       name="min_amount"
                                                                                       value="{{ old('min_amount', $item->min_amount ?? '') }}"
                                                                                       class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>
{{--                                                                    <div class="col-lg-6">--}}
{{--                                                                        <div class="form-group">--}}
{{--                                                                            <label class="form-label"--}}
{{--                                                                                   for="email-address">Max--}}
{{--                                                                                Amount</label>--}}
{{--                                                                            <div class="form-control-wrap">--}}
{{--                                                                                <input type="number" step="0.001"--}}
{{--                                                                                       name="max_amount"--}}
{{--                                                                                       value="{{ old('max_amount', $item->max_amount ?? '') }}"--}}
{{--                                                                                       class="form-control">--}}
{{--                                                                            </div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
                                                                </div>
                                                                <div class="form-group mt-3">
                                                                    <button type="submit"
                                                                            class="btn btn-lg btn-primary">Save
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Delete Confirmation Modal -->
                                            <div class="modal fade" id="deleteModal-{{ $item->id }}" tabindex="-1"
                                                 aria-labelledby="deleteModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="deleteModalLabel">Confirm
                                                                Delete</h5>
                                                            <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Are you sure you want to delete this item? This action
                                                            cannot be undone.
                                                        </div>
                                                        <div class="modal-footer">
                                                            <form
                                                                action="{{ route('admin.package.destroy', $item->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger">Delete
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                                </div><!-- .card -->
                            </div><!-- .col -->


                        </div><!-- .row -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalForm">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Package Info</h5>
                    <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.package.store') }}" method="POST" class="form-validate is-alter"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-2">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label" for="full-name">Package Name</label>
                                    <div class="form-control-wrap">
                                        <input type="text" name="name" class="form-control" id="full-name" required>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row mt-2">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label" for="full-name">min Amount</label>
                                    <div class="form-control-wrap">
                                        <input type="number" step="0.001" name="min_amount" class="form-control"
                                               id="full-name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label" for="email-address">Term Days</label>
                                    <div class="form-control-wrap">
                                        <input type="number" step="0.001" name="term" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label" for="email-address">Interest</label>
                                    <div class="form-control-wrap">
                                        <input type="number" step="0.001" name="pnl" class="form-control">
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-lg btn-primary">Save</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>



@endsection
