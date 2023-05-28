@extends('admin.master')

@section('content')
    <h1>Update Price</h1>

    <div class="col-lg-12 col-md-12 mb-12">
        <div class="card row align-items-center">
            <div class="card-body">
                <div class="table-responsive">
                    <div class="col-lg-12 col-md-12 mb-12">
                        <div class="card row align-items-center">
                            <div class="card-body">
                                <h6 class="text-center textalign-center font-weight-bold deep-orange-lighter-hover align-items-center">Insert price</h6>
                                <table class="table table-bordered  table-striped table-hover ">
                                    <form action="{{route('update_price_process')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <tr>
                                            <th class="text-left text-nowrap small">  bricks </th>
                                            <td><input type="text" name="price_bricks" class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <th class="text-left text-nowrap small">  sand </th>
                                            <td><input type="text" name="price_send" class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <th class="text-left text-nowrap small">  rode</th>
                                            <td><input type="text" name="price_rode" class="form-control" required></td>
                                        </tr>

                                        <tr>
                                            <th class="text-left text-nowrap small">  price ciment </th>
                                            <td><input type="text" name="price_ciment" class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <th class="text-left text-nowrap small">stone </th>
                                            <td><input type="text" name="price_stone" class="form-control" required></td>
                                        </tr>
                                </table>
                                <table class="table table-bordered  table-striped table-hover ">
                                    <tr>
                                        <th class=" text-left text-nowrap small">other price </th>
                                    </tr>
                                    <td class=""><input type="text" name="others_price_1" class="form-control" required></td
                                    <tr>
                                        <th class="text-left text-nowrap small"> other price2
                                        <td><input type="text" name="others_price_2" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <th class="text-left text-nowrap small"> other price 3</th>
                                        <td><input type="text" name="others_price_3" class="form-control" required></td>
                                    </tr>



                                    <tr>
                                        <td>Image 1:</td>
                                        <td><input type="file" name="image1"></td>
                                    </tr>
                                    <tr>
                                        <td>Image 2:</td>
                                        <td><input type="file" name="image2"></td>
                                    </tr>

                                    <tr>
                                        <th class="text-left"></th>
                                        <td><input class="btn btn-success" type="submit" value="submit" </td>
                                    </tr>
                                    </form>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
