<div class="row layout-spacing">
    <div class="col-lg-12">
        <div class="statbox widget box box-shadow">
            <div class="widget-content widget-content-area">
                <table id="individual-col-search" class="table dt-table-hover">
                    <thead>
                       <div class="btn-group  mb-2 me-4" role="group">
                        <button id="btndefault" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CUSTOMER MANAGEMENT <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                        <div class="dropdown-menu" aria-labelledby="btndefault">
                            <a href="<?php echo base_url('hospot_user/service_information/') ?>" class="dropdown-item"><i class="flaticon-home-fill-1 mr-1"></i>Add Customer</a>
                            <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-gear-fill mr-1"></i>List Customer</a>
                            <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-bell-fill-2 mr-1"></i>Something else here</a>
                            <hr style="margin-top: -1px">
                            <a style="font-size: 17px; color: red; margin-top: -20px"  href="javascript:void(0);" class="dropdown-item"><i class="flaticon-bell-fill-2 mr-1"></i>Checkbox Action ( Bulk )</a>
                            <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-dots mr-1"></i>Renew Plan</a>
                        </div>
                    </div><hr>
                    <tr>
                        <th class="text-center">Customer ID</th>
                        <th>Name</th>
                        <th>Service Type</th>
                        <th>Service Plan</th>
                        <th>Renew On</th>
                        <th>Due Date</th>
                        <th>Data Owner</th>

                        <th class="text-center dt-no-sorting">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($show as $res) {
                        ?>
                        <tr>
                            <td class="text-center"><?php echo $res->id_customer?></td>
                            <td><?php echo $res->name?></td>
                            <td><?php echo $res->type_service?></td>
                            <td><?php echo $res->plan_name?></td>
                            <td><?php echo $res->due_date?></td>
                            <?php
                            if ($res->time_limit=='unlimited') 
                                {?>
                               <td style="color: #00c0ef"><b>unlimited</b></td>
                            <?php } else{?>
                                 <td><b><?php echo $res->time_limit?></b></td>
                             <?php }?>

                            <td><?php echo $res->nama_lengkap?></td>
                            <td class="text-center"><a href="javascript:void(0);" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle table-cancel"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></a></td>
                        </tr>
                    <?php }?>
                </tbody>

            </table>
        </div>
    </div>
</div>
</div>
<script src="<?php echo base_url(); ?>assets/src/plugins/src/global/vendors.min.js"></script>
<script src="<?php echo base_url(); ?>assets/src/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?php echo base_url(); ?>assets/src/plugins/src/mousetrap/mousetrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/layouts/vertical-light-menu/app.js"></script>


<script src="<?php echo base_url(); ?>assets/src/assets/js/custom.js"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url(); ?>assets/src/plugins/src/table/datatable/datatables.js"></script>
<script src="<?php echo base_url(); ?>assets/src/plugins/src/table/datatable/button-ext/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/src/plugins/src/table/datatable/button-ext/jszip.min.js"></script>    
<script src="<?php echo base_url(); ?>assets/src/plugins/src/table/datatable/button-ext/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>assets/src/plugins/src/table/datatable/button-ext/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>assets/src/plugins/src/table/datatable/custom_miscellaneous.js"></script>
<script src="<?php echo base_url(); ?>assets/src/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?php echo base_url(); ?>assets/src/plugins/src/mousetrap/mousetrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/layouts/vertical-light-menu/app.js"></script>
<script src="<?php echo base_url(); ?>assets/src/plugins/src/highlight/highlight.pack.js"></script>
