<template>
    <div class="container">
        <h1>Laravel53-Vuejs2-Jwt-Auth (imagine10255)</h1>
        <h2>Example</h2>
        <h1>{{ msg }}</h1>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component ready.')
        },
        data () {
            return {
                msg: 'This is a Example Msg !!'
            }
        }
    }

    /*
     #與下面寫法相等,但是在這必須使用上面的方法
         new Vue({
             data: {
                message: 'Hello Vue.js!'
             }
         })
     */
</script>
