<!--HÜMEYRA KÖSEOĞLU-->
                                        <div class="col-xl-12 ">
										<!--begin::Card-->
										<div class="card ">
											<!--begin::Body-->
											<div class="card-body ">


							<!--PERSONEL LİSTESİ-->				
							<?php 
	                        $v = $db->prepare("SELECT * FROM bilgiler");
	                        $v->execute(array());
	                        $k = $v->fetchALL(PDO::FETCH_ASSOC);
	                        $x = $v->rowCount();
	                        ?>	
                            <table id="datatable-buttons" class="table table-hover table-secondary table-sm" >
                             <thead >
                                        <tr class=" bg-secondary  text-center">
											<th><h3>Personel</th></h3>
											<th><h3>Vardiya</th></h3>
                                            <th><h3>Hat</th></h3>
											<th ></th>
                                        </tr>
                            </thead>
                            <tbody>
                                       	<?php if($x){foreach($k as $m){	?> 
										<tr>
										<td style=" text-align: center;"> <span class=" text-hover-danger"><h3><?php echo $m["isimler"];?></span></h3></td>
										<td style=" text-align: center;"> <span class=""><h3><?php echo $m["vardiya"];?></span></td></h3>
										<td style=" text-align: center;"> <span class=""><h3><?php echo $m["hat"];?></span></td></h3>
										<td style=" text-align: center;">
										<a href="?do=profil&id=<?php echo $m ["id"];?>"  class="badge badge-danger">Detaylı</a></td>										
                                        </tr>
										<?php }}?>
                            </tbody>
		                    </table>


											</div>
											<!--end::Body-->
										</div>
										<!--end::Card-->
									</div>
								</div>
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>

					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>

		<!--start::alt-->
				<?php include ("alt.php");?>     
		<!--end::alt-->
