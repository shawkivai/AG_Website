<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">All Message</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">	
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i>All Message</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>

        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email Address</th>
                        <th>Message</th>
                        <th>Message Time</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php
                    foreach ($all_message as $v_ticket) {
                        ?>
                        <tr>
                            <td class="center"><?php echo $v_ticket->name; ?></td>
                            <td class="center"><?php echo $v_ticket->email_id; ?></td>
                            <td class="center"><?php echo $v_ticket->message ?></td>
                            <td class="center"><?php echo $v_ticket->time?></td>

                        </tr>
                    <?php } ?>
                </tbody>
            </table>            
        </div>
    </div><!--/span-->
</div><!--/row-->
