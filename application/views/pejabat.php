<!-- Begin page content -->
    <div class="container">
        <div class="page-header" style="margin-bottom:5px">
            <h2 style="margin-bottom:0px">Data Pejabat</h2>
        </div>
        <div class="text-right">
            <button type="button" class="btn btn-sm btn-success" style="margin-bottom:10px" onclick="add()"><i class="fa fa-plus"></i> Add Data</button>
        </div>
        <table id="table" class="table table-condensed table-hover">
            <thead>
                <tr>
                    <th width="20"></th>
                    <th>Nama</th>
                    <th>Pangkat</th>
                    <th width="20"></th>
                    <th width="20"></th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>

    <div class="modal fade" id="modal_form" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title">Data Pejabat Form</h3>
                </div>
                <div class="modal-body form">
                    <form action="#" id="form" class="form-horizontal">
                        <input type="hidden" value="" name="id" class="form-control input-sm"/> 
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-3">Nama</label>
                                <div class="col-md-9">
                                    <input name="namaPejabat" placeholder="Nama" class="form-control input-sm" type="text">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Pangkat</label>
                                <div class="col-md-9">
                                    <input name="pangkatPejabat" placeholder="Pangkat" class="form-control input-sm" type="text">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" id="btnSave" onclick="save()" class="btn btn-sm btn-primary">Save</button>
                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
