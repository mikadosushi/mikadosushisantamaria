<form action="<?php $this->load->helper('url');echo site_url('welcome/getRecord');?>" method="POST">
	
	<input name="ID" id="ID" type="text" placeholder="Bill To/Ship To Number"></input><br/>
	<button class="button" type="submit" value="">Lookup Bill To/Ship To Number</button>
	
</form>