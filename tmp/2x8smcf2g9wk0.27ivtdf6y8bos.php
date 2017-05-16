
<?php if ($mode=='admin'): ?>
	
		<p>Zalogowany jako administrator.</p>
	
	<?php else: ?>
		<?php if ($mode=='author'): ?>
			
				<p>Zalogowany jako autor.</p>
			
			<?php else: ?>
				<p></p>
			
		<?php endif; ?>
	
<?php endif; ?>
</body>
</html>