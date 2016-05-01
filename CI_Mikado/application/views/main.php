<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('/template/header'); ?>
<body>
<div id='container'>
	<div id='title'><img src="http://images2.makefive.com/images/entertainment/culture/best-product-mascots/bibendum-the-michelin-man-7.jpg" onclick="window.location = 'http://bisonpc.net/Michelin'" style="cursor:pointer"/><div id="titleText"><?php echo $message?></div></div>

<div id="leftColumn">
<?php $this->load->view('form_partial'); ?>
</div>
<div id="rightColumn">
<?php echo $guid?>
<?php echo $content?>
</div>
<?php $this->load->view('/template/footer'); ?>
</div>

</body>
</html>