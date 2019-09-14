<?php //File fetcher
	function get_dir($d, $c){
		$dir = $d."/*".$c.".*"; // Example: download/gci/filename.us.gci or rel/filname.GZ2E01.gct
		$f = glob($dir);
		$f = array_combine($f, array_map('filectime', $f));
		arsort($f);
		echo key($f);
	};
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="icon" href="favicon.png">
		<title>TP Randomizer</title>
		<meta property="og:title" content="Twilight Princess Randomizer" />
		<meta property="og:url" content="https://rando.tpspeed.run/" />
		<meta property="og:image" content="https://rando.tpspeed.run/img/logo.png" />
		<meta property="og:description" content="The official Twilight Princess Randomizer website! From download to setup and even tools!" />
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<img src="img/logo.png"/>
		<div id="IsIE">
			<b>Your web browser is obsolete.</b>
			<br />
			Update your browser for more security, and in order to see this website.
			<br />
			There are plenty of other browsers far more secure and modern, for example 
			<a href="https://www.google.com/chrome/" style="color: red;">Chrome</a>
			 or 
			<a href="https://www.mozilla.org/en-US/firefox/new/" style="color: red;">Firefox.</a>
		</div>
		<div id="IsNotIE">
			<div class="blackbg">
				<h1>Quick download</h1>
				<a href="<?php get_dir('download/gci','us'); ?>" download><img class="blackbor flag" src="img/usa.jpg" /></a>
				<a href="<?php get_dir('download/gci','eu'); ?>" download><img class="blackbor flag" src="img/eur.jpg" /></a>
				<a href="<?php get_dir('download/gci','jp'); ?>" download><img class="blackbor flag" src="img/jpn.jpg" /></a>
			</div>
			<div class="blackbg">
				<h1>Set up guide</h1>
				<hr />
				<p>
					Which version of the game are you using?
				</p>
				<label>
					<input type="radio" name="reg" value="1">
					<div class="btn btn-1 btn-1a" type="button" onclick="GameVer('usa')">
						USA
						<br />
						GZ2E01
					</div>
				</label>
				<label>
					<input type="radio" name="reg" value="2">
					<div class="btn btn-1 btn-1a" type="button" onclick="GameVer('eur')">
						Europe
						<br />
						GZ2P01
					</div>
				</label>
				<label>
					<input type="radio" name="reg" value="3">
					<div class="btn btn-1 btn-1a" type="button" onclick="GameVer('jap')">
						Japanese
						<br />
						GZ2J01
					</div>
				</label>
				<p>
					Please click on the tutorial you want to follow.
				</p>
				<div class="dropdown-container">
					<header class="clearfix">
						<hr class="hr2" />
						<h2>Playing on Wii</h2>
						<hr class="hr2" />
					</header>
					<article>
						<div class="article-inner">
							<p>
								<b>Setting up your SD Card</b>
								<br />
								Download these three files:
							</p>
							<table>
								<tr>
									<td class="rBor">
										<a href="https://takarikka.github.io/files/nintendont.zip" target="_blank"><img src="img/nintendont.png" /></a>
									</td>
									<td class="rBor">
										<a href="https://takarikka.github.io/files/gcmm.zip" target="_blank"><img src="img/github.png" /></a>
									</td>
									<td>
										<a href="https://mirror.tpspeed.run/Software/Homebrew/Wii/NeoGamma%20Twilight%20Princess.zip" target="_blank"><img src="img/neogamma.png" /></a>
									</td>
								</tr>
								<tr>
									<td class="rBor">
										<a href="https://takarikka.github.io/files/nintendont.zip" target="_blank">Nintendont<br />Package</a>
									</td>
									<td class="rBor">
										<a href="https://takarikka.github.io/files/gcmm.zip" target="_blank">GCMM 1.4f</a>
									</td>
									<td>
										<a href="https://mirror.tpspeed.run/Software/Homebrew/Wii/NeoGamma%20Twilight%20Princess.zip" target="_blank">Neogamma</a>
									</td>
								</tr>
							</table>
							<p>
							Install Neogamma using your Homebrew Channel.
							</p>
							<p>
								Create an "apps" folder on your SD card then extract the files you downloaded earlier in it.
								<br />
								Create two new folders at the root of your SD card, they will be called "codes" and "MCBACKUP".
								<br />
								Download the REL Loader cheat for to your region:
							</p>
							<a class="usa" href="<?php get_dir('download/gct','GZ2E01'); ?>" download><img class="usa blackbor flag"src="img/usa.jpg" /></a>
							<a class="eur" href="<?php get_dir('download/gct','GZ2P01'); ?>" download><img class="eur blackbor flag" src="img/eur.jpg" /></a>
							<a class="jap" href="<?php get_dir('download/gct','GZ2J01'); ?>" download><img class="jap blackbor flag"src="img/jpn.jpg" /></a>
							<p>
								Place REL Loader cheat in the "codes" folder.
								<br />
								Download the lastest version of the download/gci for your game region:
							</p>
							<a class="usa" href="<?php get_dir('download/gci','us'); ?>" download><img class="usa blackbor flag" src="img/usa.jpg" /></a>
							<a class="eur" href="<?php get_dir('download/gci','eu'); ?>" download><img class="eur blackbor flag" src="img/eur.jpg" /></a>
							<a class="jap" href="<?php get_dir('download/gci','jp'); ?>" download><img class="jap blackbor flag" src="img/jpn.jpg" /></a>
							<p>
								Create a "MCBACKUP" folder.
								<br />
								Place the .gci file in the "MCBACKUP" folder.
								<br />
								If you followed each step correctly, you should have something like this:
							</p>
							<div class="tree blackbg">
								<ul>
									<li>
										SD
										<ul>
											<li>
												apps
												<ul>
													<li>gcmm</li>
													<ul>
														<li>boot.dol</li>
														<li>icon.png</li>
														<li>meta.xml</li>
													</ul>
													<li>nintendont</li>
													<ul>
														<li>boot.dol</li>
														<li>icon.png</li>
														<li>meta.xml</li>
													</ul>
												</ul>
											</li>
											<li>
												codes
												<ul>
													<li>GZ2X01.gct</li>
												</ul>
											</li>
											<li>
												MCBACKUP
												<ul>
													<li>download/gci.gci</li>
												</ul>
											</li>
										</ul>
									</li>
								</ul>
							</div>
							<!-- 
							<p>
								Here is a picture of each folder:
							</p>
							<img src="img/sd.jpg" />
							  -->
							<p>
								<b>Setting up your Wii</b>
								<br />
								Launch GCMM on your Wii and restore the .gci file to your memory card
								<br />
								<img class="blackbor" src="img/wii_1.jpg" />
								<img class="blackbor" src="img/wii_2.jpg" />
								Launch Nintendont or another Loader and turn cheats "on" in the options
								<br />
								<img class="blackbor" src="img/wii_3.jpg" />
								If you're using NeogammaTP, turn off Custom TP Cheats
								<br />
								<img class="blackbor" src="img/wii_4.jpg" />
								<img class="blackbor" src="img/wii_5.jpg" />
								Launch game!
							</p>
							<hr />
						</div>
					</article>
				</div>
				<div class="dropdown-container">
					<header class="clearfix">
						<hr class="hr2" />
						<h2>Playing on Dolphin</h2>
						<hr class="hr2" />
					</header>
					<article>
						<div class="article-inner">
							<p>
								Download Dolphin:
							</p>
							<table>
								<tr>
									<td>
										<a href="https://en.dolphin-emu.org/download/" target="_blank"><img src="img/dolphin.png" /></a>
									</td>
								</tr>
								<tr>
									<td>
										<a href="https://en.dolphin-emu.org/download/" target="_blank">Dolphin Emulator</a>
									</td>
								</tr>
							</table>
							<p>
								Which version of Dolphin are you using?
							</p>
							<p style="color: #d62013; font-size: 1em; margin-top: -22.5px;">
								Disclaimer: This is sometimes innacurate, if you don't see the same thing than on the screenshots and cannot follow the tutorial, please click on the other button.
							</p>
							<label>
								<input type="radio" name="ver" value="1">
								<div class="btn btn-1 btn-1a" type="button" onclick="DolVer('low5')">
									Lower than 5.0-7
								</div>
							</label>
							<label>
								<input type="radio" name="ver" value="2" checked>
								<div class="btn btn-1 btn-1a" type="button" onclick="DolVer('high5')">
									5.0-7 or higher
								</div>
							</label>
							<p>
								Download the REL Loader cheat for to your region:
							</p>
							<a class="usa" href="<?php get_dir('download/gct','GZ2E01'); ?>" download><img class="usa blackbor flag" src="img/usa.jpg" /></a>
							<a class="eur" href="<?php get_dir('download/gct','GZ2P01'); ?>" download><img class="eur blackbor flag" src="img/eur.jpg" /></a>
							<a class="jap" href="<?php get_dir('download/gct','GZ2J01'); ?>" download><img class="jap blackbor flag" src="img/jpn.jpg" /></a>
							<p>
								Open Dolphin, right click on TP and open properties
							</p>
							<img class="blackbor" src="img/dol_1.png" />
							<p>
								Go to the "Gecko Codes" tab and click on 
								<span class="spanLow5">"Edit Config"</span>
								<span class="spanHigh5">"Add New Code"</span>
							</p>
							<img class="high5 blackbor" src="img/dol_2.png" />
							<img class="low5 blackbor" src="img/dol_2_oldv.png" />
							<p>
								Copy this REL Loader code for to your game region:
							</p>
							<a class="usa" href="https://github.com/zsrtp/GC-DevTools/blob/master/relloader/Code/RELLoaderGecko_US.txt" download><img class="usa blackbor flag" src="img/usa.jpg" /></a>
							<a class="eur" href="https://github.com/zsrtp/GC-DevTools/blob/master/relloader/Code/RELLoaderGecko_EU.txt" download><img class="eur blackbor flag" src="img/eur.jpg" /></a>
							<a class="jap" href="https://github.com/zsrtp/GC-DevTools/blob/master/relloader/Code/RELLoaderGecko_JP.txt" download><img class="jap blackbor flag" src="img/jpn.jpg" /></a>
							<p>
								<span class="spanLow5">Make a new line with "[Gecko]" and paste the REL Loader code under it</span>
								<span class="spanHigh5">Paste the code in the "Code:" black space and click on "Save"</span>
							</p>
							<img class="high5 blackbor" src="img/dol_3.png" />
							<img class="low5 blackbor" src="img/dol_3_oldv.png" />
							<p>
								Save and close config. Make sure code is enabled
							</p>
							<br />
							<img class="high5 blackbor" src="img/dol_4.png" />
							<img class="low5 blackbor" src="img/dol_4_oldv.png" />
							<p>
								Download the lastest version of the download/gci for your game region:
							</p>
							<a class="usa" href="<?php get_dir('download/gci','us'); ?>" download><img class="usa blackbor flag" src="img/usa.jpg" /></a>
							<a class="eur" href="<?php get_dir('download/gci','eu'); ?>" download><img class="eur blackbor flag" src="img/eur.jpg" /></a>
							<a class="jap" href="<?php get_dir('download/gci','jp'); ?>" download><img class="jap blackbor flag" src="img/jpn.jpg" /></a>
							<p>
								In Dolphin, go to tools, and open the Memory Card Manager
							</p>
							<img class="blackbor" src="img/dol_5.png" />
							<p>
								Import the 'download/gci'.gci to your memory card
							</p>
							<img class="blackbor" src="img/dol_6.png" />
							<p>
								Launch game!
							</p>
						</div>
					</article>
				</div>
			</div>
			<div class="blackbg">
				<h1>Tools and resources</h1>
				<hr />
				<br />
				<table>
					<tr>
						<td class="rBor">
							<a href="https://takarikka.github.io/TP-Tracker/" target="_blank"><img src="img/github.png" /></a>
						</td>
						<td class="rBor">
							<a href="https://docs.google.com/spreadsheets/d/1quJjkAGV7asF1CNRtJEDNsy9Oga7hmzGLe09u2zxdJI/edit#gid=1131787935" target="_blank"><img src="img/sheets.png" /></a>
						</td>
						<td class="rBor">
							<a href="http://tp.docs.aecx.cc/Yet+Another+GameCube+Documentation/index.html" target="_blank"><img src="img/yagcd.png" /></a>
						</td>
						<td class="rBor">
							<a href="https://github.com/zsrtp" target="_blank"><img src="img/tp.png" /></a>
						</td>
						<td class="rBor">
							<a href="https://wiki.tpspeed.run/Main_Page" target="_blank"><img src="img/wiki.png" /></a>
						</td>
						<td>
							<a href="https://discord.tpspeed.run/" target="_blank"><img src="img/discord.png" /></a>
						</td>
					</tr>
					<tr>
						<td class="rBor">
							<a href="https://takarikka.github.io/TP-Tracker/" target="_blank">Taka's Item Tracker</a>
						</td>
						<td class="rBor">
							<a href="https://docs.google.com/spreadsheets/d/1quJjkAGV7asF1CNRtJEDNsy9Oga7hmzGLe09u2zxdJI/edit#gid=1131787935" target="_blank">Rando Dev Sheet</a>
						</td>
						<td class="rBor">
							<a href="http://tp.docs.aecx.cc/Yet+Another+GameCube+Documentation/index.html" target="_blank">YAGCD</a>
						</td>
						<td class="rBor">
							<a href="https://github.com/zsrtp" target="_blank">TP Devs</a>
						</td>
						<td class="rBor">
							<a href="https://wiki.tpspeed.run/Main_Page" target="_blank">TP Speedrun Wiki</a>
						</td>
						<td>
							<a href="https://discord.tpspeed.run/" target="_blank">Discord</a>
						</td>
					</tr>
				</table>
			</div>
			<div class="blackbg" style="padding: 0px; margin-bottom: 0px;">
				<p>
					v1.08 - Made with 
					<img style="display: inline; margin: 0px 0px -10px;" src="img/heart.png" />
					 by 
					<a href="https://github.com/zsrtp/Randomizer-Frontend" target="_blank" style="color: #d62013;">Luneyes</a>
				</p>
			</div>
		</div>
	</body>
	<script src="script.js"></script>
</html>
