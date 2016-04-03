<?php 
	$attributes = array('id' => 'changepwd');	
	echo form_open('profile/edit/'.$id,$attributes); 
?>
          
<!-- Bloc 1 no tel-->
<h4> <?php echo lang('personal_info');?> </h4>
<div class="rowrec">   
  <div class="rowrec">
    <div class="inner-trip-det marginbot10">
      <div class="sea-city-city topbg colorwhite padding10 cs-blue-text size16"> 
        <?php echo lang('mobile_number');?>
      </div>
      <div class="padding20 row">
      <h5><?php echo lang('mobile_no');?></h5>
        <div class="fleft pro-tab-cont full-width paddingtop10">
          <input type="text" placeholder="<?php echo lang('mobile_no');?>" class="disable" name="txtphone" id="txtphone"  value="<?=$txtphone?>"/>                  
        </div>
      </div>
    </div>
  </div>
  <!-- Bloc 2 email -->
  <div class="rowrec">
    <div class="inner-trip-det marginbot10">
      <div class="sea-city-city topbg colorwhite padding10 cs-blue-text size16"> 
        <?php echo lang('email');?>
      </div>
      <div class="padding20 rowrec">
        <h5><?php echo lang('main_email');?></h5>
        <div class="fleft pro-tab-cont full-width paddingtop10">
          <input type="text" placeholder="<?php echo lang('email');?>" class="disable" name="txtemail" id="txtemail" readonly value="<?=$txtemail?>" />
        </div>                   
      </div>
      <div class="padding20 rowrec">
        <h5><?php echo lang('official_email');?></h5>
        <div class="fleft pro-tab-cont full-width paddingtop10">
          <input type="text" placeholder="<?php echo lang('official_email');?>" name="atxtemail" id="atxtemail" value="<?=$atxtemail?>" />
        </div>                  
      </div>
      
       <div class="padding20 rowrec">
        <h5><?php echo lang('official_email_as_communication');?></h5>
        <div class="fleft paddingtop10">
          <?php
						 $data	= array('name'=>'mail_flg', 'value'=>1 ,'class'=>'chkml' ,'checked'=>$mail_flg);
						 echo form_checkbox($data);
          ?>
        </div>                  
      </div> 
    </div>
  </div>
    <!-- bloc 3 noms-->
  <div class="rowrec">
    <div class="inner-trip-det marginbot10">
      <div class="sea-city-city topbg colorwhite padding10 cs-blue-text size16"> 
        <?php echo lang('personal_info');?>
      </div>
      <div class="padding20 rowrec">
        <div class="fleft pro-tab-cont">
          <h5><?php echo lang('first_name');?></h5>
         <input type="text" placeholder="<?php echo lang('first_name');?>" name="txtfirstname" id="txtfirstname" value="<?=$txtfirstname?>"/>
        </div>
        <div class="fright pro-tab-cont">
          <h5><?php echo lang('birthdate');?></h5>
          <div class="sea-city-city rowrec perso-inf fright cs-grey-text size14 ed-tme"> 
            <span><?php echo lang('day');?></span>
            <?php 
  						$days = array();
  						for($day = 1; $day <= 31; $day++): 
  							 $days[$day] = $day;
  						endfor;
  						echo form_dropdown('day', $days, $selday, ' id="day" ');
  					?>
            <span><?php echo lang('month') ; ?></span>
            <?php $data = array(
  						'' => lang('month'),
  						'January'=>lang('january'),
  						'February'=>lang('february'),
  						'March'=>lang('march'),
  						'April'=>lang('april'),
  						'May'=>lang('may'),
  						'June'=>lang('june'),
  						'August'=>lang('august'),
  						'September'=>lang('september'),
  						'October'=>lang('october'),
  						'November'=>lang('november'),
  						'December'=>lang('december'));
  						echo form_dropdown('month', $data, $month, ' id="month" ');
            ?>
            <span><?php echo lang('year');?></span>
            <?php 
  						$years = array();
  						for($iYear = date('Y'); $iYear >= date('Y') - 50; $iYear--): 
  							$years[$iYear] = $iYear;
  						endfor;
  						echo form_dropdown('year', $years, $year, ' id="year" ');
        	?>    
          </div>
        </div>
      </div>

      <div class="padding20 rowrec">
        <div class="fleft pro-tab-cont">
          <h5><?php echo lang('last_name');?> </h5>
           <input type="text" placeholder="<?php echo lang('last_name');?>"  name="txtlastname" id="txtlastname" value="<?=$txtlastname?>" />
        </div>
        <div class="fright pro-tab-cont">
          <h5> <?php echo lang('about_you');?> </h5>
          <textarea rows="4" name="txtaboutus" placeholder="<?php echo lang('tell_about_you');?>"><?=$txtaboutus?></textarea>
        </div>
      </div>

      <div class="padding20 rowrec">
        <div class="fleft row pro-tab-chk">
         <h5><?php echo lang('share_the_follow');?></h5>
          <label><input type="checkbox"><?php echo lang('mobile_phone');?></label>
          <label><input type="checkbox"><?php echo lang('email');?></label>
          <label><input type="checkbox"><?php echo lang('facebook_profile');?></label>
          <p><label><input type="checkbox"> <?php echo lang('i_agree_to');?> </label>
            <div class="fright row size14 sea-trp-view"> 
              <input type="hidden" value="<?php echo $redirect; ?>" name="redirect"/>
              <input type="hidden" value="1" name="submitted" />
              <button type="submit" class="btn login-btn fright reg-sbmt"><?php echo lang('submit');?></button>
              <!-- <input type="Submit" value="<?php echo lang('submit');?>" class="btn login-btn fright reg-sbmt">                         -->
            </div>
          </p>
        </div>
      </div>
    </div> 
  </div>
</div>
<!-- End3 -->
</form>
     
