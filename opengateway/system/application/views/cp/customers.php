<?=$this->load->view('cp/header');?>
<h1>Customer database</h1>
<?=$this->dataset->TableHead();?>
<?
if (!empty($this->dataset->data)) {
	foreach ($this->dataset->data as $row) {
	?>
		<tr rel="<?=$row['id'];?>">
			<td><input type="checkbox" name="check_<?=$row['id'];?>" value="1" class="action_items" /></td>
			<td><?=$row['id'];?></td>
			<td><?=$row['first_name'];?></td>
			<td><?=$row['last_name'];?></td>
			<td><?=$row['email'];?></td>
			<td><?

if (isset($row['plans'])) {
	foreach ($row['plans'] as $plan) {
		?><?=$plan['name'];?><br /><?
	}
}
			
?></td>
		</tr>
	<?
	}
}
else {
?>
<tr><td colspan="6">Empty data set.</td></tr>
<?
}	
?>
<?=$this->dataset->TableClose();?>
<?=$this->load->view('cp/footer');?>