@extends('layouts.signuplayout')

@section('title', 'Registration')

@section('container_title', 'Company Registration')

@section('form_fields')

<form class="form-horizontal bordered-row" id="demo-form" data-parsley-validate="">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-5 control-label">Company Name <span class="required font-red">*</span></label>
                            <div class="col-sm-6">
                                <div class="input-group">
                                     <span class="input-group-addon bg-black">
                                        <i class="glyphicon glyphicon-user"></i>
                                    </span>
                                    <input type="text" placeholder="" name="company_name" id="company_name"  class="form-control " required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label">Registeration Number <span class="required font-red">*</span></label>
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <span class="input-group-addon bg-black">
                                        <i class="glyphicon glyphicon-pencil"></i>
                                    </span>
                                    <input type="text" data-parsley-minlength="6" placeholder="" required class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label">Service Tax Number <span class="required font-red">*</span></label>
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <span class="input-group-addon bg-black">
                                        <i class="glyphicon glyphicon-pencil"></i>
                                    </span>
                                    <input type="text" required class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label">Company Logo <span class="required font-red">*</span></label>
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <span class="input-group-addon bg-black">
                                        <i class="glyphicon glyphicon-paperclip"></i>
                                    </span>
                                    <input type="file"  required class="form-control">
                                </div>
                            </div>
                        </div>
                        

                        <div class="form-group">
                            <label class="col-sm-5 control-label">Company Reputation <span class="required font-red">*</span></label>
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <span class="input-group-addon bg-black">
                                        <i class="glyphicon glyphicon-time"></i>
                                    </span>
                                    <input type="text"   required class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label">Company Certification <span class="required font-red">*</span></label>
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <span class="input-group-addon bg-black">
                                        <i class="glyphicon glyphicon-paperclip"></i>
                                    </span>
                                    <input type="file" required class="form-control">
                                </div>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="col-sm-5 control-label">Number of Employees <span class="required font-red">*</span></label>
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <span class="input-group-addon bg-black">
                                        <i class="glyphicon glyphicon-user"></i>
                                    </span>
                                    <input type="text"  required class="form-control">
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Specialization <span class="required font-red">*</span></label>
                            <div class="col-sm-6">
                            <div class="input-group">
                            <span class="input-group-addon bg-black">
                                        <i class="glyphicon glyphicon-screenshot"></i>
                                    </span>
                                <input type="text"  required class="form-control">
                                </div>
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Email-ID <span class="required font-red">*</span></label>
                            <div class="col-sm-6">
                                <div class="input-group">
                                   <span class="input-group-addon bg-black">
                                        <i class="  glyphicon glyphicon-envelope"></i>
                                    </span>
                                    <input type="email"  required class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Website <span class="required font-red">*</span></label>
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <span class="input-group-addon bg-black">
                                        <i class="glyphicon glyphicon-globe"></i>
                                    </span>
                                        <input type="text" data-parsley-type="url" required class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Contact Number <span class="required font-red">*</span></label>
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <span class="input-group-addon bg-black">
                                        <i class="glyphicon glyphicon-earphone"></i>
                                    </span>
                                    <input type="text"  required class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Address <span class="required font-red">*</span></label>
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <span class="input-group-addon bg-black">
                                        <i class="glyphicon glyphicon-map-marker"></i>
                                    </span>
                                    <input type="text" required class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Branch Office </label>
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <span class="input-group-addon bg-black">
                                        <i class="glyphicon glyphicon-home"></i>
                                    </span>
                                    <input type="text"   class="form-control">
                                
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Pincode <span class="required font-red">*</span></label>
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <span class="input-group-addon bg-black">
                                        <i class="  glyphicon glyphicon-pushpin"></i>
                                    </span>
                                    <input type="text" required class="form-control"> 
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="  text-center pad20A mrg25T">
                    <div class="form-group">
                            <label class="col-sm-3 control-label"></label>
                            <div class="col-sm-6">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" required name="terms">
                                        Accept Terms &amp; Conditions
                                    </label>
                                </div>
                                <div class="text-right col-md-6">
                            <a href="#" class="switch-button" switch-target="#login-forgot" switch-parent="#login-form" title="Recover password">Forgot your password?</a>
                        </div>
                            </div>
                        </div>
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                      <button class="btn btn-lg btn-primary btn-block add-demo-transition" data-transition="pt-page-flipInTop-init" > Register</button>
                   
                    </div>
                </div>
            </form>

@endsection

