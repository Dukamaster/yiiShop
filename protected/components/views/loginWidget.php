<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3>Login Block</h3>
  </div>
  <div class="modal-body">
		 <?php Yii::app()->runController("user/login");?>
  </div>
</div>