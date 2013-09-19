<div>
	<div id="Discipliner" class="discipliner">
		<?php
		$winsplits = 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=';
		?>
		
		<h1> Resultat från SM i orientering sedan 1997 </h1>
		
				<a href="?id=1" >Stafett</a><br>
			
			<?php
			if (isset($_GET["id"])) {
				 if($_GET["id"] === "1") : ?>  
				 
					<?php $con = mysql_connect("localhost","ol4an","ololol4an");  
						mysql_select_db("results", $con);
						$result = mysql_query("SELECT * FROM competition WHERE type='1'");
						
						while($row = mysql_fetch_array($result))
						  {
						   ?> <a href="<?php echo $row['link'] ?>"> - <?php echo $row['year'] ?> </a><br>
							<?php
						 }
						
						?>
					
			
			<?php endif; }?>
				
				<a href="?id=2" >Lång </a><br>
				
			<?php
				if (isset($_GET["id"])) {
				if($_GET["id"] === "2") : ?> 
					
					<?php $con = mysql_connect("localhost","ol4an","ololol4an");  
						mysql_select_db("results", $con);
						$result = mysql_query("SELECT * FROM competition WHERE type='1'");
						
						while($row = mysql_fetch_array($result))
						  {
						   ?> <a href="<?php echo $row['link'] ?>"> - <?php echo $row['year'] ?> </a><br>
							<?php
						 }
						
						?>
				
			<?php endif; }?>
				
				<a href="?id=3" >Medel </a><br>
			
			<?php
				if (isset($_GET["id"])) {
				if($_GET["id"] === "3") : ?> 
				
					<?php $con = mysql_connect("localhost","ol4an","ololol4an");  
						mysql_select_db("results", $con);
						$result = mysql_query("SELECT * FROM competition WHERE type='1'");
						
						while($row = mysql_fetch_array($result))
						  {
						   ?> <a href="<?php echo $row['link'] ?>"> - <?php echo $row['year'] ?> </a><br>
							<?php
						 }
						
						?>
			
			<?php endif; }?>
				
				<a href="?id=4" >Sprint </a><br>
				
				<?php
				if (isset($_GET["id"])) {
				if($_GET["id"] === "4") : ?> 
				
					<?php $con = mysql_connect("localhost","ol4an","ololol4an");  
						mysql_select_db("results", $con);
						$result = mysql_query("SELECT * FROM competition WHERE type='1'");
						
						while($row = mysql_fetch_array($result))
						  {
						   ?> <a href="<?php echo $row['link'] ?>"> - <?php echo $row['year'] ?> </a><br>
							<?php
						 }
						
						?>
			
			<?php endif; }?>
			
				<a href="?id=5" >Natt </a><br>
				
				<?php
				if (isset($_GET["id"])) {
				if($_GET["id"] === "5") : ?> 
				
					<?php $con = mysql_connect("localhost","ol4an","ololol4an");  
						mysql_select_db("results", $con);
						$result = mysql_query("SELECT * FROM competition WHERE type='1'");
						
						while($row = mysql_fetch_array($result))
						  {
						   ?> <a href="<?php echo $row['link'] ?>"> - <?php echo $row['year'] ?> </a><br>
							<?php
						 }
						
						?>
			
			<?php endif; }?>
				
				<a href="?id=6" >Ultralång </a><br>	
				
				<?php
				if (isset($_GET["id"])) {
				if($_GET["id"] === "6") : ?> 
				
					<?php $con = mysql_connect("localhost","ol4an","ololol4an");  
						mysql_select_db("results", $con);
						$result = mysql_query("SELECT * FROM competition WHERE type='1'");
						
						while($row = mysql_fetch_array($result))
						  {
						   ?> <a href="<?php echo $row['link'] ?>"> - <?php echo $row['year'] ?> </a><br>
							<?php
						 }
						
						?>
			
			<?php endif; }?>
						
	</div>
	
</div>