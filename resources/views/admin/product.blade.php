@extends('admin_layout')
@section('title', 'Product')
@section('content')
    <div class="panel-header panel-header-sm"></div>
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header ">
                        <h4 class="card-title">All Product</h4>
                        </div>
                        <div class="card-body ">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <th>
                                            STT
                                        </th>
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Description
                                        </th>
                                        <th>
                                            Price
                                        </th>
                                        <th>
                                            Image
                                        </th>
                                        <th>
                                            Action
                                        </th>


                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                1
                                            </td>
                                            <td>
                                                Dakota Rice
                                            </td>
                                            <td>
                                                01/01/2020
                                            </td>
                                            <td>
                                                2000
                                            </td>
                                            <td>
                                                abc@gmail.com
                                            </td>
                                            <td>
                                                <a href="{{URL::to('/edit-product')}}" class="active styling-edit">
                                                    <i class="fas fa-edit"></i></a>
                                                <a onclick="return confirm('Are you sure to delete this product?')" href="{{URL::to('/delete-product')}}" class="active styling-edit">
                                                    <i class="fa fa-times text-danger text"></i>
                                                </a>
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
