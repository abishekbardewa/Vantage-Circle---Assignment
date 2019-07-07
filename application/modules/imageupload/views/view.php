
<div class="container" style="margin-top: 20px">
	<div class="col-lg-6 offset-lg-3 col-sm-12 col-xs-12">
		<div class="card">
			<div class="card-body">
				<form id="imageform" action="" method="post">
					<h4 class="form-header">Upload Images</h4>
					<div class="form-group row">
						<label class="col-sm-12 col-form-label">Image Title</label>
						<div class="col-sm-12">
							<input type="text" class="form-control" id="title" name="title"
								ng-model="x.title" placeholder="Enter Image Title">
						</div>
						<label class="col-sm-12 col-form-label">Select Image</label>
						<div class="col-sm-12">
							<input type="file" class="form-control-file" id="image"
								name="image" ng-model="x.image">
						</div>
					</div>
					<div class="form-footer">
						<button type="submit" id="submitbtn" ng-click="save_data(x)"
							class="btn btn-success">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!--End Row-->
