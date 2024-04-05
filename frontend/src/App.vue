<template>
  <div id="app">
    <img alt="Vue logo" src="./assets/logo.png">
    <HelloWorld msg="Welcome to Your Vue.js App" />
    <ClientCreateForm />
  </div>
</template>

<script>
import ClientCreateForm from './components/ClientCreateForm.vue';

export default {
  name: 'App',
  components: {
    ClientCreateForm
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>

<div id="app">
  <client-create-form></client-create-form>
</div>
