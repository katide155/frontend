	<!-- menu navigation -->

		<ul>
			<li class="<?php if ($page == 'AboutPage')
								echo $aktyvi;
							 else
								echo $neakt; 
						?>">
				<a href="?psl=AboutPage">Apie mus</a>
			</li>
			<li class="<?php if ($page == 'ArticlesPage')
								echo $aktyvi;
							 else
								echo $neakt; 
						?>">
				<a href="?psl=ArticlesPage">Straipsniai</a>
			</li>
			<li class="<?php if ($page == 'GaleryPage')
								echo $aktyvi;
							 else
								echo $neakt; 
						?>">
				<a href="?psl=GaleryPage">Galerija</a>
			</li>

			<li class="<?php if ($page == 'NewsPage')
								echo $aktyvi;
							 else
								echo $neakt; 
						?>">
				<a href="?psl=NewsPage">Naujienos</a>
			</li>
			<li class="<?php if ($page == 'ContactsPage')
								echo $aktyvi;
							 else
								echo $neakt; 
						?>">
				<a href="?psl=ContactsPage">Kontaktai</a>
			</li>
		</ul>			

