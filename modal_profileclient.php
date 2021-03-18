<?php //if(!defined('INCLUDE_CHECK')) {header("location: error-page.php");}  


if ($source == "apps") {
	
	$title = 'Mobile Apps Developments';
	
	$text = 'Our software and mobile apps development services include:<br/> 	
custom software design & development, custom web and mobile apps design & development, custom database design, development & management, information technology consulting.';

$profile_pic = 'small/softwares.jpg';
	
} elseif ($source == "oracle") {
	
	$title = 'Oracle Database Support';
	$text = "Whether you need assistance for managing your corporate IT systems or you 
	are running a data centre, you can partner with us for reliable support and services. We provide full onsite and offshore support for databases and ERP systems. 
";

	
	$profile_pic = 'small/database.jpg';
	
} elseif ($source == "sharepoint") {
	
	$title = 'MS SharePoint Solutions';
	$text = "SharePoint is Microsoft's state of the art software better termed as SharePoint Collaborative Platform. <br/><br/>We provide the following SharePoint related services:<br/>
SharePoint Implementation, Business Analysis, Maintenance Service Contract (MSC)
";

	$profile_pic = 'small/sharepoint.jpg';
	
} elseif ($source == "dashboard") {
	
	$title = 'Powerful Dashboards';
	$text = "Create dashboards using Powerful tools like Dev Express Dashboard Designer, Power Bi, MS SharePoint Dashboard Designer etc.";

	
	$profile_pic = 'small/dashbrd.jpg';
	
}

?><!-- Profile Modal -->


<div id="<?php echo $source; ?>" class="modal fade" style="margin-top: 25px;" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
		<div class="modal-dialog" role="document">
				<div class="modal-content">
						<div class="modal-header">
						        <!---<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
						        <h4 class="modal-title" id="myModalLabel2">
								<span style="font-weight:normal;"><?php  echo $title; ?> </span></h4>
								
								
			      		</div>
			      		<div class="modal-body">
			      				<div class="alert modalColor" style="background-color: #915D14; color:#ffffff; background: url(images/serv-strip2.jpg)repeat-x;">
								
								
								
								
							<div style="float:left; margin-bottom:10px; margin-right:10px; border: 2px solid #222222;">
							<img style="width:100px" src="images/<?php echo $profile_pic; ?>"></div>		
							<table style="float:left; background-color: rgba(255,255,255,0)">
								
											
			<?php 
			
			
			?>
					
					
					
					<tr style='border-bottom:1px dotted gray'>
							<th>&nbsp;</th>
							<td><?php echo $text; ?>
							</td>
					</tr>
					
					
					
					
					
					
					
					
				
					
					
					
			
					
					</table>
							
						<div style="clear:both"></div> 
						
							
										
										<button style='float:left; margin-top: 16px; border: 1px solid #c7c6c6' class='button-hf2' data-dismiss='modal' aria-hidden='true'>
												<i class="fa fa-times-circle"></i> Exit
										</button>
										

										<div class="clearfixxxx" style="clear:both"></div>	


										<!--</form>-->
										
								</div>
								
						</div>
						<div class="modal-footer">
						      
			      		</div>
				</div>
		</div>
</div>



