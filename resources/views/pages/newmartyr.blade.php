@extends('layouts.app')

@section('mainContent')
<div class="page-contatiner">
    <div class="center-content-less-margin">
        <h1> Add Martyr </h1>
        <div class="para-content">
            <div class="row">
                <form class="col s12" action="{{ action('MartyrsController@store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="first_name" name="name" type="text" class="validate">
                            <label for="first_name">Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="city" name="city" type="text" class="validate">
                            <label for="city">City</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <select name="force">
                                <option value="" disabled selected>Select Force</option>
                                <option value="BSF">BSF</option>
                                <option value="CISF">CISF</option>
                                <option value="CRPF">CRPF</option>
                                <option value="NDRF">NDRF</option>
                                <option value="NSG">NSG</option>
                                <option value="Air Force">Air Force</option>
                                <option value="INS">INS</option>
                                <option value="MARCOS">MARCOS</option>
                            </select>
                            <label>Select Force</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input type="text" id="date" name="date" class="datepicker">
                            <label for="date">Date of demise</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="number" id="family_mems" name="family_mems" min="0" max="10" />
                            <label for="family_mems">Enter No. of Family Members</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="bank_name" name="bank_name" type="text" class="validate">
                            <label for="bank_name">Bank Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="account_no" name="account_no" type="text" class="validate">
                            <label for="account_no">Account No</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="ifsc_code" name="ifsc_code" type="text" class="validate">
                            <label for="ifsc_code">IFSC Code</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <div class="file-field input-field">
                                <div class="btn">
                                    <span>File</span>
                                    <input type="file" name="profile_photo">
                                </div>
                                <div class="file-path-wrapper">
                                    <input placeholder="Choose Picture" class="file-path validate" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="submit" class="waves-effect waves-light btn" value="SUBMIT">
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>



@endsection