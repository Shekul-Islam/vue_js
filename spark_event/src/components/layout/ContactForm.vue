<script setup>
import { onMounted, ref } from "vue";

const bgImg = ref(import.meta.env.VITE_APP_URL);

</script>

<template>
<div :style="{ background: `linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(${bgImg}/src/assets/image/contact/london-image.png) no-repeat center center/cover`}">
    <div class="container">
        <div class="contact-form">
            <div class="section-heading" >
                <h2>LET'S WORK TOGETHER</h2>
                <p>We love to hear from you</p>
            </div>
    
            <div class="form-area">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="first-name">First Name</label>
                            <input type="text">
                        </div>
                    </div>
    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="last-name">Last Name</label>
                            <input type="text">
                        </div>
                    </div>
    
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="e-mail">E-mail</label>
                            <input type="text">
                        </div>
                    </div>
    
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="company">Company</label>
                            <input type="text">
                        </div>
                    </div>
    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="job-title">Job Title</label>
                            <input type="text">
                        </div>
                    </div>
    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text">
                        </div>
                    </div>
    
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea rows="5" id="message"></textarea>
                        </div>
                    </div>
    
                    <div class="form-group">
                        <button class="primary-button1">Let's Talk</button>
                    </div>
    
                    <div class="read-text">
                        <p>We care about your data. Read our 
                            <a href="">privacy policy.</a>
                        </p>
                    </div>
    
                </div>
            </div>
        </div>
    </div>
</div>

</template>


<style scoped>
.contact-form{
    padding: 100px 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.section-heading h2{
    text-align: center;
    font: normal normal bold 40px/60px Montserrat;
    color: #C29774;
    text-transform: uppercase;
}
.section-heading p{
    text-align: center;
    font: normal normal 300 20px/30px Poppins;
    color: #FFFFFF;
}

.form-area{
    width: 752px;
    padding: 60px;
    background: #FFFFFF 0% 0% no-repeat padding-box;
    border-radius: 8px;
    margin-top: 60px;
}
.form-group label{
    text-align: left;
    font: normal normal normal 16px/24px Poppins;
    color: #C29774;
    padding: 5px 6px;
}
.form-group input,
.form-group textarea{
    border: 1px solid #D5D5D5;
    border-radius: 8px;
    width: 100%;
    padding: 8px 15px;
    margin-bottom: 20px;
    outline: none;
    color: var(--primary-color);
}
.form-group input:focus,
.form-group textarea:focus{
    border-color: var(--primary-color);
}
.form-group button{
    width: 100%;
    padding: 10px 15px;
    margin: 30px 0;
}
.read-text p{
    font: normal normal 300 16px/24px Poppins;
    color: #464646;
    margin-bottom: 0;
}
.read-text p a{
    text-decoration: none;
    color: #C29774;
}
.read-text p a:hover{
    color: #A57B5D;
}

@media screen and (max-width: 991px) {
    .form-area{
        width: 100%;
    }
}
@media screen and (max-width: 575px) {
    .contact-form{
        padding: 40px 0 70px 0;
    }
    .section-heading h2{
        font: normal normal bold 18px/14px Montserrat;
        margin-bottom: 8px;
    }
    .section-heading p{
        font: normal normal 300 16px/30px Poppins;
        margin-bottom: 0;
    }
    .form-area{
        margin-top: 55px;
        padding: 50px 10px;
    }
    .form-group input{
        margin-bottom: 10px;
    }

}

</style>