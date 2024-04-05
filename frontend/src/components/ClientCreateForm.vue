<template>
    <div>
        <form @submit.prevent="submitForm">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" v-model="form.name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" v-model="form.email" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
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

<style scoped>
/* Add any scoped styles here */
</style>