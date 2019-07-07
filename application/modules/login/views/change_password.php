<div class="container" style="margin-top: 20px">
        <div class="col-lg-6 offset-lg-3 col-sm-12 col-xs-12">
          <div class="card">
            <div class="card-body">
              <form name="form1" id="form1" ng-submit="save_data()">
                <h4 class="form-header">
                  Reset Password
                </h4>
                <div class="form-group row">
                  <label class="col-sm-12 col-form-label">Current Password</label>
                  <div class="col-sm-12">
                    <input class="form-control" ng-model="old" name="currentpass" id="currentpass" type="password" placeholder=" Enter Current Password" autofocus required>
                  </div>
                  <label  class="col-sm-12 col-form-label">New Password</label>
                  <div class="col-sm-12">
                    <input  type="password"  ng-model="new" class="form-control" name="newpass" placeholder="Enter New Password "required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-12 col-form-label">Confirm Password</label>
                  <div class="col-sm-12">
                    <input type="password" ng-model="conf" class="form-control" name="cmpassword"  placeholder="Confirm Your New Password" required>
                  </div>
                </div>
                <div id="result"></div>
                <div class="form-footer">
                    <button type="submit" id="submitbtn" class="btn btn-success" ng-disabled="form1.$invalid"><i class="fa fa-check-square-o"></i> SAVE</button>
                    <button ng-click="filter_new()" class="btn btn-danger"><i class="fa fa-times"></i> Clear</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div><!--End Row--> 