<div class="wrap" style="margin:12px 0 0 0;">
    <?php screen_icon(); ?>
    <?php $type_of_media = array('pressrelease','news','blog_post','event','image','video','document','contact_person'); ?>
	<form action="options.php" method="post" id="<?php echo $plugin_id; ?>_options_form" name="<?php echo $plugin_id; ?>_options_form">
	<?php settings_fields($plugin_id.'_options'); ?>
    <h2>myNewsDesk Plugin Options &raquo; Settings</h2>
    <table class="widefat">
		<tbody>
		   <tr>
			 <td>
                <b>Unique key? (given by mynewsdesk)</b><br />
                <input type="text" name="kkpo_quote" style="width:350px;" value="<?php echo get_option('kkpo_quote'); ?>" />
             </td>
		   </tr>
		   <tr>
			 <td>
                <b>Pressroom Site</b><br />
                <input type="text" name="kkpo_site" style="width:350px;" value="<?php echo get_option('kkpo_site'); ?>" />
             </td>
		   </tr>
		   
           <tr>
			 <td>
                <b>Default media type (if nothing selected default will pressrelease)</b><br />
                <?php
					$kkpo_media_default = get_option('kkpo_media_default');
					foreach($type_of_media as $key => $value):
						$checked = '';
						if( $value == $kkpo_media_default )
							$checked = 'checked';					
				?>
	                <label for="kkpo_media_default_<?php echo $key; ?>"><input type="radio" id="kkpo_media_default_<?php echo $key; ?>" <?php echo $checked;?> name="kkpo_media_default" value="<?php echo $value;?>"><?php echo $value;?></label>&nbsp;&nbsp;
                <?php endforeach;?>
             </td>
		   </tr>
           <tr>
			 <td>
                <b>Type of media to be displayed</b><br />
                <?php
				$kkpo_media_type = get_option('kkpo_media');
				if(empty($kkpo_media_type)  || !is_array($kkpo_media_type))
					$kkpo_media_type = array();
				?>
                <?php foreach($type_of_media as $key => $value): ?>
                	<?php
						$checked = '';
						if( in_array( $value, $kkpo_media_type ) )
							$checked = 'checked';					
					?>
	                <input type="checkbox" id="kkpo_media_<?php echo $key; ?>" <?php echo $checked;?> name="kkpo_media[]" value="<?php echo $value;?>"><?php echo $value;?><br/>
                <?php endforeach;?>
             </td>
		   </tr>
		   <tr>
			 <td>
					<p>For more information please read <a href='http://www.mynewsdesk.com/docs/webservice_pressroom' target='_blank'>www.mynewsdesk.com/docs/webservice_pressroom</a></p>
             </td>
		   </tr>
           

                      
		</tbody>
		<tfoot>
		   <tr>
			 <th><input type="submit" name="submit" value="Save Settings" class="button-primary" /></th>
		   </tr>
		</tfoot>        
	</table>
	</form>
</div>