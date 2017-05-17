
<?php if ($mode=='admin'): ?>
	
		<p>Zalogowany jako administrator.</p>
	
	<?php else: ?>
		<?php if ($mode=='author'): ?>
			
				<p>Zalogowany jako <?php echo $_SESSION['AUTHOR_DEGREE']; ?> <?php echo $_SESSION['AUTHOR_NAME']; ?>.</p>
			
			<?php else: ?>
				<p></p>
			
		<?php endif; ?>
	
<?php endif; ?>
</body>
</html>