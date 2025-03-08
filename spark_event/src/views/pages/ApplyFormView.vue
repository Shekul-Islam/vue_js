
<script setup>

</script>

<template>
    <div class="apply-form-page">
        <div class="container">
            <div class="application-form">
                <div class="form-title">
                    <h1>APPLICATION FORM</h1>
                    <hr>
                </div>

                <div class="row">
                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="designation">Select Your Job</label>
                            <select id="job-select" class="custom-select">
                                <option disabled selected>-- Select --</option>
                                <option value="developer">Developer</option>
                                <option value="designer">Designer</option>
                                <option value="manager">Manager</option>
                                <option value="manager">Manager</option>
                                <option value="manager">Manager</option>
                            </select>
                        </div>

                    </div>

                    <div class="col-md-12">
                        <div class="availability-table">
                            <h2>Availability</h2>
                            <table>
                              <thead>
                                <tr>
                                  <th></th>
                                  <th>Early</th>
                                  <th>Late</th>
                                  <th>Night</th>
                                  <th>Unavailable</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Monday</td>
                                  <td><input type="checkbox"></td>
                                  <td><input type="checkbox"></td>
                                  <td><input type="checkbox"></td>
                                  <td><input type="checkbox"></td>
                                </tr>
                                <tr>
                                  <td>Tuesday</td>
                                  <td><input type="checkbox"></td>
                                  <td><input type="checkbox"></td>
                                  <td><input type="checkbox"></td>
                                  <td><input type="checkbox"></td>
                                </tr>
                                <tr>
                                  <td>Wednesday</td>
                                  <td><input type="checkbox"></td>
                                  <td><input type="checkbox"></td>
                                  <td><input type="checkbox"></td>
                                  <td><input type="checkbox"></td>
                                </tr>
                                <tr>
                                  <td>Thursday</td>
                                  <td><input type="checkbox"></td>
                                  <td><input type="checkbox"></td>
                                  <td><input type="checkbox"></td>
                                  <td><input type="checkbox"></td>
                                </tr>
                                <tr>
                                  <td>Friday</td>
                                  <td><input type="checkbox"></td>
                                  <td><input type="checkbox"></td>
                                  <td><input type="checkbox"></td>
                                  <td><input type="checkbox"></td>
                                </tr>
                                <tr>
                                  <td>Saturday</td>
                                  <td><input type="checkbox"></td>
                                  <td><input type="checkbox"></td>
                                  <td><input type="checkbox"></td>
                                  <td><input type="checkbox"></td>
                                </tr>
                                <tr>
                                  <td>Sunday</td>
                                  <td><input type="checkbox"></td>
                                  <td><input type="checkbox"></td>
                                  <td><input type="checkbox"></td>
                                  <td><input type="checkbox"></td>
                                </tr>
                              </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- PERSONAL DETAILS Code Here -->
                    <div class="col-md-12">
                        <div class="personal-details-title">
                            <h2>PERSONAL DETAILS</h2>
                            <hr>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group-field">
                            <label for="">First Name</label>
                            <input type="text" placeholder="Your First Name">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group-field">
                            <label for="">Middle Name</label>
                            <input type="text" placeholder="Your Middle Name">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group-field">
                            <label for="">Last Name</label>
                            <input type="text" placeholder="Your Last Name">
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-10">
                        <div class="form-group-field">
                            <label for="">E-mail Address</label>
                            <input type="text" placeholder="Your E-mail">
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-10">
                        <div class="form-group-field">
                            <label for="">Phone Number</label>
                            <input type="text" placeholder="Your Phone">
                            <span class="phone-example">example (+44)0111-2222222</span>
                        </div>
                    </div>

                    <div class="col-md-12"></div>

                    <div class="col-lg-4 col-md-4">
                        <div class="form-group-field">
                            <label for="">Date of Birth</label>
                            <input type="date" placeholder="Your Phone">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group-field">
                            <label for="">Address</label>
                            <input type="text" placeholder="Type Your Address">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group-field">
                            <label for="">City</label>
                            <input type="text" placeholder="Your City">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group-field">
                            <label for="">Town</label>
                            <input type="text" placeholder="Your Town">
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group-field">
                            <label for="">Postal Code</label>
                            <input type="text" placeholder="Postal Code Here">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group-field">
                            <label for="">Country</label>
                            <select name="" id="" class="custom-select">
                                <option value="">United Kingdoom</option>
                            </select>
                        </div>
                    </div>

                    <!-- OTHERS INFORMATION Code Here -->
                    <div class="col-md-12">
                        <div class="personal-details-title">
                            <h2>OTHERS INFORMATION</h2>
                            <hr>
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-10">
                        <div class="form-group-field">
                            <label for="">N.I Number</label>
                            <input type="text" placeholder="Insurance Number">
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-10 mb-3">
                        <div class="form-group-field">
                            <label for="">Country</label>
                            <select name="" id="" class="custom-select">
                                <option value="">United Kingdoom</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-10">
                        <div class="form-group-field">
                            <label for="">Passport Number</label>
                            <input type="text" placeholder="Your Passport Number">
                        </div>
                    </div>
                    
                    <div class="col-md-12 mb-4">
                        <div class="form-group-field">
                            <label for="">Upload Passport</label>
                            <div class="files-upload-field">
                                <span>Select File(s)</span> <i class="fa-solid fa-upload"></i>
                                <input type="file">
                            </div>
                            <span>Images (jpg, jpeg, gif, png, bmp) or pdf</span>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group-field">
                            <label for="">Upload CV</label>
                            <div class="files-upload-field">
                                <span>Select File(s)</span> <i class="fa-solid fa-upload"></i>
                                <input type="file">
                            </div>
                            <span>Only Word or PDF</span>
                        </div>
                    </div>

                    <!-- NEXT OF KIN Code Here -->
                    <div class="col-md-12">
                        <div class="personal-details-title">
                            <h2>NEXT OF KIN</h2>
                            <hr>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group-field">
                            <label for="">First Name</label>
                            <input type="text" placeholder="Your First Name">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group-field">
                            <label for="">Middle Name</label>
                            <input type="text" placeholder="Your Middle Name">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group-field">
                            <label for="">Last Name</label>
                            <input type="text" placeholder="Your Last Name">
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-10">
                        <div class="form-group-field">
                            <label for="">Phone Number</label>
                            <input type="text" placeholder="Your Phone">
                            <span class="phone-example">example (+44)0111-2222222</span>
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-10">
                        <div class="form-group-field">
                            <label for="">Where did you hear about us?</label>
                            <input type="text" placeholder="please provide the reference Name ( person /company)">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <button class="primary-button1">Submit</button>
                    </div>


                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.apply-form-page{
    padding: 70px 0;
    background: #FAFAFA 0% 0% no-repeat padding-box;
}
.application-form{
    border: 1px solid #D5D5D5;
    background: #FFFFFF 0% 0% no-repeat padding-box;
    padding: 65px 22px;
}
.form-title{
    margin-bottom: 70px;
}
.form-title h1{
    font: normal normal 600 40px/60px Montserrat;
    color: #464646;
    text-transform: uppercase;
}

