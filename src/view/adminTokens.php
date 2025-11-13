            <div class="page-container">
               <!-- Start Container Fluid -->
               <div class="page-content">

                    <div class="row">
                         <div class="col-md-6 col-xl-3">
                              <div class="card card-full-height">
                                   <div class="card-body ">
                                        <div class="d-flex align-items-center gap-3">
                                             <img src="src/view/assets/images/food-icon/i-2.png" alt="" class="img-fluid">
                                             <div>
                                                  <p class="text-dark fw-semibold fs-26 mb-1">80</p>
                                                  <p class="card-title mb-0">Total Tokens</p>
                                             </div>
                                             <div class="ms-auto">
                                                  <a href="#!" class="btn btn-primary avatar-sm rounded-circle d-flex align-items-center justify-content-center"><i class="ri-eye-line align-middle fs-16 text-white"></i></a>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="col-md-6 col-xl-3">
                              <div class="card card-full-height">
                                   <div class="card-body ">
                                        <div class="d-flex align-items-center gap-3">
                                             <img src="src/view/assets/images/food-icon/i-3.png" alt="" class="img-fluid">
                                             <div>
                                                  <p class="text-dark fw-semibold fs-26 mb-1">21</p>
                                                  <p class="card-title mb-0">Updateds</p>
                                             </div>
                                             <div class="ms-auto">
                                                  <a href="#!" class="btn btn-primary avatar-sm rounded-circle d-flex align-items-center justify-content-center"><i class="ri-eye-line align-middle fs-16 text-white"></i></a>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="col-md-6 col-xl-3">
                              <div class="card card-full-height">
                                   <div class="card-body ">
                                        <div class="d-flex align-items-center gap-3">
                                             <img src="src/view/assets/images/food-icon/i-1.png" alt="" class="img-fluid">
                                             <div>
                                                  <p class="text-dark fw-semibold fs-26 mb-1">78</p>
                                                  <p class="card-title mb-0">Petitions</p>
                                             </div>
                                             <div class="ms-auto">
                                                  <a href="#!" class="btn btn-primary avatar-sm rounded-circle d-flex align-items-center justify-content-center"><i class="ri-eye-line align-middle fs-16 text-white"></i></a>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="col-md-6 col-xl-3">
                              <div class="card card-full-height">
                                   <div class="card-body">
                                        <div class="d-flex align-items-center gap-3">
                                             <img src="src/view/assets/images/food-icon/i-4.png" alt="" class="img-fluid">
                                             <div>
                                                  <p class="text-dark fw-semibold fs-26 mb-1">48</p>
                                                  <p class="card-title mb-0">Consumer </p>
                                             </div>
                                             <div class="ms-auto">
                                                  <a href="#!" class="btn btn-primary avatar-sm rounded-circle d-flex align-items-center justify-content-center"><i class="ri-eye-line align-middle fs-16 text-white"></i></a>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="row">
                         <div class="col-xl-12">
                              <div class="card">
                                   <div class="card-header d-flex justify-content-between align-items-center">
                                        <div>
                                             <p class="card-title mb-0">Tokens API</p>
                                        </div>
                                        <div class="d-flex gap-3">
                                             <a href="#/" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#AgregarToken">Nuevo Token</a>
                                             <div class="dropdown">
                                                  <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light rounded" data-bs-toggle="dropdown" aria-expanded="false">
                                                       Reportes
                                                  </a>
                                                  <div class="dropdown-menu dropdown-menu-end">
                                                       <!-- item-->
                                                       <a href="#!" class="dropdown-item">Export</a>
                                                       <!-- item-->
                                                       <a href="#!" class="dropdown-item">Import</a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="">
                                        <div class="table-responsive">
                                             <table class="table align-middle mb-0 table-hover table-centered" id="tbl_tokensApi">
                                                  <thead class="bg-light-subtle fs-12 text-uppercase">
                                                       <tr>
                                                            <th>Token No.</th>
                                                            <th>F. Registro</th>
                                                            <th>Token</th>
                                                          <!--   <th>Descripción</th> -->
                                                            <th>Action</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody id="tbody_tokens">

                                                  </tbody>
                                             </table>
                                        </div>
                                        <!-- end table-responsive -->
                                   </div>
                                   <div class="card-footer border-0">
                                        <nav aria-label="Page navigation example">
                                             <ul class="pagination justify-content-end mb-0">
                                                  <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="ri-arrow-left-s-line"></i></a></li>
                                                  <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                                  <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                                  <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                                  <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="ri-arrow-right-s-line"></i></a></li>
                                             </ul>
                                        </nav>
                                   </div>
                              </div>
                         </div>

                    </div>

               </div>
               <!-- End Page Content -->
          </div>

          
          <!-- First Modal -->
           <div class="modal fade" id="AgregarToken" aria-hidden="true" aria-labelledby="AgregarTokenLabel" tabindex="-1">
               <div class="modal-dialog modal-dialog-centered">
                   <div class="modal-content">
                       <div class="modal-header">
                              <h5 class="card-title mb-2"> Nuevo Token </h5>
                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                       </div>
                       <div class="modal-body">
                            <form id="frm_new_token">
                                <div class="mb-3">
                                        <label for="tokennn" class="form-label">Token</label>
                                        <input type="text" id="tokennn" name="tokennn" class="form-control">
                                </div>
                                <div class="mb-3">
                                        <label for="descripcion" class="form-label">Descripción</label>
                                        <textarea class="form-control" id="descripcion" name="descripcion" rows="5"></textarea>
                                </div>
                            </form>
                             <button type="button" class="btn btn-outline-primary" onclick="registrarToken();">Registrar</button>
                       </div>
                   </div>
               </div>
           </div>

            <div class="modal fade" id="act_token" aria-hidden="true" aria-labelledby="act_tokenLabel" tabindex="-1">
               <div class="modal-dialog modal-dialog-centered">
                   <div class="modal-content">
                       <div class="modal-header">
                              <h5 class="card-title mb-2"> Modificar Token </h5>
                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                       </div>
                       <div class="modal-body">
                            
                            <form id="frm_update_token">
                                <input type="hidden" id="idToken_new" name="idToken_new" value="">
                                <div class="mb-3">
                                        <label for="tokenApi_new" class="form-label">Token</label>
                                        <input type="text" id="tokenApi_new" name="tokenApi_new" class="form-control">
                                </div>
                                <div class="mb-3">
                                        <label for="descripcion_new" class="form-label">Descripción</label>
                                        <textarea class="form-control" id="descripcion_new" name="descripcion_new" rows="5"></textarea>
                                </div>
                            </form>
                             <button type="button" class="btn btn-outline-primary" onclick="actualizarToken();">Registrar</button>
                       </div>
                   </div>
               </div>
           </div>

     <script src="<?php echo BASE_URL;?>src/view/js/admin-tokensApi.js"></script>