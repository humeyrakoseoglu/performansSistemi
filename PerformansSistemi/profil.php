<!--HÜMEYRA KÖSEOĞLU-->

<?php

/* VERİLERİN MYSQL SORGULARI İLE VERİTABANINDAN ÇEKİLMESİ */

$uye_id=$_GET["id"];
$v = $db->prepare("select * from devamsizlik where id=? ");
$v->execute(array($uye_id));
$d = $v->fetch(PDO::FETCH_ASSOC);

$a = $db->prepare("select * from onerisayisi where id=? ");
$a->execute(array($uye_id));
$o = $a->fetch(PDO::FETCH_ASSOC);

$w = $db->prepare("select * from hurda where id=? ");
$w->execute(array($uye_id));
$h = $w->fetch(PDO::FETCH_ASSOC);

$e = $db->prepare("select * from sarikart_tutanak where id=? ");
$e->execute(array($uye_id));
$s = $e->fetch(PDO::FETCH_ASSOC);

$z = $db->prepare("select * from takttime_rotasyon where id=? ");
$z->execute(array($uye_id));
$t = $z->fetch(PDO::FETCH_ASSOC);

$r = $db->prepare("select * from 5s_kurallari where id=? ");
$r->execute(array($uye_id));
$x = $r->fetch(PDO::FETCH_ASSOC);

$n = $db->prepare("select * from takimcalismasi where id=? ");
$n->execute(array($uye_id));
$k = $n->fetch(PDO::FETCH_ASSOC);

$ö = $db->prepare("select * from isg_cevre where id=? ");
$ö->execute(array($uye_id));
$i = $ö->fetch(PDO::FETCH_ASSOC);

