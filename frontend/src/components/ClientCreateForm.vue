<template>
    <div class="container">
        <form @submit.prevent="submitForm" class="mt-5">
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" id="name" v-model="form.name" class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" id="email" v-model="form.email" class="form-control" required>
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
                email: '',
            },
        };
    },
    methods: {
        submitForm() {
            axios.post('http://localhost:8000/api/client/create', this.form)
                .then(response => {
                    console.log(response.data);
                    // Handle success, e.g., clear form or show a success message
                })
                .catch(error => {
                    console.error(error);
                    // Handle error, e.g., show an error message
                });
        },
    },
};
</script>
