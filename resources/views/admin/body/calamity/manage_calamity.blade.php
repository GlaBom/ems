@extends('admin.admin_master')
@section('admin')
    

<div class="page-content">
   <div class="container-fluid">

        {{-- start page title --}}

        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Calamity Information</h4>
                </div>
            </div>
        </div>

        {{-- end page title --}}

        {{-- start add calamity --}}

        <div class="row" data-select2-id="147">
            <div class="col-lg-12" data-select2-id="146">
               <div class="card" data-select2-id="145">
                  <div class="card-body" data-select2-id="144">
         
                     <h4 class="card-title">Add Calamity</h4>
  
                     <form data-select2-id="13">
                        <div class="row" data-select2-id="12">
                           <div class="col-md-4">

                              <div class="mb-3" data-select2-id="10"><br>
                                 <label class="form-label">Calamity Type</label>

                                    <select class="form-select" aria-label="Default select example">
                                       <option selected="">Select</option>
                                       <option value="1">Typhoon</option>
                                       <option value="2">Earthquake</option>
                                       <option value="3">Flood</option>
                                    </select>
                              </div>

                           </div>
         
                           <div class="col-md-4">

                              <div class="mb-0"> <br>

                                 <label class="form-label">Description</label>

                                    <div class="col-sm-10">
                                       <input name='description' class="form-control" type="text" id="example-text-input">
                                    </div>
                              </div>                             
                           </div>

                           <div class="col-md-4">

                           <div class="mb-4"><br>
                              <label class="form-label" for="input-date1">Dates</label>
                              <input id="input-date1" class="form-control input-mask">
                          </div>
                        </div>

                           <div>
                              <input type="submit" class="btn btn-info btn-rounded bg-dark waves-effect waves-light" value="Add Calamity">
                           </div>
   
                     </form>

                  </div>
               </div>
            </div>
        </div>
        
        {{-- end add calamity --}}
      
        {{-- start calamity info --}}

         <div class="row">
            <div class="col-12">
               <div class="card">
                  <div class="card-body">
                  
                     <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                     
                     {{-- start calamity info --}}

                     <div class="table-responsive">

                         <table class="table table-editable table-nowrap align-middle table-edits">

                             <thead>
                                 <tr style="cursor: pointer;">
                                     <th>ID</th>
                                     <th>Calamity Type</th>
                                     <th>Desription</th>
                                     <th>Start Date</th>
                                     <th>End Date</th>
                                     <th>Action</th>
                                 </tr>
                             </thead>

                             <tbody>
                              @php
                                 $i = 1;
                              @endphp

                              @foreach ($data as $calamity)
                                 <tr data-id="1" style="cursor: pointer;">
                                       <td> {{ $i++ }} </td>
                                       <td> {{ $calamity->calamity_type }} </td>
                                       <td> {{ $calamity->description }} </td>
                                       <td> {{ $calamity->start_date }} </td>
                                       <td> {{ $calamity->end_date }} </td>
                                     <td>
                                       <a href="#" data-bs-original-title="Edit user">
                                           <i class="fas fa-user-edit text-secondary"
                                               aria-hidden="true"></i>
                                       </a>
                                       <span>
                                           <i class="cursor-pointer fas fa-trash text-secondary"
                                               aria-hidden="true"></i>
                                       </span>
                                   </td>
                             </tbody>

                         </table>
                     </div>

                     {{-- end calamity info --}}
                     
               </div>
            </div>
         </div>

   </div>
</div>

</div>

@endsection