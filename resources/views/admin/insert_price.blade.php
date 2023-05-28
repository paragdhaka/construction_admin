@extends('admin.master')

@section('content')
    <h1>Insert Price</h1>

    <div class="col-lg-12 col-md-12 mb-12">
        <div class="card row align-items-center">
            <div class="card-body">
                <div class="table-responsive">
                    <div class="col-lg-12 col-md-12 mb-12">
                        <div class="card row align-items-center">
                            <div class="card-body">
                                <h6 class="text-center textalign-center font-weight-bold deep-orange-lighter-hover align-items-center">Insert price</h6>
                                <table class="table table-bordered  table-striped table-hover ">
                                    <form action="" method="POST" enctype="multipart/form-data">
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
                                        <td>বাঁশ:</td>
                                        <td><input type="file" name="image1"></td>
                                    </tr>
                                    <tr>
                                        <td>স্টিল প্লেট:</td>
                                        <td><input type="file" name="image2"></td>
                                    </tr>





                                    <tr>
                                        <td>ইট:</td>
                                        <td><input type="file" name="bricks"></td>
                                    </tr>
                                    <tr>
                                        <td>বালু:</td>
                                        <td><input type="file" name="sand"></td>
                                    </tr>
                                    <tr>
                                        <td>সিমেন্ট:</td>
                                        <td><input type="file" name="ciment"></td>
                                    </tr>
                                    <tr>
                                        <td>রড:</td>
                                        <td><input type="file" name="rod"></td>
                                    </tr>
                                    <tr>
                                        <td>পাথর সাপ্লাই:</td>
                                        <td><input type="file" name="stone"></td>
                                    </tr>
                                    <tr>
                                        <td>সকংক্রিট ব্লক:</td>
                                        <td><input type="file" name="concrit"></td>
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
