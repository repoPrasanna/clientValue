<template>
    <div class="container">
        <form @submit.prevent="submitForm">
            <div class="form-group row">
                <label for="name" class="col-sm-3 col-form-label custom-label">Name</label>
                <div class="col-sm-9">
                    <input type="text" id="name" v-model="form.name" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="gender" class="col-sm-3 col-form-label custom-label">Gender</label>
                <div class="col-sm-9">
                    <select id="gender" v-model="form.gender" class="form-control">
                        <option value="">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="phone" class="col-sm-3 col-form-label custom-label">Phone</label>
                <div class="col-sm-9">
                    <input type="text" id="phone" v-model="form.phone" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label custom-label">Email</label>
                <div class="col-sm-9">
                    <input type="email" id="email" v-model="form.email" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="address" class="col-sm-3 col-form-label custom-label">Address</label>
                <div class="col-sm-9">
                    <input type="text" id="address" v-model="form.address" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nationality" class="col-sm-3 col-form-label custom-label">Nationality</label>
                <div class="col-sm-9">
                    <input type="text" id="nationality" v-model="form.nationality" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="dob" class="col-sm-3 col-form-label custom-label">Date of Birth</label>
                <div class="col-sm-9">
                    <input type="date" id="dob" v-model="form.date_of_birth" class="form-control"
                        placeholder="mm/dd/yyyy">
                </div>
            </div>
            <div class="form-group row">
                <label for="education" class="col-sm-3 col-form-label custom-label">Education Background</label>
                <div class="col-sm-9">
                    <input type="text" id="education" v-model="form.education_background" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="contact" class="col-sm-3 col-form-label custom-label">Preferred Mode of Contact</label>
                <div class="col-sm-9">
                    <select id="contact" v-model="form.preferred_mode_of_contact" class="form-control">
                        <option value="">Select Preferred Contact</option>
                        <option value="email">Email</option>
                        <option value="phone">Phone</option>
                        <option value="none">None</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    name: 'ClientForm',
    data() {
        return {
            form: {
                name: '',
                gender: '',
                phone: '',
                email: '',
                address: '',
                nationality: '',
                date_of_birth: '',
                education_background: '',
                preferred_mode_of_contact: '',
            },
        };
    },
    methods: {
        submitForm() {
            const API_URL = process.env.VUE_APP_API_URL; // Assuming you have defined VUE_APP_API_URL in your .env file
            axios.post(`${API_URL}/client`, this.form)
                .then(response => {
                    console.log(response.data);
                    // Handle success
                })
                .catch(error => {
                    console.error(error);
                    // Handle error
                });
        },
    }



};
</script>

<style scoped>
.custom-label {
    text-align: left;
    padding-right: 15px;
    /* Adjust this value to control the gap on the right side of the label */
}
</style>