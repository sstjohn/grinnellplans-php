<form action="<?php echo $this->action; ?>" method="<?php echo $this->method; ?>"<?php echo $this->tag_attributes; ?>>
<textarea id="edit_textarea" rows="<?php echo $this->rows; ?>" cols="<?php echo $this->columns; ?>" name="plan" onkeyup="javascript:checkPlanLength();">
<?php
echo $this->text;
?></textarea><br /><?php // This br is helpful for formatting, but why?!
 ?>
		<?php $this->otherinputs_template->display(); ?>
		<div id="edit_fill_meter">
			<div class="fill_bar"><div class="full_amount"></div></div>
			<div class="fill_percent">0%</div>
		</div>
		&nbsp;&nbsp;&nbsp;<?php if ($this->submitable == 1) { ?><input type="submit" value="Change Plan" /><?php } ?>
<?php foreach($this->contents as $template): ?>
        <?php $template->display(); ?>
<?php
endforeach ?>
	</form>