?>

			<?php 

			/* DEVAMSIZLIK TABLOSU UPDATE KODU */
			if($_POST){
		        $devamsizlikocak  =  $_POST["ocak"];
				$devamsizliksubat = $_POST["subat"];
				$devamsizlikmart = $_POST["mart"];
				$devamsizlinisan  = $_POST["nisan"];
				$devamsizlikmayis= $_POST["mayis"];
				$devamsizlikhaziran =  $_POST["haziran"];
				$devamsizliktemmuz=  $_POST["temmuz"];
				$devamsizlikagusto =  $_POST["agustos"];
				$devamsizlikeylul=  $_POST["eylul"];
				$devamsizlikekim= $_POST["ekim"];
				$devamsizlikkasim= $_POST["kasim"];
				$devamsizlikaralik=  $_POST["aralik"];
				$guncelle= $db->prepare("update devamsizlik set
				ocak=?,subat=?, mart=?,nisan=?,mayis=?,haziran=?,temmuz=?,agustos=?,eylul=?,ekim=?,kasim=?,aralik=? where id=?");
                     $update = $guncelle->execute(
					array($ocak,$subat,$mart,$nisan,$mayis,$haziran,$temmuz,$agustos,$eylul,$ekim,$kasim,$aralik));
					if($update){echo ''; header("refresh: 1; url=?do=profil");
					}
					
				}
				
				/* HURDA TABLOSU UPDATE KODU */
				if($_POST){
				$oneriocak =  $_POST["ocak"];
				$onerisubat =  $_POST["subat"];
				$onerimart =  $_POST["mart"];
				$onerinisan =  $_POST["nisan"];
				$onerimayis=  $_POST["mayis"];
				$onerihaziran =  $_POST["haziran"];
				$oneritemmuz =  $_POST["temmuz"];
				$oneriagustos =  $_POST["agustos"];
				$onerieylul =  $_POST["eylul"];
				$oneriekim =  $_POST["ekim"];
				$onerikasim =  $_POST["kasim"];
				$oneriaralik  =  $_POST["aralik"];
				$guncelle = $db->prepare("update onerisayisi set
				ocak=?,subat=?,mart=?,nisan=?,mayis=?,haziran=?,temmuz=?,agustos=?,eylul=?,ekim=?,kasim=?,aralik=? where id=?");
                     $update = $guncelle->execute(
					array($ocak,$subat,$mart,$nisan,$mayis,$haziran,$temmuz,$agustos,$eylul,$ekim,$kasim,$aralik));
					if($update){echo ''; header("refresh: 1; url=?do=profil");
					}
					
				}

				/* HURDA TABLOSU UPDATE KODU */
				if($_POST){
				$hurdaocak =  $_POST["ocak"];
				$hurdasubat =  $_POST["subat"];
				$hurdamart =  $_POST["mart"];
				$hurdanisan =  $_POST["nisan"];
				$hurdamayis=  $_POST["mayis"];
				$hurdahaziran =  $_POST["haziran"];
				$hurdatemmuz =  $_POST["temmuz"];
				$hurdaagustos =  $_POST["agustos"];
				$hurdaeylul =  $_POST["eylul"];
				$hurdaekim =  $_POST["ekim"];
				$hurdakasim =  $_POST["kasim"];
				$hurdaaralik  =  $_POST["aralik"];
				$guncelle = $db->prepare("update onerisayisi set
				ocak=?,subat=?,mart=?,nisan=?,mayis=?,haziran=?,temmuz=?,agustos=?,eylul=?,ekim=?,kasim=?,aralik=? where id=?");
                     $update = $guncelle->execute(
					array($ocak,$subat,$mart,$nisan,$mayis,$haziran,$temmuz,$agustos,$eylul,$ekim,$kasim,$aralik));
					if($update){echo ''; header("refresh: 1; url=?do=profil");
					}
					
				}

				/* SARI KART VE TUTANAK TABLOSU UPDATE KODU */
				if($_POST){
				$sarikart_tutanakocak =  $_POST["ocak"];
				$sarikart_tutanaksubat =  $_POST["subat"];
				$sarikart_tutanakmart =  $_POST["mart"];
				$sarikart_tutanaknisan =  $_POST["nisan"];
				$sarikart_tutanakmayis=  $_POST["mayis"];
				$sarikart_tutanakhaziran =  $_POST["haziran"];
				$sarikart_tutanaktemmuz =  $_POST["temmuz"];
				$sarikart_tutanakagustos =  $_POST["agustos"];
				$sarikart_tutanakeylul =  $_POST["eylul"];
				$sarikart_tutanakekim =  $_POST["ekim"];
				$sarikart_tutanakkasim =  $_POST["kasim"];
				$sarikart_tutanakaralik  =  $_POST["aralik"];
				$guncelle = $db->prepare("update onerisayisi set
				ocak=?,subat=?,mart=?,nisan=?,mayis=?,haziran=?,temmuz=?,agustos=?,eylul=?,ekim=?,kasim=?,aralik=? where id=?");
                     $update = $guncelle->execute(
					array($ocak,$subat,$mart,$nisan,$mayis,$haziran,$temmuz,$agustos,$eylul,$ekim,$kasim,$aralik));
					if($update){echo ''; header("refresh: 1; url=?do=profil");
					}
					
				}

				/* TAKT TIME VE ROTASYON TABLOSU UPDATE KODU */
				if($_POST){
				$takttime_rotasyonocak =  $_POST["ocak"];
				$takttime_rotasyonsubat =  $_POST["subat"];
				$takttime_rotasyonmart =  $_POST["mart"];
				$takttime_rotasyonnisan =  $_POST["nisan"];
				$takttime_rotasyonmayis=  $_POST["mayis"];
				$takttime_rotasyonhaziran =  $_POST["haziran"];
				$takttime_rotasyontemmuz =  $_POST["temmuz"];
				$takttime_rotasyonagustos =  $_POST["agustos"];
				$takttime_rotasyoneylul =  $_POST["eylul"];
				$takttime_rotasyonekim =  $_POST["ekim"];
				$takttime_rotasyonkasim =  $_POST["kasim"];
				$takttime_rotasyonaralik  =  $_POST["aralik"];
				$guncelle = $db->prepare("update onerisayisi set
				ocak=?,subat=?,mart=?,nisan=?,mayis=?,haziran=?,temmuz=?,agustos=?,eylul=?,ekim=?,kasim=?,aralik=? where id=?");
                     $update = $guncelle->execute(
					array($ocak,$subat,$mart,$nisan,$mayis,$haziran,$temmuz,$agustos,$eylul,$ekim,$kasim,$aralik));
					if($update){echo ''; header("refresh: 1; url=?do=profil");
					}
					
				}

				/* 5S KURALLARI TABLOSU UPDATE KODU */
				if($_POST){
				$s_kurallariocak =  $_POST["ocak"];
				$s_kurallarisubat =  $_POST["subat"];
				$s_kurallarimart =  $_POST["mart"];
				$s_kurallarinisan =  $_POST["nisan"];
				$s_kurallarimayis=  $_POST["mayis"];
				$s_kurallarihaziran =  $_POST["haziran"];
				$s_kurallaritemmuz =  $_POST["temmuz"];
				$s_kurallariagustos =  $_POST["agustos"];
				$s_kurallarieylul =  $_POST["eylul"];
				$s_kurallariekim =  $_POST["ekim"];
				$s_kurallarikasim =  $_POST["kasim"];
				$s_kurallariaralik  =  $_POST["aralik"];
				$guncelle = $db->prepare("update onerisayisi set
                ocak=?,subat=?,mart=?,nisan=?,mayis=?,haziran=?,temmuz=?,agustos=?,eylul=?,ekim=?,kasim=?,aralik=? where id=?");
                     $update = $guncelle->execute(
					array($ocak,$subat,$mart,$nisan,$mayis,$haziran,$temmuz,$agustos,$eylul,$ekim,$kasim,$aralik));
					if($update){echo ''; header("refresh: 1; url=?do=profil");
					}
					
				}
				
				/* TAKIM ÇALIŞMASI TABLOSU UPDATE KODU */
				if($_POST){
				$takimcalismasiocak =  $_POST["ocak"];
				$takimcalismasisubat =  $_POST["subat"];
				$takimcalismasimart =  $_POST["mart"];
				$takimcalismasinisan =  $_POST["nisan"];
				$takimcalismasimayis=  $_POST["mayis"];
				$takimcalismasihaziran =  $_POST["haziran"];
				$takimcalismasitemmuz =  $_POST["temmuz"];
				$takimcalismasiagustos =  $_POST["agustos"];
				$takimcalismasieylul =  $_POST["eylul"];
				$takimcalismasiekim =  $_POST["ekim"];
				$takimcalismasikasim =  $_POST["kasim"];
				$takimcalismasiaralik  =  $_POST["aralik"];
				$guncelle = $db->prepare("update onerisayisi set
				ocak=?,subat=?,mart=?,nisan=?,mayis=?,haziran=?,temmuz=?,agustos=?,eylul=?,ekim=?,kasim=?,aralik=? where id=?");
                     $update = $guncelle->execute(
					array($ocak,$subat,$mart,$nisan,$mayis,$haziran,$temmuz,$agustos,$eylul,$ekim,$kasim,$aralik));
					if($update){echo ''; header("refresh: 1; url=?do=profil");
					}
					
				}

				/* ISG TABLOSU UPDATE KODU */
				if($_POST){
				$isg_cevreocak =  $_POST["ocak"];
				$isg_cevresubat =  $_POST["subat"];
				$isg_cevremart =  $_POST["mart"];
				$isg_cevrenisan =  $_POST["nisan"];
				$isg_cevremayis=  $_POST["mayis"];
				$isg_cevrehaziran =  $_POST["haziran"];
				$isg_cevretemmuz =  $_POST["temmuz"];
				$isg_cevreagustos =  $_POST["agustos"];
				$isg_cevreeylul =  $_POST["eylul"];
				$isg_cevreekim =  $_POST["ekim"];
				$isg_cevrekasim =  $_POST["kasim"];
				$isg_cevrearalik  =  $_POST["aralik"];
				$guncelle = $db->prepare("update onerisayisi set
				ocak=?,subat=?,mart=?,nisan=?,mayis=?,haziran=?,temmuz=?,agustos=?,eylul=?,ekim=?,																																																																																																																																																																																																																																																																																																																																kasim=?,aralik=? where id=?");
                     $update = $guncelle->execute(
					array($ocak,$subat,$mart,$nisan,$mayis,$haziran,$temmuz,$agustos,$eylul,$ekim,$kasim,$aralik));
					if($update){echo ''; header("refresh: 1; url=?do=profil");
					}
					
				}
				?>
				

<!--PROFİL BİLGİLERİ-->
<?php 
$uye_id = $_GET ["id"];
$vtb = $db->prepare(" SELECT
 bilgiler.isimler,
 bilgiler.vardiya,
 bilgiler.mail,
 bilgiler.hat,
 bilgiler.tel
		FROM
		  bilgiler 
WHERE  bilgiler.id =? ");
		$vtb->execute(array($uye_id));
		$kt = $vtb->fetch(PDO::FETCH_ASSOC);
?>

                                        <div class="row">
										<div class="col-xl-3 ">
										<!--begin::Nav Panel Widget 3-->
										<div class="card ">
											<!--begin::Body-->
											<div class="card-body">
												<!--begin::Wrapper-->
												<div class="d-flex justify-content-between flex-column h-100">
													<!--begin::Container-->
													<div class="h-100">
														<!--begin::Header-->
														<div class="d-flex flex-column flex-center">
															<!--begin::Image-->
															<!--end::Image-->
															<!--begin::Title-->
															<a href="#" class="card-title font-weight-bolder text-dark-75 text-hover-primary font-size-h4 m-0 pt-7 pb-1"><?php echo $kt["isimler"];?></a>
															<!--end::Title-->
															<!--begin::Text-->
															<!--end::Text-->
														</div>
														<!--end::Header-->
														<!--begin::Body-->
														<div class="pt-1">
															<!--begin::Item-->
															<div class="d-flex align-items-center pb-9">
																<!--begin::Symbol-->
																<div class="symbol symbol-45 symbol-light mr-4">
																	<span class="symbol-label">
<span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo3\dist/../src/media/svg/icons\Home\Clock.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M12,22 C7.02943725,22 3,17.9705627 3,13 C3,8.02943725 7.02943725,4 12,4 C16.9705627,4 21,8.02943725 21,13 C21,17.9705627 16.9705627,22 12,22 Z" fill="#000000" opacity="0.3"/>
        <path d="M11.9630156,7.5 L12.0475062,7.5 C12.3043819,7.5 12.5194647,7.69464724 12.5450248,7.95024814 L13,12.5 L16.2480695,14.3560397 C16.403857,14.4450611 16.5,14.6107328 16.5,14.7901613 L16.5,15 C16.5,15.2109164 16.3290185,15.3818979 16.1181021,15.3818979 C16.0841582,15.3818979 16.0503659,15.3773725 16.0176181,15.3684413 L11.3986612,14.1087258 C11.1672824,14.0456225 11.0132986,13.8271186 11.0316926,13.5879956 L11.4644883,7.96165175 C11.4845267,7.70115317 11.7017474,7.5 11.9630156,7.5 Z" fill="#000000"/>
    </g>
</svg><!--end::Svg Icon--></span>
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Text-->
																<div class="d-flex flex-column flex-grow-1">
																	<a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Vardiyası</a>
																	<span class="text-muted font-weight-bold"><?php echo $kt["vardiya"];?></span>
																</div>
												
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="d-flex align-items-center pb-9">
																<!--begin::Symbol-->
																<div class="symbol symbol-45 symbol-light mr-4">
																	<span class="symbol-label">
<span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo3\dist/../src/media/svg/icons\Map\Marker1.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M5,10.5 C5,6 8,3 12.5,3 C17,3 20,6.75 20,10.5 C20,12.8325623 17.8236613,16.03566 13.470984,20.1092932 C12.9154018,20.6292577 12.0585054,20.6508331 11.4774555,20.1594925 C7.15915182,16.5078313 5,13.2880005 5,10.5 Z M12.5,12 C13.8807119,12 15,10.8807119 15,9.5 C15,8.11928813 13.8807119,7 12.5,7 C11.1192881,7 10,8.11928813 10,9.5 C10,10.8807119 11.1192881,12 12.5,12 Z" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg><!--end::Svg Icon--></span>
																			<!--end::Svg Icon-->
																		</span>
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Text-->
																<div class="d-flex flex-column flex-grow-1">
																	<a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Bulunduğu Hat</a>
																	<span class="text-muted font-weight-bold"><?php echo $kt["hat"];?></span>
																</div>
																<!--end::Text-->
																<!--begin::label-->
																<!--end::label-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="d-flex align-items-center pb-9">
																<!--begin::Symbol-->
																<div class="symbol symbol-45 symbol-light mr-4">
																	<span class="symbol-label">
<span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo3\dist/../src/media/svg/icons\Devices\iPhone-X.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M8,2.5 C7.30964406,2.5 6.75,3.05964406 6.75,3.75 L6.75,20.25 C6.75,20.9403559 7.30964406,21.5 8,21.5 L16,21.5 C16.6903559,21.5 17.25,20.9403559 17.25,20.25 L17.25,3.75 C17.25,3.05964406 16.6903559,2.5 16,2.5 L8,2.5 Z" fill="#000000" opacity="0.3"/>
        <path d="M8,2.5 C7.30964406,2.5 6.75,3.05964406 6.75,3.75 L6.75,20.25 C6.75,20.9403559 7.30964406,21.5 8,21.5 L16,21.5 C16.6903559,21.5 17.25,20.9403559 17.25,20.25 L17.25,3.75 C17.25,3.05964406 16.6903559,2.5 16,2.5 L8,2.5 Z M8,1 L16,1 C17.5187831,1 18.75,2.23121694 18.75,3.75 L18.75,20.25 C18.75,21.7687831 17.5187831,23 16,23 L8,23 C6.48121694,23 5.25,21.7687831 5.25,20.25 L5.25,3.75 C5.25,2.23121694 6.48121694,1 8,1 Z M9.5,1.75 L14.5,1.75 C14.7761424,1.75 15,1.97385763 15,2.25 L15,3.25 C15,3.52614237 14.7761424,3.75 14.5,3.75 L9.5,3.75 C9.22385763,3.75 9,3.52614237 9,3.25 L9,2.25 C9,1.97385763 9.22385763,1.75 9.5,1.75 Z" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg><!--end::Svg Icon--></span>
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Text-->
																<div class="d-flex flex-column flex-grow-1">
																	<a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Telefon</a>
																	<span class="text-muted font-weight-bold"><?php echo $kt["tel"];?></span>
																</div>
																<!--end::Text-->
																<!--begin::label-->
																<!--end::label-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="d-flex align-items-center pb-9">
																<!--begin::Symbol-->
																<div class="symbol symbol-45 symbol-light mr-4">
																	<span class="symbol-label">
<span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo3\dist/../src/media/svg/icons\Communication\Mail-notification.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000"/>
        <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5"/>
    </g>
</svg><!--end::Svg Icon--></span>
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Text-->
																<div class="d-flex flex-column flex-grow-1">
																	<a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">E-Mail Adresi</a>
																	<span class="text-muted font-weight-bold"><?php echo $kt ["mail"];?></span>
																</div>
																<!--end::Text-->
																<!--begin::label-->
																<!--end::label-->
															</div>
															<!--end::Item-->
														</div>
														<!--end::Body-->
													</div>
													<!--eng::Container-->
							
													<!--end::Footer-->
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Nav Panel Widget 3-->
										</div>
										



										<!--begin::Card-->
										<div class="col-xl-9">
										<!--begin::Card-->
										<div class="card ">
											<!--begin::Body-->
											<div class="card-body ">
							<!--PERSONEL TABLOSU-->				

  <form action="" method="post">
    <input type="hidden" name="veriGuncelle" value="1">
<table  class="table table-bordered table-hover table-responsive " id="veriTablosu">

<tbody>
<tr class="bg-primary text-white">
<td >Kategoriler</td>
<td >Ocak</td>
<td >Şubat</td>
<td >Mart</td>
<td >Nisan</td>
<td >Mayıs</td>
<td >Haziran</td>
<td >Temmuz</td>
<td >Ağustos</td>
<td >Eylül</td>
<td >Ekim</td>
<td>Kasım</td>
<td >Aralık</td>
<td>V.Ortalaması</td>
<td >F.Ortalaması</td>
</tr>
<tr >

<!--Devamsızlık Sayısı Tablosu-->
<td >Devamsızlık Sayısı</td>
<td width="70" align="center"><input type="text" name="devamsizlikocak" size="3" value="<?php echo $d["ocak"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="devamsizliksubat" size="3" value="<?php echo $d["subat"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="devamsizlikmart" size="3" value="<?php echo $d["mart"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="devamsizlinisan" size="3" value="<?php echo $d["nisan"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="devamsizlikmayis" size="3" value="<?php echo $d["mayis"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="devamsizlikhaziran" size="3" value="<?php echo $d["haziran"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="devamsizliktemmuz" size="3" value="<?php echo $d["temmuz"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="devamsizlikagustos" size="3" value="<?php echo $d["agustos"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="devamsizlikeylul" size="3" value="<?php echo $d["eylul"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="devamsizlikekim" size="3" value="<?php echo $d["ekim"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="devamsizlikkasim" size="3" value="<?php echo $d["kasim"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="devamsizlikaralik" size="3" value="<?php echo $d["aralik"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="vortdevamsizlik" size="3" value="<?php echo $d["ocak"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="fortdevamsizlik" size="3" value="<?php echo $d["ocak"]; ?>" ></td>
</tr>
<tr >

<!--Devamsızlık Puanı Tablosu-->
<td >Devamsızlık Puanı	</td>
<!--Hiç devamsızlık yok ise 100 puan
1 ile 3 gün arasında devamsızlık için 80 puan
4 gün ile 8 gün arasında devamsızlık için 60 puan
8 gün ve üzeri için 0 puan-->
<td > <?php 
      if ($d['ocak']==0 &&  $d['ocak']!=NULL){echo $d1='100';}
      else if( $d['ocak']>1 &&  $d['ocak']<4) {echo $d1='80';}  
      else if( $d['ocak']>4 &&  $d['ocak']<8) {echo $d1='60';}
	  else if( $d['ocak']>8) {echo $d1='0';}?> 
</td>
<td ><?php       
      if ($d['subat']==0 &&  $d['subat']!=NULL){echo $d2='100';}
      else if( $d['subat']>1 &&  $d['subat']<4) {echo $d2='80';}  
      else if( $d['subat']>4 &&  $d['subat']<8) {echo $d2='60';}
	  else if( $d['subat']>7) {echo $d2='0';}?> </td>
<td ><?php 
      if ($d['mart']==0 &&  $d['mart']!=NULL){echo $d3='100';}
      else if( $d['mart']>1 &&  $d['mart']<4) {echo $d3='80';}  
      else if( $d['mart']>4 &&  $d['mart']<8) {echo $d3='60';}
	  else if( $d['mart']>7) {echo $d3='0';}?> </td>
<td><?php       if ($d['nisan']==0 &&  $d['nisan']!=NULL){echo $d4='100';}
      else if( $d['nisan']>1 &&  $d['nisan']<4) {echo $d4='80';}  
      else if( $d['nisan']>4 &&  $d['nisan']<8) {echo $d4='60';}
	  else if( $d['nisan']>7) {echo $d4='0';}?> </td>
<td ><?php       if ($d['mayis']==0 &&  $d['mayis']!=NULL){echo $d5='100';}
      
      else if( $d['mayis']>1 &&  $d['mayis']<4) {echo $d5='80';}  
      else if( $d['mayis']>4 &&  $d['mayis']<8) {echo $d5='60';}
	  else if( $d['mayis']>7) {echo $d5='0';}?> </td>
<td ><?php       if ($d['haziran']==0 &&  $d['haziran']!=NULL){echo $d6='100';}
      else if( $d['haziran']>1 &&  $d['haziran']<4) {echo $d6='80';}  
      else if( $d['haziran']>4 &&  $d['haziran']<8) {echo  $d6='60';}
	  else if( $d['haziran']>7) {echo  $d6='0';}?> </td>
<td ><?php       if ($d['temmuz']==0 &&  $d['temmuz']!=NULL){echo  $d7='100';}
      else if( $d['temmuz']>1 &&  $d['temmuz']<4) {echo  $d7='80';}  
      else if( $d['temmuz']>4 &&  $d['temmuz']<8) {echo  $d7='60';}
	  else if( $d['temmuz']>7) {echo  $d7='0';}?> </td>
<td ><?php       if ($d['agustos']==0 &&  $d['agustos']!=NULL){echo  $d8='100';}
      else if( $d['agustos']>1 &&  $d['agustos']<4) {echo  $d8='80';}  
      else if( $d['agustos']>4 &&  $d['agustos']<8) {echo $d8='60';}
	  else if( $d['agustos']>7) {echo $d8='0';}?> </td>
<td ><?php if ($d['eylul']==0 &&  $d['eylul']!=NULL){echo $d9='100';}
      else if( $d['eylul']>1 &&  $d['eylul']<4) {echo $d9='80';}  
      else if( $d['eylul']>4 &&  $d['eylul']<8) {echo $d9='60';}
	  else if( $d['eylul']>7) {echo $d9='0';}?> </td>
<td ><?php if ($d['ekim']==0 &&  $d['ekim']!=NULL){echo $d10='100';}
      else if( $d['ekim']>1 &&  $d['ekim']<4) {echo $d10='80';}  
      else if( $d['ekim']>4 &&  $d['ekim']<8) {echo $d10='60';}
	  else if( $d['ekim']>7) {echo $d10='0';}?> </td>
<td ><?php if ($d['kasim']==0 &&  $d['kasim']!=NULL){echo $d11='100';}
      else if( $d['kasim']>1 &&  $d['kasim']<4) {echo $d11='80';}  
      else if( $d['kasim']>4 &&  $d['kasim']<8) {echo $d11='60';}
	  else if( $d['kasim']>7) {echo $d11='0';}?> </td>
<td ><?php if ( $d['aralik']==0 &&  $d['aralik']!=NULL){echo $d12='100';}
      else if( $d['aralik']>1 &&  $d['aralik']<4) {echo $d12='80';}  
      else if( $d['aralik']>4 &&  $d['aralik']<8) {echo $d12='60';}
	  else if( $d['aralik']>7) {echo $d12='0';}?> </td>

<td >&nbsp;</td>
<td >&nbsp;</td>
</tr>

<!--Öneri Sayısı Tablosu-->

<tr >
<td >Öneri Sayısı</td>
 <td width="70" align="center"><input type="text" name="oneriocak" size="3" value="<?php echo $o["ocak"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="onerisubat" size="3" value="<?php echo $o["subat"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="onerimart" size="3" value="<?php echo $o["mart"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="onerinisan" size="3" value="<?php echo $o["nisan"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="onerimayis" size="3" value="<?php echo $o["mayis"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="onerihaziran" size="3" value="<?php echo $o["haziran"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="oneritemmuz" size="3" value="<?php echo $o["temmuz"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="oneriagustos" size="3" value="<?php echo $o["agustos"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="onerieylul" size="3" value="<?php echo $o["eylul"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="oneriekim" size="3" value="<?php echo $o["ekim"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="onerikasim" size="3" value="<?php echo $o["kasim"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="oneriaralik" size="3" value="<?php echo $o["aralik"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="vortoneri" size="3" value="<?php echo $o["ocak"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="fortoneri" size="3" value="<?php echo $o["ocak"]; ?>" ></td>
</tr>

<!--Öneri Puanı Tablosu-->
<!--
3 ve üzeri öneriler için 130 puan
2 öneri için 110 puan
1 öneri için 100 puan
Hiç öneri vermeyen için 0 puan
-->
<tr >
<td >Öneri Puanı</td>
<td ><?php if ( $o['ocak']>2 ){echo $o1='130';}
      else if( $o['ocak']==2 ) {echo $o1='110';}  
      else if( $o['ocak']==1 ) {echo $o1='100';}
	  else if( $o['ocak']==0 && $o['ocak']!=NULL) {echo $o1='0';}?></td>
<td ><?php if ( $o['subat']>2 ){echo $o2='130';}
      else if( $o['subat']==2 ) {echo $o2='110';}  
      else if( $o['subat']==1 ) {echo $o2='100';}
	  else if( $o['subat']==0 && $o['subat']!=NULL) {echo $o2='0';}?></td>
<td ><?php if ( $o['mart']>2 ){echo $o3='130';}
      else if( $o['mart']==2 ) {echo $o3='110';}  
      else if( $o['mart']==1 ) {echo $o3='100';}
	  else if( $o['mart']==0 && $o['mart']!=NULL) {echo $o3='0';}?></td>
<td ><?php if ( $o['nisan']>2 ){echo $o4='130';}
      else if( $o['nisan']==2 ) {echo $o4='110';}  
      else if( $o['nisan']==1 ) {echo $o4='100';}
	  else if( $o['nisan']==0 && $o['nisan']!=NULL) {echo $o4='0';}?></td>
<td ><?php if ( $o['mayis']>2 ){echo $o5='130';}
      else if( $o['mayis']==2 ) {echo $o5='110';}  
      else if( $o['mayis']==1 ) {echo $o5='100';}
	  else if( $o['mayis']==0 && $o['mayis']!=NULL) {echo $o5='0';}?></td>
<td ><?php if ( $o['haziran']>2 ){echo $o6='130';}
      else if( $o['haziran']==2 ) {echo $o6='110';}  
      else if( $o['haziran']==1 ) {echo $o6='100';}
	  else if( $o['haziran']==0 && $o['haziran']!=NULL) {echo $o6='0';}?></td>
<td ><?php if ( $o['temmuz']>2 ){echo $o7='130';}
      else if( $o['temmuz']==2 ) {echo $o7='110';}  
      else if( $o['temmuz']==1 ) {echo $o7='100';}
	  else if( $o['temmuz']==0 && $o['temmuz']!=NULL) {echo $o7='0';}?></td>
<td ><?php if ( $o['agustos']>2 ){echo $o8='130';}
      else if( $o['agustos']==2 ) {echo $o8='110';}  
      else if( $o['agustos']==1 ) {echo $o8='100';}
	  else if( $o['agustos']==0 && $o['agustos']!=NULL) {echo $o8='0';}?></td>
<td ><?php if ( $o['ekim']>2 ){echo $o9='130';}
      else if( $o['ekim']==2 ) {echo $o9='110';}  
      else if( $o['ekim']==1 ) {echo $o9='100';}
	  else if( $o['ekim']==0 && $o['ekim']!=NULL) {echo $o9='0';}?></td>
<td ><?php if ( $o['ekim']>2 ){echo  $o10='130';}
      else if( $o['ekim']==2 ) {echo  $o10='110';}  
      else if( $o['ekim']==1 ) {echo  $o10='100';}
	  else if( $o['ekim']==0 && $o['ekim']!=NULL) {echo $o10='0';}?>
<td ><?php if ( $o['kasim']>2 ){echo $o11='130';}
      else if( $o['kasim']==2 ) {echo $o11='110';}  
      else if( $o['kasim']==1 ) {echo $o11='100';}
	  else if( $o['kasim']==0 && $o['kasim']!=NULL) {echo  $o11='0';}?>
	  <td ><?php if ( $o['aralik']>2 ){echo $o12='130';}
      else if( $o['aralik']==2 ) {echo $o12='110';}  
      else if( $o['aralik']==1 ) {echo $o12='100';}
	  else if( $o['aralik']==0 && $o['aralik']!=NULL) {echo $o12='0';}?></td>
<td >&nbsp;</td>
</tr>

<!--Hurda Sayısı Tablosu-->
<tr >
<td >Hurda Sayısı</td>
<td width="70" align="center"><input type="text" name="hurdaocak" size="3" value="<?php echo $h["ocak"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="hurdasubat" size="3" value="<?php echo $h["subat"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="hurdamart" size="3" value="<?php echo $h["mart"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="hurdanisan" size="3" value="<?php echo $h["nisan"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="hurdamayis" size="3" value="<?php echo $h["mayis"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="hurdahaziran" size="3" value="<?php echo $h["haziran"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="hurdatemmuz" size="3" value="<?php echo $h["temmuz"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="hurdaagustos" size="3" value="<?php echo $h["agustos"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="hurdaeylul" size="3" value="<?php echo $h["eylul"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="hurdaekim" size="3" value="<?php echo $h["ekim"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="hurdakasim" size="3" value="<?php echo $h["kasim"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="hurdaaralik" size="3" value="<?php echo $h["aralik"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="vorthurda" size="3" value="<?php echo $h["ocak"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="forthurda" size="3" value="<?php echo $h["ocak"]; ?>" ></td>
</tr>

<!--Hurda Puanı Tablosu-->
<!--
Hiç hurdaya neden olmuyorsa ; 100 puan
Ayda 1-3 adet hurdaya neden oluyorsa; 85 puan
Ayda 4-7 adet hurdaya neden oluyorsa; 65 puan
Ayda 8-10 adet hurdaya neden oluyorsa 50 puan,
Ayda 10'dan fazla hurdaya neden oluyorsa 0 puan
-->


<tr >
<td >Hurda Puanı</td> 
<td ><?php if ($h["ocak"]>1  && $h["ocak"]<4 ){echo $h1='85';}
      else if( $h["ocak"]>3  && $h["ocak"]<8 ) {echo $h1='65';}  
      else if( $h["ocak"]>7  && $h["ocak"]<10 ) {echo $h1='50';}
	  else if( $h["ocak"]>9 ) {echo $h1='0';}
	  else if( $h["ocak"]==0 && $h["ocak"]!=NULL) {echo $h1='100';}?></td>
<td ><?php if ($h["subat"]>1  && $h["subat"]<4 ){echo $h2='85';}
      else if(  $h["subat"]>3  && $h["subat"]<8 ) {echo $h2='65';}  
      else if( $h["subat"]>7  && $h["subat"]<10 ) {echo $h2='50';}
	  else if( $h["subat"]>9 ) {echo $h2='0';}
	  else if( $h["subat"]==0 && $h["subat"]!=NULL) {echo $h2='100';}?></td>
<td><?php if ( $h["mart"]>1  && $h["mart"]<4 ){echo  $h3='85';}
      else if( $h["mart"]>3  && $h["mart"]<8 ) {echo  $h3='65';}  
      else if( $h["mart"]>7  && $h["mart"]<10 ) {echo  $h3='50';}
	  else if( $h["mart"]>9 ) {echo $h3='0';}
	  else if( $h["mart"]==0 && $h["mart"]!=NULL) {echo  $h3='100';}?></td>
<td ><?php if ( $h["nisan"]>1  && $h["nisan"]<4 ){echo $h4='85';}
      else if(  $h["nisan"]>3  && $h["nisan"]<8 ) {echo $h4='65';}  
      else if( $h["nisan"]>7  && $h["nisan"]<10 ) {echo $h4='50';}
	  else if( $h["nisan"]>9 ) {echo $h4='0';}
	  else if( $h["nisan"]==0 && $h["nisan"]!=NULL) {echo $h4='100';}?></td>
<td ><?php if ( $h["mayis"]>1  && $h["mayis"]<4 ){echo $h5='85';}
      else if(  $h["mayis"]>3  && $h["mayis"]<8 ) {echo $h5='65';}  
      else if( $h["mayis"]>7  && $h["mayis"]<10 ) {echo $h5='50';}
	  else if( $h["mayis"]>9 ) {echo $h5='0';}
	  else if( $h["mayis"]==0 && $h["mayis"]!=NULL) {echo $h5='100';}?></td>
<td ><?php if ( $h["haziran"]>1  && $h["haziran"]<4 ){echo $h6='85';}
      else if(  $h["haziran"]>3  && $h["haziran"]<8 ) {echo $h6='65';}  
      else if( $h["haziran"]>7  && $o['aralik']<10 ) {echo $h6='50';}
	  else if( $h["haziran"]>9 ) {echo $h6='0';}
	  else if( $h["haziran"]==0 && $h["haziran"]!=NULL) {echo  $h6='100';}?></td>
<td ><?php if ($h["temmuz"]>1  && $h["temmuz"]<4 ){echo $h7='85';}
      else if( $h["temmuz"]>3  && $h["temmuz"]<8 ) {echo $h7='65';}  
      else if( $h["temmuz"]>7  && $h["temmuz"]<10 ) {echo $h7='50';}
	  else if( $h["temmuz"]>9 ) {echo $h7='0';}
	  else if( $h["temmuz"]==0 && $h["temmuz"]!=NULL) {echo $h7='100';}?></td>
<td ><?php if ( $h["agustos"]>1  && $h["agustos"]<4 ){echo $h8='85';}
      else if(  $h["agustos"]>3  && $h["agustos"]<8 ) {echo $h8='65';}  
      else if( $h["agustos"]>7  && $h["agustos"]<10 ) {echo $h8='50';}
	  else if( $h["agustos"]>9 ) {echo $h8='0';}
	  else if( $h["agustos"]==0 && $h["agustos"]!=NULL) {echo  $h8='100';}?></td>
<td ><?php if ( $h["eylul"]>1  && $h["eylul"]<4 ){echo  $h9='85';}
      else if(  $h["eylul"]>3  && $h["eylul"]<8 ) {echo  $h9='65';}  
      else if( $h["eylul"]>7  && $h["eylul"]<10 ) {echo  $h9='50';}
	  else if( $h["eylul"]>9 ) {echo $h9='0';}
	  else if( $h["eylul"]==0 && $h["eylul"]!=NULL) {echo  $h9='100';}?></td>
<td ><?php if ( $h["ekim"]>1  && $h["ekim"]<4 ){echo $h10='85';}
      else if(  $h["ekim"]>3  && $h["ekim"]<8 ) {echo $h10='65';}  
      else if( $h["ekim"]>7  && $h["ekim"]<10 ) {echo $h10='50';}
	  else if( $h["ekim"]>9 ) {echo $h10='0';}
	  else if( $h["ekim"]==0 && $h["ekim"]!=NULL) {echo $h10='100';}?></td>
<td ><?php if ( $h["kasim"]>1  && $h["kasim"]<4 ){echo $h11='85';}
      else if(  $h["kasim"]>3  && $h["kasim"]<8 ) {echo $h11='65';}  
      else if( $h["kasim"]>7  && $h["kasim"]<10 ) {echo $h11='50';}
	  else if( $h["kasim"]>9 ) {echo $h11='0';}
	  else if( $h["kasim"]==0 && $h["kasim"]!=NULL) {echo $h12='100';}?></td>
<td ><?php if ( $h['aralik']>1  && $h['aralik']<4 ){echo $h12='85';}
      else if(  $h['aralik']>3  && $h['aralik']<8 ) {echo $h12='65';}  
      else if( $h['aralik']>7  && $h['aralik']<10 ) {echo $h12='50';}
	  else if( $h['aralik']>9 ) {echo $h12='0';}
	  else if( $h['aralik']==0 && $h['aralik']!=NULL) {echo $h12='100';}?></td>
<td >&nbsp;</td>
<td >&nbsp;</td>
</tr>

<!--Sarı Kart veya Tutanak Tablosu-->
<tr >
<td >Sarı Kart veya Tutanak Alma Durumu</td>
<td width="70" align="center"><input type="text" name="sarikart_tutanakocak" size="3" value="<?php echo $s["ocak"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="sarikart_tutanaksubat" size="3" value="<?php echo $s["subat"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="sarikart_tutanakmart" size="3" value="<?php echo $s["mart"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="sarikart_tutanaknisan" size="3" value="<?php echo $s["nisan"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="sarikart_tutanakmayis" size="3" value="<?php echo $s["mayis"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="sarikart_tutanakhaziran" size="3" value="<?php echo $s["haziran"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="sarikart_tutanaktemmuz" size="3" value="<?php echo $s["temmuz"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="sarikart_tutanakagustos" size="3" value="<?php echo $s["agustos"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="sarikart_tutanakeylul" size="3" value="<?php echo $s["eylul"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="sarikart_tutanakekim" size="3" value="<?php echo $s["ekim"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="sarikart_tutanakkasim" size="3" value="<?php echo $s["kasim"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="sarikart_tutanakaralik" size="3" value="<?php echo $s["aralik"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="vortsarikart" size="3" value="<?php echo $s["ocak"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="fortsarikart" size="3" value="<?php echo $s["ocak"]; ?>" ></td>
</tr>

<!--Ceza Puanı Tablosu-->
<tr >
<td>Ceza Puanı</td>
<td><?php if(   $s["ocak"]>2  ) {echo $s1='0';}  
      else if(  $s["ocak"]==2 ) {echo $s1='60';}
	  else if(  $s["ocak"]==1 ) {echo $s1='80';}
	  else if(  $s["ocak"]==0 &&  $s["ocak"]!=NULL) {echo $s1='100';}?></td>
<td><?php if(   $s["subat"]>2  ) {echo $s2='0';}  
      else if(  $s["subat"]==2 ) {echo $s2='60';}
	  else if(  $s["subat"]==1 ) {echo $s2='80';}
	  else if(  $s["subat"]==0 &&  $s["subat"]!=NULL) {echo $s2='100';}?></td>
<td><?php if(   $s["mart"]>2  ) {echo $s3='0';}  
      else if(  $s["mart"]==2 ) {echo $s3='60';}
	  else if(  $s["mart"]==1 ) {echo $s3='80';}
	  else if(  $s["mart"]==0 &&  $s["mart"]!=NULL) {echo $s3='100';}?></td>
<td><?php if(   $s["nisan"]>2  ) {echo $s4='0';}  
      else if(  $s["nisan"]==2 ) {echo $s4='60';}
	  else if(  $s["nisan"]==1 ) {echo $s4='80';}
	  else if(  $s["nisan"]==0 &&  $s["nisan"]!=NULL) {echo $s4='100';}?></td>
<td><?php if(   $s["mayis"]>2  ) {echo $s5='0';}  
      else if(  $s["mayis"]==2 ) {echo $s5='60';}
	  else if(  $s["mayis"]==1 ) {echo $s5='80';}
	  else if(  $s["mayis"]==0 &&  $s["mayis"]!=NULL) {echo $s5='100';}?></td>
<td><?php if(   $s["haziran"]>2  ) {echo $s6='0';}  
      else if(  $s["haziran"]==2 ) {echo $s6='60';}
	  else if(  $s["haziran"]==1 ) {echo $s6='80';}
	  else if(  $s["haziran"]==0 &&  $s["haziran"]!=NULL) {echo $s6='100';}?></td>
<td><?php if(   $s["temmuz"]>2  ) {echo $s7='0';}  
      else if(  $s["temmuz"]==2 ) {echo $s7='60';}
	  else if(  $s["temmuz"]==1 ) {echo $s7='80';}
	  else if(  $s["temmuz"]==0 &&  $s["temmuz"]!=NULL) {echo $s7='100';}?></td>
<td><?php if(   $s["agustos"]>2  ) {echo $s8='0';}  
      else if(  $s["agustos"]==2 ) {echo $s8='60';}
	  else if(  $s["agustos"]==1 ) {echo $s8='80';}
	  else if(  $s["agustos"]==0 &&  $s["agustos"]!=NULL) {echo $s8='100';}?></td>
<td><?php if(   $s["eylul"]>2  ) {echo $s9='0';}  
      else if(  $s["eylul"]==2 ) {echo $s9='60';}
	  else if(  $s["eylul"]==1 ) {echo $s9='80';}
	  else if(  $s["eylul"]==0 &&  $s["eylul"]!=NULL) {echo $s9='100';}?></td>
<td><?php if(   $s["ekim"]>2  ) {echo $s10='0';}  
      else if(  $s["ekim"]==2 ) {echo $s10='60';}
	  else if(  $s["ekim"]==1 ) {echo $s10='80';}
	  else if(  $s["ekim"]==0 &&  $s["ekim"]!=NULL) {echo $s10='100';}?></td>
<td><?php if(   $s["kasim"]>2  ) {echo $s11='0';}  
      else if(  $s["kasim"]==2 ) {echo $s11='60';}
	  else if(  $s["kasim"]==1 ) {echo $s11='80';}
	  else if(  $s["kasim"]==0 &&  $s["kasim"]!=NULL) {echo $s11='100';}?></td>
<td><?php if(   $s["aralik"]>2  ) {echo $s12='0';}  
      else if(  $s["aralik"]==2 ) {echo $s12='60';}
	  else if(  $s["aralik"]==1 ) {echo $s12='80';}
	  else if(  $s["aralik"]==0 &&  $s["aralik"]!=NULL) {echo $s12='100';}?></td>
<td></td>
<td></td>
</tr>

<!--Takt Time ve Rotasyona Uyum Tablosu-->
<tr >
<td >Takt Time ve Rotasyona Uyum Durumu</td>
<td width="70" align="center"><input type="text" name="takttime_rotasyonocak" size="3" value="<?php echo $t["ocak"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="takttime_rotasyonsubat" size="3" value="<?php echo $t["subat"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="takttime_rotasyonmart" size="3" value="<?php echo $t["mart"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="takttime_rotasyonnisan" size="3" value="<?php echo $t["nisan"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="takttime_rotasyonmayis" size="3" value="<?php echo $t["mayis"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="takttime_rotasyonhaziran" size="3" value="<?php echo $t["haziran"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="takttime_rotasyontemmuz" size="3" value="<?php echo $t["temmuz"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="takttime_rotasyonagustos" size="3" value="<?php echo $t["agustos"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="takttime_rotasyoneylul" size="3" value="<?php echo $t["eylul"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="takttime_rotasyonekim" size="3" value="<?php echo $t["ekim"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="takttime_rotasyonkasim" size="3" value="<?php echo $t["kasim"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="takttime_rotasyonaralik" size="3" value="<?php echo $t["aralik"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="vorttakttime" size="3" value="<?php echo $t["ocak"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="forttaktime" size="3" value="<?php echo $t["ocak"]; ?>" ></td>
</tr>

<!--Rotasyon Puanı Tablosu-->
<tr >
<td >Rotasyon Puanı</td>
<td ><?php if(  $t["ocak"]<3  &&  $t["ocak"]!=NULL ) {echo $t1='30';}  
      else if(  $t["ocak"]<5  &&  $t["ocak"]>2 ) {echo $t1='50';}
	  else if(  $t["ocak"]<7  &&  $t["ocak"]>4) {echo $t1='70';}
	  else if(  $t["ocak"]<10 &&  $t["ocak"]>6) {echo $t1='90';}
	  else if(  $t["ocak"]>9) {echo '100';}?></td>
<td ><?php if(  $t["subat"]<3  &&  $t["subat"]!=NULL ) {echo $t2='30';}  
      else if(  $t["subat"]<5  &&  $t["subat"]>2 ) {echo $t2='50';}
	  else if(  $t["subat"]<7  &&  $t["subat"]>4) {echo $t2='70';}
	  else if(  $t["subat"]<10 &&  $t["subat"]>6) {echo $t2='90';}
	  else if(  $t["subat"]>9) {echo '100';}?></td>
<td><?php if(   $t["mart"]<3  &&  $t["mart"]!=NULL ) {echo $t3='30';}  
      else if(  $t["mart"]<5  &&  $t["mart"]>2 ) {echo $t3='50';}
	  else if(  $t["mart"]<7  &&  $t["mart"]>4) {echo $t3='70';}
	  else if(  $t["mart"]<10 &&  $t["mart"]>6) {echo $t3='90';}
	  else if(  $t["mart"]>9) {echo '100';}?></td>
<td ><?php if(  $t["nisan"]<3  &&  $t["nisan"]!=NULL ) {echo $t4='30';}  
      else if(  $t["nisan"]<5  &&  $t["nisan"]>2 ) {echo $t4='50';}
	  else if(  $t["nisan"]<7  &&  $t["nisan"]>4) {echo $t4='70';}
	  else if(  $t["nisan"]<10 &&  $t["nisan"]>6) {echo $t4='90';}
	  else if(  $t["nisan"]>9) {echo '100';}?></td>
<td ><?php if(  $t["mayis"]<3  &&  $t["mayis"]!=NULL ) {echo $t5='30';}  
      else if(  $t["mayis"]<5  &&  $t["mayis"]>2 ) {echo $t5='50';}
	  else if(  $t["mayis"]<7  &&  $t["mayis"]>4) {echo $t5='70';}
	  else if(  $t["mayis"]<10 &&  $t["mayis"]>6) {echo $t5='90';}
	  else if(  $t["mayis"]>9) {echo '100';}?></td>
<td ><?php if(  $t["haziran"]<3  &&  $t["haziran"]!=NULL ) {echo $t6='30';}  
      else if(  $t["haziran"]<5  &&  $t["haziran"]>2 ) {echo $t6='50';}
	  else if(  $t["haziran"]<7  &&  $t["haziran"]>4) {echo $t6='70';}
	  else if(  $t["haziran"]<10 &&  $t["haziran"]>6) {echo $t6='90';}
	  else if(  $t["haziran"]>9) {echo '100';}?></</td>
<td ><?php if(  $t["temmuz"]<3  &&  $t["temmuz"]!=NULL ) {echo $t7='30';}  
      else if(  $t["temmuz"]<5  &&  $t["temmuz"]>2 ) {echo  $t7='50';}
	  else if(  $t["temmuz"]<7  &&  $t["temmuz"]>4) {echo  $t7='70';}
	  else if(  $t["temmuz"]<10 &&  $t["temmuz"]>6) {echo  $t7='90';}
	  else if(  $t["temmuz"]>9) {echo '100';}?></td>
<td ><?php if(  $t["agustos"]<3  &&  $t["agustos"]!=NULL ) {echo $t8='30';}  
      else if(  $t["agustos"]<5  &&  $t["agustos"]>2 ) {echo $t8='50';}
	  else if(  $t["agustos"]<7  &&  $t["agustos"]>4) {echo $t8='70';}
	  else if(  $t["agustos"]<10 &&  $t["agustos"]>6) {echo $t8='90';}
	  else if(  $t["agustos"]>9) {echo '100';}?></td>
<td ><?php if(  $t["eylul"]<3  &&  $t["eylul"]!=NULL ) { echo  $t9='30';}  
      else if(  $t["eylul"]<5  &&  $t["eylul"]>2 ) {echo $t9='50';}
	  else if(  $t["eylul"]<7  &&  $t["eylul"]>4) {echo $t9='70';}
	  else if(  $t["eylul"]<10 &&  $t["eylul"]>6) {echo $t9='90';}
	  else if(  $t["eylul"]>9) {echo '100';}?></td>
<td ><?php if(  $t["ekim"]<3  &&  $t["ekim"]!=NULL ) {echo $t10='30';}  
      else if(  $t["ekim"]<5  &&  $t["ekim"]>2 ) {echo $t10='50';}
	  else if(  $t["ekim"]<7 &&  $t["ekim"]>4) {echo $t10='70';}
	  else if(  $t["ekim"]<10 &&  $t["ekim"]>6) {echo $t10='90';}
	  else if(  $t["ekim"]>9) {echo '100';}?></td>
<td ><?php if(  $t["kasim"]<3  &&  $t["kasim"]!=NULL ) {echo $t11='30';}  
      else if(  $t["kasim"]<5  &&  $t["kasim"]>2 ) {echo $t11='50';}
	  else if(  $t["kasim"]<7  &&  $t["kasim"]>4) {echo $t11='70';}
	  else if(  $t["kasim"]<10 &&  $t["kasim"]>6) {echo $t11='90';}
	  else if(  $t["kasim"]>9) {echo '100';}?></td>
<td ><?php if(  $t["aralik"]<3  &&  $t["aralik"]!=NULL ) {echo $t12='30';}  
      else if(  $t["aralik"]<5  &&  $t["aralik"]>2 ) {echo $t12='50';}
	  else if(  $t["aralik"]<7  &&  $t["aralik"]>4) {echo $t12='70';}
	  else if(  $t["aralik"]<10 &&  $t["aralik"]>6) {echo $t12='90';}
	  else if(  $t["aralik"]>9) {echo '100';}?></td>
<td >&nbsp;</td>
<td >&nbsp;</td>
</tr>


<!--Takım Çalışmasına Uyum Tablosu-->
<tr >
<td >Takım Çalışmasına Uyum</td>
<td width="70" align="center"><input type="text" name="takimcalismasiocak" size="3" value="<?php echo $k["ocak"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="takimcalismasisubat" size="3" value="<?php echo $k["subat"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="takimcalismasimart" size="3" value="<?php echo $k["mart"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="takimcalismasinisan" size="3" value="<?php echo $k["nisan"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="takimcalismasimayis" size="3" value="<?php echo $k["mayis"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="takimcalismasihaziran" size="3" value="<?php echo $k["haziran"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="takimcalismasitemmuz" size="3" value="<?php echo $k["temmuz"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="takimcalismasiagustos" size="3" value="<?php echo $k["agustos"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="takimcalismasieylul" size="3" value="<?php echo $k["eylul"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="takimcalismasiekim" size="3" value="<?php echo $k["ekim"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="takimcalismasikasim" size="3" value="<?php echo $k["kasim"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="takimcalismasiaralik" size="3" value="<?php echo $k["aralik"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="vorttakim" size="3" value="<?php echo $k["ocak"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="forttakim" size="3" value="<?php echo $k["ocak"]; ?>" ></td>
</tr>

<!--5S Kurallarına Uyum Tablosu-->
<tr >
<td >5S Kurallarına Uyum</td>
<td width="70" align="center"><input type="text" name="s_kurallariocak" size="3" value="<?php echo $x["ocak"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="s_kurallarisubat" size="3" value="<?php echo $x["subat"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="s_kurallarimart" size="3" value="<?php echo $x["mart"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="s_kurallarinisan" size="3" value="<?php echo $x["nisan"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="s_kurallarimayis" size="3" value="<?php echo $x["mayis"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="s_kurallarihaziran" size="3" value="<?php echo $x["haziran"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="s_kurallaritemmuz" size="3" value="<?php echo $x["temmuz"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="s_kurallariagustos" size="3" value="<?php echo $x["agustos"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="s_kurallarieylul" size="3" value="<?php echo $x["eylul"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="s_kurallariekim" size="3" value="<?php echo $x["ekim"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="s_kurallarikasim" size="3" value="<?php echo $x["kasim"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="s_kurallariaralik" size="3" value="<?php echo $x["aralik"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="vortskurallari" size="3" value="<?php echo $x["ocak"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="fortskurallari" size="3" value="<?php echo $x["ocak"]; ?>" ></td>
</tr>


<!--İSG Kurallarına Uyum-->
<tr >
<td >İSG Kurallarına Uyum</td>
<td width="70" align="center"><input type="text" name="isg_cevreocak" size="3" value="<?php echo $i["ocak"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="isg_cevresubat" size="3" value="<?php echo $i["subat"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="isg_cevremart" size="3" value="<?php echo $i["mart"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="isg_cevrenisan" size="3" value="<?php echo $i["nisan"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="isg_cevremayis" size="3" value="<?php echo $i["mayis"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="isg_cevrehaziran" size="3" value="<?php echo $i["haziran"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="isg_cevretemmuz" size="3" value="<?php echo $i["temmuz"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="isg_cevreagustos" size="3" value="<?php echo $i["agustos"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="isg_cevreeylul" size="3" value="<?php echo $i["eylul"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="isg_cevreekim" size="3" value="<?php echo $i["ekim"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="isg_cevrekasim" size="3" value="<?php echo $i["kasim"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="isg_cevrearalik" size="3" value="<?php echo $i["aralik"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="vortisg" size="3" value="<?php echo $i["ocak"]; ?>" ></td>
<td width="70" align="center"><input type="text" name="fortsisg" size="3" value="<?php echo $i["ocak"]; ?>" ></td>
</tr>

<tr >
	<!--
SELECT SUM(onerisayisi.ocak + 5s_kurallari.ocak + hurda.ocak +isg_cevre.ocak + takttime_rotasyon.ocak + takimcalismasi.ocak + sarikart_tutanak.ocak) as Total_Ocak 
From onerisayisi, 5s_kurallari,hurda,takttime_rotasyon,takimcalismasi,sarikart_tutanak,isg_cevre 
WHERE onerisayisi.id =236 and 5s_kurallari.id=236 and hurda.id=236 and isg_cevre.id=236 and takttime_rotasyon.id=236 and 
takimcalismasi.id=236 and sarikart_tutanak.id=236-->
<td >Aylık Ortalamalar</td>
<td ><?php $uye_id=$_GET["id"];
$p = $db->prepare("SELECT SUM(?+?+?+?+?+ 5s_kurallari.ocak +isg_cevre.ocak + takimcalismasi.ocak )/8 as Total_Ocak 
From 5s_kurallari,hurda,takimcalismasi,isg_cevre 
WHERE 5s_kurallari.id=? and isg_cevre.id=? and takimcalismasi.id=?");
$p->execute(array($d1,$o1,$h1,$s1,$t1,$uye_id,$uye_id,$uye_id));
$q = $p->fetch(PDO::FETCH_ASSOC); 
echo $q["Total_Ocak"];?></td>
<td ><?php $uye_id=$_GET["id"];
$p = $db->prepare("SELECT SUM(?+?+?+?+?+ 5s_kurallari.subat +isg_cevre.subat + takimcalismasi.subat )/8 as Total_Subat
From 5s_kurallari,hurda,takimcalismasi,isg_cevre 
WHERE 5s_kurallari.id=? and isg_cevre.id=? and takimcalismasi.id=?");
$p->execute(array($d2,$o2,$h2,$s2,$t2,$uye_id,$uye_id,$uye_id));
$q = $p->fetch(PDO::FETCH_ASSOC); 
echo $q["Total_Subat"];?></td>
<td ><?php $uye_id=$_GET["id"];
$p = $db->prepare("SELECT SUM(?+?+?+?+?+ 5s_kurallari.mart +isg_cevre.mart + takimcalismasi.mart )/8 as Total_Mart
From 5s_kurallari,hurda,takimcalismasi,isg_cevre 
WHERE 5s_kurallari.id=? and isg_cevre.id=? and takimcalismasi.id=?");
$p->execute(array($d3,$o3,$h3,$s3,$t3,$uye_id,$uye_id,$uye_id));
$q = $p->fetch(PDO::FETCH_ASSOC); 
echo $q["Total_Mart"];?></td>
<td >&nbsp;</td>
<td >&nbsp;</td>
<td >&nbsp;</td>
<td >&nbsp;</td>
<td >&nbsp;</td>
<td >&nbsp;</td>
<td >&nbsp;</td>
<td >&nbsp;</td>
<td >&nbsp;</td>
<td >&nbsp;</td>
<td >&nbsp;</td>

</tr>
<tr >
<td  rowspan="2">Çeyrek Ortalamalar</td>
<td  colspan="3">1 Çeyrek</td>
<td  colspan="3">2 Çeyrek</td>
<td  colspan="3">3 Çeyrek</td>
<td  colspan="3">4 Çeyrek</td>
<td  colspan="2">Genel Ortalama</td>
</tr>

<tr >
<td colspan="3">1 Çeyrek Ortalama Rakam</td>
<td colspan="3">2 Çeyrek Ortalama Rakam</td>
<td colspan="3">3 Çeyrek Ortalama Rakam</td>
<td  colspan="3">4 Çeyrek Ortalama Rakam</td>
<td  colspan="2">Genel Ortalama Rakam</td>
</tr>
</tbody>
				
</table>

</form>
				

			




</div>
											<!--end::Body-->
										</div>
										<!--end::Card-->
									</div>


		<!--alt baslangıç-->
				<?php include ("alt.php");?>  