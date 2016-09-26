
<div class="container" ng-app="myApp" ng-controller="Main">
  <h3>Angular One: Data List &amp; Modals</h3>
  <ul class="list-unstyled">
  	<li data-ng-repeat="item in data track by $index">
      <label class="customLabel" id="{{item.id}}"><a href="" ng-click="setSelectedItem($index)" data-toggle="modal" data-target="#detailsModal">{{item.title}} - {{item.category_name}}</a></label>
      <div class="pull-right actions">
        <a href="" class="trash" data-toggle="modal" data-target="#deleteModal" ng-click="setSelectedItem($index)">x</a>
      </div>
    </li>
  </ul>

  <div id="detailsModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          <h4 class="modal-title">{{data[selectedItem].title}} Details</h4>
        </div>
        <div class="modal-body">
          <div class="modalMsg"><p>id:{{data[selectedItem].id}} - {{data[selectedItem].desc}}</p></div>
          <div class="actionsBtns">
            <button class="btn btn-default" data-dismiss="modal">OK</button>
          </div>
        </div>
      </div>
    </div>
  </div><!--/modal-->

  <div id="deleteModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          <h4 class="modal-title" id="myModalLabel">Confirm</h4>
        </div>
        <div class="modal-body">
          <div class="modalMsg"><p>Are you sure want to remove item #{{selectedItem+1}}?</p></div>
          <div class="actionsBtns">
            <button class="btn btn-default" ng-click="deleteItem()" data-dismiss="modal">Yes</button>
            <button class="btn btn-default" data-dismiss="modal">No</button>
          </div>
        </div>
      </div>
    </div>
  </div><!--/modal-->

</div><!--/container-->
