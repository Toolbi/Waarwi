<div id="splitresult">
    <div class="table-responsive">                                             
        <table class="table user-list table-hover">
            <thead>
                <tr>
                    <th><span>Id</span></th>
                    <th><span><?php echo lang('language_name');?></span></th>
                    <th><span><?php echo lang('language_prefix');?></span></th>
                    <th><span><?php echo lang('created');?></span></th>                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($languages as $language): ?>
                    <tr>
                        <td>
                            <?= $language['language_id'] ?>
                        </td>
                        <td>
                            <?= $language['language_name'] ?>
                        </td>
                        <td>
                            <?= $language['language_code'] ?>
                        </td>
                        <td>
                            <?php echo date('d, M Y h:i A', strtotime($language['created_date'])); ?> 

                        </td>                                                                        
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php echo $pagination ?>

</div>