<div id="content" class="span10">


    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="<?php echo base_url('dashboard')?>">Home</a> 
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="<?php echo base_url('manage/customer')?>">Manage User</a></li>
    </ul>

    <div class="row-fluid sortable">		
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon user"></i><span class="break"></span>Manage User</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            
            <style type="text/css">
                #result{color:red;padding: 5px}
                #result p{color:red}
            </style>
            <div id="result">
                <p><?php echo $this->session->flashdata('message'); ?></p>
            </div>
            <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
            <thead>
                        <tr>
                            <th>Name</th>
                            <th>Password</th>
                            <th>City</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Country</th>
                            <th>Zipcode</th>
                        </tr>
            </thead>
<!-- <?php
foreach ($customer as $row) {
    echo
    '<tr>
    <td>' . $row->name . '</td>
    <td>' . $row->password . '</td>
    <td>' . $row->city . '</td>
    <td>' . $row->phone . '</td>
    <td>' . $row->email . '</td>
    <td>' . $row->address . '</td>
    <td>' . $row->country . '</td>
    <td>' . $row->zipcode . '</td>
    <td>' . '<a href="#">' . 'Edit</a>' . '</td>
    <td>' . '<a href="#">' . 'Delete</a>' . '</td>
    </tr>';
}
?> -->
            </table>
        </div>
    </div>
</div>

