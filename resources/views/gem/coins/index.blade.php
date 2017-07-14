@extends('gem.layouts.app')
@section('content')
<!--typography-->
<div class="typrography">
	 <div class="container">
	      <h3 class="type">Typography Page</h3>
	 <div class="grid_3 grid_4">
		     <h3>Headings</h3>
		     <div class="bs-example">
				 <table class="table">
				  <tbody>
					<tr>
					  <td><h1 id="h1.-bootstrap-heading">h1. Bootstrap heading<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h1></td>
					  <td class="type-info">Semibold 36px</td>
					</tr>
					<tr>
					  <td><h2 id="h2.-bootstrap-heading">h2. Bootstrap heading<a class="anchorjs-link" href="#h2.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h2></td>
					  <td class="type-info">Semibold 30px</td>
					</tr>
					<tr>
					  <td><h3 id="h3.-bootstrap-heading">h3. Bootstrap heading<a class="anchorjs-link" href="#h3.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h3></td>
					  <td class="type-info">Semibold 24px</td>
					</tr>
					<tr>
					  <td><h4 id="h4.-bootstrap-heading">h4. Bootstrap heading<a class="anchorjs-link" href="#h4.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
					  <td class="type-info">Semibold 18px</td>
					</tr>
					<tr>
					  <td><h5 id="h5.-bootstrap-heading">h5. Bootstrap heading<a class="anchorjs-link" href="#h5.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h5></td>
					  <td class="type-info">Semibold 14px</td>
					</tr>
					<tr>
					  <td><h6>h6. Bootstrap heading</h6></td>
					  <td class="type-info">Semibold 12px</td>
					</tr>
				  </tbody>
				 </table>
			 </div>
	      </div>
		  
		  <div class="grid_3 grid_5">
			<h3>Buttons</h3>
			 	  <h1 class="t-button">
				<a href="#"><span class="label label-default">Default</span></a>
				<a href="#"><span class="label label-primary">Primary</span></a>
				<a href="#"><span class="label label-success">Success</span></a>
				<a href="#"><span class="label label-info">Info</span></a>
				<a href="#"><span class="label label-warning">Warning</span></a>
				<a href="#"><span class="label label-danger">Danger</span></a>
			  </h1>
			  <h2 class="t-button">
				<a href="#"><span class="label label-default">Default</span></a>
				<a href="#"><span class="label label-primary">Primary</span></a>
				<a href="#"><span class="label label-success">Success</span></a>
				<a href="#"><span class="label label-info">Info</span></a>
				<a href="#"><span class="label label-warning">Warning</span></a>
				<a href="#"><span class="label label-danger">Danger</span></a>
			  </h2>
			  <h3 class="t-button">
				<a href="#"><span class="label label-default">Default</span></a>
				<a href="#"><span class="label label-primary">Primary</span></a>
				<a href="#"><span class="label label-success">Success</span></a>
				<a href="#"><span class="label label-info">Info</span></a>
				<a href="#"><span class="label label-warning">Warning</span></a>
				<a href="#"><span class="label label-danger">Danger</span></a>
			  </h3>
			  <h4 class="typ1 t-button">
				<a href="#"><span class="label label-default">Default</span></a>
				<a href="#"><span class="label label-primary">Primary</span></a>
				<a href="#"><span class="label label-success">Success</span></a>
				<a href="#"><span class="label label-info">Info</span></a>
				<a href="#"><span class="label label-warning">Warning</span></a>
				<a href="#"><span class="label label-danger">Danger</span></a>
			  </h4>
			  <h5 class="typ1 t-button">
				<a href="#"><span class="label label-default">Default</span></a>
				<a href="#"><span class="label label-primary">Primary</span></a>
				<a href="#"><span class="label label-success">Success</span></a>
				<a href="#"><span class="label label-info">Info</span></a>
				<a href="#"><span class="label label-warning">Warning</span></a>
				<a href="#"><span class="label label-danger">Danger</span></a>
			  </h5>
			  <h6 class="typ1 t-button">
				<a href="#"><span class="label label-default">Default</span></a>
				<a href="#"><span class="label label-primary">Primary</span></a>
				<a href="#"><span class="label label-success">Success</span></a>
				<a href="#"><span class="label label-info">Info</span></a>
				<a href="#"><span class="label label-warning">Warning</span></a>
				<a href="#"><span class="label label-danger">Danger</span></a>
			  </h6>
	      </div>
		  <div class="grid_3 grid_5">
			 <h3 class="bars">Progress Bars</h3>
			  <div class="tab-content">
				 <div class="tab-pane active" id="domprogress">
					 <div class="progress">    
					      <div class="progress-bar progress-bar-primary" style="width: 20%"></div>
					 </div>
					 <p>Info with <code>progress-bar-info</code> class.</p>
					 <div class="progress">    
						 <div class="progress-bar progress-bar-info" style="width: 60%"></div>
					 </div>
					 <p>Success with <code>progress-bar-success</code> class.</p>
					 <div class="progress">
						 <div class="progress-bar progress-bar-success" style="width: 30%"></div>
					 </div>
					 <p>Warning with <code>progress-bar-warning</code> class.</p>
					 <div class="progress">
						 <div class="progress-bar progress-bar-warning" style="width: 70%"></div>
					 </div>
					 <p>Danger with <code>progress-bar-danger</code> class.</p>
					 <div class="progress">
						 <div class="progress-bar progress-bar-danger" style="width: 50%"></div>
					 </div>
					 <p>Inverse with <code>progress-bar-inverse</code> class.</p>
					 <div class="progress">
						 <div class="progress-bar progress-bar-inverse" style="width: 40%"></div>
					 </div>
					 <p>Inverse with <code>progress-bar-inverse</code> class.</p>
					 <div class="progress">
						 <div class="progress-bar progress-bar-success" style="width: 35%"><span class="sr-only">35% Complete (success)</span></div>
						 <div class="progress-bar progress-bar-warning" style="width: 20%"><span class="sr-only">20% Complete (warning)</span></div>
						 <div class="progress-bar progress-bar-danger" style="width: 10%"><span class="sr-only">10% Complete (danger)</span></div>
					 </div>
				   </div>
			   </div>
		   </div>
		   
		   <div class="grid_3 grid_5">
			 <h3>Pagination</h3>
			 <div class="col-md-6">
				  <nav>
				  <ul class="pagination pagination-lg">
					<li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
				  </ul>
				  </nav>
				  <nav>
				  <ul class="pagination">
					<li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
				  </ul>
				 </nav>
				 <nav>
				   <ul class="pagination pagination-sm">
					<li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
				  </ul>
				 </nav>				 
			 </div>
			 <div class="col-md-6">
					<ul class="pagination pagination-lg">
									<li class="disabled"><a href="#"><span aria-hidden="true">«</span></i></a></li>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
								</ul>
				<nav>
				  <ul class="pagination">
					<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
					<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
				 </ul>
			   </nav>
				 <ul class="pagination pagination-sm">
					<li class="disabled"><a href="#"><span aria-hidden="true">«</span></i></a></li>
					<li class="active"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
				</ul>
				</div>
			   <div class="clearfix"> </div>
		 </div>
	   <div class="grid_3 grid_5">
			 <h3 class="bars">Badges</h3>
				<div class="col-md-6">
					<p>Add modifier classes to change the appearance of a badge.</p>
					  <table class="table table-bordered">
						<thead>
							<tr>
								<th width="50%">Classes</th>
								<th width="50%">Badges</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>No modifiers</td>
								<td><span class="badge">42</span></td>
							</tr>
							<tr>
								<td><code>.badge-primary</code></td>
								<td><span class="badge badge-primary">1</span></td>
							</tr>
							<tr>
								<td><code>.badge-success</code></td>
								<td><span class="badge badge-success">22</span></td>
							</tr>
							<tr>
								<td><code>.badge-info</code></td>
								<td><span class="badge badge-info">30</span></td>
							</tr>
							<tr>
								<td><code>.badge-warning</code></td>
								<td><span class="badge badge-warning">412</span></td>
							</tr>
							<tr>
								<td><code>.badge-danger</code></td>
								<td><span class="badge badge-danger">999</span></td>
							</tr>
						</tbody>
					  </table>                    
				</div>
				<div class="col-md-6">
				  <p>Easily highlight new or unread items with the <code>.badge</code> class</p>
					<div class="list-group list-group-alternate"> 
						<a href="#" class="list-group-item"><span class="badge">201</span> <i class="ti ti-email"></i> Inbox </a> 
						<a href="#" class="list-group-item"><span class="badge badge-primary">5021</span> <i class="ti ti-eye"></i> Profile visits </a> 
						<a href="#" class="list-group-item"><span class="badge">14</span> <i class="ti ti-headphone-alt"></i> Call </a> 
						<a href="#" class="list-group-item"><span class="badge">20</span> <i class="ti ti-comments"></i> Messages </a> 
						<a href="#" class="list-group-item"><span class="badge badge-warning">14</span> <i class="ti ti-bookmark"></i> Bookmarks </a> 
						<a href="#" class="list-group-item"><span class="badge badge-danger">30</span> <i class="ti ti-bell"></i> Notifications </a> 
					</div>
			   </div>
			   <div class="clearfix"> </div>
			 </div>
		  <section id="tables">
          <div class="page-header">
            <h1>Tables</h1>
          </div>
          <h2>Default styles</h2>
          <p>For basic stylinglight padding and only horizontal add the base class <code>.table</code> to any <code>&lt;table&gt;</code>.</p>
          <div class="bs-docs-example">
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
          </div>
	<hr class="bs-docs-separator">
          <p>Add any of the following classes to the <code>.table</code> base class.</p>
          <p>Adds zebra-striping to any table row within the <code>&lt;tbody&gt;</code> via the <code>:nth-child</code> CSS selector (not available in IE7-8).</p>
          <div class="bs-docs-example">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
          </div>
          <p>Add borders and rounded corners to the table.</p>
          <div class="bs-docs-example">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td rowspan="2">1</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@getbootstrap</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td colspan="2">Larry the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
          </div>
          <p>Enable a hover state on table rows within a <code>&lt;tbody&gt;</code>.</p>
          <div class="bs-docs-example">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td colspan="2">Larry the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
          </div>

	</div>
</div>
<!--//typography-->
<!--contact-->
<div id="contact" class="contact">
	<div class="container">
		<h3>CONTACT US</h3>
		<p>Please contact us for all inquiries and purchase options.</p>
			<div class="cont-grids">
				<div class="col-md-6 contact-left">
					<form>
						 <input type="text" placeholder="NAME" required="">
						 <input type="text" placeholder="SURNAME" required="">			 
						 <input class="user" type="text" placeholder="E-MAIL" required=""><br>
						 <textarea placeholder="MESSAGE"></textarea>
						 <input type="submit" value="SEND">
					</form>
				</div>
				<div class="col-md-6 contact-right">
					<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2482.432383990807!2d0.028213999961443994!3d51.52362882484525!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1423469959819" frameborder="0" style="border:0"></iframe>
				</div>
				<div class="clearfix"></div>
			</div>
	</div>
</div>
@stop
<!--footer-->