.form-group label{
    font: normal normal normal 24px/36px Poppins;
    color: #363636;
    margin-bottom: 10px;
}

.form-group .custom-select,
.form-group-field .custom-select{
    width: 100%;
    padding: 8px 16px;
    font-size: 16px;
    color: #666;
    border: 1px solid #D5D5D5;
    border-radius: 8px;
    background-color: #fff;
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    background-image: url('data:image/svg+xml;charset=US-ASCII,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 4 5"><path fill="%23666" d="M2 5L4 3H0z"/></svg>');
    background-repeat: no-repeat;
    background-position: right 16px center;
    background-position-y: calc(50% - 5px);
    background-size: 15px;
}

.custom-select:focus {
    border-color: var(--primary-color);
    outline: none;
}

.availability-table {
    font-family: Arial, sans-serif;
    margin: 0 auto;
    border-collapse: collapse;
    margin-top: 70px;
}

.availability-table  h2 {
    font: normal normal medium 24px/36px Poppins;
    color: #363636;
}

.availability-table  table {
    width: 100%;
    border-spacing: 0;
}

.availability-table  thead th {
    background-color: #EEEEEE;
    text-align: center;
    padding: 10px;
    font-weight: bold;
}

.availability-table tbody td {
    text-align: center;
    padding: 10px;
}

.availability-table tbody td:first-child {
    text-align: left;
    font-weight: normal;
}

.availability-table tbody tr:nth-child(even) {
    background-color: #f4f4f4;
}

.availability-table tbody tr:nth-child(odd) {
    background-color: #ffffff;
}

.availability-table input[type="checkbox"] {
    transform: scale(1.2); 
    cursor: pointer;
}
.personal-details-title{
    margin-top: 50px;
}
.personal-details-title h2{
    font: normal normal 600 28px/42px Montserrat;
    color: #464646;
    text-transform: uppercase;
}
.form-group-field label{
    font: normal normal normal 16px/24px Poppins;
    padding: 5px 6px;
    color: #363636;
}
.form-group-field input{
    border: 1px solid #D5D5D5;
    border-radius: 8px;
    width: 100%;
    padding: 8px 15px;
    margin-bottom: 20px;
    outline: none;
    color: var(--primary-color);
}
.form-group-field input[type="date"]{
    color: #D5D5D5;
}
.form-group-field input:focus{
    border-color: var(--primary-color);
}
.form-group-field input::placeholder{
    font: normal normal normal 14px/21px Poppins;
    color: #D5D5D5;
}

.files-upload-field{
    width: 170px;
    background: #FFFFFF 0% 0% no-repeat padding-box;
    border: 1px solid #D5D5D5;
    border-radius: 8px;
    padding: 14px 18px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: relative;
}
.files-upload-field span{
    font: normal normal normal 16px/21px Poppins;
    color: #A57B5D;
}
.files-upload-field i{
    color: #A57B5D;
    font-size: 20px;
}
.files-upload-field input{
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    opacity: 0;
    cursor: pointer;
}
.form-group-field>span{
    text-align: left;
    font: italic normal 300 14px/21px Poppins;
    color: #464646;
    padding-left: 8px;
}
.primary-button1{
    padding: 10px 64px;
    margin-top: 20px;
}
.form-group-field{
    position: relative;
}
.phone-example{
    position: absolute;
    right: 0;
    bottom: -3px;
}

@media screen and (max-width: 991px) {
    .form-title{
        margin-bottom: 50px;
    }
    .availability-table{
        margin-top: 50px;
    }
}

@media screen and (max-width: 767px) {
    .application-form{
        padding: 50px 12px;
    }
    .form-title h1{
        font: normal normal 600 24px/36px Montserrat;
    }
    .availability-table h2{
        font: normal normal normal 24px/36px Poppins;
    }
    .availability-table thead th,
    .availability-table tbody td{
        font: normal normal 600 15px/21px Poppins;
    }
    .personal-details-title h2{
        font: normal normal 600 24px/36px Montserrat;
    }
    .form-group-field input{
        margin-bottom: 10px;
    }
    .form-group-field > span{
        bottom: -10px;
    }
}
@media screen and (max-width: 575px) {
    .availability-table thead th,
    .availability-table tbody td{
        font: normal normal 600 13px/21px Poppins;
        padding-left: 2px;
        padding-right: 2px ;
    }

}
</style>