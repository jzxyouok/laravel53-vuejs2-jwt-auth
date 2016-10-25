<template>
    <div class="ui vertical stripe segment">
        <div class="ui middle aligned stackable grid container">
            <div class="row">
                <div class="eight wide column">
                    <h3 class="ui header">Test</h3>
                    <p>Laravel53-Vuejs2-Jwt-Auth (imagine10255)</p>
                    <p>
                        {{ msg }}
                    </p>
                </div>
                <div class="six wide right floated column">
                    <img src="assets/images/wireframe/white-image.png" class="ui large bordered rounded image">
                </div>
            </div>

        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                msg: '這是一個測試訊息, 透過Vue的方式進行綁定給值'
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
