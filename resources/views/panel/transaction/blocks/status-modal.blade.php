<div class="modal fade" id="statusModal-{{$row->id}}" tabindex="-1" role="dialog" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">ویرایش درخواست</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-window-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/transactions/status/'.$row->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">وضعیت درخواست </label>
                                    <select name="status" class="form-control" id="">
                                        <option value="1">تایید درخواست</option>
                                        <option value="0">رد درخواست</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">توضیحات</label>
                                    <textarea  name="description" class="form-control"></textarea>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-info" data-dismiss="modal">بستن
                        </button>
                        &nbsp;
                        <button type="submit" class="btn btn-success">ثبت</button>

                    </div>
                </form>

            </div>

        </div>
    </div>
</div>
