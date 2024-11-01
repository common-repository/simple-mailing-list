<div class="wrap">
<?php if(function_exists('screen_icon')) screen_icon(); ?>



<h2>Mail Address</h2>



<textarea cols="100%" onfocus="this.select()">
<?php
$result = $wpdb->get_results("select * from $wpdb->comments order by comment_author_email");
foreach ($result as $result) {
	if ($before<>$result->comment_author_email) {
		echo $result->comment_author_email.", ";
	}
	$before = $result->comment_author_email;
} 
?>
</textarea>


<h2>Easy Mailing List</h2>
<?php
global $wpdb;
$result = $wpdb->get_results("select * from $wpdb->comments order by comment_author_email");
?>

<div class="updated fade">
Currently there are <?php echo mysql_affected_rows();?> email addresses on your blog database. <br/>
After got email addresses then <a href="http://mr.hokya.com/simple-mailing-list" target="_blank">what's next ?</a>
</div>

<?php
echo "<style>.tabel td {padding:10px;}</style>";
echo "<table class='tabel'><tr><td>Email</td><td>Website</td><td>IP Address</td></tr>";
foreach ($result as $result) {
	if ($before<>$result->comment_author_email) {
		echo "<tr>";
		echo "<td>".$result->comment_author_email."</td>";
		echo "<td>".$result->comment_author_url."</td>";
		echo "<td>".$result->comment_author_IP."</td>";
		echo "</tr>";
	}
	$before = $result->comment_author_email;
}
echo "</table>";
?>
</div>