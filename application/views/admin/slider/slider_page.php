
<div class="col-md-12">
	<div class="panel widget">
	    <div class="panel-heading vd_bg-blue">
	        <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-picture-o"></i> </span> Slider Images </h3>
	    </div>
	    <div class="panel-body">

		 	<!-- The file upload form used as target for the file upload widget -->
		 	<form id="fileupload" action="" method="POST" enctype="multipart/form-data">
		 		<!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
		 		<div class="form-group">
		            <label class="col-sm-1 control-label">Title: </label>
		            <div class="col-sm-5 controls">
		              <input class="width-100" type="text" placeholder="Image Title" data-toggle="tooltip" data-placement="top" data-original-title="Insert your Image Title Here">
		            </div>
		            <div class="col-lg-6"> 
		 				<!-- The fileinput-button span is used to style the file input field as button --> 
		 				<span class="btn btn-info fileinput-button">
			 				<i class="glyphicon glyphicon-plus"></i> 
			 				<span>Upload Slider Image</span>
			 				<input type="file" name="image" multiple accept="images/*" data-toggle="tooltip" data-placement="top" data-original-title="Select your Slider Image Here">
		 				</span>
			 			<button type="submit" class="btn btn-success start">
			 				<i class="glyphicon glyphicon-upload"></i> 
			 				<span>Submit</span> 
			 			</button>
		 			
		 			</div>
		 		</div>
		 	</form>
		</div>
	</div>
</div>
<div class="col-md-12">
    <div class="panel widget">
        <div class="panel-heading vd_bg-grey">
            <h3 class="panel-title"> 
            	<span class="menu-icon"> 
            		<i class="fa fa-dot-circle-o"></i> 
            	</span> Slider Image list 
            </h3>
        </div>
        <div class="panel-body table-responsive">
            <table class="table table-striped table-hover table-bordered" id="data-tables">
                <thead>
                    <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="gradeC">
                        <td>Misc</td>
                        <td>IE Mobile</td>
                        <td>Windows Mobile 6</td>
                        <td class="center">-</td>
                        <td class="center">C</td>
                    </tr>
                    <tr class="gradeC">
                        <td>Misc</td>
                        <td>PSP browser</td>
                        <td>PSP</td>
                        <td class="center">-</td>
                        <td class="center">C</td>
                    </tr>
                    <tr class="gradeU">
                        <td>Other browsers</td>
                        <td>All others</td>
                        <td>-</td>
                        <td class="center">-</td>
                        <td class="center">U</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Panel Widget --> 
</div>