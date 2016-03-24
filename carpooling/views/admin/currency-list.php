<div id="splitresult">
    <div class="table-responsive">                                             
        <table class="table user-list table-hover">
            <thead>
                <tr>
                    <th><span>Id</span></th>
                    <th><span><?php echo lang('currency_name');?></span></th>
                    <th><span><?php echo lang('currency_symbol');?></span></th>
                    <th><span><?php echo lang('created');?></span></th>                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($currencies as $currency): ?>
                    <tr>
                        <td>
                            <?= $currency['currency_id'] ?>
                        </td>
                        <td>
                            <?= $currency['currency_name'] ?>
                        </td>
                        <td>
                            <?= $currency['currency_symbol'] ?>
                        </td>
                        <td>
                            <?php echo date('d, M Y h:i A', strtotime($currency['created_date'])); ?> 

                        </td>                                                                        
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php echo $pagination ?>

</div>