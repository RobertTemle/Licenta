<?php
	session_start();
?>
	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="header__content">
						<div class="header__logo">
							<a href="index-logged.php">
								<img src="img/logo3.svg" alt="">
							</a>
						</div>

						<div class="header__menu">
							<ul class="header__nav">

						<?php


						require_once("php/connect.php");
						require_once("php/functions.php");

						$page=basename($_SERVER['PHP_SELF']);
						$userType = $_SESSION["userType"];

						$querry="SELECT pagini.Meniu , pagini.nume_meniu, pagini.pagina FROM pagini INNER JOIN drepturi ON drepturi.IdPage=pagini.Id WHERE drepturi.userType='$userType'";

						$sql1 = mysqli_query($conn,$querry);

						$rows= mysqli_num_rows($sql1);

						if ($rows > 0) {
 
							$sw=0;


      					while ($myrow=mysqli_fetch_array($sql1,MYSQLI_ASSOC)){
      						if ($myrow["pagina"]==$page){
      						 $sw=1;
      						}
							if ($myrow["Meniu"]==1){
								echo "<li class=header__nav-item><a class=header__nav-link href='".$myrow["pagina"]."'>".$myrow["nume_meniu"]."</a></li>";
							}
						                
						}
						}

						if ($sw==0){
						  redirect("php/logout.inc.php");
						}

						?>

							</ul>
						</div>

						<div class="header__actions">
							<div class="header__phone">
								<a href="tel:88002345678">8 800 234 56 78</a>
								<span>Mon - Sat: 9:00 am - 6:00 pm</span>
							</div>

							<div class="header__action">
								<a class="header__profile-btn" href="#" role="button" id="dropdownMenuProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M15.71,12.71a6,6,0,1,0-7.42,0,10,10,0,0,0-6.22,8.18,1,1,0,0,0,2,.22,8,8,0,0,1,15.9,0,1,1,0,0,0,1,.89h.11a1,1,0,0,0,.88-1.1A10,10,0,0,0,15.71,12.71ZM12,12a4,4,0,1,1,4-4A4,4,0,0,1,12,12Z"/></svg>
								</a>

								<ul class="dropdown-menu header__profile-menu" aria-labelledby="dropdownMenuProfile">
									<li><a href="account.php"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M15.71,12.71a6,6,0,1,0-7.42,0,10,10,0,0,0-6.22,8.18,1,1,0,0,0,2,.22,8,8,0,0,1,15.9,0,1,1,0,0,0,1,.89h.11a1,1,0,0,0,.88-1.1A10,10,0,0,0,15.71,12.71ZM12,12a4,4,0,1,1,4-4A4,4,0,0,1,12,12Z"/></svg> <span>My account</span></a></li>
									<li><a href="account.php"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19.9,12.66a1,1,0,0,1,0-1.32L21.18,9.9a1,1,0,0,0,.12-1.17l-2-3.46a1,1,0,0,0-1.07-.48l-1.88.38a1,1,0,0,1-1.15-.66l-.61-1.83A1,1,0,0,0,13.64,2h-4a1,1,0,0,0-1,.68L8.08,4.51a1,1,0,0,1-1.15.66L5,4.79A1,1,0,0,0,4,5.27L2,8.73A1,1,0,0,0,2.1,9.9l1.27,1.44a1,1,0,0,1,0,1.32L2.1,14.1A1,1,0,0,0,2,15.27l2,3.46a1,1,0,0,0,1.07.48l1.88-.38a1,1,0,0,1,1.15.66l.61,1.83a1,1,0,0,0,1,.68h4a1,1,0,0,0,.95-.68l.61-1.83a1,1,0,0,1,1.15-.66l1.88.38a1,1,0,0,0,1.07-.48l2-3.46a1,1,0,0,0-.12-1.17ZM18.41,14l.8.9-1.28,2.22-1.18-.24a3,3,0,0,0-3.45,2L12.92,20H10.36L10,18.86a3,3,0,0,0-3.45-2l-1.18.24L4.07,14.89l.8-.9a3,3,0,0,0,0-4l-.8-.9L5.35,6.89l1.18.24a3,3,0,0,0,3.45-2L10.36,4h2.56l.38,1.14a3,3,0,0,0,3.45,2l1.18-.24,1.28,2.22-.8.9A3,3,0,0,0,18.41,14ZM11.64,8a4,4,0,1,0,4,4A4,4,0,0,0,11.64,8Zm0,6a2,2,0,1,1,2-2A2,2,0,0,1,11.64,14Z"/></svg> <span>Settings</span></a></li>
									<li><a href="php/logout.inc.php"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M4,12a1,1,0,0,0,1,1h7.59l-2.3,2.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l4-4a1,1,0,0,0,.21-.33,1,1,0,0,0,0-.76,1,1,0,0,0-.21-.33l-4-4a1,1,0,1,0-1.42,1.42L12.59,11H5A1,1,0,0,0,4,12ZM17,2H7A3,3,0,0,0,4,5V8A1,1,0,0,0,6,8V5A1,1,0,0,1,7,4H17a1,1,0,0,1,1,1V19a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V16a1,1,0,0,0-2,0v3a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V5A3,3,0,0,0,17,2Z"/></svg> <span>Sign out</span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</header>