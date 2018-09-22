<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Upload New Magazine</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="{{url('upload-magazine')}}" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Magazine Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Type name here">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Publication Date</label>
                                <input type="text" class="form-control" id="datepicker" name="publication_date" placeholder="date">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="language">Magazine Language</label>
                                <select name="language" class="form-control">
                                    @foreach(\App\Language::all() as $lang)
                                        <option value="{{$lang->id}}">{{$lang->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Category">Magazine Category</label>
                                <select name="category" class="form-control">
                                    @foreach(\App\Category::all() as $cat)
                                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputFile">Magazine PDF file</label>
                                <input type="file" name="pdf_file" id="exampleInputFile">
                                <p class="help-block">Only PDF files</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputFile">Magazine Image Cover</label>
                                <input type="file" name="img_file">
                                <p class="help-block">Only JPG, JPEG, PNG files.</p>
                            </div>
                        </div>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> I accept the terms and conditions of use of Magdown
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-upload"></i> Upload Magazine</button>
                </form>
            </div>
        </div>
    </div>
</div>