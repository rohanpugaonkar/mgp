
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
       Staff Members
      </h1>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#supplementationlist" data-toggle="tab"><i class="fa fa-list"></i> Membership List</a></li>
              <li><a href="#addsupplementation" data-toggle="tab"><i class="fa fa-plus-circle"></i> Add Membership</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="supplementationlist">
                  <div class="box-body table-responsive no-padding">
                    <table class="table table-hover table-striped">
                      <thead>
                        <tr>
                          <th>Photo</th>
                          <th>Membership Name</th>
                          <th>Membership Period</th>
                          <th>Installment Plan</th>
                          <th>Signup Fee</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                    <tbody>
                    <tr>
                      <td><img class="img-circle t-img" src="img/avatar.png" alt="User Image"></td>
                      <td>Vijay Bhosale</td>
                      <td>365</td>
                      <td>1000 Month</td>
                      <td><i class="fa fa-rupee"></i> 1000</td>
                      <td>
                        <button type="button" class="btn bg-navy btn-flat margin"><i class="fa fa-pencil"></i> Edit</button>
                        <button type="button" class="btn bg-white btn-flat margin"><i class="fa fa-times"></i> Delete</button>
                      </td> 
                    </tr>
                    <tr>
                      <td><img class="img-circle t-img" src="img/avatar2.png" alt="User Image"></td>
                      <td>Vijay Bhosale</td>
                      <td>365</td>
                      <td>1000 Month</td>
                      <td><i class="fa fa-rupee"></i> 1000</td>
                      <td>
                        <button type="button" class="btn bg-navy btn-flat margin"><i class="fa fa-pencil"></i> Edit</button>
                        <button type="button" class="btn bg-white btn-flat margin"><i class="fa fa-times"></i> Delete</button>
                      </td> 
                    </tr>
                    <tr>
                      <td><img class="img-circle t-img" src="img/avatar3.png" alt="User Image"></td>
                      <td>Vijay Bhosale</td>
                      <td>365</td>
                      <td>1000 Month</td>
                      <td><i class="fa fa-rupee"></i> 1000</td>
                      <td>
                        <button type="button" class="btn bg-navy btn-flat margin"><i class="fa fa-pencil"></i> Edit</button>
                        <button type="button" class="btn bg-white btn-flat margin"><i class="fa fa-times"></i> Delete</button>
                      </td>
                    </tr>
                    <tr>
                      <td><img class="img-circle t-img" src="img/avatar4.png" alt="User Image"></td>
                      <td>Vijay Bhosale</td>
                      <td>365</td>
                      <td>1000 Month</td>
                      <td><i class="fa fa-rupee"></i> 1000</td>
                      <td>
                        <button type="button" class="btn bg-navy btn-flat margin"><i class="fa fa-pencil"></i> Edit</button>
                        <button type="button" class="btn bg-white btn-flat margin"><i class="fa fa-times"></i> Delete</button>
                      </td>
                    </tr>
                    <tr>
                      <td><img class="img-circle t-img" src="img/avatar5.png" alt="User Image"></td>
                      <td>Vijay Bhosale</td>
                      <td>365</td>
                      <td>1000 Month</td>
                      <td><i class="fa fa-rupee"></i> 1000</td>
                      <td>
                        <button type="button" class="btn bg-navy btn-flat margin"><i class="fa fa-pencil"></i> Edit</button>
                        <button type="button" class="btn bg-white btn-flat margin"><i class="fa fa-times"></i> Delete</button>
                      </td>
                    </tr>
                    </tbody>
                    </table>
                  </div>
              </div>
              <div class="tab-pane" id="addsupplementation">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Membership Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Membership Category</label>
                    <div class="col-sm-8">
                      <select class="form-control">
                        <option>Select Membership Category</option>
                        <option>1 Year</option>
                        <option>Weekly</option>
                      </select>
                    </div>
                    <div class="col-sm-2">
                      <a href="" class="btn bg-orange btn-flat margin-0 pull-right" data-toggle="modal" data-target="#addremove">Add Or Remove</a>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Membership Period</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Enter Total Number Of Days">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Membership Limit</label>
                    <div class="col-sm-10">
                      <label class="radio-inline">
                         <input type="radio" name="">limited
                      </label>
                      <label class="radio-inline">
                         <input type="radio" name="" checked="checked">unlimited 
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Membership amount</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Installment Plan</label>
                     <div class="col-sm-2">
                      <input type="text" class="form-control" placeholder="amount">
                    </div>
                    <div class="col-sm-6">
                      <select class="form-control">
                        <option>Select Installment Plan</option>
                        <option>month</option>
                      </select>
                    </div>
                    <div class="col-sm-2">
                       <a href="" class="btn bg-orange btn-flat margin-0 pull-right" data-toggle="modal" data-target="#addinstallmentplan">Add Or Remove</a>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Signup Fee</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Membership Image</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control">
                      <br/>
                      <img id='img-upload' class="width-200 col-md-2"/>
                    </div>
                    <div class="col-sm-3">
                        <div class="file btn btn-md bg-orange btn-file">
                         <i class="fa fa-upload"></i> Upload Image
                         <input type="file" id="imgInp">
                        </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn bg-navy btn-flat margin-0">Add Membership</button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </section>
  </div>
  