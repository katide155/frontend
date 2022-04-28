	<!-- menu navigation -->
	<aside class="sidebar col-3 col-sm-12">
		<div class="sidebarcont" >
			<div class="sidebarLiTop">
				
				<div class="sidebarLiTopText">
					<div class="sidebarLiTopImg">
						<img src="include/img/searchIcon.png" alt="sico" />
					</div>Daugiau apie mus...
				</div>
				
			</div>
			<div class="clear"></div>
			<ul>
				<li class="<?php if ($page == 'AboutPage')
									echo "";
								 else
									echo ""; 
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
				<li class="<?php if ($page == 'ClientsPage')
									echo $aktyvi;
								 else
									echo $neakt; 
							?>">
					<a href="?psl=ClientsPage">Klientai</a>
				</li>
				<li class="<?php if ($page == 'NewsPage')
									echo $aktyvi;
								 else
									echo $neakt; 
							?>">
					<a href="?psl=NewsPage">Naujienos</a>
				</li>
			</ul>	
			<div class="clear"></div>
			<div class="sidebarLiBot">
				<div class="sidebarLiBotText">
					<div class="sidebarLiBotImg">
						<img src="include/img/chatIcon.png" alt="sico" />
					</div>Klientų atsiliepimai
				</div>
				<div class="clear"></div>
				<div class="sidebarLiBotCom">
					<div class="sidebarLiBotCT"><img src="include/img/quotesTop.png" alt="sico" /></div>
					<p>čia gyvena kliento atsiliepimas</p>
					<div class="sidebarLiBotCB"><img src="include/img/quotesBot.png" alt="sico" /></div>
					<div class="sidebarLiBotCa"><img src="include/img/pngegg.png" alt="sico" /></div>
				<div>
			</div>
		</div>
	</aside> 
