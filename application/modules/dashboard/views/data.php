
<br><br>
<div class="container">
<h4>Infinity Scroll</h4>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Image Title</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
    <tr ng-repeat='y in datadb'>
        <td >{{y.id}}</td>
    	<td>{{y.title}}</td>
    	<td><img ng-src='<?=base_url()?>assets/website/uploads/{{y.image}}' style="height: 100px;width:100px"></td>
    </tr>
  </tbody>
</table>
</div>
