<div class="main-content">
    <div class="main-content-inner">
        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="alert alert-block alert-success">
                        <button type="button" class="close" data-dismiss="alert">
                            <i class="ace-icon fa fa-times"></i>
                        </button>

                        <i class="ace-icon fa fa-check green"></i>
                            Bem vindo
                        <strong class="green">
                           <small><?= $this->request->session()->read('Auth.User.name'); ?></small>
                        </strong>
               
                    </div>
               </div>
            </div>
        </div>
    </div>
</div>