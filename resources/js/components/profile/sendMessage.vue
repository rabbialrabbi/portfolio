<template>
    <form @submit.prevent="messageSubmit()">
        <div class="contact_form-body ">
            <div class="row justify-content-center pt-5">
                <h6>Have A Project You Like To Discuss ?</h6>
            </div>

            <div class="row justify-content-end">
                <div><input type="text" name="name" placeholder="Name" v-model="name" required></div>
                <div><input type="text" name="email" placeholder="Email" v-model="email" required></div>
                <div><textarea name="message" id="" rows="6" placeholder="Message" v-model="message" required></textarea></div>
                <div><input type="submit" value="Send" ></div>
            </div>
            <div class=" row justify-content-center" v-if="returnMsg"><span class="message">{{returnMsg}}</span></div>
        </div>
    </form>
</template>

<script>
    export default {
        name: "sendMessage",
        props:['csrf'],
        data(){
            return {
                name:'',
                email:'',
                message:'',
                returnMsg:false
            }
        },
        methods:{
            messageSubmit(){
                axios.post('/message',{
                    name:this.name,
                    email:this.email,
                    message:this.message,
                    _token:this.csrf
                }).then((response)=>{
                    this.returnMsg = response.data
                    this.name= '';
                    this.email= '';
                    this.message= '';
                })
            }
        }
    }
</script>

<style lang="scss" scoped>
    @import "resources/sass/variables";
    .message {
        background-color: lightgrey;
        margin-top: 10px;
        padding: 5px 10px 5px 10px;
        border-radius: 5px;
        color: $textback;
    }

</style>
