<!--HÜMEYRA KÖSEOĞLU-->
                                        <div class="col-xl-12 ">
										<!--begin::Card-->
										<div class="card ">
											<!--begin::Body-->
											<div class="card-body ">

                           <!--Magna Genel Rapor-->
                             <table class="table table-xl table-bordered">
                                 <thead class="thead-dark">
                                     <tr >
                                         <th scope="col">Genel Ortalama</th>
                                         <th scope="col">1. Çeyrek</th>
                                         <th scope="col">2. Çeyrek</th>
                                         <th scope="col">3. Çeyrek</th>
                                         <th scope="col">4. Çeyrek</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <tr class="table-active">
                                     <!--Henüz yapılmadı-->   
									 <th scope="row">79.21</th>
                                         <td>78.95</td>
                                         <td>80.40</td>
                                         <td>78.40</td>
                                         <td>80.40</td>
                                     </tr>
                                 </tbody>
                             </table>	


                              <!--Magna Personel Rapor-->
							<?php 
	                        $v = $db->prepare("SELECT * FROM bilgiler");
	                        $v->execute(array());
	                        $k = $v->fetchALL(PDO::FETCH_ASSOC);
	                        $x = $v->rowCount();
	                        ?>	
                            <table id="datatable-buttons" class="table table-bordered table-responsive table-hover table-secondary table-sm" >
                             <thead >
                                        <tr class=" bg-secondary  text-center">
											<th><h3>Personel</th></h3>
											<th><h3>Genel Ortalama</th></h3>
                                            <th><h3>1. Çeyrek</th></h3>
                                            <th><h3>2. Çeyrek</th></h3>
                                            <th><h3>3. Çeyrek</th></h3>
                                            <th><h3>4. Çeyrek</th></h3>																		                                        
                                        </tr>
                                    </thead>
                                       <tbody>
                                       	<?php if($x){foreach($k as $m){	?> 
										<tr>
										<td style=" text-align: center;"> <span class=" text-hover-danger"><h3><?php echo $m["isimler"];?></span></h3></td>
										<!--Henüz yapılmadı-->
										<td style=" text-align: center;"> <span class=""><h3>98.00</span></td></h3>
										<td style=" text-align: center;"> <span class=""><h3>78.95</span></td></h3>
                                        <td style=" text-align: center;"> <span class=""><h3>80.40</span></td></h3>										
										<td style=" text-align: center;"> <span class=""><h3>78.40</span></td></h3>										
                                        <td style=" text-align: center;"> <span class=""><h3>80.40</span></td></h3>										

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
