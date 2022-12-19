<div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">جستجو</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-window-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url()->current() }}" method="GET" enctype="multipart/form-data">

                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">نام </label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">نام خانوادگی</label>
                                    <input type="text" name="family" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""> از مبلغ</label>
                                    <input type="text" name="min_amount" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""> تا مبلغ</label>
                                    <input type="text" name="max_amount" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">  نوع درخواست</label>
                                    <select name="type" class="form-control">
                                        <option value="">انتخاب</option>
                                        <option value="in">پرداخت</option>
                                        <option value="out">برداشت</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-info" data-dismiss="modal">بستن
                        </button>
                        &nbsp;
                        <button type="submit" class="btn btn-outline-warning">جستجو</button>

                    </div>
                </form>

            </div>

        </div>
    </div>
</div>
