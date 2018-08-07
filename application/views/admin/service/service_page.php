
<div class="col-md-12">
	<div class="panel widget">
	    <div class="panel-heading vd_bg-blue">
	        <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-picture-o"></i> </span>Service & Price Insert </h3>
	    </div>
	    <div class="panel-body">
		 	<form id="fileupload" class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Title: </label>
                    <div class="col-sm-7 controls">
                        <input type="text" placeholder="small">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Price: </label>
                    <div class="col-sm-7 controls">
                        <input type="text" placeholder="small">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label">Image: </label>
                    <div class="col-sm-7 controls">
                        <span class="btn btn-info fileinput-button">
                            <i class="glyphicon glyphicon-plus"></i> 
                            <span>Service Image</span>
                            <input type="file" name="image" multiple accept="images/*" data-toggle="tooltip" data-placement="top" data-original-title="Select your Slider Image Here">
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Textarea Width 90%</label>
                    <div class="col-sm-7 controls">
                        <textarea rows="3" class="width-90"></textarea>
                    </div>
                </div>

                <button type="submit" class="btn btn-success start pull-right">
                    <i class="glyphicon glyphicon-upload"></i> 
                    <span>Submit</span> 
                </button>
                
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
            	</span> Service & Price list 
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