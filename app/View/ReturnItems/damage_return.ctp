<div class="main_content">
	<div class="inner_content">
		<fieldset class='stockorder'>
			<div class='subinner'>
				<div class="hmediv">
					<?php
						if($this->Session->check('eid')):
					?>
					<form>
						<button formaction="/kabhee B/ReturnItems/select_return" class="current">Damage Return</button>
						<button formaction="/kabhee B/ReturnItems/fresh_return" class="current">Fresh Return</button>	
					</form>
					<?php
    					endif;
					?>
				</div>	
			</div>
		</fieldset>
	</div>
</div>
<style type="text/css">
.success, .message, .cake-error, p.error, .error-message {
    background: repeat-x scroll 0 0 #AF6234;
    border: 1px solid rgba(0, 0, 0, 0.5);
    clear: both;
    color: #FFFFFF;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.3);
}
</style>