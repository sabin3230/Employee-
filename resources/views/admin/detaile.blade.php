@extends('main')
@section('content')

<div class="col" style="padding: 0px 0px 0px 0px">
                        <div class="row" style="height: 550px">
                            <div class="col-12 bg-white px-3 mb-3 pb-3">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">NAME</label>
                                    <div class="col-sm-10">
                                {{ $user->name }}
                                    </div>  
                                  </div>

                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">ADDRESS</label>
                                    <div class="col-sm-10">
                                {{ $user->address }}
                                    </div>  
                                  </div>

                                  
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">CONTACT</label>
                                    <div class="col-sm-10">
                                  {{ $user->contact }}
                                    </div>  
                                  </div>

                                  <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                  {{ $user->email }}
                                    </div>  
                                  </div>
                                  <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Join Date</label>
                                    <div class="col-sm-10">
                                  {{ $user->join_date }}
                                    </div>  
                                  </div>

                                  <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">DATE OF BIRTH</label>
                                    <div class="col-sm-10">
                                  {{ $user->dob }}
                                    </div>  
                                  </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                    </div>
@endsection