<style>
.logo {
  font-family: 'Arial', sans-serif;
  font-size: 36px;
  font-weight: bold;
  color: #333;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
  padding: 10px;
  border-radius: 5px;
  background-color: #f8f9fa;
  display: inline-block;
}
</style>
<template>
  <div id="app">
    <div class="logo">Client Hub</div>
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
